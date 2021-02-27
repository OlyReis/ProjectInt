<?php
  session_start();
  session_destroy();
  unset($_SESSION['email']);
  unset($_SESSION['senha']);
  unset($_SESSION['idsCarrinho']);
   
  header('location:index.php');
?>