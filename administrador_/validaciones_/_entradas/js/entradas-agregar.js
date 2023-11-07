$(document).ready(function(){


  $('#entradas-agregar').click(function(){
    let formData = new FormData();

    let remitente = $('#remitente').val();
    formData.append('remitente',remitente);

    let valor = $('#valor').val();
    formData.append('valor',valor);

    let concepto = $('#concepto').val();
    formData.append('concepto',concepto);

    let telefono = $('#telefono').val();
    formData.append('telefono',telefono);

    let pais = $('#pais').val();
    formData.append('pais',pais);



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
    url: 'validaciones_/_entradas/entradas-agregar',
    type: 'post',
    data: formData,
    contentType: false,
    processData: false,
    success: function(data) {
      parseInt(data);


        //ENTRADA CORRECTO
        if (data==1) {

          Swal.fire(
            'VENTA CREADA CON EXITO',
            '',
            'success'
            ).then(function() {
              window.location = "entradas";
            });

          }
        //ENTRADA CORRECTO



        //ENTRADA INCORRECTA
        else{

          Swal.fire(
            'DATOS INCORRECTOS',
            '',
            'error'
            )
          
        }
        //ENTRADA INCORRECTA

      }
    });
}
});
});

