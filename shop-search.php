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
				<div class="col-lg-4 col-md-4">
					<div class="single_shipping single_sp_two">
						<div class="shippin_icone icone_two">
							<i class="fa fa-truck"></i>
						</div>
						<div class="shipping_content sp_c_two">
							<h3>ENVIO GRATIS Y RÁPIDO</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="single_shipping single_sp_two">
						<div class="shippin_icone icone_two">
							<i class="fa fa-history"></i>
						</div>
						<div class="shipping_content sp_c_two">
							<h3>CRÉDITO EN SOLO 20 MINUTOS</h3>
						</div>
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="single_shipping single_sp_two box3">
						<div class="shippin_icone icone_two">
							<i class="fa fa-headphones"></i>
						</div>
						<div class="shipping_content sp_c_two">
							<h3>SOPORTE EN LINEA LAS 24 HORAS</h3>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="categorie_details">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-4">
					<div class="sidebar_categorie_area">

						<div class="sidebar_categorie_item">
							<div class="categorie__titile">
								<h2>Categorias</h2>
							</div>
							<div class="categorie_filter">
								<ul>
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
										<li>
										<a href="shop-category?to=products&st='.htmlentities($id_categoria).'#the-best-products">
										<i class="fa fa-caret-right"></i> '.htmlentities($nombre_categoria).' 
										(<span>
										';

										$productos_total = mysqli_query($mysqli,"SELECT COUNT(*) AS total_productos FROM productos WHERE categoria='$id_categoria'");
										$productos_total_ = mysqli_fetch_array($productos_total);
										echo $productos_total_['total_productos'];

										echo'
										</span>)
										</a>
										</li>
										';
									}

									?>
								</ul>
							</div>
						</div>

					</div>
				</div>



				<div class="col-lg-9 col-md-8">
					<div class="categorie_d_right">
						<div class="categorie_product_toolbar mb-30">
							<div class="categorie_product_button">
								<ul class="nav" role="tablist">
									<li>
										<a class="active" data-toggle="tab" href="#large" role="tab" aria-controls="large" aria-selected="true"><i class="fa fa-th-large"></i></a>
									</li>
								</ul>
							</div>
							<form action="#">
								<label>LOS MEJORES PRODUCTOS LOS ENCUENTRAS AQUI</label>
							</form>
							<p>Se muestran <?php

							require("conexion_/conexion.php");

							$n = "";

							if(!empty($_POST))
							{
								$n = $_POST['nombre_busqueda'];

							}

							$productos = mysqli_query($mysqli,"SELECT COUNT(*) AS productos FROM productos WHERE estado = '0' and nombre LIKE '%$n%' or resumen LIKE '%$n%' or descripcion LIKE '%$n%'");
							$productos_ = mysqli_fetch_array($productos);
							echo $productos_['productos'];
							?> resultados</p>
						</div>


						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="large" role="tabpanel">
								<div class="row cate_tab_product">

									<?php 

									require("conexion_/conexion.php");

									$n = "";

									if(!empty($_POST))
									{
										$n = $_POST['nombre_busqueda'];

									}

									if(isset($_GET['pag']) == TRUE){ 
										$pag = $_GET['pag']; 
									} 

									else{ 
										$pag = 0; 
									} 

									$limite = 60; 

									$inicial = $pag * $limite; 

									$resultados_mostrados=0;


									$productos = "SELECT * FROM productos WHERE estado = '0' and nombre LIKE '%$n%' or resumen LIKE '%$n%' or descripcion ORDER BY id_producto DESC LIMIT $inicial,$limite";
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
											$nombre2=substr($nombre, 0,30);
											$precio_=$precio*$descuento;
											$precio2=$precio-$precio_;


											$imagenes="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
											$imagenes_=mysqli_query($mysqli,$imagenes);
											while ($img=mysqli_fetch_row ($imagenes_)){

												$imagen_principal=$img[0];

											}

											echo 
											'
											<div class="col-lg-4 col-md-6 col-sm-6">
											<div class="single_product categorie">
											<div class="product_thumb">
											<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'"><img src="img_/img_productos/'.htmlentities($imagen_principal).'" alt=""></a>
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
											<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'">'.htmlentities($nombre2).'...</a>
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
									}else{

										$n = "";

										if(!empty($_POST))
										{
											$n = $_POST['nombre_busqueda'];

										}

										echo '
										<div class="container">
										<center>
										<h3><b>NO SE ENCONTRO EL PRODUCTO QUE BUSCAS</b></h3>
										<br>
										<h5>
										<b>
										Lo sentimos, la búsqueda "'.htmlentities($n).'" no ha coincidido con ningún producto.
										Por favor, verifica la ortografía o usa términos más generales.
										</b>
										</h5>
										</center>
										</div>
										';



									}


									?>

								</div>  
							</div>

						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="brand_logo  mb-40">
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
							<a href="#"><img src="assets/img/brand/brand5.jpg" alt=""></a>
						</div>
					</div>
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
