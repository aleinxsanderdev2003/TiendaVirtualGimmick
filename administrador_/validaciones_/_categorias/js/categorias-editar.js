$('#categorias-editar').click(function() {

  let id_categoria = $('#id_categoria').val();

  let nombre = $('#nombre').val();


  if (nombre == '') {

   Swal.fire(
    'INGRESA EL NOMBRE',
    '',
    'warning'
    )

 }else{
  $.ajax({
    type: 'POST',
    url: 'validaciones_/_categorias/categorias-editar',
    data: {id_categoria: id_categoria, nombre: nombre},
    success: function(data){

        //EDITADO CORRECTO
        if (data==0) {


         Swal.fire(
          'LA CATEGORIA SE EDITO CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "categorias";
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