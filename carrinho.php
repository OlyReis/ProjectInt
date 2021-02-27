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

    if (isset($_SESSION['nItensCarrinho'])) {
      $nItensCarrinho = $_SESSION['nItensCarrinho'];
      $idsCarrinho = $_SESSION['idsCarrinho'];
      $idCadaProdutoCarrinho = explode(",", $idsCarrinho);
    } else {
      $_SESSION['nItensCarrinho'] = 0;
      $nItensCarrinho = $_SESSION['nItensCarrinho'];
    }

  } else {
    $_SESSION['nItensCarrinho'] = 0;
    $nItensCarrinho = $_SESSION['nItensCarrinho'];
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
      </svg><span class="numItensCarrinho" name="numItensCarrinho"><?php echo $nItensCarrinho; ?></span><a>
      <?php
      if (isset($_SESSION['email'])) {
        echo '
        <div class="dropdown show" style="margin-right: 40px;">
          <a class="text-light dropdown-toggle font-weight-bold" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ' . $nome . '
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: red;">
            <a class="dropdown-item" href="#">Meus Dados</a>
            <a class="dropdown-item" id="deletarConta" href="#">Deletar Conta</a>
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

    <?php
      if (!isset($_SESSION['email'])) {
        echo "Faça login para visualizar o carrinho.";
        echo '
        <footer class="py-5 mt-5">
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
  <script type="text/javascript" src="JS/carrinho.js"></script>
  <script type="JS/Bootstrap.mim.js"></script>
  <script src="JS/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="JS/jquery.mask.js"></script>
  <script type="text/javascript" src="JS/jquery.mask.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  </html>';
        exit;
      }
    ?>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="col-12 mb-4">Meu Carrinho</h3>
          <?php 
            if ($_SESSION['nItensCarrinho'] != 0) {
            $somaPrecos = 0;
            for ($i = 0; $i < count($idCadaProdutoCarrinho)-1; $i++) { 
              $script = "SELECT * FROM produtos WHERE id = $idCadaProdutoCarrinho[$i]";

              $consulta = $conexao->query($script);

              
                $linha = $consulta->fetch_array(MYSQLI_ASSOC);
                $nome = $linha['nome'];
                $foto = $linha['foto'];
                $estoque = $linha['qtd'];
                $preco = $linha['preco'];
                $somaPrecos += $preco;
                $tamanhos = $linha['tamanho'];                
                $tamanhos = explode(",", $tamanhos);
              
              echo '
          <div class="divProdutoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">
            <div class="row mb-0">
              <div class="col-sm-4 ml-0 mt-0">
                <a href="paginaProduto.php?id=' . $idCadaProdutoCarrinho[$i] . '"><img src="' . $foto . '" class="w-100 h-100" alt="..."></a>
              </div>
              <div class="col-md-8 mb-0">
                <h3 class="mb-0 text-light">' . $nome . '</h3>
                <p class="text-light ml-1" id="numEstoque" name="numEstoque">Estoque: ' . $estoque . '</p>
                <p class=" mt-0 ml-1 text-light">Entregue por Modas Z</p>
              </div>
              <div class="mt-1" style="margin-left: 96%; position:absolute;">
                <svg class="text-light" width="1.5em" height="1.5em" viewBox="0 0 16 16" id="apagarProdutoCarrinho" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" onclick="deletaProduto(' . $idCadaProdutoCarrinho[$i] . ')" style="cursor: pointer;">
                  <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                </svg>
              </div>
            </div>
            <hr style="background-color: black;">
            <div class="row mt-2">
              <div class="col-sm-3 ml-3 mt-1 pr-0">
                <p class="text-light">Quantidade</p>
              </div>
              <div class="col-sm-5 ml-0">
                <a id="menosQtd" onclick="menosQtd(' . $preco . ', ' . $idCadaProdutoCarrinho[$i] . ')" href="javascript:void(0)"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16"  class="bi bi-dash-circle-fill text-light mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM4.5 7.5a.5.5 0 0 0 0 1h7a.5.5 0 0 0 0-1h-7z"/>
                </svg><a>
                <input type="number" class="form-control rounded darkmode-ignore col text-center ml-1 mr-1" readonly="true" value="1" name="qtd" id="inputQTD' . $idCadaProdutoCarrinho[$i] . '" style="width: 55px; height: 30px;" value="4">
                <a id="maisQtd" onclick="maisQtd(' . $preco . ', ' . $idCadaProdutoCarrinho[$i] . ', ' . $estoque . ')" href="javascript:void(0)"><svg width="1.4em" height="1.4em" viewBox="0 0 16 16"  class="bi bi-plus-circle-fill text-light mb-1" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8.5 4.5a.5.5 0 0 0-1 0v3h-3a.5.5 0 0 0 0 1h3v3a.5.5 0 0 0 1 0v-3h3a.5.5 0 0 0 0-1h-3v-3z"/>
                </svg></a>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col-sm-3 ml-3"><p class="text-light">Tamanho</p></div>
              <div class="col-sm-5">
                <select name="tamanhosProduto" id="tamanhosProduto' . $idCadaProdutoCarrinho[$i] . '" style="width: 60px;">';
                  for ($t = 0; $t < count($tamanhos); $t++) { echo '
                  <option value="' . $tamanhos[$t] . '">' . $tamanhos[$t] . '</option>';
                  } echo '
                </select>
              </div>
               <div class="col text-light">
                <h4 id="valorProduto">R$ ' . number_format($preco,2,',','') . '</h4>
              </div>
            </div>
          </div>'; }} else {
            echo "<p> Carrinho Vazio. </p>";
          }
          ?> 
        </div>


        <div class="col-sm-6">
          <h3 class="mb-4">Resumo da Compra</h3>
          <?php 
          if ($_SESSION['nItensCarrinho'] != 0) { echo '
          <div class="divResumoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">
            <div class="row mb-0">
              <div class="col-sm-8">
                <div><h5 class="text-light mt-3 ml-4" id="numItensSubtotal">Subtotal ('; if ((count($idCadaProdutoCarrinho) - 1) == 1) { echo (count($idCadaProdutoCarrinho) - 1) . ' item)'; } else { echo (count($idCadaProdutoCarrinho) - 1) . ' itens)'; } echo '
                </h5></div>
              </div>
              <div class="col">
                <h5 class="text-light mt-3 ml-1" id="subtotal" name="subtotal">R$ ' . str_replace(".", ",", $somaPrecos) . '</h5>
              </div>
            </div>
            <hr style="background-color: black">
            <div class="row mt-0">              
              <div class="col-sm-8">
                <h5 class="text-light ml-4 mt-3">Valor Total</h5>
              </div>
              <div class="col">
                <h5 class="text-light mt-3 ml-1" id="valorTotal" name="valorTotal">R$ ' . str_replace(".", ",", $somaPrecos) . '</h5>
              </div>           
            </div>
            <hr style="background-color: black">
            <div class="row mt-0">
              <div class="col"></div>
              <div class="col-sm-10 mb-3">
                <a href="#" class=" text-light btn btn-sm bg-primary btn-rounded font-weight-bold mr-3 btnADM w-100" style="line-height: 30px;" type="button" id="continuarBtn">Continuar</a>
              </div>
              <div class="col"></div>
              
            </div>
            <div class="row mt-0 text-center" id="validarPag">
              </div>
          </div>
        </div>
      </div>'; }
      ?>
    </div>

  <footer class="py-5 mt-5">
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
  <script type="text/javascript" src="JS/carrinho.js"></script>
  <script type="JS/Bootstrap.mim.js"></script>
  <script src="JS/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="JS/jquery.mask.js"></script>
  <script type="text/javascript" src="JS/jquery.mask.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
  <script src="http://code.jquery.com/ui/1.9.0/jquery-ui.js"></script>
  </html>