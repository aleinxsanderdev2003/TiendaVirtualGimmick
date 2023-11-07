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
	<link href="assets/dist/css/stylehealth.min" rel="stylesheet" type="text/css"/>
	<link href="assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">

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
					<i class="fa fa-gear"></i>
				</div>
				<div class="header-title">  
					<h1>NOMBRE</h1>
					<small>NOMBRE</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">NOMBRE</li>
					</ol>
				</div>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-bd lobidrag">
							<div class="panel-body">


								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th class="all">NOMBRE DEL SISTEMA </th>
												<th class="min-ip">EDITAR</th>
											</tr>
										</thead>
										<tbody>


											<?php

											require("../conexion_/conexion.php");



											$configuracion="SELECT id_config, nombre FROM configuracion";
											$configuracion_=mysqli_query($mysqli,$configuracion);

											while ($config=mysqli_fetch_row ($configuracion_)){

												$id_config=$config[0];
												$nombre=$config[1]; 

												echo 
												'
												<tr>
												<td><input type="text" id="nombre" class="form-control" value="'.htmlentities($nombre).'"></td>
												<td>
												<button type="button" id="nombre-editar"><img src="../img_/editar.png" width="50"></button>
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
	<script src="assets/dist/js/custom.js" type="text/javascript"></script>
	<script src="assets/js/sweetalert2.min.js"></script>
	<script src="validaciones_/_configuracion/js/nombre-editar.js"></script>

</body>

</html>