<?php
  include('conexao.php');

  session_start();
  if (isset($_SESSION['email'])) 
  { 
    $logado = $_SESSION['email'];
    $script = 'SELECT * FROM usuarios WHERE email = "' . $logado . '"';
    $consulta = $conexao->query($script);
    $linha = $consulta->fetch_array(MYSQLI_ASSOC);
    $nome = $linha['nome'];
    $adm = $linha['adm'];
  
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

  $id = $_GET['id'];
  $script = "SELECT * FROM produtos WHERE id = " . $id;

  $consulta = $conexao->query($script);

  if (!$consulta) {
    echo "Deu erro!";
    echo $conexao->error;
  } else {
    $linha = $consulta->fetch_array(MYSQLI_ASSOC);
    $id = $linha['id'];
    $nomeProduto = $linha['nome'];
    $anoLancamento = $linha['anoLancamento'];
    $preco = $linha['preco'];
    $preco = str_replace(".", ",", $preco);
    $qtd = $linha['qtd'];
    $foto = $linha['foto'];
    $tamanhos = $linha['tamanho'];
    $descricaoP = html_entity_decode($linha['descricaoP']);
  }
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
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark navbar-sm fixed-top">
    <a class="navbar-brand" title="Menu" href="index.php">
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
      </svg><span class="numItensCarrinho" id="numItensCarrinho" name="numItensCarrinho"><?php echo $nItensCarrinho; ?></span><a>
      <?php
      if (isset($_SESSION['email'])) {
        echo '
        <div class="dropdown show" style="margin-right: 101px;">
          <a class="text-light dropdown-toggle font-weight-bold" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ' . $nome . '
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: red;">
            <a class="dropdown-item" href="usuario.php">Meus Dados</a>
            <a class="dropdown-item" id="minhasCompras" href="minhasCompras.php">Minhas Compras</a>
            <a class="dropdown-item" id="deletarConta" href="deletarConta.php">Deletar Conta</a>
            <a class="dropdown-item" href="logout.php">Logout</a>
          </div>
        </div>';
      } else {
        echo '
        <button type="button" class="btn btn-dark"><a href="login.php">Login<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
        <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
      </svg></a></button>';
      }
      ?>
      </div>
    </nav>

    <div class="container">
      <div class="mb-3 divProduto card">
        <div class="row">
          <div class="col-md-4 img-container">
            <img src="<?php echo $foto; ?>" class="w-100 h-100 img-produto" alt="...">
          </div>
          <div class="col-md-8">
            <div>
              <h1 class="text-light mb-0"><?php echo $nomeProduto; ?></h1>
              <p class="text-light mt-0 ml-1">Ano de lançamento: <?php echo $anoLancamento; ?></p>
              <h2 class="text-light mb-0">Preço: R$ <?php echo $preco; ?></h2>
              <p class="mb-0 text-light mt-0 ml-1" name="Tamanho">Tamanhos Disponíveis: <?php echo str_replace(",",", ",$tamanhos); ?></p>
              <p class="mb-4 text-light mt-0 ml-1" name="numEstoque">Estoque: <?php echo $qtd; ?></p>
              <a class="btn btn-dark text-light mb-4" href="acaoAdicionarAoCarrinho.php?id=<?=$id?>&estoque=<?=$qtd?>&botaoComprar=sim" role="button" id="comprarProduto" style="bottom: 0; position: absolute; margin-left: 260px;">Comprar</a> 
              <a class="btn btn-dark mb-4" href="acaoAdicionarAoCarrinho.php?id=<?=$id?>&estoque=<?=$qtd?>&botaoComprar=nao" role="button" id="adicionarCarrinho" style="bottom: 0; position: absolute; margin-left: 360px;">Adicionar ao carrinho</a>
            </div>
          </div>
        </div>
      </div>

      <h2 class="darkmode-ignore" style="color: #A90808;">Descrição</h2><br>
      <div class="counteudoDescricaoProduto darkmode-ignore" name="conteudoDescricaoProduto">
        <?php echo $descricaoP; ?>
      </div><br><br>
      <h2 class="darkmode-ignore" style="color: #A90808;">Outros produtos Modas Z</h2>
      <br>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <?php 
          $script = "SELECT * FROM produtos";

          $consulta = $conexao->query($script);

          if (!$consulta) {
            echo "Deu erro!";
            echo $conexao->error;
          } else {
            $numDados = $consulta->num_rows;
            $primeiraLinha = true;
            if ($numDados < 6) {
              $maxVisualizacoes = $numDados-1;
            } else {
              $maxVisualizacoes = 5;
            }

            $idJaEscolhido[1] = '';

            for ($i = 1; $i <= $maxVisualizacoes; $i++) {

              $idAleatorio = mt_rand(1, $numDados);

              if ($numDados >= 2) {             
                  while ((in_array($idAleatorio, $idJaEscolhido)) || ($idAleatorio == $id)) {
                    $idAleatorio = mt_rand(1, $numDados);                  
                }
              }

              $idJaEscolhido[$i] = $idAleatorio;

              $script = "SELECT * FROM produtos WHERE id =" . $idAleatorio;

              $consulta = $conexao->query($script);
               
              $linha = $consulta->fetch_array(MYSQLI_ASSOC);
              $foto = $linha['foto'];

              if ($primeiraLinha) {
                echo '
              <div class="carousel-item active">
                <a href="paginaProduto.php?id=' . $idAleatorio . '"><img class="d-block w-100" src="' . $foto . '" alt="First slide" style="width: 100px; height: 450px;"></a>
              </div>';
                $primeiraLinha = false;
              } else {
                echo '
              <div class="carousel-item">
                <a href="paginaProduto.php?id=' . $idAleatorio . '"><img class="d-block w-100" src="' . $foto . '" alt="First slide" style="width: 100px; height: 450px;"></a>
              </div>';
              }       
            }
          }
        ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />

    <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
    <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
    </html>