<?php
  include('conexao.php');
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';

  $senhaInput = $_POST['senha'];

  session_start();
  if (isset($_SESSION['email'])) 
  { 
    $logado = $_SESSION['email'];
    $script = 'SELECT * FROM usuarios WHERE email = "' . $logado . '"';
    $consulta = $conexao->query($script);
    $linha = $consulta->fetch_array(MYSQLI_ASSOC);
    $id = $linha['id'];
    $senha = $linha['senha'];

    if ($senhaInput == $senha) {

      $script = 'DELETE FROM usuarios WHERE id = "' . $id . '"';
      $deleta = $conexao->query($script);
      if ($deleta) {
        $script = "SET @count = 0";
        $consulta = $conexao->query($script);
        $script = "UPDATE `usuarios` SET `usuarios`.`id` = @count:= @count + 1";
        $consulta = $conexao->query($script);
        session_destroy();
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        echo "<script> $.confirm({type: 'red', title: 'Deletar Conta', content: 'Conta deletada!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="index.php"'; echo " }}}});</script>";
      } else {
        echo "<script> $.confirm({type: 'red', title: 'Deletar Conta', content: 'Erro ao deletar conta!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="deletarConta.php"'; echo " }}}});</script>";
        echo "<script> alert('Erro ao deletar conta')</script>";
        echo '<script>window.location="deletarConta.php"</script>';
      }
    } else {
      echo "<script> $.confirm({type: 'red', title: 'Deletar Conta', content: 'Senha incorreta', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="deletarConta.php"'; echo " }}}});</script>";
    }
  }
?>