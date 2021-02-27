<?php
  include('conexao.php');

  session_start();
  if (isset($_SESSION['email'])) 
  { 
    $id = $_GET['id'];
    
    if (strpos($_SESSION['idsCarrinho'], $id) !== false) {
      echo "Já existe no carrinho";
      echo '<script> alert("Produto já adicionado ao carrinho."); </script>';
      echo '<script> window.location = "paginaProduto.php?id=' . $id . '"; </script>';
    } else {
      $_SESSION['nItensCarrinho'] += 1;
      $_SESSION['idsCarrinho'] = $_SESSION['idsCarrinho'] . $id . ",";
      echo $_SESSION['idsCarrinho'];
      echo '<script> window.location = "paginaProduto.php?id=' . $id . '"; </script>';
    }
  } else {
    echo '<script> window.location = "login.php"; </script>';
  }
?>