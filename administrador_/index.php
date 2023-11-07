<?php

session_start();
if (@!$_SESSION['correo']) {
	header("Location:desconectar");
}elseif ($_SESSION['rol']==2) {
	header("Location:desconectar");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--------------TITLE--------------->
	<?php include'include_/titulo.php' ?>
	<!--------------TITLE--------------->

	<!-------------FAVICON--------------->
	<?php include'include_/favicon.php' ?>
	<!-------------FAVICON--------------->

	<link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
	<link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
	<link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/toastr/toastr.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/emojionearea/emojionearea.min.css" rel="stylesheet" type="text/css"/>
	<link href="assets/plugins/monthly/monthly.css" rel="stylesheet" type="text/css"/>
	<link href="assets/dist/css/stylehealth.min" rel="stylesheet" type="text/css"/>

</head>

<body class="hold-transition sidebar-mini">
	<div class="wrapper">

		<!-------------HEADER-------------->
		<?php include'include_/header.php' ?>
		<!-------------HEADER-------------->


		<!-------------ASIDE-------------->
		<?php include'include_/aside.php' ?>
		<!-------------ASIDE-------------->

		<div class="content-wrapper">

			<section class="content-header">  
				<div class="header-icon">
					<i class="fa fa-tachometer"></i>
				</div>
				<div class="header-title">
					<h1>
						
						<!-------------NOMBRE-------------->
						<?php include'include_/nombre.php' ?>
						<!-------------NOMBRE-------------->

					</h1>
					<small> 

						<!-------------NOMBRE-------------->
						<?php include'include_/nombre.php' ?>
						<!-------------NOMBRE-------------->

					</small>
					<ol class="breadcrumb hidden-xs">
						<li class="active">
							
							<!-------------NOMBRE-------------->
							<?php include'include_/nombre.php' ?>
							<!-------------NOMBRE-------------->

						</li>
					</ol>
				</div>
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
						<div class="panel panel-bd cardbox">
							<div class="panel-body">
								<div class="statistic-box">
									<h2><span class="count-number">

										<?php
										require("../conexion_/conexion.php");
										$r = mysqli_query($mysqli, "SELECT COUNT(id_usuario) AS suma FROM usuarios WHERE rol='2' ");
										$f = mysqli_fetch_assoc($r);
										echo $f["suma"];
										?>


									</span>
								</h2>
							</div>
							<div class="items pull-left">
								<i class="fa fa-users fa-2x"></i>
								<h4>Clientes </h4>
							</div>
						</div>
					</div>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
					<div class="panel panel-bd cardbox">
						<div class="panel-body">
							<div class="statistic-box">
								<h2><span class="count-number">
									
									<?php
									require("../conexion_/conexion.php");
									$r = mysqli_query($mysqli, "SELECT COUNT(id_producto) AS suma FROM productos ");
									$f = mysqli_fetch_assoc($r);
									echo $f["suma"];
									?>

								</span>
							</h2>
						</div>
						<div class="items pull-left">
							<i class="fa fa-shopping-bag fa-2x"></i>
							<h4>Productos</h4>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
				<div class="panel panel-bd cardbox">
					<div class="panel-body">
						<div class="statistic-box">
							<h2><span class="count-number">
								

								<?php
								require("../conexion_/conexion.php");
								$r = mysqli_query($mysqli, "SELECT COUNT(id_entrada) AS suma FROM dinero_entrada ");
								$f = mysqli_fetch_assoc($r);
								echo $f["suma"];
								?>


							</span>
						</h2>
					</div>
					<div class="items pull-left">
						<i class="fa fa-money fa-2x"></i>
						<h4>Ventas</h4>
					</div>
				</div>
			</div>
		</div>
		<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
			<div class="panel panel-bd cardbox">
				<div class="panel-body">
					<div class="statistic-box">
						<h2><span class="count-number">
							
							<?php
							require("../conexion_/conexion.php");
							$r = mysqli_query($mysqli, "SELECT COUNT(id_pedido) AS suma FROM pedido WHERE estado='0' or estado='1' ");
							$f = mysqli_fetch_assoc($r);
							echo $f["suma"];
							?>

						</span>
					</h2>
				</div>
				<div class="items pull-left">
					<i class="fa fa-columns fa-2x"></i>
					<h4>Pedidos</h4>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
		<div class="panel panel-bd cardbox">
			<div class="panel-body">
				<div class="statistic-box">
					<h2><span class="count-number">
						
						<?php
						require("../conexion_/conexion.php");
						$r = mysqli_query($mysqli, "SELECT COUNT(id_banner) AS suma FROM banners ");
						$f = mysqli_fetch_assoc($r);
						echo $f["suma"];
						?>

					</span>
				</h2>
			</div>
			<div class="items pull-left">
				<i class="fa fa-sitemap fa-2x"></i>
				<h4>Banners</h4>
			</div>
		</div>
	</div>
</div>
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
	<div class="panel panel-bd cardbox">
		<div class="panel-body">
			<div class="statistic-box">
				<h2><span class="count-number">
					

					<?php
					require("../conexion_/conexion.php");
					$r = mysqli_query($mysqli, "SELECT COUNT(id_boletin) AS suma FROM boletines ");
					$f = mysqli_fetch_assoc($r);
					echo $f["suma"];
					?>

				</span>
			</h2>
		</div>
		<div class="items pull-left">
			<i class="fa fa-envelope fa-2x"></i>
			<h4>Boletines</h4>
		</div>
	</div>
</div>
</div>
</div>

<div class="row">

	<div class="col-xs-12 col-sm-6">
		<div class="panel panel-bd">
			<div class="panel-heading">
				<div class="panel-title">
					<center><h4><b>PEDIDOS PENDIENTES</b></h4></center>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th>#</th>
								<th>Usuario</th>
								<th>Ip</th>
								<th>Total</th>
								<th>Fecha</th>
								<th>estado</th>
							</tr>
						</thead>
						<tbody>

							<?php

							require("../conexion_/conexion.php");

							$pedidos="SELECT * FROM pedido WHERE estado='0' or estado='1' LIMIT 10";
							$pedidos_=mysqli_query($mysqli,$pedidos);

							while ($pedido=mysqli_fetch_row ($pedidos_)){

								if($pedido[5]==0 || $pedido[5]==1){


									$id_pedido  = $pedido[0];
									$id_usuario = $pedido[1];
									$ip = $pedido[2];
									$total = $pedido[3];
									$fecha = $pedido[4];
									$estado = $pedido[5];


									//USUARIO
									$usuario_="SELECT nombre, apellido FROM usuarios WHERE id_usuario='$id_usuario'";
									$u_usuario=mysqli_query($mysqli,$usuario_);
									while ($usuarios_v=mysqli_fetch_row ($u_usuario)){
										$nombre=$usuarios_v[0];
										$apellido=$usuarios_v[1];
									}
									//USUARIO

									echo 
									'
									<tr>
									<td>'.htmlentities($id_pedido).'</td>
									<td>'.htmlentities($nombre).' '.htmlentities($apellido).'</td>
									<td>'.htmlentities($ip).'</td>
									<td>'.htmlentities(number_format($total)).'</td>
									<td>'.htmlentities($fecha).'</td>
									';
									if($estado==0){

										echo '<td><span class="badge light badge-success">En espera</span></td>';


									}else if($estado==1){

										echo '<td><span class="badge light badge-success">En espera</span></td>';


									}

									echo
									'
									</tr>

									';

								}else{


								}

							}

							?>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>


	<div class="col-xs-12 col-sm-6">
		<div class="panel panel-bd">
			<div class="panel-heading">
				<div class="panel-title">
					<center><h4><b>ULTIMAS VENTAS</b></h4></center>
				</div>
			</div>
			<div class="panel-body">
				<div class="table-responsive">
					<table id="dataTableExample2" class="table table-bordered table-striped table-hover">
						<thead>
							<tr>
								<th class="all">ID</th>
								<th class="min-ip">REMITENTE</th>
								<th class="min-totalcompra">VALOR</th>
								<th class="min-fechacompra">FECHA</th>
								<th class="min-fechacompra">ESTADO</th>
							</tr>
						</thead>
						<tbody>


							<?php

							require("../conexion_/conexion.php");


							$dinero_entradas="SELECT * FROM dinero_entrada LIMIT 10";
							$entradas=mysqli_query($mysqli,$dinero_entradas);

							while ($entrada=mysqli_fetch_row ($entradas)){

								$id_entrada=$entrada[0];
								$id_moderador=$entrada[1]; 
								$remitente=$entrada[2];
								$concepto=$entrada[3]; 
								$valor=$entrada[4]; 
								$telefono=$entrada[5]; 
								$pais=$entrada[6];  
								$fecha=$entrada[7];  
								$estado=$entrada[8];  

												//USUARIO
								$usuario_="SELECT nombre FROM usuarios WHERE id_usuario='$id_moderador'";
								$u_usuario=mysqli_query($mysqli,$usuario_);
								while ($usuarios_v=mysqli_fetch_row ($u_usuario)){
									$nombre_u=$usuarios_v[0];
								}
												//USUARIO

								echo 
								'
								<tr>
								<td>'.htmlentities($id_entrada).'</td>
								<td>'.htmlentities($remitente).'</td>
								<td>$'.htmlentities(number_format($valor)).'</td>
								<td>'.htmlentities($fecha).'</td>
								<td>
								';
								if($estado==0){

									echo '<div class="btn-warning btn btn-sm">PENDIENTE</div>';

								}else if($estado==1){

									echo '<div class="btn-success btn btn-sm">APROBADO</div>';

								}
								echo
								'
								</td>
								</tr>
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
</section>

</div> 

<!--------------FOOTER-------------->
<?php include'include_/footer.php' ?>
<!--------------FOOTER-------------->

</div> 

<script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
<script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
<script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
<script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
<script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
<script src="assets/dist/js/custom1.js" type="text/javascript"></script>
<script src="assets/plugins/toastr/toastr.min.js" type="text/javascript"></script>
<script src="assets/plugins/sparkline/sparkline.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/waypoints.js" type="text/javascript"></script>
<script src="assets/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
<script src="assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
<script src="assets/plugins/emojionearea/emojionearea.min.js" type="text/javascript"></script>
<script src="assets/plugins/monthly/monthly.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/d3.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/topojson.min.js" type="text/javascript"></script>
<script src="assets/plugins/datamaps/datamaps.all.min.js" type="text/javascript"></script>
<script src="assets/dist/js/custom.js" type="text/javascript"></script>

</body>

</html>