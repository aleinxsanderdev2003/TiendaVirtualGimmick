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



	<div class="error_section">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="error_form">
						<h1>404</h1>
						<h2>¡OPPS! NO SE ENCUENTRA LA PAGINA</h2>
						<p>Lo sentimos, pero la página que está buscando no existe, se ha <br>
						eliminado, se ha cambiado de nombre o no está disponible temporalmente.</p>
						<form action="<?php $_SERVER['PHP_SELF']; ?>shop-search?to=products#the-best-products" method="POST">
							<input placeholder="Escribe el producto que buscas..." id="nombre_busqueda" name="nombre_busqueda" type="text" required>
							<button type="submit"><i class="fa fa-search"></i></button>
						</form>
						<a href="index">VOLVER A LA PÁGINA DE INICIO</a>
					</div>
				</div>
			</div>
		</div>
	</div>
		

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

</body>

</html>
