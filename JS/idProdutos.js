var jaAdicionou = false;

$("#adicionarCarrinho").click(function() {
  if (!jaAdicionou) {
    document.getElementById("numItensCarrinho").innerHTML = parseInt(document.getElementById("numItensCarrinho").innerHTML) + 1;
    jaAdicionou = true;
  }
})