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
    $sobrenome = $linha['sobrenome'];
    $data_nascimento = $linha['data'];
    $sexo = $linha['sexo'];
    $cpf = $linha['cpf'];
    $cep = $linha['cep'];
    $telefone = $linha['telefone'];
    $endereco = $linha['endereco'];
    $num_endereco = $linha['numero'];
    $complemento = $linha['complemento'];
    $cidade = $linha['cidade'];
    $bairro = $linha['bairro'];
    $estado = $linha['estado'];
    $email = $linha['email'];
  }
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
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="margin-right: 57px;">
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

    <h1 class="col-12">Seus dados</h1><br>
    <div class="container col-12 divcadastro rounded border border-primary mb-5"> 
      <form class="needs-validation m-4" novalidate action="acaoAlterarUsuario.php" method="POST">
        <div class="form-row mb-3 mt-3">
          <div class="col">
            <label form="labelNome" class="mb-0">Nome</label> 
            <input type="text" class="form-control input rounded-0 desabilitado"  name="nome" disabled="" value="<?php echo $nome; ?>">
          </div>
          <div class="col">
            <label form="labelSobrenome" class="mb-0">Sobrenome</label> 
            <input type="text" class="form-control input rounded-0 desabilitado"  name="sobrenome" disabled="" value="<?php echo $sobrenome; ?>">
          </div>
        </div>
        <div class="form-row mb-3">
          <div class="col">
            <label form="labelDataNascimento">Data de Nascimento</label>
            <input class="form-control input rounded-0 desabilitado" type="text"  name="data_nascimento" disabled="" value="<?php echo $data_nascimento; ?>">
          </div>
          
          <div class="col">
            <label form="labelSexo" class="mb-3">Sexo</label><br>
            <div class="form-check form-check-inline ml-3">
              <input class="form-check-input desabilitado" type="radio" name="Sexo" id="SexoMasculino" value="Masculino" disabled="">
              <label class="form-check-label" for="RadioMasculino">Masculino</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input desabilitado" type="radio" name="Sexo" id="SexoFeminino" value="Feminino" disabled="">
              <label class="form-check-label" for="RadioFeminino">Feminino</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input desabilitado" type="radio" name="sexo" id="SexoOutro" value="Outro" disabled="">
              <label class="form-check-label" for="RadioOutro">Outro</label>
            </div>
          </div>
        </div>
        <?php            
          if ($sexo == "Masculino") {
            echo "<script> $('#SexoMasculino').attr('checked','checked') </script>";      
          } else if ($sexo == "Feminino") {
            echo "<script> $('#SexoFeminino').attr('checked','checked') </script>"; 
          } else if ($sexo == "Outro") {
            echo "<script> $('#SexoOutro').attr('checked','checked') </script>"; 
          }
        ?>
        <div class="form-row">
          <div class="col mb-3">
            <label form="labelCPF" class="mb-0">CPF</label>
            <input type="text" class="form-control input rounded-0 desabilitado" name="cpf" disabled="" value="<?php echo $cpf; ?>">
          </div>
          <div class="col mb-3">
            <label form="labelCEP" class="mb-0">CEP</label> 
            <input type="text" class="form-control input rounded-0" onkeydown="javascript: return event.keyCode == 69 ? false : true" onKeyPress="if(this.value.length==8) return false;"  name="cep" id="validationCustomCEP" pattern="([0-9]{8})" placeholder="Digite seu CEP" value="<?php echo $cep; ?>" required>
            <div class="invalid-feedback" id="cepinvalido">
              Por favor insira um CEP válido.
            </div>
          </div>
          <div class="col mb-3">
            <label form="labelTelefone" class="mb-0">Telefone</label>
            <input type="text" class="form-control input rounded-0 telefone" data-mask="(00) 0000-00009" id="telefone" name="telefone" pattern="\([0-9]{2}\)[\s][0-9]{4}-[0-9]{4,5}" placeholder="Digite seu Telefone" value="<?php echo $telefone; ?>" required>
            <div class="invalid-feedback">
              Por favor insira um Telefone válido.
            </div>
          </div>
        </div>

        <div class="form-row">
          <div class="col">
            <label form="labelNome" class="mb-0">Endereço</label> 
            <input type="text" class="form-control input rounded-0" id="validationCustomEndereço"  name="endereco" placeholder="Digite seu Endereço" value="<?php echo $endereco; ?>" required>
            <div class="invalid-feedback">
              Por favor insira um Endereço válido.
            </div>
          </div>
          <div class="col mt-4 col-sm-2">
            <input type="number" class="form-control input rounded-0" id="validationCustomEndereçoNumero" onkeydown="javascript: return event.keyCode == 69 ? false : true"  name="num_endereco" placeholder="Nº" value="<?php echo $num_endereco; ?>" required>
          </div>
          <div class="col mt-4 col-sm-4">
            <input type="text" class="form-control input rounded-0" id="validationCustomComplemento" name="complemento_endereco" placeholder="Complemento" value="<?php echo $complemento; ?>" required>
          </div>
        </div>

        <div class="form-row">
          <div class="col mt-3">
            <label form="labelCidade" class="mb-0">Cidade</label> 
            <input type="text" class="form-control input rounded-0" id="validationCustomCidade"  pattern="[a-zA-Z]+" name="cidade" placeholder="Digite sua Cidade" value="<?php echo $cidade; ?>" required>
            <div class="invalid-feedback">
              Por favor insira uma Cidade válida.
            </div>
          </div>
          <div class="col mt-3">
            <label form="labelBairro" class="mb-0">Bairro</label> 
            <input type="text" class="form-control input rounded-0" id="validationCustomBairro" name="bairro" placeholder="Digite seu Bairro" value="<?php echo $bairro; ?>" required>
            <div class="invalid-feedback">
              Por favor insira um Bairro válido.
            </div>
          </div>
          <div class="col mt-3">
            <label form="labelBairro" class="mb-0">Estado</label> 
            <input type="text" class="form-control input rounded-0" id="validationCustomBairro"  onKeyPress="if(this.value.length==2) return false;" pattern="[a-zA-Z]{2}" name="estado" placeholder="Digite seu Estado" value="<?php echo $estado; ?>" required>
            <div class="invalid-feedback">
              Por favor insira um Estado válido.
            </div>
          </div>
        </div>
        <div class="form-row mb-3 mt-3">
          <div class="col">
            <label for="labelEmail" class="mb-0">Email</label>
            <input type="email" class="form-control input rounded-0 desabilitado" disabled="" value="<?php echo $email; ?>">
          </div>
        </div>

        <button class="btn btn-primary btn-sm btn-rounded font-weight-bold mb-2 mt-2 w-100" style="height: 40px; font-size: 16px;" id="btnCadastrar" type="submit">Alterar dados</button>
      </form>
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <h3 class="col-12 mb-4">Adicionar Cartão</h3>
        </div>
        <div class="container col-12 divcadastro rounded border border-primary mb-5"> 
          <div class="form-row mb-2 mt-3 ml-3">
            <label form="labelNome">*Campos Obrigatórios</label>
          </div>
          <form class="needs-validation m-4" novalidate>
            <div class="form-row mb-3 mt-3">
              <div class="col">
                <label form="labelNumCartao" class="mb-0">*Número do Cartão</label> 
                <input type="text" class="form-control input rounded-0" id="validationCustomNumCartao" placeholder="*Digite o número do cartão" name="numCartao" data-mask="0000 0000 0000 0000" pattern="[0-9]{4}[\s][0-9]{4}[\s][0-9]{4}[\s][0-9]{4}" required>
                <div class="invalid-feedback">
                  Por favor insira um número válido.
                </div>
              </div>
              <div class="col">
                <label form="labelCPF" class="mb-0">*CPF do Titular do Cartão</label>
                <input type="text" class="form-control input rounded-0" data-mask="00000000000" placeholder="*Digite o CPF" name="cpf" id="validationCustomCPF" pattern="([0-9]{11})" required>
                <div class="invalid-feedback">
                  Por favor insira um CPF válido.
                </div>
              </div>
            </div>
            <div class="form-row mb-3 mt-3">
              <div class="col">
                <label form="labelNome" class="mb-0">*Nome Completo</label> 
                <input type="text" class="form-control input rounded-0" id="validationCustomNomeCartao" placeholder="*Digite o Nome Completo" onkeypress="return validaNomes(event);" name="nomeCompleto" required>
                <div class="invalid-feedback">
                  Por favor insira um nome válido.
                </div>
              </div>
            </div>
            <div class="form-row mb-3">
              <div class="col">
                <label form="labelDataVenc">*Data de Vencimento</label>
                <input class="form-control input rounded-0" id="validationCustomData" name="date" placeholder="*Mês/Ano" type="text" data-mask="00/0000" name="data_nascimento" pattern="[^-,]{7}" required>
                <div class="invalid-feedback" id="datainvalida">
                  Por favor insira uma data válida.
                </div>
              </div>
              <div class="col">
                <label form="labelCodigoSeguranca">*Código de Segurança</label>
                <input type="text" class="form-control input rounded-0" id="validationCustomCodigoSeguranca" placeholder="*(Últimos 3 números no verso do cartão)" name="numCartao" data-mask="000" pattern="[0-9]{3}" required>
                <div class="invalid-feedback">
                  Por favor insira um código válido.
                </div>
              </div>
            </div>
            <button class="btn btn-primary btn-sm btn-rounded font-weight-bold mb-2 mt-2 w-100" style="height: 40px; font-size: 16px;" id="btnPagarCartao">Alterar Cartão</button>
          </form>
        </div>
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