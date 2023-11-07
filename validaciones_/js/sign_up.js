$(document).ready(function(){


  $('#sign_up').click(function(){
    let formData = new FormData();

    let nombre_two = $('#nombre_two').val();
    formData.append('nombre_two',nombre_two);

    let apellido_two = $('#apellido_two').val();
    formData.append('apellido_two',apellido_two);

    let correo_two = $('#correo_two').val();
    formData.append('correo_two',correo_two);

    let telefono_two = $('#telefono_two').val();
    formData.append('telefono_two',telefono_two);

    let clave_two = $('#clave_two').val();
    formData.append('clave_two',clave_two);


    if (nombre_two == '') {

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
        type: 'warning',
        title: 'INGRESA TU NOMBRE'
      });

    }else if (apellido_two == '') {

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
        type: 'warning',
        title: 'INGRESA TU APELLIDO'
      });

    }else if (correo_two == '') {

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
        type: 'warning',
        title: 'INGRESA TU CORREO'
      });

    }else if($("#correo_two").val().indexOf('@', 0) == -1 || $("#correo_two").val().indexOf('.', 0) == -1){

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
        type: 'warning',
        title: 'INGRESA UN CORREO VALIDO'
      });  

    }else if (telefono_two == '') {

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
      type: 'warning',
      title: 'INGRESA TU TELEFONO'
    });

   }else if (clave_two == '') {

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
      type: 'warning',
      title: 'INGRESA TU CONTRASEÑA'
    });

   }else{
    $.ajax({
      url: 'validaciones_/sign_up',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);

        //CORREO INCORRECTA
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
          title: 'EL CORREO INGRESADO YA ESTA EN USO'
        });

       }
        //CORREO INCORRECTA


        //REGISTRO CORRECTO
        else if (data==1) {

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
          type: 'success',
          title: 'CUENTA CREADA CON EXITO'
        }).then(function() {
          window.location = "index";
        });

      }
        //REGISTRO CORRECTO


        //CUENTA INCORRECTA
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
           title: 'CORREO/CONTRASEÑA INCORRECTOS'
         });
        }
        //CUENTA INCORRECTA

      }
    });
  }
});
});

