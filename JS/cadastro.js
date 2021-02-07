ativaKeyUpFunctions = false;

//VERIFICA ENVIO DO FORMULÁRIO
(function() {
'use strict';
window.addEventListener('load', function() {

var forms = document.getElementsByClassName('needs-validation');

var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if ((form.checkValidity() === false) || (document.getElemementById("validationCustomData").innerHTML != "") 
  || (document.getElementById("validationCustomSenha").innerHTML != "")) {
    event.preventDefault();
    event.stopPropagation();
    ativaKeyUpFunctions = true;
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();

//DATE PICKER
$(document).ready(function(){
  var data = new Date();
  var date_input=$('input[name="date"]'); //our date input has the name "date"
  var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
  var options={
    dateFormat: 'dd/mm/yy',
    container: container,
    changeYear: true,
    changeMonth: true,
    todayHighlight: true,
    autoclose: true,
    dayNames: ['Domingo', 'Segunda', 'Terça', 'Quarta', 'Quinta', 'Sexta', 'Sábado'],
    dayNamesMin: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb'],
    dayNamesShort: ['Dom', 'Seg', 'Ter', 'Qua', 'Qui', 'Sex', 'Sáb', 'Dom'],
    monthNamesShort: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    monthNames: ['Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'],
    maxDate: new Date(data.getFullYear()-18,data.getMonth(),data.getDate()),
    minDate: new Date(data.getFullYear()-100,11,12),
    yearRange: (data.getFullYear()-100) +  ":2002",
    buttonImage: "Img/blue-calendar-icon.png",
    buttonImageOnly: true,
    showOn: "button",
  };
  date_input.datepicker(options);
})


$("#btnCadastrar").click(validaSenhas);

setInterval(function() { 
  if (ativaKeyUpFunctions == true) {
    validaData();
  }
},50);
$("#validationCustomSenha").keyup(function() {
  if (ativaKeyUpFunctions == true) {
    validaSenhas();
  }
});
$("#validationCustomConfirmaSenha").keyup(function() {
  if (ativaKeyUpFunctions == true) {
    validaSenhas();
  }
});

function validaData() {
  
  var data = document.getElementById("validationCustomData").value;
  var dataAtual = new Date();

  var dia = data.substring(0,2);
  var mes = data.substring(3,5);
  var ano = data.substring(6,10);

  var novaData = new Date(ano,(mes-1),dia);

  var mesmoDia = parseInt(dia,10) == parseInt(novaData.getDate());
  var mesmoMes = parseInt(mes,10) == parseInt(novaData.getMonth())+1;
  var mesmoAno = parseInt(ano) == parseInt(novaData.getFullYear());

  if (!((mesmoDia) && (mesmoMes) && (mesmoAno) && (ano.length == 4)) || (novaData > dataAtual))
  {
    document.getElementById("datainvalida").innerHTML = "Por favor insira uma data válida.";
    document.getElementById("datainvalida2").innerHTML = "Por favor insira uma data válida.";
    $("#validationCustomData").css("border-color", "#dc3545");              
  } else {
    $("#validationCustomData").css("border-color", "#28a745");
    document.getElementById("datainvalida").innerHTML = "";
   document.getElementById("datainvalida2").innerHTML = "";
  }
}

function validaSenhas() {
  var senha1 = document.getElementById("validationCustomSenha").value;
  var senha2 = document.getElementById("validationCustomConfirmaSenha").value;
  if ((senha1 == senha2) && (senha1 != "")){
    console.log("senha igual");
    $("#validationCustomSenha").css("border-color", "#28a745");
    $("#validationCustomConfirmaSenha").css("border-color", "#28a745");
    document.getElementById("senhainvalida").innerHTML = "";
    document.getElementById("senhainvalida2").innerHTML = "";
    document.getElementById("senhaconfirmainvalida").innerHTML = "";
    document.getElementById("senhaconfirmainvalida2").innerHTML = "";
  } else {
    console.log("senha diferente");
    document.getElementById("senhainvalida").innerHTML = "Por favor insira uma Senha válida.";
    document.getElementById("senhainvalida2").innerHTML = "Por favor insira uma Senha válida.";
    document.getElementById("senhaconfirmainvalida").innerHTML = "Por favor insira uma Senha válida.";
    document.getElementById("senhaconfirmainvalida2").innerHTML = "Por favor insira uma Senha válida.";
    $("#validationCustomSenha").css("border-color", "#dc3545");
    $("#validationCustomConfirmaSenha").css("border-color", "#dc3545");
  }
}

function validaNomes(evt) {
    var Nome = document.getElementById("validationCustomNome").value;
    document.getElementById("validationCustomNome").value = Nome.toLowerCase().replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
    var Nome = document.getElementById("validationCustomSobrenome").value;
    document.getElementById("validationCustomSobrenome").value = Nome.toLowerCase().replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 32 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) { 
        return false;
    }
    return true;
}