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

  var textoDescricaoProdutoInsert = "<p style='line-height: 1;'>Tênis masculino para Caminhada Leve. É um produto que não só é direcionado as atividades físicas no caso da academia, caminhada, corrida, mas também para o trabalho e para o conforto do seu dia a dia. É importante ter um tênis para caminhada leve para que suas qualidades te favoreçam a ter o melhor desempenho. O tênis masculino para caminhada leve te proporciona essa qualidade por ter a sola de micro expandido, um material reconhecido como preferencial para atividades físicas.</p><p style='line-height: 1;'><br></p><p style='line-height: 1;'>MATERIAL DO TÊNIS PARA CAMINHADA MASCULINO</p><p style='line-height: 1;'>O nylon oferece resistência ao impacto, baixo peso específico, alta maleabilidade e baixa absorção.</p><p style='line-height: 1;'>O seu detalhe é de pvc, dando mais reforço e durabilidade para o calçado.</p><p style='line-height: 1;'>O poliéster é fácil para lavar e secar, ótima durabilidade e retenção de cor do tênis para caminhada masculino.</p><p style='line-height: 1;'>O micro expandido é um material adequado para solados com a função de praticar atividades ao ar livre.</p><p style='line-height: 1;'>O EVA é conhecido como um dos materiais mais leves e macios para palmilhas e o mais utilizado em tênis.</p><p style='line-height: 1;'><br></p><p style='line-height: 1;'>MEDIDAS DE TAMANHO DA PALMILHA</p><p style='line-height: 1;'>Numero 38&nbsp; 25,60 a 26,10 cms</p><p style='line-height: 1;'>Numero 39 - 26,20 a 26,90 cms</p><p style='line-height: 1;'>Numero 40 - 27,00 a 27,50 cms</p><p style='line-height: 1;'>Numero 41 - 27,60 a 28,00 cms</p><p style='line-height: 1;'>Numero 42 - 28,10 a 28,70 cms</p><p style='line-height: 1;'>Numero 43 - 29,00 a 29,70 cms</p><p style='line-height: 1;'>Numero 44 - 29,80 a 30,20 cms</p><p style='line-height: 1;'><br></p><p style='line-height: 1;'>TENIS DE ACADEMIA MASCULINO PARA CAMINHADA - DICA DE TAMANHO</p><p style='line-height: 1;'>Este modelo calça justo aos pés, no entanto ele terá que ser uma numeração maior do que normalmente você usa. Ex: Se você calça o número 40, o ideal seria o número 41.</p><p style='line-height: 1;'><br></p><p style='line-height: 1;'>DURABILIDADE E ESTABILIDADE QUE VOCÊ PRECISA TER</p><p style='line-height: 1;'>A durabilidade é um fator indispensável no calçado e o tênis para caminhada leve não deixa a desejar, com o material do cabedal feito de nylon e costura reforçada, fazem com que o tênis não desgaste rápido, assim podendo te servir com todos os benefícios por um longo prazo. O solado de micro expandido traz uma estabilidade que mantém os pés firmes ao solo proporcionando o máximo de desempenho esportivo.</p>";
  $('#textArea').summernote('pasteHTML', textoDescricaoProdutoInsert);
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