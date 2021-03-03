function menosQtd($preco, $idProduto) {
  if (document.getElementById("inputQTD" + $idProduto).value > 1) {
    document.getElementById("inputQTD" + $idProduto).value = parseInt(document.getElementById("inputQTD" + $idProduto).value) -1;

    $subTotal = parseFloat(document.getElementById("subtotal").innerHTML.replace(",", ".").substring(3,document.getElementById("subtotal").innerHTML.length));
    $subTotal = $subTotal - $preco;
    $subTotal = $subTotal.toFixed(2);
    document.getElementById("subtotal").innerHTML = "R$ " + $subTotal.toString().replace(".",",");
    document.getElementById("valorTotal").innerHTML = "R$ " + $subTotal.toString().replace(".",",");
    document.getElementById("inputHiddenValorTotal").value = $subTotal;
  }

}

function maisQtd($preco, $idProduto, $estoqueProduto) {
    if (parseInt(document.getElementById("inputQTD" + $idProduto).value) < $estoqueProduto) {
      document.getElementById("inputQTD" + $idProduto).value = parseInt(document.getElementById("inputQTD" + $idProduto).value) + 1;

      $subTotal = parseFloat(document.getElementById("subtotal").innerHTML.replace(",", ".").substring(3,document.getElementById("subtotal").innerHTML.length));
      $subTotal = $subTotal + $preco;
      $subTotal = $subTotal.toFixed(2);
      document.getElementById("subtotal").innerHTML = "R$ " + $subTotal.toString().replace(".",",");
      document.getElementById("valorTotal").innerHTML = "R$ " + $subTotal.toString().replace(".",",");
      document.getElementById("inputHiddenValorTotal").value = $subTotal;
    }
  
}

function deletaProduto(idProduto) {
  window.location = 'acaoDeletaProdutoCarrinho.php?id=' + idProduto;
}