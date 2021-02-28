<?php
  include('conexao.php');
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';
  session_start();
  if (isset($_SESSION['email'])) 
  { 
    $logado = $_SESSION['email'];
    $script = 'SELECT * FROM usuarios WHERE email = "' . $logado . '"';
    $consulta = $conexao->query($script);
    $linha = $consulta->fetch_array(MYSQLI_ASSOC);
    $id = $linha['id'];

    $cep = $_POST['cep'];
    $telefone = $_POST['telefone'];
    $endereco = $_POST['endereco'];
    $num_endereco = $_POST['num_endereco'];
    $complemento = $_POST['complemento_endereco'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $estado = $_POST['estado'];

    $script = 'UPDATE usuarios SET cep = "' . $cep . '", telefone = "' . $telefone . '", endereco = "' . $endereco . '", numero = "' . $num_endereco . '", complemento = "' . $complemento . '", cidade = "' . $cidade . '", bairro = "'. $bairro. '", estado = "' . $estado . '" WHERE id = ' . $id;

    $altera = $conexao->query($script);

    if(!$altera){
      echo "<script> $.confirm({type: 'red', title: 'Alterar Dados', content: 'Alteração incorreta. Favor verificar dados.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="usuario.php"'; echo " }}}});</script>";
    }else{
      echo "<script> $.confirm({type: 'red', title: 'Alterar Dados', content: 'Alteração feita com sucesso!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="usuario.php"'; echo " }}}});</script>";
    }
  }
?>