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

$dad = array($_POST['nome'], $_POST['sobrenome'],$_POST['data_nascimento'],$_POST['sexo'],$_POST['cpf'],$_POST['cep'],$_POST['telefone'],$_POST['endereco'],$_POST['num_endereco'],$_POST['complemento'],$_POST['cidade'],$_POST['bairro'],$_POST['estado'],$_POST['email'],$_POST['senha']);



inserir($conexao,$dad);

header('Location: /ProjectInt/login.php');

 ?>