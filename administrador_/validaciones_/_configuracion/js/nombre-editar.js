$('#nombre-editar').click(function() {

  let nombre      = $('#nombre').val();

  if (nombre == '') {

   Swal.fire(
    'INGRESA EL NOMBRE',
    '',
    'warning'
    )

 }else{
  $.ajax({
    type: 'POST',
    url: 'validaciones_/_configuracion/nombre-editar',
    data: {nombre: nombre},
    success: function(data){

        //EDITADO CORRECTO
        if (data==0) {

         Swal.fire(
          'NOMBRE ACTUALIZADO CON EXITO',
          'El nombre fue actualizado en toda la plataforma',
          'success'
          ).then(function() {
            window.location = "nombre";
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