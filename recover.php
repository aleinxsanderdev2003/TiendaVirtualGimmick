<?php
require("conexion_/conexion.php");
$sql2="SELECT color FROM configuracion ";
$ressql2=mysqli_query($mysqli,$sql2);
while ($row2=mysqli_fetch_row ($ressql2)){
	$color2=$row2[0];
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



	<div class="error_section">
		<div class="container">
			<div class="row">
				<div class="col-12">

					<center><h2>RECUPERAR CONTRASEÑA</h2></center>

					<br>
					<br>
					
					<form>
						<div class="form-group">
							<label>Ingresa tu correo</label>
							<input type="email" class="form-control" id="correo" name="correo" placeholder="Ingresa tu correo">
							<small class="form-text text-muted">Ingresa el correo con el que creaste tu cuenta en <?php include'include_/nombre.php'?></small>
						</div>
						<div class="form-group">
							<button type="button" id="recover" class="btn btn-primary btn btn-block" style="background-color: <?php echo $color2 ?>; border: <?php echo $color2 ?>;">Verificar</button>

							<script type="text/javascript">
								var boton2 = document.getElementById('recover');
								boton2.addEventListener("click", bloquea, false); 

								function bloquea(){
									if(boton2.disabled == false){
										boton2.disabled = true;

										setTimeout(function(){
											boton2.disabled = false;
										}, 10000)
									}
								}
							</script>
						</div>
					</form>

					<br>
					<br>

				</div>
			</div>
		</div>
	</div>


	<!-------------MODAL--------------->
	<?php include'include_/modal.php' ?>
	<!-------------MODAL--------------->	

	<!-------------FOOTER--------------->
	<?php include'include_/footer.php' ?>
	<!-------------FOOTER--------------->	



	<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
	<script src="assets/js/popper.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>
	<script src="js_/sweetalert2.min.js"></script>
	<script src="validaciones_/js/login.js"></script>
	<script src="validaciones_/js/sign_up.js"></script>
	<script src="validaciones_/js/actualizar_card.js"></script>
	<script src="validaciones_/js/boletines.js"></script>
	<script src="restablecer_/js/recover.js"></script>

</body>

</html>
