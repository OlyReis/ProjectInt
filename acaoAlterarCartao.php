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
	if (!$insere) {
		echo "<script> $.confirm({type: 'red', title: 'Cartão', content: 'Erro ao alterar cartão. Favor verificar dados.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="usuario.php"'; echo " }}}});</script>";
	} else {
		echo "<script> $.confirm({type: 'red', title: 'Cartão', content: 'Alteração feita com sucesso!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="usuario.php"'; echo " }}}});</script>";
	}
}

$nCartao=$_POST['numCartao'];
$cpf=$_POST['cpf'];
$nome=$_POST['nomeCompleto'];
$validade=$_POST['data'];
$codigoSeg=$_POST['codCartao']; 

inserir($conexao,$idUsuario,$nCartao,$cpf,$nome,$validade,$codigoSeg);

?>