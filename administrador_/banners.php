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
					<h1>BANNERS</h1>
					<small>Lista de banners</small>
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

								<div class="row">
									<div class="panel-header">

										<div class="col-sm-6 col-xs-12">
											<div class="dataTables_length">
												<label>Banners registrados en el sistema <?php include'include_/nombre.php' ?></label>
											</div>
										</div>

									</div>
								</div>

								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th class="all">ID</th>
												<th class="min-perfil">IMAGEN</th>
												<th class="min-ip">CATEGORIA</th>
												<th class="min-ip">TEXTO 1</th>
												<th class="min-totalcompra">TEXTO 2</th>
												<th class="min-fechacompra">BOTON</th>
												<th class="">OPCIONES</th>
											</tr>
										</thead>
										<tbody>


											<?php

											require("../conexion_/conexion.php");


											$banners="SELECT * FROM banners ";
											$banners_=mysqli_query($mysqli,$banners);

											while ($bann=mysqli_fetch_row ($banners_)){

												$id_banner=$bann[0];
												$imagen=$bann[1]; 
												$categoria=$bann[2];
												$texto_one=$bann[3]; 
												$texto_two=$bann[4]; 
												$boton=$bann[5];   
												$estado=$bann[6];  


												echo 
												'
												<tr>
												<td>'.htmlentities($id_banner).'</td>
												<td><img src="../img_/img_banners/'.htmlentities($imagen).'" width="100"></td>
												<td>'.htmlentities($categoria).'</td>
												<td>'.htmlentities($texto_one).'</td>
												<td>'.htmlentities($texto_two).'</td>
												<td><a href="../'.htmlentities($boton).'" target="_black"><button class="btn btn-info" style="background-color: #B57102; border: none;">BOTON</button></a></td>
												<td><a href="validaciones_/_banners/eliminar-banner?id_banner='.htmlentities($id_banner).'#entradas-de-saldo-editar-economic"><div class="btn-info btn btn-sm">ELIMINAR</div></a></td>
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

</body>

</html>