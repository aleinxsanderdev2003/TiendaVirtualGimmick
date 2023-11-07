//--------------------- SELECCIONAR FOTO PRODUCTO ---------------------
$("#imagen").on("change",function(){
  var uploadimagen = document.getElementById("imagen").value;
  var imagen       = document.getElementById("imagen").files;
  var nav = window.URL || window.webkitURL;
  var contactAlert = document.getElementById('form_alert');

  if(uploadimagen !='')
  {
    var type = imagen[0].type;
    var name = imagen[0].name;
    if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png')
    {
      contactAlert.innerHTML = '<p class="errorArchivo">El archivo no es válido.</p>';                        
      $("#img_principal").remove();
      $(".delPhoto_img").addClass('notBlock_img');
      $('#imagen').val('');
      return false;
    }else{  
      contactAlert.innerHTML='';
      $("#img").remove();
      $(".delPhoto_img").removeClass('notBlock_img');
      var objeto_url = nav.createObjectURL(this.files[0]);
      $(".prevPhoto_img").append("<img id='img_principal' src="+objeto_url+">");
      $(".upimg_img label").remove();

    }
  }else{
    alert("No selecciono imagen");
    $("#img_principal").remove();
  }              
});

$('.delPhoto').click(function(){
  $('#imagen').val('');
  $(".delPhoto_img").addClass('notBlock_img');
  $("#img_principal").remove();
});

function guardarImg(element){
  let inputFoto = $(element).val();
  var foto = $(element)[0].files;
  let contador = $(element).attr("group");
  var nav = window.URL || window.webkitURL;

  if(inputFoto !=''){
    var type = foto[0].type;
    var name = foto[0].name;
    if(type != 'image/jpeg' && type != 'image/jpg' && type != 'image/png'){
      $('#img').remove();
      $(`#del${contador}`).addClass('notBlock');
      $('#foto').val('');
      return false;
    }else{  
      $(`#img`).remove();
      $(`#del${contador}`).removeClass('notBlock');
      var objeto_url = nav.createObjectURL(element.files[0]);
      $(`#prev${contador}`).append(`<img class="zoom" name='${name}' id='img${contador}' src=`+objeto_url+`>`);
      $(`.upimg label`).remove();  
    }
  }else{
    alert("No selecciono foto");
    $(`img${contador}`).remove();
  }
}

function eliminarImg(element){
  let contador = $(element).attr("groupid");

  $(`.delPhoto`).click(function(){
    $(`#foto${contador}`).val('');
    $(`#del${contador}`).addClass('notBlock');
    $(`#img${contador}`).remove();
  });
}


$(document).ready(function(){

  var contador = 0;
  $('#agregar_foto').click(function(){
    contador++;
    $('.mostrar_foto').append(`
      <div class="col-sm-3">
      <center>
      <div class="form-group">
      <div class="photo">
      <label for="foto">Imagen ${contador}</label>
      <div class="prevPhoto" id="prev${contador}">
      <span class="delPhoto notBlock" groupid="${contador}" id="del${contador}" onclick="eliminarImg(this)">X</span>
      <label class="labelZoom" for="foto${contador}"></label>
      </div>
      <div class="upimg" id="up${contador}">
      <input type="file" name="foto[]" onchange="guardarImg(this)" group="${contador}" id="foto${contador}";>
      </div>
      </div>        
      </div> 
      </center>
      </div>  
      `);
  });

  $('#agregar_productos').click(function(){
    arrayFoto = [];
    arrayOrden = [];

    $('.mostrar_foto').each(function(index2) {
      $('.mostrar_foto div center').each(function(index2) {
        arrayFoto.push($(this).children(".form-group").children(".photo").children("div.upimg").children("input")[0].files[0]);
        arrayOrden.push($(this).children(".form-group").children(".photo").children("div.prevPhoto").children("span").attr('groupid'));
      });
    });

    let formData = new FormData();

    let nombre = $('#nombre').val();
    formData.append('nombre',nombre);

    let precio = $('#precio').val();
    formData.append('precio',precio);

    let referencia = $('#referencia').val();
    formData.append('referencia',referencia);

    let condicion = $('#condicion').val();
    formData.append('condicion',condicion);

    let categoria = $('#categoria').val();
    formData.append('categoria',categoria);

    let descuento = $('#descuento').val();
    formData.append('descuento',descuento);

    let estrellas = $('#estrellas').val();
    formData.append('estrellas',estrellas);

    let resumen = $('#resumen').val();
    formData.append('resumen',resumen);

    let descripcion = $('#descripcion').val();
    formData.append('descripcion',descripcion);

    let stock = $('#stock').val();
    formData.append('stock',stock);


    for(let foto of arrayFoto){
      formData.append('foto[]', foto);
    }
    for(let orden of arrayOrden){
      formData.append('groupid[]', orden);
    }
    let codigo = /^[^%$&/#]*$/;


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
      'INGRESA EL REFERENCIA DEL PRODUCTO',
      '',
      'warning'
      )

  }else if (condicion == '') {

    Swal.fire(
      'INGRESA EL CONDICIÓN DEL PRODUCTO',
      '',
      'warning'
      )

  }else if (categoria == '') {

    Swal.fire(
      'INGRESA EL CATEGORIA DEL PRODUCTO',
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
      'INGRESA EL ESTRELLAS DEL PRODUCTO',
      '',
      'warning'
      )

  }else if (resumen == '') {

    Swal.fire(
      'INGRESA EL RESUMEN DEL PRODUCTO',
      '',
      'warning'
      )

  }else if (descripcion == '') {

    Swal.fire(
      'INGRESA EL DESCRIPCIÓN DEL PRODUCTO',
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
      url: 'validaciones_/_productos/productos-agregar',
      type: 'post',
      data: formData,
      contentType: false,
      processData: false,
      success: function(data) {
        parseInt(data);


        //REGISTRO CORRECTO
        if (data==0) {

         Swal.fire(
          'PRODUCTO CREADA CON EXITO',
          'El producto se agrego con exito',
          'success'
          ).then(function() {
            window.location = "productos";
          });

        }
        //REGISTRO CORRECTO

        else{

         Swal.fire(
          'DATOS INCORRECTOS',
          '',
          'error'
          )
       }

     }
   });
  }
});
});

