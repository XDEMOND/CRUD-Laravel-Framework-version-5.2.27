$(document).on("ready",function(){
	$('.dropdown').dropdown({
	    // you can use any ui transition
	    transition: 'drop'
	});
});


$('.ui.dropdown')
  .dropdown();

$('.ui.radio.checkbox')
  .checkbox()
;

$(document).ready(
        function () {
            $('.ui.checkbox')
                    .checkbox()
                    ;
     


$('.ui.form')
  .form({
    nombre: {
      identifier  : 'nombre',
      rules: [
        {
          type   : 'empty',
          prompt : 'Por favor introdusca su nombre'
        }
      ]
    },
    apellidop: {
      identifier  : 'nombre2',
      rules: [
        {
          type   : 'empty',
          prompt : 'Por favor introdusca su apellido paterno'
        }
      ]
    },
    apellidom: {
      identifier : 'apellidom',
      rules: [
        {
          type   : 'empty',
          prompt : 'Por favor introdusca su apellido materno'
        }
      ]
    },
   
    edad: {
      identifier : 'edad',
      rules: [
        {
          type   : 'empty',
          prompt : 'Por favor introdusca su edad'
        }
      ]
    },

     telefono: {
      identifier : 'telefono',
      rules: [
        {
          type   : 'empty',
          prompt : 'Por favor introdusca su numero de telefono'
        }
      ]
    },


    
    pais: {
      identifier : 'pais',
      rules: [
        {
          type   : 'empty',
          prompt : 'Por favor seleccione su pais'
        }
      ]
    },


     terms: {
      identifier : 'terms',
      rules: [
        {
          type   : 'checked',
          prompt : 'Por favor acepte los terminos y condiciones'
        }
      ]
    },
  

  }, 
  {
    inline : true,
    on     : 'blur',
    
  });

   });



