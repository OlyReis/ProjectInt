<?php
  include("conexao.php");
  session_start();
  $id = $_GET['id'];
  $_SESSION['idsCarrinho'] = str_replace($id . ",", "", $_SESSION['idsCarrinho']);
  $_SESSION['nItensCarrinho'] -= 1;
  echo '<script> window.location = "carrinho.php"; </script>';
?>