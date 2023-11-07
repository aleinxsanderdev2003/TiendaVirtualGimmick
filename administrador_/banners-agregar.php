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
					<i class="fa fa-sitemap"></i>
				</div>
				<div class="header-title">  
					<h1>EDITAR BANNERS</h1>
					<small>Editar banners</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">BANNERS</li>
					</ol>
				</div>
			</section>


			<section class="content">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-bd lobidrag">

							<div class="panel-body">

								<form action="validaciones_/_banners/agregar-banner" method="POST" enctype="multipart/form-data">
									<div class="card shadow-sm border-0 mb-4">
										<div class="card-body">
											<div class="row justify-content-center">
												<div class="col-md-10 ">

													<div class="row ">
														<div class="col-lg-6 col-md-6">
															<div class="form-group ">
																<label>Imagen</label>
																<input type="file" name="foto1" class="file" required >
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="form-group ">
																<label>Categoria</label>
																<input type="text" class="form-control number" name="categoria" placeholder="Ingresa la categoria">
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-lg-6 col-md-6">
															<div class="form-group ">
																<label>TEXTO 1</label>
																<textarea type="text" class="form-control" rows="5" name="texto_one" placeholder="Ingresa el titulo"></textarea>
															</div>
														</div>
														<div class="col-lg-6 col-md-6">
															<div class="form-group ">
																<label>TEXTO 2</label>
																<textarea type="text" class="form-control" rows="5" name="texto_two" placeholder="Ingresa el subtitulo"></textarea>
															</div>
														</div>
													</div>
													<div class="row ">
														<div class="col-lg-6 col-md-6">
															<div class="form-group ">
																<label>Boton</label>
																<input type="text" class="form-control" name="boton" value="shop?to=products" placeholder="Ingresa el link del boton">
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="card-footer">
											<a href="banners"><button class="btn btn-outline-primary">Cancelar</button></a>
											<button type="submit"  class="btn btn-primary float-right">Agregar</button>
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

</body>

</html>
