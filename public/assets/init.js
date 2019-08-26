

$('.ui.form')
    .form({
        nombre: {
            identifier: 'name',
            rules: [
                {
                    type: 'empty',
                    prompt: 'Por favor introdusca su Nombre'
                }
            ]
        },

        apaterno: {
            identifier: 'apaterno',
            rules: [
                {
                    type: 'empty',
                    prompt: 'Por favor introdusca su Apellido Paterno'
                }
            ]
        },

        amaterno: {
            identifier: 'amaterno',
            rules: [
                {
                    type: 'empty',
                    prompt: 'Por favor introdusca su Apellido Materno'
                }
            ]
        },

        telefono: {
            identifier: 'tel',
            rules: [
                {
                    type: 'empty',
                    prompt: 'Por favor introdusca su Numero de telefono '
                }
            ]
        },

        mail: {
            identifier: 'mail',
            rules: [
                {
                    type: 'email',
                    prompt: 'Por favor introdusca su Email Valido'

                }
            ]
        },

        password: {
            identifier: 'pass',
            rules: [
                {
                    type: 'empty',
                    prompt: 'Por favor su Contrasenia'
                }
            ]
        }

    });





$('.ui.dropdown')
  .dropdown();

$('.ui.radio.checkbox')
  .checkbox();

$(document).ready(
        function () {
            $('.ui.checkbox')
                    .checkbox();
     



  });






