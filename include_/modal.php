<?php 

require("conexion_/conexion.php");
$sql="SELECT color FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
  $color=$row[0];
}

?>

<div class="modal fade" id="login_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>INICIAR SESIÓN</b></h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <label><b>Correo electrónico</b></label>
            <input type="email" class="form-control" id="correo_one" style="border: 1px solid black;" placeholder="Ingresa tu correo">
          </div>
          <div class="form-group">
            <label><b>Contraseña</b></label>
            <input type="password" class="form-control" id="clave_one" style="border: 1px solid black;" placeholder="Ingresa tu contraseña">
          </div>
          <div class="form-group">
            <center><a href="recover"><b>¿Olvidaste la Contraseña?</b></a></center>
          </div>
          <button type="button" id="login" class="btn btn-danger btn-block" style="background-color: <?php echo $color ?>; border-color: <?php echo $color ?>;">INGRESAR</button>
        </form>

        <br>

        <center><b>¿Aún no tienes cuenta?</b></center>

        <div class="form-group">
          <button type="button" data-toggle="modal" data-target="#registro_" class="btn btn-primary btn-block">REGISTRATE</button> 
        </div>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="registro_" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"><b>CREAR UNA CUENTA</b></h5>
      </div>
      <div class="modal-body">
        <form>
          <div class="row">
            <div class="form-group col-md-6">
              <label><b>Nombre</b></label>
              <input type="text" class="form-control" id="nombre_two" style="border: 1px solid black;" placeholder="Ingresa tu nombre">
            </div>
            <div class="form-group col-md-6">
              <label><b>Apellido</b></label>
              <input type="text" class="form-control" id="apellido_two" style="border: 1px solid black;" placeholder="Ingresa tu nombre">
            </div>
          </div>
          <div class="row">
            <div class="form-group col-md-6">
              <label><b>Correo electrónico</b></label>
              <input type="email" class="form-control" id="correo_two" style="border: 1px solid black;" placeholder="Ingresa tu correo">
            </div>
            <div class="form-group col-md-6">
              <label><b>Telefono</b></label>
              <input type="number" class="form-control" id="telefono_two" style="border: 1px solid black;" placeholder="Ingresa tu telefono">
            </div>
          </div>
          <div class="form-group">
            <label><b>Contraseña</b></label>
            <input type="password" class="form-control" id="clave_two" style="border: 1px solid black;" placeholder="Ingresa tu contraseña">
          </div>

          <button type="button" id="sign_up" class="btn btn-danger btn-block" style="background-color: <?php echo $color ?>; border-color: <?php echo $color ?>;">REGISTRATE</button>

          <script type="text/javascript">
            var boton = document.getElementById('sign_up');
            boton.addEventListener("click", bloquea, false); 

            function bloquea(){
              if(boton.disabled == false){
               boton.disabled = true;

               setTimeout(function(){
                boton.disabled = false;
              }, 5000)
             }
           }
         </script>
       </form>

     </div>

     <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
    </div>
  </div>
</div>
</div>