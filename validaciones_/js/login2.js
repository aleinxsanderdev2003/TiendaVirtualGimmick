$(document).ready(function(){


	$('#login2').click(function(){
		let formData = new FormData();
		let correo_one2 = $('#correo_one2').val();
		let clave_one2 = $('#clave_one2').val();
		formData.append('clave_one2',clave_one2);
		formData.append('correo_one2',correo_one2);

		if (correo_one2 == '') {

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

		}else if($("#correo_one2").val().indexOf('@', 0) == -1 || $("#correo_one2").val().indexOf('.', 0) == -1){

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

		}else if (clave_one2 == '') {

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
				url: 'validaciones_/login2',
				type: 'post',
				data: formData,
				contentType: false,
				processData: false,
				success: function(data) {
					parseInt(data);

        //LOGIN ADMIN
        if (data==0) {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                type: 'success',
                title: 'INGRESANDO A TU CUENTA'
            }).then(function() {
             window.location = "administrador_/index";
         });

        }
        //LOGIN ADMIN


        //LOGIN USUARIO
        else if (data==1) {

         const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        })

         Toast.fire({
            type: 'success',
            title: 'INGRESANDO A TU CUENTA'
        }).then(function() {
            window.location = "user_/checkout";
        });

    }
        //LOGIN USUARIO


        //CUENTA DESACTIVADA
        else if (data==2) {

            const Toast = Swal.mixin({
                toast: true,
                position: 'top-end',
                showConfirmButton: false,
                timer: 2000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.addEventListener('mouseenter', Swal.stopTimer)
                    toast.addEventListener('mouseleave', Swal.resumeTimer)
                }
            })

            Toast.fire({
                type: 'info',
                title: 'ESTA CUENTA SE ENCUENTRA DESACTIVADA'
            });

        }
        //CUENTA DESACTIVADA

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

