<?php
  include("conexao.php");
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';

  $id = $_GET['id'];
  $nomeProduto = $_GET['nome'];

  echo "<script> $.confirm({type: 'red', title: 'Excluir Produto', content: 'Tem certeza que deseja excluir o produto " . $nomeProduto . "?', buttons: { Sim: { btnClass: 'btn-red', action: function () {"; echo 'window.location="acaoExcluirProduto.php"'; echo " }}, Nao: { btnClass: 'btn-red', action: function () {"; echo 'window.location="indexAlterarProduto.php"'; echo " }}}});</script>";
?>