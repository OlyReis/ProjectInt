<?php

  $qtdProdutos = $_POST['qtdProdutos'];
  $idTodosProdutos = "";
  $qtdTodosProdutos = "";
  $tamanhoTodosProdutos = "";
  $valorTotal = $_POST['valorTotal'];
 

  for($i = 1; $i <= $qtdProdutos; $i++) {
    $idProduto[$i] = $_POST['idProduto' . $i];
    $idTodosProdutos = $idTodosProdutos . $idProduto[$i] . ",";
    $qtdProduto[$i] = $_POST['qtd' . $i];
    $qtdTodosProdutos = $qtdTodosProdutos . $qtdProduto[$i] . ",";
    $tamanhoProduto[$i] = $_POST['tamanhoProduto' . $i];
    $tamanhoTodosProdutos = $tamanhoTodosProdutos . $tamanhoProduto[$i] . ",";
  }

  echo $idTodosProdutos . "<br>";
  echo $qtdTodosProdutos . "<br>";
  echo $tamanhoTodosProdutos . "<br>";
  echo $valorTotal;

  echo '<form id="formCarrinho" name="formCarrinho" action="compra.php" method="POST">';
  echo '<input type="hidden" name="idTodosProdutos" value="' . $idTodosProdutos . '">';
  echo '<input type="hidden" name="qtdTodosProdutos" value="' . $qtdTodosProdutos . '">';
  echo '<input type="hidden" name="tamanhoTodosProdutos" value="' . $tamanhoTodosProdutos . '">';
  echo '<input type="hidden" name="valorTotal" value="' . $valorTotal . '">';
  echo '</form>';
  echo '<script>
document.formCarrinho.submit();
</script>'
 
?>