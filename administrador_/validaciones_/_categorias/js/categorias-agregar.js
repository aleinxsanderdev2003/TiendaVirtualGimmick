$(document).ready(function(){


  $('#categorias-agregar').click(function(){
    let formData = new FormData();

    let nombre = $('#nombre').val();
    formData.append('nombre',nombre);



    if (nombre == '') {

      Swal.fire(
        'INGRESA EL NOMBRE',
        '',
        'warning'
        )

    }else{
      $.ajax({
        url: 'validaciones_/_categorias/categorias-agregar',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          parseInt(data);


        //CATEGORIA CORRECTA
        if (data==1) {

         Swal.fire(
          'CATEGORIA CREADA CON EXITO',
          '',
          'success'
          ).then(function() {
            window.location = "categorias";
          });

        }
        //CATEGORIA CORRECTO



        //CATEGORIA INCORRECTA
        else{
         
         Swal.fire(
          'DATOS INCORRECTOS',
          '',
          'error'
          )
         
       }
        //CATEGORIA INCORRECTA

      }
    });
    }
  });
});

