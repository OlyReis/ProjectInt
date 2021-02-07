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
        <button type="button" class="btn btn-dark"><a href="login.php">Login<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-square ml-2" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" d="M14 1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1zM2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H2z"/>
          <path fill-rule="evenodd" d="M2 15v-1c0-1 1-4 6-4s6 3 6 4v1H2zm6-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
        </svg></a></button>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="col-12 mb-4">Resumo da Compra</h3>
          <h5 class="col-12 mb-2">Produtos</h5>
          <div class="divProdutoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">       
            <div class="row mb-0">
              <div class="col-sm-4 ml-0 mt-0">
                <a href="id361614.php"><img src="IMG/1.webp" class="w-100 h-100" alt="..."></a>
              </div>
              <div class="col-md-8 mb-0">
                <h3 class="mb-0 text-light">Tênis</h3>
                <p class="text-light ml-1 mb-0">Tamanho: 39</p>
                <p class=" mt-0 ml-1 text-light">Quantidade: 1</p>
                <div class="mt-1" style="margin-left: 96%; position:absolute;">
                  <svg class="text-light" width="1.5em" height="1.5em" viewBox="0 0 16 16" id="apagarProdutoCarrinho" class="bi bi-trash-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg" onclick="deletaProduto(this)" style="cursor: pointer;">
                    <path fill-rule="evenodd" d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5a.5.5 0 0 0-1 0v7a.5.5 0 0 0 1 0v-7z"/>
                  </svg>
                </div>
              </div>
            </div>
          </div>
          <h5 class="col-12 mb-2 mt-4">Detalhes do Envio</h5>
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
                <p class="text-light mt-0 mb-0" style="font-size: 15px">Cidade, Estado - CEP 00000000</p>
                <p class="text-light mt-0 mb-0" style="font-size: 15px">Nome do Cliente - (00) 0000-00009</p>
              </div>          
            </div>
            <div class="row mb-3 mt-0 ml-0">
              <div class="col-sm-2">
              </div>
              <div class="col-sm-10 p-0 font-weight-bold">
                <a href="usuario.php">Alterar</a>
              </div>
            </div>
            <hr style="background-color: black;">
            <div class="row mb-3 mt-0 ml-2">
              <div class="col-sm-1">
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-truck text-light" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M0 3.5A1.5 1.5 0 0 1 1.5 2h9A1.5 1.5 0 0 1 12 3.5V5h1.02a1.5 1.5 0 0 1 1.17.563l1.481 1.85a1.5 1.5 0 0 1 .329.938V10.5a1.5 1.5 0 0 1-1.5 1.5H14a2 2 0 1 1-4 0H5a2 2 0 1 1-3.998-.085A1.5 1.5 0 0 1 0 10.5v-7zm1.294 7.456A1.999 1.999 0 0 1 4.732 11h5.536a2.01 2.01 0 0 1 .732-.732V3.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5v7a.5.5 0 0 0 .294.456zM12 10a2 2 0 0 1 1.732 1h.768a.5.5 0 0 0 .5-.5V8.35a.5.5 0 0 0-.11-.312l-1.48-1.85A.5.5 0 0 0 13.02 6H12v4zm-9 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm9 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                </svg>
              </div>
              <div class="col ml-4">
                <p class="text-light font-weight-bold pt-1">Chegará entre 24 e 28 de Novembro</p>
              </div>
            </div>
          </div>
          <h5 class="col-12 mb-2 mt-4">Detalhes do Pagamento</h5>
          <div class="divProdutoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">
            <div class="row m-2">
              <div class="col-sm-1">
                <svg class="text-primary" width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-upc" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path d="M3 4.5a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7zm2 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-7zm3 0a.5.5 0 0 1 1 0v7a.5.5 0 0 1-1 0v-7z"/>
                </svg>
              </div>
              <div class="col">
                <p class="font-weight-bold text-light my-auto align-middle pt-1" id="opcaoPagamento2">Boleto</p>
                <p class="text-light my-auto align-middle pt-1">À Vista</p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <h3 class="" style="margin-bottom: 55px;">Resumo da Compra</h3>
          <div class="divResumoCarrinho border-0 card rounded-0 w-100 h-auto darkmode-ignore mb-4">
            <div class="row mb-0">
              <div class="col-sm-8">
                <div><h5 class="text-light mt-3 ml-4" id="numItensSubtotal">Subtotal (1 item)</h5></div>
              </div>
              <div class="col">
                <h5 class="text-light mt-3 ml-4" id="subtotal" name="subtotal">R$ 68,90</h5>
              </div>
            </div>
            <hr style="background-color: black">
            <div class="row mt-0">              
              <div class="col-sm-8">
                <h5 class="text-light ml-4 mt-3">Valor Total</h5>
              </div>
              <div class="col">
                <h5 class="text-light mt-3 ml-4" id="valorTotal" name="valorTotal">R$ 68,90</h5>
              </div>           
            </div>
            <hr style="background-color: black">
            <div class="row mt-0">
              <div class="col"></div>
              <div class="col-sm-10 mb-3">
                <a href="#" class=" text-light btn btn-sm bg-primary btn-rounded font-weight-bold mr-3 btnADM w-100" style="line-height: 30px;" type="button" id="continuarBtn">Concluir Compra</a>
              </div>
              <div class="col"></div>
            </div>
            <div class="row mt-0 text-center" id="validarPag">
             
            </div>
          </div>
        </div>
      </div>
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
  <script type="text/javascript" src="JS/concluirCompra.js"></script>
  <script type="JS/Bootstrap.mim.js"></script>
  <script src="JS/bootstrap-datepicker.js"></script>
  <script type="text/javascript" src="JS/jquery.mask.js"></script>
  <script type="text/javascript" src="JS/jquery.mask.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.9.0/themes/base/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.8.2.js"></script>
</html>