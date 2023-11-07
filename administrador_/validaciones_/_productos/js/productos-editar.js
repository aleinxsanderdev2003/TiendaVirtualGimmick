$('#editar_productos').click(function() {

  let id_producto2      = $('#id_producto2').val();
  let nombre         = $('#nombre').val();
  let precio		   = $('#precio').val();
  let referencia     = $('#referencia').val();
  let condicion   = $('#condicion').val();
  let categoria   = $('#categoria').val();
  let descuento   = $('#descuento').val();
  let estrellas   = $('#estrellas').val();
  let resumen     = $('#resumen').val();
  let descripcion   = $('#descripcion').val();
  let stock   = $('#stock').val();

  if (nombre == '') {

   Swal.fire(
    'INGRESA EL NOMBRE DEL PRODUCTO',
    '',
    'warning'
    )

 }else if (precio == '') {

   Swal.fire(
    'INGRESA EL PRECIO DEL PRODUCTO',
    '',
    'warning'
    )

 }else if (referencia == '') {

   Swal.fire(
    'INGRESA LA REFERENCIA DEL PRODUCTO',
    '',
    'warning'
    )

 }else if (condicion == '') {

   Swal.fire(
    'INGRESA LA CONDICIÓN DEL PRODUCTO',
    '',
    'warning'
    )

 }else if (categoria == '') {

   Swal.fire(
    'INGRESA LA CATEGORIA DEL PRODUCTO',
    '',
    'warning'
    )

 }else if (descuento == '') {

   Swal.fire(
    'INGRESA EL DESCUENTO DEL PRODUCTO',
    '',
    'warning'
    )

 }else if (estrellas == '') {

   Swal.fire(
    'INGRESA EL NUMERO DE ESTRELLAS',
    '',
    'warning'
    )

 }else if (resumen == '') {

   Swal.fire(
    'INGRESA UN RESUMEN CORTO',
    '',
    'warning'
    )

 }else if (descripcion == '') {

   Swal.fire(
    'INGRESA LA DESCRIPCIÓN',
    '',
    'warning'
    )

 }else if (stock == '') {

   Swal.fire(
    'INGRESA EL STOCK DEL PRODUCTO',
    '',
    'warning'
    )

 }else{
  $.ajax({
    type: 'POST',
    url: 'validaciones_/_productos/productos-editar',
    data: {id_producto2: id_producto2, nombre: nombre, precio: precio, referencia: referencia, condicion: condicion, categoria: categoria, descuento: descuento, estrellas: estrellas, resumen: resumen, descripcion: descripcion, stock: stock},
    success: function(data){

        //EDITADO CORRECTO
        if (data==0) {

         Swal.fire(
          'PRODUCTO EDITADO CON EXITO',
          'El producto se actualizo con exito',
          'success'
          ).then(function() {
            window.location = "productos";
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