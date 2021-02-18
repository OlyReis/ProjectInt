<?php 
include("conexao.php");
 ?>
<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/my.css">
  <meta charset="utf-8">
  <link rel=" icon" href="Img/logo.ico"/>
  <title>Modas Z</title>
  <title></title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-sm fixed-top">
    <a class="navbar-brand" title="Menu"  href="index.php">
      <img src="Img/Logo.png" width="30" height="30" alt="">
    </a>
    <a class="navbar-brand" title="Menu" href="index.php">Modas Z</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link " href="index.php">Menu<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="contato.php" tabindex="-1">Contato</a>
        </li>
        <li class="nav-item">
          <a class="nav-link " href="sobre.php" tabindex="-2">Sobre</a>
        </li>
      </ul>
      <a href="carrinho.php" class="mr-3"><svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-cart2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l1.25 5h8.22l1.25-5H3.14zM5 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
      </svg><span class="numItensCarrinho" name="numItensCarrinho">0</span><a>
        <div class="dropdown show mr-2">
          <a class="text-light dropdown-toggle font-weight-bold" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nome; ?> </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: red;">
            <a class="dropdown-item" href="usuario.php">Meus Dados</a>
            <a class="dropdown-item" id="deletarConta" href="deletarConta.php">Deletar Conta</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>