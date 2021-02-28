<?php
  include('conexao.php');

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
        echo "<script> alert('Conta deletada com sucesso!')</script>";
        echo '<script>window.location="index.php"</script>';
      } else {
        echo "<script> alert('Erro ao deletar conta')</script>";
        echo '<script>window.location="deletarConta.php"</script>';
      }
    } else {
      echo "<script> alert('Senha incorreta.')</script>";
      echo '<script>window.location="deletarConta.php"</script>';
    }
  }
?>