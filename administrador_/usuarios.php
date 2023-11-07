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
					<i class="fa fa-user"></i>
				</div>
				<div class="header-title">  
					<h1>USUARIOS</h1>
					<small>Lista de usuarios</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">USUARIOS</li>
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
												<label>Usuarios registrados en el sistema <?php include'include_/nombre.php' ?></label>
											</div>
										</div>

										<div class="col-sm-6 col-xs-12">
											<div class="dataTables_length">
												<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
													<div class="input-group custom-search-form">
														<input type="search" class="form-control" id="buscando" name="buscando" placeholder="Busca usuarios por nombre, correo, telefono o ip..">
														<span class="input-group-btn">
															<button class="btn btn-primary" type="button">
																<span class="glyphicon glyphicon-search"></span>
															</button>
														</span>
													</div>
												</form>
											</div>
										</div>

									</div>
								</div>

								<div class="table-responsive">
									<table class="table table-bordered table-hover">
										<thead>
											<tr>
												<th>#</th>
												<th>Nombre</th>
												<th>Correo</th>
												<th>Telefono</th>
												<th>Fecha registro</th>
												<th>Departamento</th>
												<th>Direccion</th>
												<th>Ip</th>
												<th>Estado</th>
												<th>Opciones</th>
												<th>Mensaje</th>
											</tr>
										</thead>
										<tbody>

											<?php

											$q = "";

											if(!empty($_POST))
											{
												$q = $_POST['buscando'];
											}

											if(isset($_GET['pag']) == TRUE){ 
												$pag = $_GET['pag']; 
											} 

											else{ 
												$pag = 0; 
											} 

											$limite = 40; 

											$inicial = $pag * $limite; 

											$resultados_mostrados=0;

											require("../conexion_/conexion.php");

											$usuarios="SELECT * FROM usuarios WHERE nombre LIKE '%$q%' or correo LIKE '%$q%' or telefono LIKE '%$q%' or ip LIKE '%$q%' LIMIT $inicial,$limite";
											$usuario_=mysqli_query($mysqli,$usuarios);

											while ($user=mysqli_fetch_row ($usuario_)){
												if($user[13]==2){

													$id_usuario = $user[0];
													$nombre = $user[1];
													$apellido = $user[2];
													$correo = $user[3];
													$telefono = $user[4];
													$clave = $user[5];
													$fecha_registro = $user[6];
													$ultima_conexion = $user[7];
													$ip = $user[8];
													$departamento = $user[9];
													$direccion_one = $user[10];
													$direccion_two = $user[11];
													$estado = $user[12];
													$rol = $user[13];

													echo 
													'
													<tr>
													<td>'.htmlentities($id_usuario).'</td>
													<td>'.htmlentities($nombre).' '.htmlentities($apellido).'</td>
													<td>'.htmlentities($correo).'</td>
													<td>'.htmlentities($telefono).'</td>
													<td>'.htmlentities($fecha_registro).'</td>
													<td>'.htmlentities($departamento).'</td>
													<td>'.htmlentities($direccion_one).', '.htmlentities($direccion_two).'</td>
													<td>'.htmlentities($ip).'</td>
													';
													if($estado==0){

														echo '<td><span class="badge light badge-success">Activo</span></td>';

													}else if($estado==1){

														echo '<td><span class="badge light badge-danger">Bloqueado</span></td>';

													}

													if($estado==0){

														echo '<td>

														<a href="validaciones_/_usuarios/usuarios-activo?id='.htmlentities($id_usuario).'#tienda"><button class="btn btn-danger" style="background-color: #C60909;">Bloquear</button></a>

														</td>';

													}else if($estado==1){

														echo '<td>

														<a href="validaciones_/_usuarios/usuarios-inactivo?id='.htmlentities($id_usuario).'#tienda"><button class="btn btn-info" style="background-color: #1A6FBF;">Desbloquear</button></a>

														</td>';

													}
													echo
													'
													<td>
													<a href="correo?correo='.$correo.'&nombre='.$nombre.'"><button class="btn" style="background-color: #036B77; border: none; color: white;">ENVIAR CORREO</button></a>
													</td>

													</tr>

													';

												}else{

												}

											}

											?>
										</tbody>
									</table>
								</div>
								<div class="page-nation text-right">
									<ul class="pagination pagination-large">
										<?php 
										$ressql=mysqli_query($mysqli,$usuarios);
										while ($row=mysqli_fetch_row ($ressql)){

											$resultados_mostrados++; 
										}



										if ($pag > 0)  
										{  

											$anterior = $pag - 1; 
											echo "<li><a href='?pag=$anterior'><span>«</span></a></li>";  
										}else{

											echo '<li class="disabled"><span>«</span></li>';
										}   


										for ($i = 0; $i<($pag + 1); $i++) { 

											if($i==$pag){

												echo "<li class='active'><a href='?pag=".$i."&op=1'>".$i."</a></li> "; 

											}else{

												echo "<li><a href='?pag=".$i."&op=1'>".$i."</a></li> "; 

											}

											

										} 


										if ($resultados_mostrados == $limite)  
										{  

											$siguiente = $pag + 1;  
											echo "<li><a href='?pag=$siguiente'><span>»</span></li>";
										}else{

											echo '<li class="disabled"><span>»</span></li>';
										}  

										?>
									</ul>
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