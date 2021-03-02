<?php
include('conexao.php'); 
session_start();
$logado = $_SESSION['email'];
$script = 'SELECT * FROM usuarios WHERE email = "' . $logado . '"';
$consulta = $conexao->query($script);
$linha = $consulta->fetch_array(MYSQLI_ASSOC);
$idUsuario=$linha['id'];


function inserir($conexao,$idUsuario,$nCartao,$cpf,$nome,$validade,$codigoSeg){
	
	$script = 'UPDATE usuarios SET nCartao="'.$nCartao.'",cpfCartao="'.$cpf.'",nomeCartao="'.$nome.'",validadeCartao="'.$validade.'",codigoSeg="'.$codigoSeg.'" WHERE id=' .$idUsuario;

	$insere = $conexao->query($script);
	if(!$insere){
		echo "<br>Inserção incorreta! Deu erro!<br>";
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
		echo '<script>alert("Cadastro incorreto!")</script>';
		echo '<script>window.location="usuario.php"</script>';
	}else{
		echo "<br>Inserção Realizada corretamente!";
		echo '<script>alert("Cadastro feito com sucesso!")</script>';
		echo '<script>window.location="usuario.php"</script>';
	}
}

$nCartao=$_POST['numCartao'];
$cpf=$_POST['cpf'];
$nome=$_POST['nomeCompleto'];
$validade=$_POST['data'];
$codigoSeg=$_POST['codCartao']; 

inserir($conexao,$idUsuario,$nCartao,$cpf,$nome,$validade,$codigoSeg);



?>