<?php

$qtdProdutos = $_POST['qtdProdutos'];
$valorTotal = $_POST['valorTotal'];
$idTodosProdutos = "";
$qtdTodosProdutos = "";
$tamanhoTodosProdutos = "";
$precoTodosProdutos = "";
$nomeTodosProdutos = "";
$fotoTodosProdutos = "";

for($i = 1; $i <= $qtdProdutos; $i++) {
  $idProduto[$i] = $_POST['idProduto' . $i];
  $idTodosProdutos = $idTodosProdutos . $idProduto[$i] . "¬";
  $qtdProduto[$i] = $_POST['qtd' . $idProduto[$i]];
  $qtdTodosProdutos = $qtdTodosProdutos . $qtdProduto[$i] . "¬";
  $tamanhoProduto[$i] = $_POST['tamanhoProduto' . $idProduto[$i]];
  $tamanhoTodosProdutos = $tamanhoTodosProdutos . $tamanhoProduto[$i] . "¬";
  $precoProduto[$i] = $_POST['precoProduto' . $idProduto[$i]];
  $precoTodosProdutos = $precoTodosProdutos . $precoProduto[$i] . "¬";
  $nomeProduto[$i] = $_POST['nomeProduto' . $idProduto[$i]];
  $nomeTodosProdutos = $nomeTodosProdutos . $nomeProduto[$i] . "¬";
  $fotoProduto[$i] = $_POST['fotoProduto' . $idProduto[$i]];
  $fotoTodosProdutos = $fotoTodosProdutos . $fotoProduto[$i] . "¬";
}

echo '<form id="formCarrinho" name="formCarrinho" action="compra.php" method="POST">';
echo '<input type="hidden" name="idTodosProdutos" value="' . $idTodosProdutos . '">';
echo '<input type="hidden" name="qtdTodosProdutos" value="' . $qtdTodosProdutos . '">';
echo '<input type="hidden" name="tamanhoTodosProdutos" value="' . $tamanhoTodosProdutos . '">';
echo '<input type="hidden" name="precoTodosProdutos" value="' . $precoTodosProdutos . '">';
echo '<input type="hidden" name="nomeTodosProdutos" value="' . $nomeTodosProdutos . '">';
echo '<input type="hidden" name="fotoTodosProdutos" value="' . $fotoTodosProdutos . '">';
echo '<input type="hidden" name="valorTotal" value="' . $valorTotal . '">';
echo '</form>';
echo'<script>document.getElementById("formCarrinho").submit()</script>';
?>