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
					<center><h1><b>MIS COMPRAS</b></h1></center>
				</div>
			</div>
		</div>
	</div>


	<div class="categorie_details">
		<div class="container">
			<div class="row">

				<div class="col-lg-12 col-md-12">

					<div class="table-responsive">
						<table class="table">
							<thead class="thead-dark">
								<tr>
									<th scope="col">Aprobador</th>
									<th scope="col">Fecha</th>
									<th scope="col">Total</th>
									<th scope="col">Estado</th>
									<th scope="col">Detalle</th>
								</tr>
							</thead>
							<tbody>


								<?php 

								$id_usuario=$_SESSION['id_usuario'];

								$query = mysqli_query($mysqli, "SELECT * FROM pedido where id_usuario='$id_usuario'");

								$result = 0;
								$result = mysqli_num_rows($query);
								if ($result > 0) {

									while ($data=mysqli_fetch_array($query)){
										$id_pedido = $data["id_pedido"];
										$ip = $data["ip"];
										$total = $data["total"];
										$fecha  = $data["fecha"];
										$estado = $data["estado"];

										echo '

										<tr>
										<th scope="row">'.htmlentities($ip).'</th>
										<td>'.htmlentities($fecha).'</td>
										<td>$ '.htmlentities(number_format($total)).'</td>

										';
										if($estado==0){

											echo 
											'
											<td><font color="1E3CB8">PENDIENTE</font></td>
											';

										}else if($estado==1){

											echo 
											'
											<td><font color="136000">APROBADA</font></td>
											';

										}else if($estado==2){

											echo 
											'
											<td><font color="136000">ENTREGADO</font></td>
											';

										}else{

											echo 
											'
											<td>RECHAZADO</td>
											';

										}


										if($estado==0){

											echo 
											'
											<td><button class="btn btn-info">PENDIENTE</button></td>
											';

										}else if($estado==1){

											echo 
											'
											<td><a href="mis-compras-detalle?detail='.htmlentities($ip).'&details='.htmlentities($fecha).'&detail='.htmlentities($estado).'&i='.htmlentities($id_pedido).'"><button class="btn btn-success">VER DETALLE</button></a></td>
											';

										}else if($estado==2){

											echo 
											'
											<td><a href="mis-compras-detalle?detail='.htmlentities($ip).'&details='.htmlentities($fecha).'&detail='.htmlentities($estado).'&i='.htmlentities($id_pedido).'"><button class="btn btn-success">VER DETALLE</button></a></td>
											';

										}else{

											echo 
											'
											<td><button class="btn btn-danger">RECHAZADO</button></td>
											';

										}


										echo'

										</div>
										';
									}

								}else{

									echo 
									'
									<br>
									<center>
									<font color="black" size="5">NO SE ENCONTRO TEMAS COMPRADOS EN TU CUENTA</font>
									<br>
									<br>
									<p>No pudimos encontrar ninguna plantilla comprada en nuestra plataforma.</p>
									</center>
									';


								}

								?>

							</tbody>
						</table>
					</div>

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
