<?php 
include("conexao.php");
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';

function inserir($conexao, $idUsuario,$idTodosProdutos, $nomeTodosProdutos, $fotoTodosProdutos, $qtdTodosProdutos,$tamanhoTodosProdutos,$valorProdutos, $opcaoPagamento,$valorTotal, $opcaoEnvio,$dataCompra) {

	$script = 'INSERT INTO compras VALUES (DEFAULT, "' . $idUsuario . '", "' . $idTodosProdutos . '", "' . $nomeTodosProdutos . '","' . $fotoTodosProdutos . '","' . $qtdTodosProdutos . '", "' . $tamanhoTodosProdutos. '", "' . $valorTotal . '", "' . $opcaoPagamento . '", "' . $valorTotal. '", "' . $opcaoEnvio . '","'.$dataCompra.'")';

	$insere = $conexao->query($script);

	if(!$insere){
		echo $conexao->error;
		echo "<br><br>";
		echo $script;
		echo "<br>";
		echo "<script> $.confirm({type: 'red', title: 'Erro', content: 'Erro ao finalizar a compra, favor tente mais tarde! Se erro persistir entre em contado com a loja.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="concluirCompra.php"'; echo " }}}});</script>";
	}else{
		echo "<script> $.confirm({type: 'red', title: 'Compra finalizada', content: 'Obrigado por comprar na ModasZ, já começaremos a preparar sua encomenta.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="index.php"'; echo " }}}});</script>";
	}

}

$idUsuario = $_POST['idUsuario'];
$opcaoEnvio = $_POST['opcaoEnvio'];
$opcaoPagamento = $_POST['opcaoPagamento'];
$dataCompra = $_POST['dataCompra'];
$idTodosProdutos = $_POST['idTodosProdutos'];
$nomeTodosProdutos = $_POST['nomeTodosProdutos'];
$qtdTodosProdutos = $_POST['qtdTodosProdutos'];
$tamanhoTodosProdutos = $_POST['tamanhoTodosProdutos'];
$valorProdutos = $_POST['precoTodosProdutos'];
$valorTotal = $_POST['valorTotal'];
$fotoTodosProdutos=$_POST['fotoTodosProdutos'];


inserir($conexao, $idUsuario,$idTodosProdutos, $nomeTodosProdutos, $fotoTodosProdutos, $qtdTodosProdutos,$tamanhoTodosProdutos,$valorProdutos, $opcaoPagamento,$valorTotal, $opcaoEnvio,$dataCompra);




?>