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



	<div class="breadcrumbs_area portfolio_d">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb_content">
						<div class="breadcrumb_header">
							<a href="index"><i class="fa fa-home"></i></a>
							<span><i class="fa fa-angle-right"></i></span>
							<a href="nuestras-tiendas"><span> Nuestras tiendas</span></a>
						</div>
						<div class="breadcrumb_title">
							<h2>Nuestras tiendas</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="main_blog_area port_deatils">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-7">
					<div class="blog_left_area">

						<div class="singli_blog_wrapper gallery port_gallery mb-40">   
							<div class="blog__title mb-30">
								<h1>Los mejores productos</h1>
								<div class="blog__post">
									<ul>
										<li class="post_author">Ultima actualización</li>
										<li class="post_date"> <?php echo date('Y-m-d'); ?></li>
									</ul>
								</div>
							</div>

							<div class="single_blog">
								<div class="portfolio_d_thumb">

									<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10624068.40166783!2d-108.8313239071613!3d39.366973621690846!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sEstados%20Unidos!5e0!3m2!1ses!2sco!4v1611107038308!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

								</div>   

								<div class="blog_entry_content port_content">
									<p>Legal: Oferta válida entre el 15 de enero al 29 de marzo 2021, pagando con Tarjetas de Crédito Credencial Banco de Occidente y Crédito Fácil Codensa y Codensa Mastercard. Para productos en oferta máximo tres unidades por referencia por tarjetahabiente. La disponibilidad de los productos depende del inventario que maneje cada almacén. No canjeable por efectivo, no acumulable con otras ofertas. Para aplicar al descuento se debe pagar la totalidad de la compra con Tarjetas Crédito Credencial Banco de Occidente, Crédito Fácil Codensa y Codensa MasterCard, según corresponda la oferta. Para compras por internet no aplican las ofertas de los productos que sean combos o Kasados. La calidad, idoneidad, seguridad y garantía de los productos y servicios ofrecidos son responsabilidad exclusiva del establecimiento de comercio. la venta, la entrega, el funcionamiento y la garantía de los mismos. Imágenes de referencia, el tamaño de las fotos no necesariamente representa el tamaño real del producto. La información de precio, unidades, características y detalle del producto, se encuentra publicada en cada una de las referencias. Aplica únicamente para tarjetas de crédito emitidas en Colombia.</p>
								</div>
							</div>
						</div> 

					</div>
				</div>
				<div class="col-lg-3 col-md-5">
					<div class="blog_right_sidebar">
						<div class="widget_search_bar mb-30">
							<h3>Buscar productos</h3>
							<form action="<?php $_SERVER['PHP_SELF']; ?>shop-search?to=products#the-best-products" method="POST">
								<input placeholder="Escribe lo que buscas..." id="nombre_busqueda" name="nombre_busqueda" type="text" required>
								<button type="submit"><i class="fa fa-search"></i></button>
							</form>
						</div>
						
						<div class="widget__categorie mb-30">
							<h3>Categorias</h3>
							<ul class="widget__categoie_list">
								<?php
								require("conexion_/conexion.php");

								$categorias="SELECT * FROM categorias WHERE estado='0'";
								$cate=mysqli_query($mysqli,$categorias);
								while ($categoria=mysqli_fetch_row ($cate)){

									$id_categoria = $categoria[0];
									$nombre_categoria = $categoria[1];
									$estado_categoria = $categoria[2];

									echo 
									'
									<li><a href="shop-category?to=products&st='.htmlentities($id_categoria).'#the-best-products">'.htmlentities($nombre_categoria).'</a></li>
									';
								}

								?>
							</ul>
						</div>

					</div>
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

</body>

</html>
