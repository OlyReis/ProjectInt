<?php
  include('conexao.php');

  session_start();

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $sql = 'SELECT * FROM usuarios WHERE email = "' . $email . '" AND senha = "' . $senha . '"';
  $resultado = mysqli_query($conexao, $sql);
  if($at = mysqli_num_rows($resultado) > 0) {
    echo 'Existe';
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    echo "<script> alert('Login Conectado!')</script>";
    echo '<script>window.location="index.php"</script>';
  } else {
    echo 'Não Existe';
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
    echo "<script> alert('Email ou senha incorretos.') </script>";
    echo '<script>window.location="login.php"</script>';
  }
?>