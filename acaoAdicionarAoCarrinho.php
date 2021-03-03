<?php
  include('conexao.php');
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';

  session_start();
  if (isset($_SESSION['email'])) 
  { 
    $id = $_GET['id'];
    $estoque = $_GET['estoque'];
    $botaoComprar = $_GET['botaoComprar'];

    if ((isset($_SESSION['idsCarrinho'])) && (strpos($_SESSION['idsCarrinho'], $id) !== false)) {
      if ($botaoComprar == "sim") {
        echo '<script> window.location = "carrinho.php"; </script>';
      } else {
        echo "<script> $.confirm({type: 'red', title: 'Adicionar ao Carrinho', content: 'Produto já adicionado ao carrinho.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="paginaProduto.php?id=' . $id . '"'; echo " }}}});</script>";
      }
    } else {
      if ($estoque == 0) {
        echo "<script> $.confirm({type: 'red', title: 'Adicionar ao Carrinho', content: 'Produto com 0 de estoque.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="paginaProduto.php?id=' . $id . '"'; echo " }}}});</script>";
      } else {
        $_SESSION['nItensCarrinho'] += 1;
        $_SESSION['idsCarrinho'] = $_SESSION['idsCarrinho'] . $id . "¬";
        if ($botaoComprar == "sim") {
          echo '<script> window.location = "carrinho.php"; </script>';
        } else {
          echo '<script> window.location = "paginaProduto.php?id=' . $id . '"; </script>';
        }
      }
    }
  } else {
    echo '<script> window.location = "login.php"; </script>';
  }
?>