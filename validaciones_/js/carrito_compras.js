$(document).ready(function(){


  $('#agregar_carrito').click(function(){
    let formData = new FormData();

    let cantidad = $('#cantidad').val();
    formData.append('cantidad',cantidad);

    let id_producto = $('#id_producto').val();
    formData.append('id_producto',id_producto);

    if (cantidad == '') {
      const Toast = Swal.mixin({
       toast: true,
       position: 'top-end',
       showConfirmButton: false,
       timer: 3000,
       timerProgressBar: true,
       didOpen: (toast) => {
         toast.addEventListener('mouseenter', Swal.stopTimer)
         toast.addEventListener('mouseleave', Swal.resumeTimer)
       }
     })

      Toast.fire({
       type: 'info',
       title: 'Ingresa la cantidad'
     });

    }else{
      $.ajax({
        url: 'validaciones_/carrito_compras',
        type: 'post',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          parseInt(data);


        //PRODUCTO YA AGREGADA
        if (data==0) {

          const Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 3000,
           timerProgressBar: true,
           didOpen: (toast) => {
             toast.addEventListener('mouseenter', Swal.stopTimer)
             toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
         })

          Toast.fire({
           type: 'info',
           title: 'PRODUCTO YA AGREGADO EN TU CARRITO' 
         });
        }
        //PRODUCTO YA AGREGADA


        //AGREGADO CORRECTO
        else if (data==1) {

          Swal.fire(
            'PRODUCTO AGREGADO',
            'TU PRODUCTO HA SIDO AGREGADO EN EL CARRITO SATISFACTORIAMENTE',
            'success'
            )
        }
        //AGREGADO CORRECTO


        //SIN STOCK
        else if (data==2) {

          Swal.fire(
            'SIN STOCK',
            'NO HAY LA CANTIDAD REQUERIDA DE ESTE PRODUCTO',
            'info'
            )
        }
        //SIN STOCK


        //PRODUCTO INCORRECTA
        else{
          const Toast = Swal.mixin({
           toast: true,
           position: 'top-end',
           showConfirmButton: false,
           timer: 3000,
           timerProgressBar: true,
           didOpen: (toast) => {
             toast.addEventListener('mouseenter', Swal.stopTimer)
             toast.addEventListener('mouseleave', Swal.resumeTimer)
           }
         })

          Toast.fire({
            type: 'error',
            title: 'ERROR COMUNICATE CON SOPORTE'
          });
        }
        //PRODUCTO INCORRECTA

      }
    });
    }
  });
});

