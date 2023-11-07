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

		$destino     = '../img_/';
		$foto1_nombre  = 'Logo'.md5(date('d-m-Y H:m:s'));
		$fotoproducto1 = $foto1_nombre.'.png';
		$src1        =$destino.$fotoproducto1;
	}
	/* Foto 1*/

	$query = "UPDATE configuracion SET logo='$fotoproducto1' WHERE id_config='$edit_true'";

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
					<h1>LOGO</h1>
					<small>LOGO</small>
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


									<?php


									$sql=("SELECT id_config , logo FROM configuracion ");

									$query=mysqli_query($mysqli,$sql);
									echo'<table class="table table-bordered table-hover">';
									echo'<thead>';
									echo'<tr class="info">';
									echo'<th>Logo</th>';
									echo'<th>Editar</th>';
									echo'</tr>';
									echo'</thead>';
									?>

									<?php 
									while($arreglo=mysqli_fetch_array($query)){
										echo "<tbody>";
										echo "<tr>";

										if(isset($_GET['edit'])){
											echo "<form action='logo?edit_true=".$arreglo[0]."' method='post' enctype='multipart/form-data'>";
											echo '<td>
											<input type="file" name="foto1" id="foto1" class="file" required>
											</td>';

										}else{

											echo "<td><center><img src='../img_/$arreglo[1]' width='250'></center></td>";

										}



										if(isset($_GET['edit'])){

											echo "<td><center><button type='submit' class='btn'><img src='../img_/editar2.png' width='60'></button><br><br><br><a href='logo'>VOLVER</a></center></td>";

											echo "</form>";


										}else{

											echo "<td><center><a href='logo?edit=true'><img src='../img_/editar.png' width='60'></a></center></td>";

										}


										echo "</tr>";
										echo "</tbody>";

									}

									echo "</table>";


									?>

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

</body>

</html>