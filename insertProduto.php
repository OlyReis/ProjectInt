<?php 
include("conexao.php");

function inserir($conexao,$destino,$nomeProduto,$lancamentoProduto,$descricaoProdutoMenu,$precoProduto,$estoqueProduto,$numTamanhos,$tamanhosProduto,$descricaoProduto){
	
	$script = 'INSERT INTO produto VALUES (DEFAULT, "' . $nomeProduto . '", "' . $lancamentoProduto . '", "' . $descricaoProdutoMenu . '","' . $precoProduto .'","' . $estoqueProduto .'","' . $numTamanhos .'","' . $tamanhosProduto .'","' . $destino . '","' . $descricaoProduto .'")';

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
	}
}*/
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
}

$nomeProduto=$_GET['nomeProduto'];
$lancamentoProduto=$_GET['lancamentoProduto'];
$descricaoProdutoMenu=$_GET['descricaoProdutoMenu'];
$precoProduto=$_GET['precoProduto'];
$estoqueProduto=$_GET['estoqueProduto']; 
$numTamanhos=$_GET['numTamanhos'];
$tamanhosProduto=$_GET['tamanhosProduto'];
$descricaoProduto=$_GET['descricaoProduto'];

$dir= "Img/";
$file= $_FILES['foto'];
$destino= "$dir".$file["name"];

move_uploaded_file($file['tmp_name'], $destino);

inserir($conexao,$destino,$nomeProduto,$lancamentoProduto,$descricaoProdutoMenu,$precoProduto,$estoqueProduto,$numTamanhos,$tamanhosProduto,$descricaoProduto);

?>