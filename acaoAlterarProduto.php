<?php 
include('conexao.php');

session_start();
if (isset($_SESSION['id'])) 
{ 
	$id = $_SESSION['id'];
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
		echo '<script>alert("Alteração incorreta!")</script>';
		echo '<script>window.location="alterarProduto.php?id=' . $id . '"</script>';
	}else{
		echo '<script>alert("Alteração feita com sucesso!")</script>';
		echo '<script>window.location="alterarProduto.php?id=' . $id . '"</script>';
	}
}
?>