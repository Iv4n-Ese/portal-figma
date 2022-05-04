$(document).ready(function() {
          
    jQuery.extend(jQuery.validator.messages, {
        debug: true,
        success: "valid",
        required: "Este campo es obligatorio.",
        remote: "Por favor, rellena este campo.",
        email: "Por favor, escribe una dirección de correo válida",
      });
  
    $("#formularioValidacion").validate({
        lang: 'es', // as the filename ends        
        rules: {
            email: {
              required: true,
              email: true
            }
          }
        
    });        
        
});
