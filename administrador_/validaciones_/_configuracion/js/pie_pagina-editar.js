$('#pie_pagina-editar').click(function() {

  let pie_pagina      = $('#pie_pagina').val();

  if (pie_pagina == '') {

   Swal.fire(
    'INGRESA EL NOMBRE',
    '',
    'warning'
    )

 }else{
  $.ajax({
    type: 'POST',
    url: 'validaciones_/_configuracion/pie_pagina-editar',
    data: {pie_pagina: pie_pagina},
    success: function(data){

        //EDITADO CORRECTO
        if (data==0) {

         Swal.fire(
          'PIE DE PAGINA ACTUALIZADO CON EXITO',
          'El footer fue actualizado en toda la plataforma',
          'success'
          ).then(function() {
            window.location = "pie_pagina";
          });

        }
        //EDITADO CORRECTO

        else{

         Swal.fire(
          'DATOS INCORRECTOS',
          '',
          'error'
          )

       }


     },
   });
}
});