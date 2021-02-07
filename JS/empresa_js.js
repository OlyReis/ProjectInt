const day = 24 * 60 * 60 * 1000;
var data = new Date();
var dataAtual = new Date(data.getFullYear(), data.getMonth()+1, data.getDate());

function contaData(ano, mes, dia) {
  var dataCliente = new Date(ano, mes, dia)
  var mlsAtual = dataAtual.getTime();
  var mlsDataCliente = dataCliente.getTime();
  var difDias = mlsAtual - mlsDataCliente;
  var qtdDays = difDias / day;
  if (qtdDays <= 31) {
    if (qtdDays == 1) {
      return "Há " + qtdDays + " dia";
    } else {
      return "Há " + qtdDays + " dias";
    }   
  } else {
    var difMeses = ((data.getMonth() + 1) + 12 * data.getFullYear()) - (mes + 12 * ano);
    if (difMeses == 1) {
      return "Há " + difMeses + " mês";
    } else if (difMeses >= 2 && difMeses <= 12){
      return "Há " + difMeses + " meses";
    } else {
      var difAnos = data.getFullYear() - ano;
      if (difAnos == 1) {
        return "Há " + difAnos + " ano";
      } else {
        return "Há " + difAnos + " anos";
      } 
    }
  }
}

document.getElementById("cliente1").innerHTML += contaData(2019,9,13);
document.getElementById("cliente2").innerHTML += contaData(2020,11,9);
document.getElementById("cliente3").innerHTML += contaData(2017,9,21);
document.getElementById("cliente4").innerHTML += contaData(2020,4,16);