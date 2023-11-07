$('#entradas-editar').click(function() {

  let id_entrada = $('#id_entrada').val();

  let remitente = $('#remitente').val();

  let valor = $('#valor').val();

  let concepto = $('#concepto').val();

  let telefono = $('#telefono').val();

  let pais = $('#pais').val();

  let estado = $('#estado').val();

  if (remitente == '') {

   Swal.fire(
    'INGRESA EL REMITENTE',
    '',
    'warning'
    )

 }else if (valor == '') {

   Swal.fire(
    'INGRESA EL VALOR',
    '',
    'warning'
    )

 }else if (concepto == '') {

   Swal.fire(
    'INGRESA EL CONCEPTO',
    '',
    'warning'
    )

 }else if (telefono == '') {

   Swal.fire(
    'INGRESA EL TELEFONO',
    '',
    'warning'
    )

 }else if (pais == '') {

   Swal.fire(
    'INGRESA EL PAIS',
    '',
    'warning'
    )

 }else{
  $.ajax({
    type: 'POST',
    url: 'validaciones_/_entradas/entradas-editar',
    data: {id_entrada: id_entrada, remitente: remitente, valor: valor, concepto: concepto, telefono: telefono, pais: pais, estado: estado},
    success: function(data){

        //EDITADO CORRECTO
        if (data==0) {

         Swal.fire(
          'LA VENTA SE EDITO CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "entradas";
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