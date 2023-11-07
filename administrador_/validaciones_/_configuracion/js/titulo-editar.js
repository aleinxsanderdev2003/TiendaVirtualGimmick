$('#titulo-editar').click(function() {

  let titulo      = $('#titulo').val();

  if (titulo == '') {

   Swal.fire(
    'INGRESA EL TITULO',
    '',
    'warning'
    )

 }else{
  $.ajax({
    type: 'POST',
    url: 'validaciones_/_configuracion/titulo-editar',
    data: {titulo: titulo},
    success: function(data){

        //EDITADO CORRECTO
        if (data==0) {

         Swal.fire(
          'TITULO ACTUALIZADO CON EXITO',
          'El titulo fue actualizado en toda la plataforma',
          'success'
          ).then(function() {
            window.location = "titulo";
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