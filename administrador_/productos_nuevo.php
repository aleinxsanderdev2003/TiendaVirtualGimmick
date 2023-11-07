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
					<i class="fa fa-shopping-bag"></i>
				</div>
				<div class="header-title">  
					<h1>NUEVO PRODUCTO</h1>
					<small>Agregar neuvo producto</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">PRODUCTOS</li>
					</ol>
				</div>
			</section>

			<section class="content">
				<div class="row">
					<div class="col-sm-12">
						<div class="panel panel-bd lobidrag">

							<div class="panel-body">


								<form class="col-sm-12">
									<div class="row">

										<div class="col-md-6">
											<label>Nombre</label>
											<input type="text" class="form-control" id="nombre" placeholder="Ingresa un nombre">
										</div>

										<div class="col-md-3">
											<label>Precio</label>
											<input type="number" class="form-control" id="precio" placeholder="Ingresa un precio">
										</div>

										<div class="col-md-3">
											<label>Stock</label>
											<input type="number" class="form-control" id="stock" placeholder="Stock del producto">
										</div>

									</div>

									<br>

									<div class="row">

										<div class="col-md-4">
											<label>Referencia</label>
											<input type="text" class="form-control" id="referencia" placeholder="Ingresa la referencia">
										</div>

										<div class="col-md-4">
											<label>Condición</label>
											<select class="form-control" id="condicion" size="1">
												<option value="">Ingresa...</option>
												<option value="Nuevo">Nuevo</option>
												<option value="Usado">Usado</option>
											</select>
										</div>

										<div class="col-md-4">
											<label>Categoria</label>
											<select class="form-control" id="categoria" size="1">
												<option value="">Ingresa...</option>
												<?php
												require("../conexion_/conexion.php");
												$sql=("SELECT * FROM categorias WHERE estado=0");
												$query=mysqli_query($mysqli,$sql);
												while($cate=mysqli_fetch_array($query)){
													$id_categoria = $cate['id_categoria'];
													$nombre = $cate['nombre'];
													echo '<option value="'.$id_categoria.'">'.$nombre.'</option>';
												}
												?>
											</select>
										</div>

									</div>

									<br>

									<div class="row">

										<div class="col-md-6">
											<label>Descuento</label>
											<select class="form-control" id="descuento" size="1">
												<option value="">Ingresa...</option>
												<option value="0.00">0%</option>
												<option value="0.10">10%</option>
												<option value="0.20">20%</option>
												<option value="0.30">30%</option>
												<option value="0.40">40%</option>
												<option value="0.50">50%</option>
											</select>
										</div>

										<div class="col-md-6">
											<label>Estrellas</label>
											<select class="form-control" id="estrellas" size="1">
												<option value="">Ingresa...</option>
												<option value="1">1</option>
												<option value="2">2</option>
												<option value="3">3</option>
												<option value="4">4</option>
												<option value="5">5</option>
											</select>
										</div>

									</div>

									<br>

									<div class="row">

										<div class="col-md-12">
											<label>Resumen</label>
											<textarea class="form-control" id="resumen" rows="5" placeholder="Ingresa un resumen corto"></textarea>
										</div>

									</div>

									<br>

									<div class="row">

										<div class="col-md-12">
											<label>Descripción</label>
											<textarea class="form-control" id="descripcion" rows="5" placeholder="Ingresa una descripción"></textarea>
										</div>

									</div>

									<br>

									<div class="row ">
										<div class="col-lg-12 col-md-12">
											<fieldset>
												<div class="row mostrar_foto">  

												</div>  
												<center><button type="button" id="agregar_foto" class="btn btn-primary">+</button></center>
											</fieldset>
										</div>
									</div>

									<br>

									<div class="reset button">
										<a type="button" id="agregar_productos" class="btn btn-success btn-block">Guardar</a>
									</div>
								</form>

							</div>

							<br>
							<br>

							<center><a href="#" data-toggle="modal" data-target="#codigos">CODIGOS</a></center>

							<br>
							<br>


							<!-- Modal -->
							<div class="modal fade" id="codigos" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
								<div class="modal-dialog" role="document">
									<div class="modal-content">
										<div class="modal-header">
											<h5 class="modal-title" id="exampleModalLabel">Codigos - modernos</h5>
											<button type="button" class="close" data-dismiss="modal" aria-label="Close">
												<span aria-hidden="true">&times;</span>
											</button>
										</div>
										<div class="modal-body">
											
											<div class="row">

												<div class="col-md-3">

													SUBIR IMAGEN
													<br>
													<br>
													<b>
													< img src="">
													</b>
												</div>

												<div class="col-md-3">

													NEGRILLA
													<br>
													<br>
													<b>
													< b> < /b>
													</b>
												</div>

												<div class="col-md-3">

													CENTRAR
													<br>
													<br>
													<b>
													< center> < /center>
													</b>
												</div>

												<div class="col-md-3">

													PONER COLOR
													<br>
													<br>
													<b>
													< font color=""> < /font>
													</b>
												</div>


											</div>


										</div>
										<div class="modal-footer">
											<button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
										</div>
									</div>
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
	<script src="validaciones_/_productos/js/productos-agregar.js"></script>

</body>

</html>
