<?php

session_start();
if (@!$_SESSION['correo']) {
	header("Location:desconectar");
}elseif ($_SESSION['rol']==2) {
	header("Location:desconectar");
}


if(isset($_GET['edit_true'])){

	include("../conexion_/conexion.php");

	$edit_true=$_GET['edit_true'];

	/* Foto 1*/
	$foto1        = $_FILES['foto1'];
	$nombre_foto1 = $foto1['name'];
	$type         = $foto1['type'];
	$url_temp1    = $foto1['tmp_name'];

	$fotoproducto1 = 'defect.png';

	if ($nombre_foto1 != '') {

		$destino     = '../images/';
		$foto1_nombre  = 'Logo'.md5(date('d-m-Y H:m:s'));
		$fotoproducto1 = $foto1_nombre.'.png';
		$src1        =$destino.$fotoproducto1;
	}
	/* Foto 1*/

	$query = "UPDATE configuracion SET logo='$fotoproducto1' WHERE id_configuracion='$edit_true'";

	$resul = $mysqli->query($query);
	if($resul){


		if($query){

			if ($nombre_foto1 != ''){
				move_uploaded_file($url_temp1, $src1);
			}


			echo "<script>location.href='logo'</script>";

		}

	}

	else{

		echo '<script>location.href="logo"</script>';


	}

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
					<h1>LOGO Y ICONO</h1>
					<small>PLATAFORMA</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">LOGO</li>
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
												<th class="all">LOGO </th>
												<th class="min-ip">EDITAR</th>
											</tr>
										</thead>
										<tbody>


											<?php

											require("../conexion_/conexion.php");



											$configuracion="SELECT id_config, pie_pagina FROM configuracion";
											$configuracion_=mysqli_query($mysqli,$configuracion);

											while ($config=mysqli_fetch_row ($configuracion_)){

												$id_config=$config[0];
												$pie_pagina=$config[1]; 

												echo 
												'
												<tr>
												<td><input type="text" id="pie_pagina" class="form-control" value="'.htmlentities($pie_pagina).'"></td>
												<td>
												<button type="button" id="pie_pagina-editar"><img src="../img_/editar.png" width="50"></button>
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
	<script src="validaciones_/_configuracion/js/pie_pagina-editar.js"></script>

</body>

</html>