<?php 

require("../conexion_/conexion.php");

$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=$_GET['xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'];


$validaciones=mysqli_query($mysqli,"SELECT * FROM usuarios where estado='3' and clave='$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'");
$validacion=mysqli_num_rows($validaciones);

if($validacion>0 ){

	?>


	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<?php
		require("../conexion_/conexion.php");
		$sql="SELECT titulo FROM configuracion ";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
			$titulo=$row[0];
		}

		echo '<title>'.$titulo.'</title>';
		?>

		<?php
		require("../conexion_/conexion.php");
		$sql="SELECT favicon FROM configuracion ";
		$ressql=mysqli_query($mysqli,$sql);
		while ($row=mysqli_fetch_row ($ressql)){
			$favicon=$row[0];
		}

		echo '<link rel="icon" type="text/css" href="img_/'.$favicon.'">';
		?>



		<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="../assets/css/bundle">
		<link rel="stylesheet" href="../assets/css/plugins.css">
		<link rel="stylesheet" href="../assets/css/style">
		<link rel="stylesheet" href="../assets/css/responsive.css">
		<link href="../css_/sweetalert2.min.css" rel="stylesheet" type="text/css">
		<script src="../assets/js/vendor/modernizr-2.8.3.min.js"></script>
	</head>
	<body oncontextmenu="return false" >

		<br>
		<br>

		<div class="error_section">
			<div class="container">
				<div class="row">
					<div class="col-12">

						<center><h2>RECUPERAR CONTRASEÑA</h2></center>

						<br>
						<br>

						<?php 

						$xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=$_GET['xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'];


						?>

						<form action="recover-true-true?xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh=<?php echo $_GET['xCBcDeFGHyYAcSDgSADcNfsaGYRsdSdSDSAeDSVVVsSAKIh'];?>" method="post">
							<div class="form-group">
								<label>Nueva contraseña<span class="required">*</span></label>
								<input type="text" class="form-control" name="clave_usuario" placeholder="Nueva contraseña" required>
							</div>
							<div class="form-group">
								<label>Repetir contraseña<span class="required">*</span></label>
								<input type="text" class="form-control" name="rclave_usuario" placeholder="Repetir la nueva contraseña" required>
							</div>
							<button type="submit" class="btn btn-success btn-block">Guardar</button>
						</form>

						<br>
						<br>

					</div>
				</div>
			</div>
		</div>



		<script src="../assets/js/vendor/jquery-1.12.0.min.js"></script>
		<script src="../assets/js/popper.js"></script>
		<script src="../assets/js/bootstrap.min.js"></script>
		<script src="../assets/js/plugins.js"></script>
		<script src="../assets/js/main.js"></script>
		<script src="../js_/sweetalert2.min.js"></script>
	</body>

	</html>

	<?php 

}else{

	echo "<script>location.href='../index'</script>";      

}

?>