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
    $cidade = $linha['cidade'];
    $estado = $linha['estado'];
    $cep = $linha['cep'];
    $telefone = $linha['telefone'];

    $idTodosProdutos = $_POST['idTodosProdutos'];
    $qtdTodosProdutos = $_POST['qtdTodosProdutos'];
    $tamanhoTodosProdutos = $_POST['tamanhoTodosProdutos'];
    $valorTotal = $_POST['valorTotal'];

    if ($_SESSION['nItensCarrinho'] != 0) {
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

<!DOCTYPE hmtl>
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
        <div class="dropdown show" style="margin-right: 65px;">
          <a class="text-light dropdown-toggle font-weight-bold" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            ' . $nome . '
          </a>

          <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="background-color: red;">
            <a class="dropdown-item" href="usuario.php">Meus Dados</a>
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
      <form method="POST" action="concluirCompra.php">
        <input type="hidden" name="idTodosProdutos" value="<?php echo $idTodosProdutos; ?>">
        <input type="hidden" name="qtdTodosProdutos" value="<?php echo $qtdTodosProdutos; ?>">
        <input type="hidden" name="tamanhoTodosProdutos" value="<?php echo $tamanhoTodosProdutos; ?>">
        <input type="hidden" name="valorTotal" value="<?php echo $valorTotal; ?>">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="col-12 mb-4">Como você quer receber sua compra?</h3>
          <div class="row mb-0 ml-1">
            <h5>Endereço</h5>
          </div>
          <div class="divProdutoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">        
            <div class="row mb-0 mt-3 ml-0">
              <div class="col-sm-2 text-center my-auto mr-0">
                <svg width="1.7em" height="1.7em" viewBox="0 0 16 16" class="bi bi-geo-alt text-light" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M12.166 8.94C12.696 7.867 13 6.862 13 6A5 5 0 0 0 3 6c0 .862.305 1.867.834 2.94.524 1.062 1.234 2.12 1.96 3.07A31.481 31.481 0 0 0 8 14.58l.208-.22a31.493 31.493 0 0 0 1.998-2.35c.726-.95 1.436-2.008 1.96-3.07zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                  <path fill-rule="evenodd" d="M8 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                </svg>
              </div> 
              <div class="col-sm-9 mt-0 ml-0 p-0">
                <p class="font-weight-bold text-light mt-0 mb-0" style="font-size: 15px">Endereço</p>
                <p class="text-light mt-0 mb-0" style="font-size: 15px"><?php echo $cidade; ?>, <?php echo $estado; ?> - CEP <?php echo $cep; ?></p>
                <p class="text-light mt-0 mb-0" style="font-size: 15px"><?php echo $nome; ?> - <?php echo $telefone; ?></p>
              </div>          
            </div>
            <div class="row mb-3 mt-0 ml-0">
              <div class="col-sm-2">

              </div>
              <div class="col-sm-10 p-0 font-weight-bold">
                <a href="usuario.php">Alterar</a>
              </div>
            </div>
          </div>  
          <div class="row mb-0 ml-1">
            <h5>Opções de Envio</h5>
          </div>
          <div class="divProdutoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">
            <div class="row mb-0 mt-3 ml-0">
              <div class="col-sm-1"> 
                <input type="radio" name="opcaoEnvio" id="radioOpcaoEnvio1" value="Chegará entre " required>
              </div>
              <div class="col">
                <p class="font-weight-bold text-light" id="opcaoEnvio1">Chegará entre </p>
              </div>
              <div class="col-sm-3">
                <p class="font-weight-bold text-light" id="opcaoEnvio1Valor">R$ 20,50</p>
              </div>
            </div>
            <div class="row mb-0 mt-3 ml-0">
              <div class="col-sm-1"> 
                <input type="radio" name="opcaoEnvio" id="radioOpcaoEnvio2" value="Chegará entre " required>
              </div>
              <div class="col">
                <p class="font-weight-bold text-light" id="opcaoEnvio2">Chegará entre </p>
              </div>
              <div class="col-sm-3">
                <p class="font-weight-bold text-light" id="opcaoEnvio2Valor">R$ 4,90</p>
              </div>
            </div>
          </div>
          <div class="row mb-0 ml-1">
            <h5>Como você prefere pagar?</h5>
          </div>
          <div class="divProdutoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">
            <div class="row mb-0 mt-3 ml-0">
              <div class="col-sm-1 my-auto"> 
                <input type="radio" name="opcaoPagamento" id="radioOpcaoPagamento1" value="Cartao de Crédito" required>
              </div>
              <div class="col-sm-1 ml-1">
                <svg class="text-primary" width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-credit-card" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                  <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                </svg>
              </div>
              <div class="col">
                <p class="font-weight-bold text-light my-auto align-middle pt-0" id="opcaoPagamento1">Cartão de Crédito</p>
              </div>
            </div>

            <div class="row mb-3 mt-3 ml-0">
              <div class="col-sm-1 my-auto"> 
                <input type="radio" name="opcaoPagamento" id="radioOpcaoPagamento2" value="Boleto" required>
              </div>
              <div class="col-sm-1">
                <svg class="text-primary" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-upc" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                </svg>
              </div>
              <div class="col">
                <p class="font-weight-bold text-light  my-auto align-middle pt-1" id="opcaoPagamento2">Boleto</p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-sm-6">
          <h3 class="" style="margin-bottom: 90px;">Resumo da Compra</h3>
          <div class="divResumoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">
            <div class="row mb-0">
              <div class="col-sm-8">
                <div><h5 class="text-light mt-3 ml-4" id="numItensSubtotal">Subtotal ( <?php if ((count($idCadaProdutoCarrinho) - 1) == 1) { echo (count($idCadaProdutoCarrinho) - 1) . ' item)'; } else { echo (count($idCadaProdutoCarrinho) - 1) . ' itens)'; } ?></h5></div>
              </div>
              <input type="hidden" value="<?php echo $valorTotal; ?>" name="valorTotal" id="inputHiddenValorTotal">
              <div class="col">
                <h5 class="text-light mt-3 ml-1" id="subtotal" name="subtotal">R$ <?php echo str_replace(".",",",$valorTotal); ?></h5>
              </div>
            </div>
            <hr style="background-color: black">
            <div class="row mt-0">              
              <div class="col-sm-8">
                <h5 class="text-light ml-4 mt-3">Valor Total</h5>
              </div>
              <div class="col">
                <h5 class="text-light mt-3 ml-1" id="valorTotal" name="valorTotal">R$ <?php echo str_replace(".",",",$valorTotal); ?></h5>
              </div>           
            </div>
            <hr style="background-color: black">
            <div class="row mt-0">
              <div class="col"></div>
              <div class="col-sm-10 mb-3">
                <input class=" text-light btn btn-sm bg-primary btn-rounded font-weight-bold mr-3 btnADM w-100" style="line-height: 30px;" type="submit" id="continuarBtn">
              </div>
              <div class="col"></div>
            </div>
            <div class="row mt-0 text-center" id="validarPag">
             
            </div>
          </div>
        </div>
      </div>
    </form>
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
      </form>
    </div>
  </footer>
  <span class="darkmode-ignore"><span>  
  </body>
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.5/lib/darkmode-js.min.js"></script>
  <script>
    new Darkmode().showWidget();
  </script>
  <script type="text/javascript" src="JS/compra.js"></script>
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