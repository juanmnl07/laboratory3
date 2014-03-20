$(document).ready(function(){

     $("#myCarousel").carousel({
         interval : 3000,
         pause: "hover"
     });

    $('#formulario_contacto').validate({
    rules: {
        e_mail: {
            email: true,
            required: true
        },
        apellidos: {
            required: true
        },
        nombre: {
            required: true
        },
        motivo: {
            required: true
        },
        mensaje: {
            required: true
        }
    }

    });
});