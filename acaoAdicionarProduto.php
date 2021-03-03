<?php 
include("conexao.php");

function inserir($conexao,$destino,$nomeProduto,$lancamentoProduto,$descricaoProdutoMenu,$precoProduto,$estoqueProduto,$numTamanhos,$tamanhosProduto,$descricaoProduto){

	$scripta = 'INSERT INTO produtos VALUES (DEFAULT, "' . $nomeProduto . '", "' . $lancamentoProduto . '", "' . $descricaoProdutoMenu . '",' . $precoProduto .',' . $estoqueProduto .',' . $numTamanhos .',"' . $tamanhosProduto .'","' . $destino . '","' . $descricaoProduto .'")';

	$insere = $conexao->query($scripta);

	if(!$insere){
		echo "<script> $.confirm({type: 'red', title: 'Adição de Produto', content: 'Adição incorreta. Favor verificar dados.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="addProduto.php"'; echo " }}}});</script>";
	}else{
		$script = "SET @count = 0";
	  $consulta = $conexao->query($script);
	  $script = "UPDATE `produtos` SET `produtos`.`id` = @count:= @count + 1";
	  $consulta = $conexao->query($script);
	  echo "<script> $.confirm({type: 'red', title: 'Adição de Produto', content: 'Adição feita com sucesso!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="index.php"'; echo " }}}});</script>";		
	}
}


$nomeProduto=$_POST['nomeProduto'];
$lancamentoProduto=$_POST['lancamentoProduto'];
$descricaoProdutoMenu=$_POST['descricaoProdutoMenu'];
$precoProduto= str_replace(",",".",substr($_POST['precoProduto'],3,strlen(($_POST['precoProduto']))));
$estoqueProduto=$_POST['estoqueProduto']; 
$numTamanhos=$_POST['numTamanhos'];
$tamanhosProduto=$_POST['tamanhosProduto'];
$descricaoProduto = htmlentities($_POST['descricaoProduto']);

$dir= "img/";
$file= $_FILES['fotoProduto'];
$destino= "$dir".$file["name"];

move_uploaded_file($file['tmp_name'], $destino);

inserir($conexao,$destino,$nomeProduto,$lancamentoProduto,$descricaoProdutoMenu,$precoProduto,$estoqueProduto,$numTamanhos,$tamanhosProduto,$descricaoProduto);
?>