<?php 
	include('conexao.php');
	echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';

	session_start();

	$id = $_GET['id'];
	$nomeProduto = $_POST['nomeProduto'];
	$anoLancamento = $_POST['anoLancamento'];
	$descricaoProdutoMenu = $_POST['descricaoProdutoMenu'];
	$precoProduto = $_POST['precoProduto'];
	$quantidadeProduto = $_POST['qtd'];
	$numTamanhos = $_POST['numTamanhos'];
	$tamanhosProduto = $_POST['tamanhosProduto'];
	$descricaoProduto =htmlentities($_POST['descricaoProduto']);

	$dir= "img/";
	$file= $_FILES['fotoProduto'];
	$destino= "$dir".$file["name"];

	move_uploaded_file($file['tmp_name'], $destino);

	$script= 'UPDATE produtos SET nome= "'.$nomeProduto.'",anoLancamento="'.$anoLancamento.'",descricaoM="'.$descricaoProdutoMenu.'",preco="'.$precoProduto.'",qtd="'.$quantidadeProduto.'", NTP= "'.$numTamanhos.'",tamanho="'.$tamanhosProduto.'",foto="'.$destino.'",descricaoP="'.$descricaoProduto.'" WHERE id= '.$id;


	$altera = $conexao->query($script);

	if(!$altera){
		echo "<script> $.confirm({type: 'red', title: 'Alteração de Produto', content: 'Alteração incorreta. Favor verificar dados.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="alterarProduto.php?id=' . $id . '"'; echo " }}}});</script>";
	}else{
		echo "<script> $.confirm({type: 'red', title: 'Alteração de Produto', content: 'Alteração feita com sucesso!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="index.php"'; echo " }}}});</script>";
	}
?>