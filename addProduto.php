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
?>

<!DOCTYPE html>
<html>
<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="CSS/my.css">

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
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
        <div class="dropdown show" style="margin-right: 101px;">
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

    <h1 class="col-12">Adicionar Produto</h1><br>
    <div class="container col-12 divcadastro rounded border border-primary mb-5"> 
      <form class="needs-validation m-4" method="POST" enctype="multipart/form-data" action="acaoAdicionarProduto.php">
        <div class="form-row mb-3 mt-3">
          <div class="col">
            <label form="labelNomeProduto" class="mb-0">Nome do Produto</label> 
            <input type="text" class="form-control input rounded-0" id="NomeProduto" placeholder="Digite o Nome do Produto" name="nomeProduto" onKeyPress="if(this.value.length==111) return false;" required>
            <div class="invalid-feedback">
              Por favor insira um Nome válido.
            </div>
          </div>
          <div class="col">
            <label form="labelLancamento" class="mb-0">Ano de Lançamento</label> 
            <input type="text" class="form-control input rounded-0" onkeydown="javascript: return event.keyCode == 69 ? false : true" onKeyPress="if(this.value.length==4) return false;"  placeholder="*Digite o Ano de Lançamento do Produto" name="lancamentoProduto" id="lancamentoProduto" pattern="([0-9]{4})" required>
            <div class="invalid-feedback">
              Por Favor insira um ano válido.
            </div>
          </div>
        </div>
        <div class="form-row mb-3 mt-3">
          <div class="col">
            <label form="labelDescricaoProdutoMenu" class="mb-0">Descrição do Produto no Menu</label> 
            <input type="text" class="form-control input rounded-0" id="DescricaoProdutoMenu" onKeyPress="if(this.value.length==310) return false;" placeholder="Digite a Descrição do Produto" name="descricaoProdutoMenu" required>
            <div class="invalid-feedback">
              Por favor insira uma Descrição válida.
            </div>
          </div>
        </div>
        <div class="form-row mb-3 mt-3">
          <div class="col">
            <label form="labelPreco" class="mb-0">Preço do Produto</label>
            <input type="text" class="form-control input rounded-0 precoProduto" id="precoProduto" placeholder="Digite o Preço do Produto" name="precoProduto" id="precoProduto" required>
            <div class="invalid-feedback">
              Por favor insira um Preço válido.
            </div>
          </div>
          <div class="col mt-0">
            <label form="labelEstoqueProduto" class="mb-0">Estoques do Produto</label>
            <input type="number" class="form-control input rounded-0 mt-0" id="estoqueProduto" onkeydown="javascript: return event.keyCode == 69 ? false : true" placeholder="Digite o Estoque do Produto" name="estoqueProduto" required>
            <div class="invalid-feedback">
              Por favor insira um número válido.
            </div>
          </div>
        </div>
        <div class="form-row mb-3 mt-3">
          <div class="col">
            <label form="labelNumTamanho" class="mb-0">Número de Tamanhos do Produto (Máximo 10)</label>
            <input type="number" name="numTamanhos" class="form-control input rounded-0 mt-0" id="numTamanhos" placeholder="Digite a Quantidade de Tamanhos do Produto" onkeydown="javascript: return event.keyCode == 69 ? false : true" onKeyPress="if (this.value.length >= 2) return false;">
            <div class="invalid-feedback">Por favor insira um número válido.</div>
          </div>
          <div class="col">
            <label form="labelTamanhosProduto" class="mb-0">Tamanhos (Separados por vírgula)</label>
            <input type="text" name="tamanhosProduto" class="form-control input rounded-0 mt-0" id="tamanhosProduto" placeholder="Digite os Tamanhos do Produto" onKeyPress="if (this.value.length >= 29) return false;">
            <div class="invalid-feedback">Por favor insira um tamanho válido.</div>
          </div>
        </div>
        <div class="form-row mb-0 mt-3"> 
          <div class="col">
            <label>Escolha uma imagem do Produto</label>
          </div>
        </div>
        <div class="form-row mb-3 mt-0">
          <div class="col mb-3" id="imgProduto">
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="fotoProduto" required>
            <div class="invalid-feedback mb-3">Por favor insira uma imagem válida.</div>
          </div>
        </div>
        <div class="form-row mb-3 mt-3">
          <div class="col">
            <label for="labelDescricaoProduto">Descrição do Produto</label>               
            <textarea class="form-control textArea" id="textArea" rows="15" name="descricaoProduto" placeholder="Digite a Descrição do Produto" required></textarea>
            <div class="invalid-feedback" style="border-top: 2px solid red">
              Por favor insira uma Descrição válida.
            </div>
            <div class="valid-feedback" style="border-top: 2px solid green"></div>        
          </div>
        </div>
        <button class="btn btn-primary btn-sm btn-rounded font-weight-bold mb-2 mt-2 w-100" style="height: 40px; font-size: 16px;" id="btnAdicionarProduto" type="submit">Adicionar Produto</button>
      </form>
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
    <script type="text/javascript" src="JS/addProduto.js"></script>
    <script type="JS/Bootstrap.mim.js"></script>
    <script src="JS/jquery.maskMoney.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.9/summernote.js" defer></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="JS/jquery.mask.js"></script>
    <script type="text/javascript" src="JS/jquery.mask.min.js"></script>
    </html>
    