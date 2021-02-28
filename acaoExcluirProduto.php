<?php
  include("conexao.php");
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';

  $id = $_GET['id'];
  $nomeProduto = $_GET['nome'];
  $script = 'DELETE FROM produtos WHERE id = "' . $id . '"';
  $deleta = $conexao->query($script);
  if ($deleta) {
    $script = "SET @count = 0";
    $consulta = $conexao->query($script);
    $script = "UPDATE `produtos` SET `produtos`.`id` = @count:= @count + 1";
    $consulta = $conexao->query($script);

    echo "<script> $.confirm({type: 'red', title: 'Excluir Produto', content: 'Produto " . $nomeProduto . " excluido com sucesso!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="indexAlterarProduto.php"'; echo " }}}});</script>";
  } else {
    echo "<script> $.confirm({type: 'red', title: 'Excluir Produto', content: 'Erro ao excluir o produto " . $nomeProduto . "', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="indexAlterarProduto.php"'; echo " }}}});</script>";
  }
?>