<?php

session_start();
if (@!$_SESSION['correo']) {
	header("Location:desconectar");
}elseif ($_SESSION['rol']==1) {
	header("Location:desconectar");
}

?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--------------TITLE--------------->
	<?php include'include_/titulo.php' ?>
	<!--------------TITLE--------------->

	<!-------------FAVICON--------------->
	<?php include'include_/favicon.php' ?>
	<!-------------FAVICON--------------->

	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/bundle">
	<link rel="stylesheet" href="assets/css/plugins.css">
	<link rel="stylesheet" href="assets/css/style">
	<link rel="stylesheet" href="assets/css/responsive.css">
	<link href="css_/sweetalert2.min.css" rel="stylesheet" type="text/css">
	<script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>


	<!-------------HEADER--------------->
	<?php include'include_/header2.php' ?>
	<!-------------HEADER--------------->


	<div class="shipping_area shipping_two mb-40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<center><h1><b>MI PERFIL</b></h1></center>
				</div>
			</div>
		</div>
	</div>


	<?php

	require("../conexion_/conexion.php");

	$id=$_SESSION['id_usuario'];

	$usuarios="SELECT * FROM usuarios WHERE id_usuario='$id'";
	$usuario=mysqli_query($mysqli,$usuarios);


	while ($user=mysqli_fetch_row ($usuario)){


		$id_usuario=$user[0];
		$nombre=$user[1];
		$apellido=$user[2]; 
		$correo=$user[3]; 
		$telefono=$user[4]; 
		$clave=$user[5];
		$fecha_registro=$user[6];
		$ultima_conexion=$user[7];
		$ip=$user[8]; 
		$departamento=$user[9]; 
		$direccion_one=$user[10]; 	
		$direccion_two=$user[11]; 	
		$estado=$user[12];
		$rol=$user[13];

	}

	?>



	<div class="categorie_details">
		<div class="container">
			<div class="row">


				<div class="col-lg-6 col-md-6">



					<script>

						function usuarioInteractuo(){
							var btn = document.getElementById('actualizar-perfil');
							btn.disabled=false;
						}

						function deshabilitarBoton(){
							var btn = document.getElementById('actualizar-perfil');
							btn.disabled=false;
						}

					</script>

					<div class="input-container half">
						<label for="new_pwd" class="rl-label">Nombre</label>
						<input type="text" onkeyup="usuarioInteractuo()" style="background-color: #ddf8c9; color: black;" id="nombre" name="nombre" value="<?php echo $nombre ?>" placeholder="Ingresa tu nombre">
					</div>
					<br>					
					<div class="input-container half">
						<label for="new_pwd2" class="rl-label">Apellido</label>
						<input type="text" onkeyup="usuarioInteractuo()" style="background-color: #ddf8c9; color: black;" id="apellido" name="apellido" value="<?php echo $apellido ?>" placeholder="Ingresa tu apellido">
					</div>
					<br>
					<div class="input-container ">
						<label for="new_email" class="rl-label">Correo</label>
						<input type="text" onkeyup="usuarioInteractuo()" style="background-color: #ddf8c9; color: black;" id="correo" name="correo" value="<?php echo $correo ?>" placeholder="Ingresa tu correo">
					</div>
					<br>
					<div class="input-container half">
						<label for="new_pwd2" class="rl-label">Telefono</label>
						<input type="number" onkeyup="usuarioInteractuo()" style="background-color: #ddf8c9; color: black;" id="telefono" name="telefono" value="<?php echo $telefono ?>" placeholder="Ingresa tu telefono">
					</div>


				</div>

				<div class="col-lg-6 col-md-6">

					<div class="input-container half">
						<label for="new_pwd2" class="rl-label">Dirección de envio</label>
						<input type="text" onkeyup="usuarioInteractuo()" style="background-color: #ddf8c9; color: black;"id="direccion_one" name="direccion_one" value="<?php echo $direccion_one ?>" placeholder="Ingresa tu dirección de envio">
					</div>
					<br>
					<div class="input-container half">
						<label for="new_pwd2" class="rl-label">Detalle de dirección</label>
						<input type="text" onkeyup="usuarioInteractuo()" style="background-color: #ddf8c9; color: black;"id="direccion_two" name="direccion_two" value="<?php echo $direccion_two ?>" placeholder="Apartamento o casa, numero de piso para entregar tu pedido mas facil">
					</div>
					<br>
					<div class="input-container">
						<label for="new_pwd2" class="rl-label">IP</label>
						<input type="text" onkeyup="usuarioInteractuo()" style="background-color: #c8c8c8; color: black;" value="<?php echo $ip ?>" placeholder="Ingresa tu ip" readonly>
					</div>
					<br>
					<div class="input-container half">
						<div class="select_form_select">
							<label for="c_country">Departamento <span>*</span></label>
							<select name="departamento" onkeyup="usuarioInteractuo()" id="departamento">
								<option value=""><?php echo $departamento ?></option>
								<?php
								require("../conexion_/conexion.php");
								$sql=("SELECT * FROM departamentos");
								$query=mysqli_query($mysqli,$sql);
								while($arreglo=mysqli_fetch_array($query)){
									$id_departamento = $arreglo['id_departamento'];
									$departamento = $arreglo['departamento'];
									echo '<option value="'.$departamento.'">'.$departamento.'</option>';
								}
								?>
							</select>
						</div> 
					</div>


				</div>

			</div>

			<br>

			<div class="row">

				<div class="col-md-12">

					<button type="button" id="actualizar-perfil" style="height: 50px;" onclick="deshabilitarBoton()" class="btn btn-info btn-block" disabled="true">Actualizar datos</button>
					<center><small><b>** Este boton no se desbloquea hasta que edites algun campo **</b></small></center>

				</div>


			</div>
		</div>
	</div>

	<hr>

	<!-------------FOOTER--------------->
	<?php include'include_/footer.php' ?>
	<!-------------FOOTER--------------->	



	<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="js_/sweetalert2.min.js"></script>
	<script src="validaciones_/js/actualizar_card.js"></script>
	<script src="validaciones_/js/boletines.js"></script>
	<script src="validaciones_/_perfil/js/perfil-editar.js"></script>

</body>

</html>
