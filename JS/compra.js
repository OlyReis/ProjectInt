$(document).ready(function(){
  const monthNames = ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho",
  "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"
  ];
  var dataAtual = new Date();
  var qtdDiasMesAtual = new Date(dataAtual.getFullYear(),dataAtual.getMonth()+1,0);

  if (dataAtual.getDate() + 7 > qtdDiasMesAtual.getDate()) {
    if (dataAtual.getDate() + 3 > qtdDiasMesAtual.getDate()) {
      document.getElementById("opcaoEnvio1").innerHTML += ((dataAtual.getDate() + 3) - (qtdDiasMesAtual.getDate())) + " e " + ((dataAtual.getDate() + 7) - (qtdDiasMesAtual.getDate())) + " de " + (monthNames[dataAtual.getMonth()+1]);
    } else {
      document.getElementById("opcaoEnvio1").innerHTML += (dataAtual.getDate() + 3) + " de " + (monthNames[dataAtual.getMonth()]) +  " e " + ((dataAtual.getDate() + 7) - (qtdDiasMesAtual.getDate())) + " de " + (monthNames[dataAtual.getMonth()+1]);
    }
  } else {
    document.getElementById("opcaoEnvio1").innerHTML += (dataAtual.getDate() + 3) + " e " + (dataAtual.getDate() + 7) + " de " + (monthNames[dataAtual.getMonth()]);
  }

  if (dataAtual.getDate() + 15 > qtdDiasMesAtual.getDate()) {
    if (dataAtual.getDate() + 9 > qtdDiasMesAtual.getDate()) {
      document.getElementById("opcaoEnvio2").innerHTML += ((dataAtual.getDate() + 9) - (qtdDiasMesAtual.getDate())) + " e " + ((dataAtual.getDate() + 15) - (qtdDiasMesAtual.getDate())) + " de " + (monthNames[dataAtual.getMonth()+1]);
    } else {
      document.getElementById("opcaoEnvio2").innerHTML += (dataAtual.getDate() + 9) + " de " + (monthNames[dataAtual.getMonth()]) +  " e " + ((dataAtual.getDate() + 15) - (qtdDiasMesAtual.getDate())) + " de " + (monthNames[dataAtual.getMonth()+1]);
    }
  } else {
    document.getElementById("opcaoEnvio2").innerHTML += (dataAtual.getDate() + 9) + " e " + (dataAtual.getDate() + 15) + " de " + (monthNames[dataAtual.getMonth()]);
  }
})

var valorTotal = parseFloat(document.getElementById("valorTotal").innerHTML.substr(3,document.getElementById("subtotal").lenght).replace(",", "."));

$("#radioOpcaoEnvio1").click(function() {
  document.getElementById("valorTotal").innerHTML = "R$ " + (valorTotal + 22.50).toFixed(2).replace(".",",");
})

$("#radioOpcaoEnvio2").click(function() {
  document.getElementById("valorTotal").innerHTML = "R$ " + (valorTotal - 4.90).toFixed(2).replace(".",",");
})

$("#continuarBtn").click(function() {
  if (($("#radioOpcaoEnvio1").prop("checked") || $("#radioOpcaoEnvio2").prop("checked")) && ($("#radioOpcaoPagamento1").prop("checked") || $("#radioOpcaoPagamento2").prop("checked"))) {
    window.location.href = "login.html";
  } else {
    document.getElementById("validarPag").innerHTML = "<p class='text-light text-center mx-auto'> Por favor, escolha as opções <p>";
  }
})