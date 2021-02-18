<?php
  include('conexao.php');

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
      echo '<script>alert("Alteração incorreta!")</script>';
      echo '<script>window.location="usuario.php"</script>';
    }else{
      echo '<script>alert("Alteração feita com sucesso!")</script>';
      echo '<script>window.location="usuario.php"</script>';
    }
  }
?>