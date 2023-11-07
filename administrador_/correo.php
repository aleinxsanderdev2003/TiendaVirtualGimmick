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
	<link href="assets/css/photo.css" rel="stylesheet" type="text/css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
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
					<i class="fa fa-envelope"></i>
				</div>
				<div class="header-title">  
					<h1>ENVIO DE CORREOS</h1>
					<small>Correos</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">CORREO</li>
					</ol>
				</div>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-bd lobidrag">

							<div class="panel-body">

								<?php 

								$nombre=$_GET['nombre'];
								$correo=$_GET['correo'];


								if($nombre==null && $correo==null){

									$nombrev="";
									$correov="";

								}else{

									$nombrev=$_GET['nombre'];
									$correov=$_GET['correo'];

								}

								?>


								<form action="validaciones_/_enviador_correos/mensaje.php" method="POST">
									<div class="card shadow-sm border-0 mb-4">
										<div class="card-body">
											<div class="row justify-content-center">
												<div class="col-md-12 ">

													<div class="row ">
														<div class="col-lg-6 col-md-6">
															<div class="form-group ">
																<label>Titulo del correo</label>
																<input type="text" class="form-control" id="titulo" name="titulo" placeholder="Ingresa el titulo">
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="form-group ">
																<label>Nombre</label>
																<input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $nombrev ?>" placeholder="Ingresa el nombre">
															</div>
														</div>
														<div class="col-lg-12 col-md-12">
															<div class="form-group ">
																<label>Correo</label>
																<input type="text" class="form-control" id="correo" name="correo" value="<?php echo $correov ?>" placeholder="Ingresa el correo">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-lg-12 col-md-12">
															<div class="form-group ">
																<label>Descripción</label>
																<textarea type="text" class="form-control" rows="5" id="descripcion" name="descripcion" placeholder="Ingresa la descripción"></textarea>
															</div>
														</div>
													</div>

													<br>

												</div>
											</div>
										</div>
										<div class="card-footer">
											<button type="submit" class="btn btn-primary btn-block">Enviar</button>
										</div>
									</div>
								</form>

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
	<script src="validaciones_/_entradas/js/entradas-agregar.js"></script>

</body>

</html>
