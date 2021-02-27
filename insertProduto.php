<?php 
include("conexao.php");

function inserir($conexao,$destino,$nomeProduto,$lancamentoProduto,$descricaoProdutoMenu,$precoProduto,$estoqueProduto,$numTamanhos,$tamanhosProduto,$descricaoProduto){
	
	$script = 'INSERT INTO produtos VALUES (DEFAULT, "' . $nomeProduto . '", "' . $lancamentoProduto . '", "' . $descricaoProdutoMenu . '","' . $precoProduto .'","' . $estoqueProduto .'","' . $numTamanhos .'","' . $tamanhosProduto .'","' . $destino . '","' . $descricaoProduto .'")';

$insere = $conexao->query($script);

if(!$insere){
	echo "<br>Inserção incorreta! Deu erro!<br>";
	echo $conexao->error;
	echo "<br><br>";
	echo $script;
	echo "<br>";
}else{
	echo "<br>Inserção Realizada corretamente!";
}
	/*$insere = $conexao->query($script);
	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
		echo '<script>alert("Cadastro incorreto!")</script>';
		echo '<script>window.location="addProduto.php"</script>';
	}else{
		echo "<br>Inserção Realizada corretamente!";
		echo '<script>alert("Cadastro feito com sucesso!")</script>';
		echo '<script>window.location="addProduto.php"</script>';
	}*/
}


$nomeProduto=$_POST['nomeProduto'];
$lancamentoProduto=$_POST['lancamentoProduto'];
$descricaoProdutoMenu=$_POST['descricaoProdutoMenu'];
$precoProduto=$_POST['precoProduto'];
$estoqueProduto=$_POST['estoqueProduto']; 
$numTamanhos=$_POST['numTamanhos'];
$tamanhosProduto=$_POST['tamanhosProduto'];
$descricaoProduto=$_POST['descricaoProduto'];

$dir= "img/";
$file= $_FILES['fotoProduto'];
$destino= "$dir".$file["name"];

move_uploaded_file($file['tmp_name'], $destino);

inserir($conexao,$destino,$nomeProduto,$lancamentoProduto,$descricaoProdutoMenu,$precoProduto,$estoqueProduto,$numTamanhos,$tamanhosProduto,$descricaoProduto);

?>