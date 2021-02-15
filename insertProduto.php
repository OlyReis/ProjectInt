<?php 
include("conexao.php");

function inserir($conexao, $dad, $destino){
	
	$script = 'INSERT INTO produto VALUES (DEFAULT, "' . $dad[0] . '", "' . $dad[1] . '", "' . $dad[2] . '","' . $dad[3] .'","' . $dad[4] .'","' . $dad[5] .'","' . $dad[6] .'","' . $destino . '",' . $dad[7] .')';

	$insere = $conexao->query($script);
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
}


$dad = array($_GET['nomeProduto'], $_GET['lancamentoProduto'], $_GET['DescricaoProdutoMenu'], $_GET['precoProduto'], $_GET['estoqueProduto'], $_GET['numTamanhos'], $_GET['tamanhosProduto'], $_GET['descricaoProduto']);
$dir= "Img/";
$file= $_FILES['foto'];
$destino= "$dir".$file["name"];

move_uploaded_file($file['tmp_name'], $destino);

inserir($conexao,$dad,$destino);

 ?>