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
	$color=$_POST['color'];
	$query = "UPDATE configuracion SET color='$color' WHERE id_config='$edit_true'";

	$resul = $mysqli->query($query);
	if($resul){

		echo "<script>location.href='color'</script>";

	}

	else{

		echo '<script>location.href="color"</script>';


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
					<h1>COLOR</h1>
					<small>COLOR</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">COLOR</li>
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


									$sql=("SELECT id_config, color FROM configuracion ");

									$query=mysqli_query($mysqli,$sql);
									echo'<table class="table table-bordered table-hover">';
									echo'<thead>';
									echo'<tr class="info">';
									echo'<th>#</th>';
									echo'<th>Color</th>';
									echo'<th>Editar</th>';
									echo'</tr>';
									echo'</thead>';
									?>

									<?php 
									while($arreglo=mysqli_fetch_array($query)){
										echo "<tbody>";
										echo "<tr>";

										echo "<td>$arreglo[0]</td>";

										if(isset($_GET['edit'])){
											echo "<form action='color?edit_true=".$arreglo[0]."' method='post'>";
											echo "<td><input type='color' name='color' style='width: 100px;' value='$arreglo[1]' required></td>";

										}else{

											echo "<td><div style='color: $arreglo[1]'><b>$arreglo[1]</b></div></td>";

										}



										if(isset($_GET['edit'])){

											echo "<td><center><button type='submit' class='btn'><img src='../img_/editar2.png' width='40'></button></center></td>";

											echo "</form>";


										}else{

											echo "<td><center><a href='color?edit=true'><img src='../img_/editar.png' width='40'></a></center></td>";

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