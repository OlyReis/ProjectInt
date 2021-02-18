<?php 
include("conexao.php");


function inserir($conexao, $nome, $sobrenome, $data_nascimento, $sexo, $cpf, $cep, $telefone, $endereco, $num_endereco, $complemento, $cidade, $bairro, $estado, $email, $senha) {
	
	$script = 'INSERT INTO usuarios VALUES (DEFAULT, "' . 0 . '", "' . $nome . '", "' . $sobrenome . '","' . $data_nascimento . '","' . $sexo . '", "' . $cpf . '", "' . $cep . '", "' . $telefone . '", "' . $endereco . '", "' . $num_endereco . '", "' . $complemento . '", "' . $cidade . '", "' . $bairro . '", "' . $estado . '", "' . $email . '", ' . $senha . ')';

	$insere = $conexao->query($script);

	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
		echo "<script> alert('Cadstro Incorreto. Favor verificar dados.')</script>";
		echo '<script>window.location="cadastro.php"</script>';
	}else{
		echo "<br>Inserção Realizada corretamente!";
		echo "<script> alert('Cadastro Concluído! Faça login para continuar.') </script>";
		echo '<script>window.location="login.php"</script>';
	}
}

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$data_nascimento = $_POST['data_nascimento'];
$sexo = $_POST['sexo'];
$cpf = $_POST['cpf'];
$cep = $_POST['cep'];
$telefone = $_POST['telefone'];
$endereco = $_POST['endereco'];
$num_endereco = $_POST['num_endereco'];
$complemento = $_POST['complemento'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$estado = $_POST['estado'];
$email = $_POST['email'];
$senha = $_POST['senha'];



inserir($conexao, $nome, $sobrenome, $data_nascimento, $sexo, $cpf, $cep, $telefone, $endereco, $num_endereco, $complemento, $cidade, $bairro, $estado, $email, $senha);



 ?>