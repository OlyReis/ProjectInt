<?php
  include('conexao.php');

  session_start();
  if (isset($_SESSION['email'])) 
  { 
    $id = $_GET['id'];
    $estoque = $_GET['estoque'];

    if (strpos($_SESSION['idsCarrinho'], $id) !== false) {
      echo "Já existe no carrinho";
      echo '<script> alert("Produto já adicionado ao carrinho."); </script>';
      echo '<script> window.location = "paginaProduto.php?id=' . $id . '"; </script>';
    } else {
      if ($estoque == 0) {
        echo '<script> alert("Produto com 0 de estoque."); </script>';
        echo '<script> window.location = "paginaProduto.php?id=' . $id . '"; </script>';
      } else {
        $_SESSION['nItensCarrinho'] += 1;
        $_SESSION['idsCarrinho'] = $_SESSION['idsCarrinho'] . $id . ",";
        echo $_SESSION['idsCarrinho'];
        echo '<script> window.location = "paginaProduto.php?id=' . $id . '"; </script>';
      }
    }
  } else {
    echo '<script> window.location = "login.php"; </script>';
  }
?>