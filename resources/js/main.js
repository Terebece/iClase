
// let jqueryvalidation = require('jquery-validation');

//     $("#form_registro  ").validate();

console.log("aquí estoy!");


$('.check input:checkbox').click(function() {
    $('.check input:checkbox').not(this).prop('checked', false);
}); 