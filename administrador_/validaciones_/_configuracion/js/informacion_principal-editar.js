$('#informacion_principal-editar').click(function() {

  let telefono      = $('#telefono').val();
  let correo      = $('#correo').val();
  let direccion      = $('#direccion').val();

  if (telefono == '') {

   Swal.fire(
    'INGRESA EL TELEFONO',
    '',
    'warning'
    )

 }else if (correo == '') {

   Swal.fire(
    'INGRESA EL CORREO',
    '',
    'warning'
    )

 }else if (direccion == '') {

   Swal.fire(
    'INGRESA LA DIRECCIÓN',
    '',
    'warning'
    )

 }else{
  $.ajax({
    type: 'POST',
    url: 'validaciones_/_configuracion/informacion_principal-editar',
    data: {telefono: telefono, correo: correo, direccion: direccion },
    success: function(data){

        //EDITADO CORRECTO
        if (data==0) {

         Swal.fire(
          'INFORMACIÓN ACTUALIZADO CON EXITO',
          'La información fue actualizada en toda la plataforma',
          'success'
          ).then(function() {
            window.location = "informacion_principal";
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