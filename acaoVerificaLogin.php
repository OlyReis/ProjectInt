
<?php
  include('conexao.php');
  echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css"> <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script> <link rel="stylesheet" type="text/css" href="CSS/bootstrap.min.css">';
  session_start();

  $email = $_POST['email'];
  $senha = $_POST['senha'];
  $sql = 'SELECT * FROM usuarios WHERE email = "' . $email . '" AND senha = "' . $senha . '"';
  $resultado = mysqli_query($conexao, $sql);
  if($at = mysqli_num_rows($resultado) > 0) {
    $_SESSION['email'] = $email;
    $_SESSION['senha'] = $senha;
    echo "<script> $.confirm({type: 'red', title: 'Login', content: 'Login Conectado!', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="index.php"'; echo " }}}});</script>";
  } else {
    unset ($_SESSION['email']);
    unset ($_SESSION['senha']);
     echo "<script> $.confirm({type: 'red', title: 'Login', content: 'Email ou Senha incorretos.', buttons: { Ok: { btnClass: 'btn-red', action: function () {"; echo 'window.location="login.php"'; echo " }}}});</script>";
  }
?>