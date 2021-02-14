<?php 
include("conexao.php");


function inserir($conexao, $dad){
	
	$script = 'INSERT INTO usuario VALUES (DEFAULT, "' . 0 . '", "' . $dad[0] . '", "' . $dad[1] . '","' . $dad[2] .'","' . $dad[3]. '", "' . $dad[4] . '", "' . $dad[5] . '", "' . $dad[6] . '", "' . $dad[7] . '", "' . $dad[8] . '", "' . $dad[9] . '", "' . $dad[10] . '", "' . $dad[11] . '", "' . $dad[12] . '", "' . $dad[13] . '", ' . $dad[14] . ')';

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

$dad = array($_GET['nome'], $_GET['sobrenome'],$_GET['data_nascimento'],$_GET['sexo'],$_GET['cpf'],$_GET['cep'],$_GET['telefone'],$_GET['endereco'],$_GET['num_endereco'],$_GET['complemento'],$_GET['cidade'],$_GET['bairro'],$_GET['estado'],$_GET['email'],$_GET['senha']);



inserir($conexao,$dad);

header('Location: /ProjectInt/login.php');

 ?>