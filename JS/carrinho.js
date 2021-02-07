$("#menosQtd").click( function() {

  var valorQtd = document.getElementById("qtd").value;

  if (valorQtd > 1) {
    document.getElementById("qtd").value = parseInt(valorQtd) - 1;
  }

  valorQtd = document.getElementById("qtd").value;

  var valorSubTotal = parseFloat(document.getElementById("valorProduto").innerHTML.substr(3,document.getElementById("valorProduto").lenght).replace(",", "."));
  for (i = 1; i < valorQtd; i++) {
    valorSubTotal += parseFloat(document.getElementById("valorProduto").innerHTML.substr(3,document.getElementById("valorProduto").lenght).replace(",", "."));
  }
  document.getElementById("subtotal").innerHTML = "R$ " + valorSubTotal.toFixed(2).replace(".",",");
  document.getElementById("valorTotal").innerHTML = "R$ " + valorSubTotal.toFixed(2).replace(".",",");
})

$("#maisQtd").click( function() {
  var valorQtd = document.getElementById("qtd").value;
  var valorEstoque = parseInt(document.getElementById("numEstoque").innerHTML.substr(9,1));

  if (valorQtd < valorEstoque) {
    document.getElementById("qtd").value = parseInt(document.getElementById("qtd").value) + 1;
  }

  valorQtd = document.getElementById("qtd").value;

  var valorSubTotal = parseFloat(document.getElementById("valorProduto").innerHTML.substr(3,document.getElementById("valorProduto").lenght).replace(",", "."));
  for (i = 1; i < valorQtd; i++) {
    valorSubTotal += parseFloat(document.getElementById("valorProduto").innerHTML.substr(3,document.getElementById("valorProduto").lenght).replace(",", "."));
  }
  document.getElementById("subtotal").innerHTML = "R$ " + valorSubTotal.toFixed(2).replace(".",",");
  document.getElementById("valorTotal").innerHTML = "R$ " + valorSubTotal.toFixed(2).replace(".",",");
})

function deletaProduto(divProduto) {
  divProduto.parentNode.parentNode.parentNode.remove();
  verificaCarrinho();
}

function verificaCarrinho() {
  document.getElementById("numItensSubtotal").innerHTML = "Subtotal (0 itens)";
  document.getElementById("subtotal").innerHTML = "R$ 00,00";
  document.getElementById("valorTotal").innerHTML = "R$ 00,00";
}

$("#continuarBtn").click(function() {
  if (document.getElementById("tamanhosProduto").value != "") {
    window.location.href = "compra.html";
  } else {
    document.getElementById("validarPag").innerHTML = "<p class='text-light text-center mx-auto'> Por favor, escolha os Tamanhos <p>";
  }
})