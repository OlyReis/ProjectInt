var textoTextArea = "";

(function() {
  'use strict';
  window.addEventListener('load', function() {

    var forms = document.getElementsByClassName('needs-validation');

    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        } else {

          textoTextArea = $("#textArea").summernote("code");
          console.log(textoTextArea);

        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();

function apenasLetras(evt) {
  evt = (evt) ? evt : event;
  var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
    ((evt.which) ? evt.which : 0));
  if (charCode > 32 && (charCode < 65 || charCode > 90) &&
    (charCode < 97 || charCode > 122)) {   
    return false;
}
return true;
}

$(document).ready(function($){
  $("#precoProduto").maskMoney({prefix:'R$ ', allowNegative: true, thousands:'', decimal:',', affixesStay: true});
  $('#textArea').summernote({
    toolbar: [
    ['style', ['bold', 'italic', 'underline', 'clear']],
    ['fontsize', ['fontsize']],
    ['height', ['height']]
    ],
    fontSizes: ['8', '9', '10', '11', '12', '14', '16', '18', '20'],
    placeholder: 'Digite uma nova Descrição do Produto'

  });
  $('#textArea').summernote('lineHeight', 1);
})

$("#numTamanhos").keyup(function() {
  var dataMaskTamanhos = "";
  var numTamanhos = parseInt(document.getElementById("numTamanhos").value);
  for (i = 1; i <= numTamanhos; i++) {
    if (i != numTamanhos) {
      dataMaskTamanhos += "00,";
    } else {
      dataMaskTamanhos += "00";
    }
  }
  $("#tamanhosProduto").mask(dataMaskTamanhos);
  $("#tamanhosProduto").attr("placeholder", dataMaskTamanhos);
})

$("#tamanhosProduto").keyup(function() {
  if (document.getElementById("numTamanhos").value == "") {
    document.getElementById("tamanhosProduto").value = "";
  }
})