<?php 
include("conexao.php");
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';


function inserir($conexao, $nome, $sobrenome, $data_nascimento, $sexo, $cpf, $cep, $telefone, $endereco, $num_endereco, $complemento, $cidade, $bairro, $estado, $email, $senha) {

	$script = "SELECT * FROM usuarios WHERE cpf = $cpf";
	$consulta = $conexao->query($script);
	if ($linha = $consulta->fetch_array(MYSQLI_ASSOC)) {
		echo "<script> $.confirm({type: 'red', title: 'Cadastro', content: 'CPF já cadastrado.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="cadastro.php"'; echo " }}}});</script>";
	} else {
		$script = 'SELECT * FROM usuarios WHERE email = "' . $email . '"';
		$consulta = $conexao->query($script);
		if ($linha = $consulta->fetch_array(MYSQLI_ASSOC)) {
			echo "<script> $.confirm({type: 'red', title: 'Cadastro', content: 'Email já cadastrado.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="cadastro.php"'; echo " }}}});</script>";
		} else {
	
			$script = 'INSERT INTO usuarios VALUES (DEFAULT, "' . 0 . '", "' . $nome . '", "' . $sobrenome . '","' . $data_nascimento . '","' . $sexo . '", "' . $cpf . '", "' . $cep . '", "' . $telefone . '", "' . $endereco . '", "' . $num_endereco . '", "' . $complemento . '", "' . $cidade . '", "' . $bairro . '", "' . $estado . '", "' . $email . '", "' . $senha . '","","","","","")';

			$insere = $conexao->query($script);

			if(!$insere){
				echo "<br>Inserção incorreta! Deu erro!<br>";
				echo $conexao->error;
				echo "<br><br>";
				echo $script;
				echo "<br>";
				echo "<script> $.confirm({type: 'red', title: 'Cadastro', content: 'Cadastro incorreto. Favor verificar dados.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="cadastro.php"'; echo " }}}});</script>";
			}else{
				echo "<br>Inserção Realizada corretamente!";
				echo "<script> $.confirm({type: 'red', title: 'Cadastro', content: 'Cadastro Concluído! Faça login para continuar.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="login.php"'; echo " }}}});</script>";
			}
		}
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