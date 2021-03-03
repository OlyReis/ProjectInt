<?php 
include("conexao.php");
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';

function inserir($conexao, $idUsuario,$opcaoEnvio, $opcaoPagamento, $dataCompra, $idTodosProdutos,$nomeTodosProdutos,$fotoTodosProdutos,$qtdTodosProdutos, $tamanhoTodosProdutos,$precoTodosProdutos, $valorTotal) {

	$script = 'INSERT INTO compras VALUES (DEFAULT, ' . $idUsuario . ', "' . $idTodosProdutos . '", "' . $nomeTodosProdutos . '", "' . $fotoTodosProdutos . '", "' . $qtdTodosProdutos . '", "' . $tamanhoTodosProdutos . '", "' . $precoTodosProdutos . '", "' . $opcaoPagamento . '", "' . $opcaoEnvio . '", ' . $valorTotal . ',"' . $dataCompra . '")';

	$insere = $conexao->query($script);

	if(!$insere){
		echo "<script> $.confirm({type: 'red', title: 'Erro', content: 'Erro ao finalizar a compra, favor tente mais tarde! Se erro persistir entre em contato com a loja.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="carrinho.php"'; echo " }}}});</script>";
	}else{
		echo "<script> $.confirm({type: 'red', title: 'Compra finalizada', content: 'Obrigado por comprar na ModasZ, já começaremos a preparar sua encomenda.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="index.php"'; echo " }}}});</script>";

		$idCadaProduto = explode(",",$idTodosProdutos);
		$qtdCadaProduto = explode(",",$qtdTodosProdutos);

		for ($i = 0; $i < count($idCadaProduto)-1; $i++) {

			$script = "SELECT * FROM produtos WHERE id = " . $idCadaProduto[$i];
			$consulta = $conexao->query($script);
			$linha = $consulta->fetch_array(MYSQLI_ASSOC);
			$qtdAnterior = $linha['qtd'];

			$script = 'UPDATE produtos SET qtd = ' . ($qtdAnterior - $qtdCadaProduto[$i]) . ' WHERE id = ' . $idCadaProduto[$i];
			$altera = $conexao->query($script);
		}

		session_start();
		unset($_SESSION['nItensCarrinho']);
		unset($_SESSION['idsCarrinho']);
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
$fotoTodosProdutos = $_POST['fotoTodosProdutos'];
$precoTodosProdutos = $_POST['precoTodosProdutos'];
$valorTotal = $_POST['valorTotal'];

$script = 'SELECT * FROM usuarios WHERE id = ' . $idUsuario;
$consulta = $conexao->query($script);
$linha = $consulta->fetch_array(MYSQLI_ASSOC);
$numCartaoCredito = $linha['nCartao'];

if (($numCartaoCredito == "") && ($opcaoPagamento != "Boleto")) {
	echo "<script> $.confirm({type: 'red', title: 'Finalizar Compra', content: 'Favor adicionar um novo cartão.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="usuario.php"'; echo " }}}});</script>";
} else {
	inserir($conexao, $idUsuario,$opcaoEnvio, $opcaoPagamento, $dataCompra, $idTodosProdutos,$nomeTodosProdutos, $fotoTodosProdutos, $qtdTodosProdutos, $tamanhoTodosProdutos,$precoTodosProdutos, $valorTotal);
}

?>