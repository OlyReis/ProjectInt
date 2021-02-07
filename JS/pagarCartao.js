(function() {
'use strict';
window.addEventListener('load', function() {

var forms = document.getElementsByClassName('needs-validation');

var validation = Array.prototype.filter.call(forms, function(form) {
form.addEventListener('submit', function(event) {
if (form.checkValidity() === false) {
    event.preventDefault();
    event.stopPropagation();
}
form.classList.add('was-validated');
}, false);
});
}, false);
})();

function validaNomes(evt) {
    var Nome = document.getElementById("validationCustomNomeCartao").value;
    document.getElementById("validationCustomNomeCartao").value = Nome.toLowerCase().replace(/(?:^|\s)\S/g, function(a) { return a.toUpperCase(); });
    evt = (evt) ? evt : event;
    var charCode = (evt.charCode) ? evt.charCode : ((evt.keyCode) ? evt.keyCode :
        ((evt.which) ? evt.which : 0));
    if (charCode > 32 && (charCode < 65 || charCode > 90) &&
        (charCode < 97 || charCode > 122)) { 
        return false;
    }
    return true;
}