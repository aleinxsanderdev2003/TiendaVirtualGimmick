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
					<center><h1><b>DETALLE DE MI COMPRA</b></h1></center>
				</div>
			</div>
		</div>
	</div>


	<div class="categorie_details">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12">


					<table style="text-align: left; width: 100%; border-collapse: collapse;background-color: white;" >
						<thead style="color: white;background-color: #272727;">
							<tr>
								<th style="padding: 10px;border-bottom: 1px solid #ccc;">PRODUCTO</th>
								<th style="padding: 15px;border-bottom: 1px solid #ccc;">PRECIO UNIDAD</th>
								<th style="padding: 15px;border-bottom: 1px solid #ccc;">CANTIDAD</th>
								<th style="padding: 10px;border-bottom: 1px solid #ccc;">FECHA PEDIDO</th>
								<th style="padding: 10px;border-bottom: 1px solid #ccc;">ESTADO</th>
							</tr>
						</thead>
						<tbody>

							<?php

							$id_usuario=$_SESSION['id_usuario'];
							$i=$_GET['i'];

							$query = mysqli_query($mysqli, "SELECT * FROM pedido_detalle where id_usuario = '$id_usuario' and id_pedido='$i'");


							$result = 0;
							$result = mysqli_num_rows($query);
							if ($result > 0) {

								while ($data=mysqli_fetch_array($query)){
									$id_pedido = $data["id_pedido"];
									$id_producto = $data["id_producto"];
									$precio = $data["precio"];
									$fecha = $data["fecha"];
									$estado = $data["estado"];
									$cantidad = $data["cantidad"];

									//IMAGENES
									$imagenes_p="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
									$p_imagenes=mysqli_query($mysqli,$imagenes_p);
									while ($imagenes_v=mysqli_fetch_row ($p_imagenes)){
										$imagen_principal=$imagenes_v[0];
									}
									//IMAGENES


									//PRODUCTO
									$productos="SELECT nombre FROM productos WHERE id_producto='$id_producto'";
									$productos_=mysqli_query($mysqli,$productos);
									while ($producto_v=mysqli_fetch_row ($productos_)){
										$nombre_producto=$producto_v[0];

										$guiones = str_replace(" ", "-", $nombre_producto);
									}
									//PRODUCTO

									echo '
									<tr>
									<td style="padding: 10px;border-bottom: 1px solid #ccc;"><a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'"><img src="../img_/img_productos/'.htmlentities($imagen_principal).'" width="250" alt=""></a></td>
									<td style="padding: 15px;border-bottom: 1px solid #ccc;"><h4>$'.htmlentities(number_format($precio)).'</h4></td>
									<td style="padding: 15px;border-bottom: 1px solid #ccc;"><h6>'.htmlentities($cantidad).' und</h6></td>
									<td style="padding: 10px;border-bottom: 1px solid #ccc;">
									'.htmlentities($fecha).'
									</td>
									<td style="padding: 10px;border-bottom: 1px solid #ccc;">
									';
									if($estado==0){
										echo '<button class="btn btn-warning">EN CAMINO</button>';
									}else if($estado==1){
										echo '<button class="btn btn-info">ENVIADO</button>';
									}else if($estado==2){
										echo '<button class="btn btn-success">ENTREGADO</button>';
									}
									echo'
									</td>
									</tr>';
								}
							}else{


								echo'
								<script>
								function redireccionarPagina() {
									window.location = "javascript:history.back()";
								}
								setTimeout("redireccionarPagina()");
								</script>
								';

							}

							?>

						</tbody>
					</table>


					<?php

					$r = mysqli_query($mysqli, "SELECT SUM(precio*cantidad) AS suma FROM pedido_detalle WHERE id_pedido='$id_pedido'");
					$f = mysqli_fetch_assoc($r);
					echo'<table class="table">';
					echo'<thead class="thead-dark">';
					echo'  <tr>';
					echo'    <th scope="col"><center><h5 style="color: white;">TOTAL DE LA COMPRA: $'. number_format($f["suma"]).'</h5></center></th>';
					echo'  </tr>';
					echo'</thead>';
					echo'</table>';


					?>

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
