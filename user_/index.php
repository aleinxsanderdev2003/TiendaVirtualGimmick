<?php

session_start();
if (@!$_SESSION['correo']) {
	header("Location:desconectar");
}elseif ($_SESSION['rol']==1) {
	header("Location:desconectar");
}

require("../conexion_/conexion.php");
$sql="SELECT color FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$color=$row[0];
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
	<?php include'include_/header.php' ?>
	<!-------------HEADER--------------->

	<div class="banner_slide_show mb-40">
		<div class="banner_slider">
			<div class="slider_active owl-carousel">


				<?php 

				require("../conexion_/conexion.php");

				$banners = "SELECT * FROM banners WHERE estado = '0' ";
				$banners_ =mysqli_query($mysqli,$banners); 


				$result1 = 0;
				$result1 = mysqli_num_rows($banners_);
				if ($result1 > 0) {

					while ($bann = mysqli_fetch_row($banners_)){

						$id_banner = $bann[0];
						$imagen = $bann[1];
						$categoria = $bann[2];
						$texto_one = $bann[3];
						$texto_two = $bann[4];
						$boton = $bann[5];
						$estado = $bann[6];

						echo 
						'
						<div class="single_slider single_slider_three" style="background-image: url(../img_/img_banners/'.htmlentities($imagen).')">
						<div class="container">
						<div class="row">
						<div class="col-lg-6 offset-lg-6 col-md-7 offset-md-5">
						<div class="slider_content slider_c_three">
						<h2 style="color: '.$color.';">'.htmlentities($categoria).'</h2>
						<h1> '.$texto_one.' </h1>
						<div class="slider_desc">
						<p>'.$texto_two.'</p>
						</div>
						<div class="slider_button">
						<a href="'.htmlentities($boton).'">VER OFERTAS</a>
						</div>
						</div>
						</div>
						</div>
						</div>   
						</div>	
						';

					}
				}else{}


				?>

			</div>
		</div>
	</div>

	<div class="shipping_area mb-40" id="ofertas">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<div class="single_shipping">
						<div class="shippin_icone">
							<i class="fa fa-truck"></i>
						</div>
						<div class="shipping_content">
							<h3>ENVIO GRATIS Y RÁPIDO</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single_shipping">
						<div class="shippin_icone">
							<i class="fa fa-history"></i>
						</div>
						<div class="shipping_content">
							<h3>CRÉDITO EN SOLO 20 MINUTOS </h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="single_shipping box3">
						<div class="shippin_icone">
							<i class="fa fa-headphones"></i>
						</div>
						<div class="shipping_content">
							<h3>SOPORTE EN LINEA LAS 24 HORAS</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="product_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-9 col-md-8">
					<div class="product_inner">
						<div class="top_title">
							<h2> LAS MEJORES OFERTAS</h2>
						</div>
						<div class="row">
							<div class="product_active owl-carousel">



								<?php 

								require("../conexion_/conexion.php");

								$productos = "SELECT * FROM productos WHERE estado = '0' and descuento>'0.00' ORDER BY id_producto DESC";
								$productos_ =mysqli_query($mysqli,$productos); 


								$result = 0;
								$result = mysqli_num_rows($productos_);
								if ($result > 0) {

									while ($product = mysqli_fetch_row($productos_)){

										$id_producto = $product[0];
										$nombre = $product[1];
										$resumen = $product[2];
										$descripcion = $product[3];
										$precio = $product[4];
										$referencia = $product[5];
										$condicion = $product[6];
										$descuento = $product[7];
										$estrellas = $product[8];
										$categoria = $product[9];
										$estado = $product[10];

										$guiones = str_replace(" ", "-", $nombre);

										$descuento2=substr($descuento, 2,4);
										$nombre2=substr($nombre, 0,22);
										$precio_=$precio*$descuento;
										$precio2=$precio-$precio_;


										$imagenes="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
										$imagenes_=mysqli_query($mysqli,$imagenes);
										while ($img=mysqli_fetch_row ($imagenes_)){

											$imagen_principal=$img[0];

										}

										echo 
										'
										<div class="col-lg-3">
										<div class="single_product">
										<div class="product_thumb">
										<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'"><img src="../img_/img_productos/'.htmlentities($imagen_principal).'" alt=""></a>
										<div class="product_discount">
										<span>-'.htmlentities($descuento2).'%</span>
										</div>
										</div>
										<div class="product_content">
										<div class="samll_product_ratting">
										<ul>
										';
										if($estrellas==1){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==2){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==3){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==4){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==5){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}
										echo'
										</ul>
										</div>
										<div class="small_product_name">
										<a title="Printed Summer Dress" href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'">'.htmlentities($nombre2).'...</a>
										</div>
										<div class="small_product_price">
										<span class="new_price"> $'.htmlentities(number_format($precio2)).' </span>
										<span class="old_price">  $'.htmlentities(number_format($precio)).'  </span>
										</div>
										</div>
										</div>
										</div>
										';

									}
								}else{}


								?>


							</div>
						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-4">
					<div class="product_banner fix">
						<a href="hiperofertas?to=products"><img src="assets/img/banner/banner1.jpg" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>





	<div class="product_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="product_inner">
						<div class="top_title">
							<h2>CELULARES</h2>
						</div>
						<div class="row">
							<div class="product_active owl-carousel">



								<?php 

								require("../conexion_/conexion.php");

								$productos = "SELECT * FROM productos WHERE estado = '0' and categoria='1' ORDER BY id_producto DESC LIMIT 30 ";
								$productos_ =mysqli_query($mysqli,$productos); 


								$result = 0;
								$result = mysqli_num_rows($productos_);
								if ($result > 0) {

									while ($product = mysqli_fetch_row($productos_)){

										$id_producto = $product[0];
										$nombre = $product[1];
										$resumen = $product[2];
										$descripcion = $product[3];
										$precio = $product[4];
										$referencia = $product[5];
										$condicion = $product[6];
										$descuento = $product[7];
										$estrellas = $product[8];
										$categoria = $product[9];
										$estado = $product[10];

										$guiones = str_replace(" ", "-", $nombre);

										$descuento2=substr($descuento, 2,4);
										$nombre2=substr($nombre, 0,22);
										$precio_=$precio*$descuento;
										$precio2=$precio-$precio_;


										$imagenes="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
										$imagenes_=mysqli_query($mysqli,$imagenes);
										while ($img=mysqli_fetch_row ($imagenes_)){

											$imagen_principal=$img[0];

										}

										echo 
										'
										<div class="col-lg-3">
										<div class="single_product">
										<div class="product_thumb">
										<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'"><img src="../img_/img_productos/'.htmlentities($imagen_principal).'" alt=""></a>
										<div class="product_discount">
										<span>'.htmlentities($condicion).'</span>
										</div>
										</div>
										<div class="product_content">
										<div class="samll_product_ratting">
										<ul>
										';
										if($estrellas==1){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==2){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==3){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==4){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==5){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}
										echo'
										</ul>
										</div>
										<div class="small_product_name">
										<a title="Printed Summer Dress" href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'">'.htmlentities($nombre2).'...</a>
										</div>
										<div class="small_product_price">
										<span class="new_price"> $'.htmlentities(number_format($precio2)).' </span>
										<span class="old_price">  $'.htmlentities(number_format($precio)).'  </span>
										</div>
										</div>
										</div>
										</div>
										';

									}
								}else{}


								?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>





	<div class="product_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="product_inner">
						<div class="top_title">
							<h2>COMPUTADORES</h2>
						</div>
						<div class="row">
							<div class="product_active owl-carousel">



								<?php 

								require("../conexion_/conexion.php");

								$productos = "SELECT * FROM productos WHERE estado = '0' and categoria='2'  ORDER BY id_producto DESC LIMIT 30 ";
								$productos_ =mysqli_query($mysqli,$productos); 


								$result = 0;
								$result = mysqli_num_rows($productos_);
								if ($result > 0) {

									while ($product = mysqli_fetch_row($productos_)){

										$id_producto = $product[0];
										$nombre = $product[1];
										$resumen = $product[2];
										$descripcion = $product[3];
										$precio = $product[4];
										$referencia = $product[5];
										$condicion = $product[6];
										$descuento = $product[7];
										$estrellas = $product[8];
										$categoria = $product[9];
										$estado = $product[10];

										$guiones = str_replace(" ", "-", $nombre);

										$descuento2=substr($descuento, 2,4);
										$nombre2=substr($nombre, 0,22);
										$precio_=$precio*$descuento;
										$precio2=$precio-$precio_;


										$imagenes="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
										$imagenes_=mysqli_query($mysqli,$imagenes);
										while ($img=mysqli_fetch_row ($imagenes_)){

											$imagen_principal=$img[0];

										}

										echo 
										'
										<div class="col-lg-3">
										<div class="single_product">
										<div class="product_thumb">
										<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'"><img src="../img_/img_productos/'.htmlentities($imagen_principal).'" alt=""></a>
										<div class="product_discount">
										<span>'.htmlentities($condicion).'</span>
										</div>
										</div>
										<div class="product_content">
										<div class="samll_product_ratting">
										<ul>
										';
										if($estrellas==1){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==2){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==3){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==4){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==5){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}
										echo'
										</ul>
										</div>
										<div class="small_product_name">
										<a title="Printed Summer Dress" href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'">'.htmlentities($nombre2).'...</a>
										</div>
										<div class="small_product_price">
										<span class="new_price"> $'.htmlentities(number_format($precio2)).' </span>
										<span class="old_price">  $'.htmlentities(number_format($precio)).'  </span>
										</div>
										</div>
										</div>
										</div>
										';

									}
								}else{}


								?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>







	<div class="product_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div class="product_inner">
						<div class="top_title">
							<h2>TELEVISORES</h2>
						</div>
						<div class="row">
							<div class="product_active owl-carousel">



								<?php 

								require("../conexion_/conexion.php");

								$productos = "SELECT * FROM productos WHERE estado = '0' and categoria='3' ORDER BY id_producto DESC LIMIT 30 ";
								$productos_ =mysqli_query($mysqli,$productos); 


								$result = 0;
								$result = mysqli_num_rows($productos_);
								if ($result > 0) {

									while ($product = mysqli_fetch_row($productos_)){

										$id_producto = $product[0];
										$nombre = $product[1];
										$resumen = $product[2];
										$descripcion = $product[3];
										$precio = $product[4];
										$referencia = $product[5];
										$condicion = $product[6];
										$descuento = $product[7];
										$estrellas = $product[8];
										$categoria = $product[9];
										$estado = $product[10];

										$guiones = str_replace(" ", "-", $nombre);

										$descuento2=substr($descuento, 2,4);
										$nombre2=substr($nombre, 0,22);
										$precio_=$precio*$descuento;
										$precio2=$precio-$precio_;


										$imagenes="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
										$imagenes_=mysqli_query($mysqli,$imagenes);
										while ($img=mysqli_fetch_row ($imagenes_)){

											$imagen_principal=$img[0];

										}

										echo 
										'
										<div class="col-lg-3">
										<div class="single_product">
										<div class="product_thumb">
										<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'"><img src="../img_/img_productos/'.htmlentities($imagen_principal).'" alt=""></a>
										<div class="product_discount">
										<span>'.htmlentities($condicion).'</span>
										</div>
										</div>
										<div class="product_content">
										<div class="samll_product_ratting">
										<ul>
										';
										if($estrellas==1){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==2){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==3){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==4){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}else if($estrellas==5){

											echo '
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											<li><a href="#"><i class="fa fa-star"></i></a></li>
											';

										}
										echo'
										</ul>
										</div>
										<div class="small_product_name">
										<a title="Printed Summer Dress" href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'">'.htmlentities($nombre2).'...</a>
										</div>
										<div class="small_product_price">
										<span class="new_price"> $'.htmlentities(number_format($precio2)).' </span>
										<span class="old_price">  $'.htmlentities(number_format($precio)).'  </span>
										</div>
										</div>
										</div>
										</div>
										';

									}
								}else{}


								?>


							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>



	<div class="brand_logo mb-40">
		<div class="container">
			<div class="row brand_padding">
				<div class="brand_active owl-carousel">
					<div class="col-lg-2">
						<div class="single_brand">
							<a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="single_brand">
							<a href="#"><img src="assets/img/brand/brand2.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="single_brand">
							<a href="#"><img src="assets/img/brand/brand3.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="single_brand">
							<a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="single_brand">
							<a href="#"><img src="assets/img/brand/brand1.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="single_brand">
							<a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
						</div>
					</div>
					<div class="col-lg-2">
						<div class="single_brand">
							<a href="#"><img src="assets/img/brand/brand4.jpg" alt=""></a>
						</div>
					</div>

				</div>
			</div>
		</div> 
	</div>


	<div class="static_area">
		<div class="container">
			<div class="row">
				<div class="col-lg-4 col-md-6">
					<div class="single_static mb-30">
						<div class="icone_static">
							<i class="fa fa-coffee"></i>
						</div>
						<div class="content_static">
							<h4>Entrega Gratis</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_static mb-30">
						<div class="icone_static">
							<i class="fa fa-cubes"></i>
						</div>
						<div class="content_static">
							<h4>Gran Ahorro</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_static mb-30">
						<div class="icone_static">
							<i class="fa fa-tags"></i>
						</div>
						<div class="content_static">
							<h4>Vales De Regalo</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_static">
						<div class="icone_static">
							<i class="fa fa-codepen"></i>
						</div>
						<div class="content_static">
							<h4>Regreso Facil</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_static">
						<div class="icone_static">
							<i class="fa fa-cut"></i>
						</div>
						<div class="content_static">
							<h4>Descuento de hasta 20%</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-6">
					<div class="single_static">
						<div class="icone_static">
							<i class="fa fa-diamond"></i>
						</div>
						<div class="content_static">
							<h4>Entregas En Todo El Mundo</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div>
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
