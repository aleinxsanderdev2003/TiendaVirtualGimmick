$(document).ready(function(){


  $('#sign_up2').click(function(){
    let formData = new FormData();

    let nombre_two2 = $('#nombre_two2').val();
    formData.append('nombre_two2',nombre_two2);

    let apellido_two2 = $('#apellido_two2').val();
    formData.append('apellido_two2',apellido_two2);

    let correo_two2 = $('#correo_two2').val();
    formData.append('correo_two2',correo_two2);

    let telefono_two2 = $('#telefono_two2').val();
    formData.append('telefono_two2',telefono_two2);

    let direccion_two2 = $('#direccion_two2').val();
    formData.append('direccion_two2',direccion_two2);

    let dire2_two2 = $('#dire2_two2').val();
    formData.append('dire2_two2',dire2_two2);

    let clave_two2 = $('#clave_two2').val();
    formData.append('clave_two2',clave_two2);

    let departamento_two2 = $('#departamento_two2').val();
    formData.append('departamento_two2',departamento_two2);


    if (nombre_two2 == '') {

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

    }else if (apellido_two2 == '') {

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

    }else if (correo_two2 == '') {

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

    }else if($("#correo_two2").val().indexOf('@', 0) == -1 || $("#correo_two2").val().indexOf('.', 0) == -1){

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

    }else if (direccion_two2 == '') {

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
      title: 'INGRESA TU DIRECCIÓN DE ENVIO'
    });

   }else if (telefono_two2 == '') {

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

   }else if (departamento_two2 == '') {

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
      title: 'INGRESA TU DEPARTAMENTO'
    });

  }else if (clave_two2 == '') {

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
      url: 'validaciones_/sign_up2',
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
          window.location = "user_/checkout";
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

