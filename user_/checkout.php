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


	<div class="breadcrumbs_area contact_bread">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="breadcrumb_content">
						<div class="breadcrumb_header">
							<a href="index"><i class="fa fa-home"></i></a>
							<span><i class="fa fa-angle-right"></i></span>
							<a href="cart"><span>Carrito</span></a>
							<span><i class="fa fa-angle-right"></i></span>
							<a href="checkout"><span> Compra</span></a>
						</div>
						<div class="breadcrumb_title">
							<h2>Compra</h2>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<div class="Checkout_page_section">
		<div class="container">
			<div class="checkout_form">
				<div class="row">
					<div class="col-lg-6 col-md-6">
						<div class="order_form_two">
							<h3>Resumen del carrito</h3> 
						</div> 
						<div class="order_wrapper" style="border: 1px solid #444;">
							<div class="order-table table-responsive mb-30">
								<form action="#">  
									<table>
										<thead>
											<tr>
												<th class="product-name">Producto</th>
												<th class="product-total">Total</th>
											</tr>
										</thead>
										<tbody>

											<?php

											require("../conexion_/conexion.php");

											$ip=$_SERVER['REMOTE_ADDR'];

											$card="SELECT p.id_producto, p.nombre, p.precio, p.descuento, c.id_producto, c.ip, c.cantidad FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto WHERE c.ip='$ip'";
											$card_c=mysqli_query($mysqli,$card);

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

												echo 
												'
												<tr>
												<td class="product-name"> '.htmlentities($nombre).' <strong> × '.htmlentities($cantidad).'</strong></td>
												<td class="amount"> $'.htmlentities(number_format($cantidad_product)).'</td>
												</tr>
												';
											}

											?>

										</tbody>
										<tfoot>
											<tr>
												<th>Subtotal del carrito</th>
												<td>
													$ 
													<?php
													$r = "SELECT SUM((p.precio*c.cantidad)-((p.precio*c.cantidad)*p.descuento)) FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto where c.ip='$ip' ";
													$f2 = mysqli_query($mysqli,$r);

													while ($f=mysqli_fetch_row ($f2)){


														echo $precio_p= number_format($f[0]);

													}
													?>
												</td>
											</tr>
											<tr class="order_total">
												<th>Total del pedido</th>
												<td><strong>
													$
													<?php
													$r = "SELECT SUM((p.precio*c.cantidad)-((p.precio*c.cantidad)*p.descuento)) FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto where c.ip='$ip' ";
													$f2 = mysqli_query($mysqli,$r);

													while ($f=mysqli_fetch_row ($f2)){


														echo $precio_p= number_format($f[0]);
														$precio_p_c= $f[0];

													}
													?>
												</strong></td>
											</tr>
										</tfoot>
									</table>
								</form>         
							</div>
							<center>
								<div class="payment-method">
									<div class="panel-default">
										<img src="assets/img/visha/papyel.png" alt="">
										<p>Pague a través de PayPal, PSE o otros medios.</p> 
									</div>    
								</div>
							</center>    
						</div>  
					</div>



					<div class="col-lg-6 col-md-6">
						<form style="border: 1px solid #444;">
							<center>
								<h3>
									<div class="row">
										<div class="col-md-12">PAGAR</div>
									</div>
								</h3>
							</center>
							<div class="container">
								<div class="row">
									<div class="col-lg-12 mb-30">
										<center><b>Nota:</b> Importante, debes verificar tu información personal antes de hacer el pago, puedes verificar tus datos en <a href="mi-perfil">MI PERFIL</a></center>
									</div>

									<div class="col-lg-12 mb-30">
										
										<?php 

										echo 
										'
										<form onclick="mostrarBoton()" id="btn-1">
										<script
										src="https://checkout.epayco.co/checkout.js"
										class="epayco-button"
										data-epayco-key="f4534de46470390f2ff55bb57bdb41dc"
										data-epayco-amount="'.$precio_p_c.'"
										data-epayco-name="Productos"
										data-epayco-description="Productos comprados"
										data-epayco-currency="cop"
										data-epayco-country="co"
										data-epayco-test="false"
										data-epayco-button="img_/boton-pagar.png"
										data-epayco-external="false"
										data-epayco-acepted="https://www.tienda-chiphysi.com/user_/rxm_pago/pg?a=f&b=v&c=f&d=p&i='.$_SESSION['id_usuario'].'"
										data-epayco-rejected="https://www.tienda-chiphysi.com/user_/checkout?to=tienda#checkout"
										data-epayco-pending="https://www.tienda-chiphysi.com/user_/checkout?to=tienda#checkout"
										data-epayco-confirmation="https://www.tienda-chiphysi.com/user_/rxm_pago/pg?a=f&b=v&c=f&d=p&i='.$_SESSION['id_usuario'].'">
										</script>
										</form>
										';

										?>


									</div> 

								</div>
							</div>
						</form>    
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
	<script src="validaciones_/js/carrito_compras.js"></script>
	<script src="validaciones_/js/actualizar_card.js"></script>
	<script src="validaciones_/js/boletines.js"></script>

</body>

</html>
