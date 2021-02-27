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
              <p class="mb-4 text-light mt-0 ml-1" name="numEstoque">Estoque: <?php echo $qtd; ?></p>
              <a class="btn btn-dark text-light mb-4" href="carrinho.php" role="button" id="comprarProduto" style="bottom: 0; position: absolute; margin-left: 260px;">Comprar</a> 
              <a class="btn btn-dark mb-4" href="acaoAdicionarAoCarrinho.php?id=<?=$id?>&estoque=<?=$qtd?>" role="button" id="adicionarCarrinho" style="bottom: 0; position: absolute; margin-left: 360px;">Adicionar ao carrinho</a>
            </div>
          </div>
        </div>
      </div>

      <h2 class="darkmode-ignore" style="color: #A90808;">Descrição</h2><br>
      <div class="counteudoDescricaoProduto darkmode-ignore" name="conteudoDescricaoProduto">
        <?php echo $descricaoP; ?>
        <!-- <p class='text-justify text-primary' style='line-height: 1;'>Tênis masculino para Caminhada Leve. É um produto que não só é direcionado as atividades físicas no caso da academia, caminhada, corrida, mas também para o trabalho e para o conforto do seu dia a dia. É importante ter um tênis para caminhada leve para que suas qualidades te favoreçam a ter o melhor desempenho. O tênis masculino para caminhada leve te proporciona essa qualidade por ter a sola de micro expandido, um material reconhecido como preferencial para atividades físicas.</p><p class='text-justify text-primary' style='line-height: 1;'><br></p><p class='text-justify text-primary' style='line-height: 1;'>MATERIAL DO TÊNIS PARA CAMINHADA MASCULINO</p><p class='text-justify text-primary' style='line-height: 1;'>O nylon oferece resistência ao impacto, baixo peso específico, alta maleabilidade e baixa absorção.</p><p class='text-justify text-primary' style='line-height: 1;'>O seu detalhe é de pvc, dando mais reforço e durabilidade para o calçado.</p><p class='text-justify text-primary' style='line-height: 1;'>O poliéster é fácil para lavar e secar, ótima durabilidade e retenção de cor do tênis para caminhada masculino.</p><p class='text-justify text-primary' style='line-height: 1;'>O micro expandido é um material adequado para solados com a função de praticar atividades ao ar livre.</p><p class='text-justify text-primary' style='line-height: 1;'>O EVA é conhecido como um dos materiais mais leves e macios para palmilhas e o mais utilizado em tênis.</p><p class='text-justify text-primary' style='line-height: 1;'><br></p><p class='text-justify text-primary' style='line-height: 1;'>MEDIDAS DE TAMANHO DA PALMILHA</p><p class='text-justify text-primary' style='line-height: 1;'>Numero 38&nbsp; 25,60 a 26,10 cms</p><p class='text-justify text-primary' style='line-height: 1;'>Numero 39 - 26,20 a 26,90 cms</p><p class='text-justify text-primary' style='line-height: 1;'>Numero 40 - 27,00 a 27,50 cms</p><p class='text-justify text-primary' style='line-height: 1;'>Numero 41 - 27,60 a 28,00 cms</p><p class='text-justify text-primary' style='line-height: 1;'>Numero 42 - 28,10 a 28,70 cms</p><p class='text-justify text-primary' style='line-height: 1;'>Numero 43 - 29,00 a 29,70 cms</p><p class='text-justify text-primary' style='line-height: 1;'>Numero 44 - 29,80 a 30,20 cms</p><p class='text-justify text-primary' style='line-height: 1;'><br></p><p class='text-justify text-primary' style='line-height: 1;'>TENIS DE ACADEMIA MASCULINO PARA CAMINHADA - DICA DE TAMANHO</p><p class='text-justify text-primary' style='line-height: 1;'>Este modelo calça justo aos pés, no entanto ele terá que ser uma numeração maior do que normalmente você usa. Ex: Se você calça o número 40, o ideal seria o número 41.</p><p class='text-justify text-primary' style='line-height: 1;'><br></p><p class='text-justify text-primary' style='line-height: 1;'>DURABILIDADE E ESTABILIDADE QUE VOCÊ PRECISA TER</p><p class='text-justify text-primary' style='line-height: 1;'>A durabilidade é um fator indispensável no calçado e o tênis para caminhada leve não deixa a desejar, com o material do cabedal feito de nylon e costura reforçada, fazem com que o tênis não desgaste rápido, assim podendo te servir com todos os benefícios por um longo prazo. O solado de micro expandido traz uma estabilidade que mantém os pés firmes ao solo proporcionando o máximo de desempenho esportivo.</p> -->
      </div><br>
      <h2 class="darkmode-ignore" style="color: #A90808;">Outros produtos Modas Z</h2>
      <br>

      <div id="carouselExampleIndicators darkmode-ignore" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <a href="idxxxxx.php"><img src="IMG/2.jpg" class="d-block mx-auto w-50" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="idxxxxx.php"><img src="IMG/3.jpg" class="d-block mx-auto w-50" alt="..."></a>
          </div>
          <div class="carousel-item">
            <a href="idxxxxx.php"><img src="IMG/4.jpg" class="d-block mx-auto w-50" alt="..."></a>
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only bg-dark">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
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