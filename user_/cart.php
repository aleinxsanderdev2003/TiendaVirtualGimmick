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

	<!--breadcrumbs area start-->
	<div class="breadcrumbs_area contact_bread">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb_content">
						<div class="breadcrumb_header">
							<a href="index"><i class="fa fa-home"></i></a>
							<span><i class="fa fa-angle-right"></i></span>
							<a href="cart"><span>Carrito</span></a>
						</div>
						<div class="breadcrumb_title">
							<h2>Carrito De Compras</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="shopping_cart_details">
		<div class="container">
			<form action="#"> 
				<div class="row">
					<div class="col-12">
						<div class="table_desc">
							<div class="cart_page table-responsive">
								<table>
									<thead>
										<tr>
											<th class="product_remove">Eliminar</th>
											<th class="product_thumb">Producto</th>
											<th class="product_name">Nombre</th>
											<th class="product-price">Precio</th>
											<th class="product_quantity">Cantidad</th>
											<th class="product_total">Total</th>
										</tr>
									</thead>
									<tbody>

										<?php

										require("../conexion_/conexion.php");

										$ip=$_SERVER['REMOTE_ADDR'];

										$card="SELECT p.id_producto, p.nombre, p.precio, p.descuento, c.id_producto, c.ip, c.cantidad FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto WHERE c.ip='$ip'";
										$card_c=mysqli_query($mysqli,$card);

										$result = 0;
										$result = mysqli_num_rows($card_c);

										if ($result > 0) {

											while ($carrito=mysqli_fetch_row ($card_c)){

												$id_producto_p = $carrito[0];    
												$nombre = substr($carrito[1], 0, 40);
												$precio = $carrito[2];
												$descuento = $carrito[3];
												$id_plantilla_c = $carrito[4];
												$ip = $carrito[5];
												$cantidad = $carrito[6];

												$total_=$precio*$descuento;
												$total=$precio-$total_;

												$cantidad_product=$total*$cantidad;


												//IMAGENES
												$imagenes_p="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto_p' LIMIT 1";
												$p_imagenes=mysqli_query($mysqli,$imagenes_p);
												while ($imagenes_v=mysqli_fetch_row ($p_imagenes)){
													$imagen_principal_c=$imagenes_v[0];
												}
												//IMAGENES

												$guiones = str_replace(" ", "-", $nombre);

												echo 
												'
												<tr>
												<td class="product_remove"><a href="validaciones_/producto_eliminar?i='.htmlentities($id_producto_p).'&n='.htmlentities($guiones).'"><i class="fa fa-trash-o"></i></a></td>
												<td class="product_thumb"><a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto_p).'"><img src="../img_/img_productos/'.htmlentities($imagen_principal_c).'" alt=""></a></td>
												<td class="product_name"><a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto_p).'">'.htmlentities($nombre).'</a></td>
												<td class="product-price">$ '.htmlentities(number_format($total)).'</td>
												<td class="product_quantity">'.htmlentities($cantidad).'</td>
												<td class="product_total">$ '.htmlentities(number_format($cantidad_product)).'</td>
												</tr>
												';
											}

											?>

										</tbody>
									</table>  
								</div>  
								<div class="table_cart_button">
									<a href="shop?to=products"><button type="button">CONTINUAR COMPRANDO</button></a>
								</div>      
							</div>
						</div>
					</div>


					<?php 

				}else{


					echo "
					<br>
					<center>
					<font color='black' size='5'>SU CESTA ESTÁ VACIA</font>
					<br>
					<p>Descubra los artículos <a href=''>más populares disponibles</a> o explore nuestros <br><a href=''>artículos nuevos más populares</a>.</p>
					</center>
					<br>

					</tbody>
					</table>  
					</div>  
					<div class='table_cart_button'>
					<a href='shop?to=products'><button type='button'>CONTINUAR COMPRANDO</button></a>
					</div>      
					</div>
					</div>
					</div>
					";

				}

				?>

				<div class="coupon_code_area">
					<div class="row">
						<div class="col-lg-6 col-md-6">
							
						</div>
						<div class="col-lg-6 col-md-6">
							<div class="coupon_code">
								<h3>TOTAL DEL CARRITO</h3>
								<div class="cart_total_amount">

									<div class="flat_rate ">
										<div class="shipping_flat_rate">
											<p class="subtotal">Total</p>
											<p class="cart_amount">
												<span>Total a pagar:</span> 
												$

												<?php
												$r = "SELECT SUM((p.precio*c.cantidad)-((p.precio*c.cantidad)*p.descuento)) FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto where c.ip='$ip' ";
												$f2 = mysqli_query($mysqli,$r);

												while ($f=mysqli_fetch_row ($f2)){


													echo $precio_p= number_format($f[0]);

												}
												?>


											</p>
										</div>
										<a href="cart">Actualizar precio</a>
									</div>
									<br>
									<div class="cart_to_checkout">
										<a href="checkout?to=create_account">IR A PAGAR</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</form> 
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
	<script src="validaciones_/js/carrito_compras.js"></script>
	<script src="validaciones_/js/actualizar_card.js"></script>
	<script src="validaciones_/js/boletines.js"></script>
	
</body>

</html>
