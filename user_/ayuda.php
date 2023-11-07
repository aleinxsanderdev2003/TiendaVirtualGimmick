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
					<center><h1><b>AYUDA</b></h1></center>
				</div>
			</div>
		</div>
	</div>


	<div class="categorie_details">
		<div class="container">
			<div class="row">

				<div class="col-lg-6 col-md-6">

					<h3>¿Cómo hago para comprar?</h3>
					<br>
					<h5>Encuentra: Sorprendete con el buscador inteligente. Utiliza el mapa de categorías del sitio y el listado de lo más buscado. Navega por categorías en la barra superior. Refina tu búsqueda: Filtra por diferentes criterios y características. Compara productos similares. Agrega al carrito: Conoce el precio del producto.</h5>
					
					<br>
					<br>

					<h3>¿Los precios y promociones de internet son los mismos que en las tiendas?</h3>
					<br>
					<h5>No. El precio y promociones que aparece en el sitio web aplica solo para compras realizadas en internet.</h5>	

					<br>
					<br>

					<h3>¿Hay restricciones en el número de artículos que puedo comprar?</h3>
					<br>
					<h5>Si. La restricción se calcula por un número máximo de artículos y el valor total del pedido. En el momentode agregar los productos al carrito te informaremos si superas ese límite.</h5>

					<br>
					<br>

					<h3>¿Puedo pagar con dos medios diferentes de pago?</h3>
					<br>
					<h5>No. Actualmente cada pedido solo puede ser pagado con un medio de pago.</h5>

				</div>

				<div class="col-lg-6 col-md-6">

					<h3>¿En internet consigo los mismos productos que en las demás tiendas?</h3>
					<br>
					<h5>No. En este sitio web encuentras una selección especial de referencias que no necesariamente coincide con el portafolio de las demás tiendas. Adicionalmente se encuentran productos exclusivos para internet.</h5>	
					
					<br>
					<br>

					<h3>¿Los precios mostrados incluyen IVA?</h3>
					<br>
					<h5>Si. Los precios mostrados en el sitio web incluyen IVA.</h5>

					<br>
					<br>

					<h3>¿Con qué medios puedo pagar?</h3>
					<br>
					<h5>Mediante tarjetas de crédito y débito a cuentas corrientes o de ahorro.</h5>

					<br>
					<br>

					<h3>¿El pago es seguro?</h3>
					<br>
					<h5>Tomamos todas las medidas de seguridad que se encuentran a nuestro alcance para garantizar la seguridad en tus compras.</h5>

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

</body>

</html>
