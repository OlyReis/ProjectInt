<?php
  include('conexao.php');

  session_start();
  if (isset($_SESSION['email'])) 
  { 
    $logado = $_SESSION['email'];
    $script = 'SELECT * FROM usuarios WHERE email = "' . $logado . '"';
    $consulta = $conexao->query($script);
    $linha = $consulta->fetch_array(MYSQLI_ASSOC);
    $id = $linha['id'];
    $nome = $linha['nome'];
    
    if (isset($_SESSION['nItensCarrinho'])) {
      $nItensCarrinho = $_SESSION['nItensCarrinho'];
    } else {
      $_SESSION['nItensCarrinho'] = 0;
      $nItensCarrinho = $_SESSION['nItensCarrinho'];
    }

  } else {
    $_SESSION['nItensCarrinho'] = 0;
    $nItensCarrinho = $_SESSION['nItensCarrinho'];
  }

  $idCompra = $_GET['id'];
  $script = "SELECT * FROM compras WHERE id = $idCompra";
  $consulta = $conexao->query($script);
  $linha = $consulta->fetch_array(MYSQLI_ASSOC);
  $dataCompra = $linha['dataCompra'];
  $dataCompraAno = substr($dataCompra,0,4);
  $dataCompraMes = substr($dataCompra,-5,2);
  $dataCompraDia = substr($dataCompra,8,10);
  $dataCompra = $dataCompraDia . "/" . $dataCompraMes . "/" . $dataCompraAno;
?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="JS/usuario.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/my.css">
  <meta charset="utf-8">
  <link rel=" icon" href="Img/logo.ico"/>
  <title>Modas Z</title>
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 101px;">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
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
      </svg><span class="numItensCarrinho" name="numItensCarrinho"><?php echo $nItensCarrinho; ?></span><a>
        <div class="dropdown show mr-2">
          <a class="text-light dropdown-toggle font-weight-bold" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo $nome; ?> </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: red;">
            <a class="dropdown-item" href="usuario.php">Meus Dados</a>
            <a class="dropdown-item" id="minhasCompras" href="minhasCompras.php">Minhas Compras</a>
            <a class="dropdown-item" id="deletarConta" href="deletarConta.php">Deletar Conta</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div>
      </div>
    </nav>

    <h1 class="col-12">Compra <?php echo $idCompra; ?> - <?php echo $dataCompra; ?></h1><br>
    <div class="container col-12 divCompra rounded mb-5">
      <div class="divCompra border-0 card rounded w-100 h-auto darkmode-ignore mb-4">
        <?php

            $primeiraLinha = true;
            $idProdutos = $linha['idProdutos'];
            $idCadaProduto = explode("¬",$idProdutos);
            $nomeProdutos = $linha['nomeProdutos'];
            $nomeCadaProduto = explode("¬",$nomeProdutos);
            $fotoProdutos = $linha['fotoProdutos'];
            $fotoCadaProduto = explode("¬",$fotoProdutos);
            $qtdProdutos = $linha['qtdProdutos'];
            $qtdCadaProduto = explode("¬",$qtdProdutos);
            $tamanhoProdutos = $linha['tamanhoProdutos'];
            $tamanhoCadaProduto = explode("¬",$tamanhoProdutos);
            $valorProdutos = $linha['valorProdutos'];
            $valorCadaProduto = explode("¬",$valorProdutos);
            $modoPagamento = $linha['modoPagamento'];
            $valorTotal = $linha['valorTotal'];

            for ($i = 0; $i < count($idCadaProduto)-1; $i++) {
              echo '        
        <table class="table border-bottom m-0 p-0 rounded"style="font-family: serif;">
          <thead>
            <tr class="d-flex border-0">
              <th class="border-0">
                <img style="width: 80%;" src="' . $fotoCadaProduto[$i] . '">
              </th>
              <th class="border-0 text-light align-self-center">
                ' . $nomeCadaProduto[$i] . '
              </th>
              <th class="border-0 text-light align-self-center">
                Quantidade: ' . $qtdCadaProduto[$i] . '
              </th>
              <th class="border-0 text-light align-self-center">
                Tamanho: ' . $tamanhoCadaProduto[$i] . '
              </th>
              <th class="border-0 text-light align-self-center">
                Valor: R$ ' . str_replace(".",",",$valorCadaProduto[$i]) . '
              </th>
              <th class="border-0 text-light align-self-center">
                Total: R$ ' . number_format(((float)$valorCadaProduto[$i] * (float)$qtdCadaProduto[$i]),2,',','') . '
              </th>
            </tr>
          </thead>
        </table>'; $primeiraLinha = false;
            }
        ?>
      </div>
    </div>

    <footer class=" py-5">
      <div class="row">
        <div class="col- col-12 col-md">
          <small class="d-block mb-3 text-muted">&copy; 2020</small>
        </div>
        <div class="col- col-6 col-md">
          <h5>Sobre Nós</h5>
          <ul class="list-unstyled text-small">
            <li><a href="sobre.php#SD">Informações da Empresa</a></li>
            <li><a href="sobre.php">Informações dos Desenvolvedores do Site</a></li>
          </ul>
        </div>
        <div class="col- col-6 col-md">
          <h5>Contato</h5>
          <ul class="list-unstyled text-small">
            <li><a href="contato.php">E-mail</a></li>
            <li><a href="contato.php#SD">WhatsApp</a></li>
          </ul>
        </div>
        <div class="col- col-6 col-md">
          <h5>Redes Sociais</h5>
          <ul class="list-unstyled text-small">
            <li><a target="_blank" href="https://www.facebook.com">Facebook</a></li>
            <li><a target="_blank" href="https://www.instagram.com/modaz">Instagram</a></li>
          </ul>
        </div>
      </div>
    </footer>

    <span class="darkmode-ignore"><span>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
    <script>
      new Darkmode().showWidget();
    </script>
    <script type="JS/Bootstrap.mim.js"></script>
    <script type="text/javascript" src="JS/jquery.mask.js"></script>
    <script type="text/javascript" src="JS/jquery.mask.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </html>  