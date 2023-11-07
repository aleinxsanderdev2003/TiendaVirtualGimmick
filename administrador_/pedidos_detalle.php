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
					<i class="fa fa-columns"></i>
				</div>
				<div class="header-title">  
					<h1>DETALLE DE PEDIDO</h1>
					<small>Detalle del pedido</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">PEDIDO</li>
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
												<label>Detalle del pedido registrado en el sistema <?php include'include_/nombre.php' ?></label>
											</div>
										</div>

										<div class="col-sm-6 col-xs-12">
											<div class="dataTables_length">
												<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
													<div class="input-group custom-search-form">
														<input type="search" class="form-control" id="buscando" name="buscando" placeholder="Busca detalle del pedido por la fecha">
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
												<th># de pedido</th>
												<th>Usuario</th>
												<th>Producto</th>
												<th>Precio unidad</th>
												<th>Cantidad</th>
												<th>Fecha</th>
												<th>estado</th>
												<th>Envio</th>
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

											$pedido_g=$_GET['id'];

											$pedidos="SELECT * FROM pedido_detalle WHERE id_pedido='$pedido_g' and fecha LIKE '%$q%' LIMIT $inicial,$limite";
											$pedidos_=mysqli_query($mysqli,$pedidos);

											while ($pedido=mysqli_fetch_row ($pedidos_)){

												$id_detalle  = $pedido[0];
												$id_pedido = $pedido[1];
												$id_usuario = $pedido[2];
												$id_producto = $pedido[3];
												$precio = $pedido[4];
												$fecha = $pedido[5];
												$estado = $pedido[6];
												$cantidad = $pedido[7];


												//USUARIO
												$usuario_="SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
												$u_usuario=mysqli_query($mysqli,$usuario_);
												while ($usuarios_v=mysqli_fetch_row ($u_usuario)){
													$nombre=$usuarios_v[1];
													$apellido=$usuarios_v[2];
													$correo=$usuarios_v[3];
													$telefono=$usuarios_v[4];
													$departamento=$usuarios_v[9];
													$direccion_one=$usuarios_v[10];
													$direccion_two=$usuarios_v[11];
												}
												//USUARIO


												//PRODUCTO
												$productos="SELECT nombre FROM productos WHERE id_producto='$id_producto'";
												$productos_=mysqli_query($mysqli,$productos);
												while ($producto_v=mysqli_fetch_row ($productos_)){
													$nombre_producto=$producto_v[0];

													$guiones = str_replace(" ", "-", $nombre_producto);
												}
												//PRODUCTO

												//IMAGENES
												$imagenes_p="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
												$p_imagenes=mysqli_query($mysqli,$imagenes_p);
												while ($imagenes_v=mysqli_fetch_row ($p_imagenes)){
													$imagen_principal=$imagenes_v[0];
												}
												//IMAGENES

												echo 
												'
												<tr>
												<td>'.htmlentities($id_pedido).'</td>
												<td>'.htmlentities($nombre).' '.htmlentities($apellido).'</td>
												<td><a href="../detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto).'" target="_black"><img src="../img_/img_productos/'.htmlentities($imagen_principal).'" width="250" alt=""></a></td>
												<td>$ '.htmlentities(number_format($precio)).'</td>
												<td>'.htmlentities($cantidad).'</td>
												<td>'.htmlentities($fecha).'</td>
												';
												if($estado==0){

													echo '<td><span class="badge light badge-success">En espera</span></td>';

													echo '
													<td>

													<a href="validaciones_/_pedidos/pedidos-enviado?id='.htmlentities($id_detalle).'&pedido='.htmlentities($id_pedido).'"><button class="btn btn-danger" style="background-color: #017903; border: none;">ENVIADO..</button></a>

													</td>';


												}else if($estado==1){

													echo '<td><span class="badge light badge-danger">Enviado</span></td>';

													echo '<td><img src="../img_/envios.png" width="30"></button></td>';

												}else if($estado==2){

													echo '<td><span class="badge light badge-danger">Entregado</span></td>';

													echo '<td><img src="../img_/bien.png" width="30"></button></td>';
												}

												echo
												'
												</tr>

												';

												

											}

											?>
										</tbody>
									</table>
								</div>
								<div class="page-nation text-right">
									<ul class="pagination pagination-large">
										<?php 
										$ressql=mysqli_query($mysqli,$pedidos);
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

								<br>
								<br>


								<div class="row">


									<?php 

									//USUARIO
									$usuario_="SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
									$u_usuario=mysqli_query($mysqli,$usuario_);
									while ($usuarios_v=mysqli_fetch_row ($u_usuario)){
										$nombre=$usuarios_v[1];
										$apellido=$usuarios_v[2];
										$correo=$usuarios_v[3];
										$telefono=$usuarios_v[4];
										$ip=$usuarios_v[8];
										$departamento=$usuarios_v[9];
										$direccion_one=$usuarios_v[10];
										$direccion_two=$usuarios_v[11];
									}
									//USUARIO


									?>

									<div class="col-md-6">

										<center><h2>DETALLE DEL USUARIO</h2></center>

										<form class="col-sm-12">
											<div class="row">

												<div class="col-md-6">
													<label>Nombre</label>
													<input type="text" class="form-control" value="<?php echo $nombre ?>" readonly>
												</div>

												<div class="col-md-6">
													<label>Apellido</label>
													<input type="text" class="form-control" value="<?php echo $apellido ?>" readonly>
												</div>

											</div>

											<br>

											<div class="row">

												<div class="col-md-6">
													<label>Correo</label>
													<input type="text" class="form-control" value="<?php echo $correo ?>" readonly>
												</div>

												<div class="col-md-6">
													<label>Telefono</label>
													<input type="text" class="form-control" value="<?php echo $telefono ?>" readonly>
												</div>

											</div>

											<br>

										</form>

									</div>


									<div class="col-md-6">

										<center><h2>DETALLE DEL ENVIO</h2></center>

										<form class="col-sm-12">

											<div class="row">

												<div class="col-md-6">
													<label>Departamento de envio</label>
													<input type="text" class="form-control" value="<?php echo $departamento ?>" readonly>
												</div>

												<div class="col-md-6">
													<label>Ip</label>
													<input type="text" class="form-control" value="<?php echo $ip ?>" readonly>
												</div>

											</div>

											<br>

											<div class="row">

												<div class="col-md-6">
													<label>Dirección de envio</label>
													<input type="text" class="form-control" value="<?php echo $direccion_one ?>" readonly>
												</div>

												<div class="col-md-6">
													<label>Mas información para el envio</label>
													<input type="text" class="form-control" value="<?php echo $direccion_two ?>" readonly>
												</div>

											</div>

											<br>

										</form>

									</div>

								</div>


								<br>

								<?php

								$r = mysqli_query($mysqli, "SELECT SUM(precio*cantidad) AS suma FROM pedido_detalle WHERE id_pedido='$id_pedido'");
								$f = mysqli_fetch_assoc($r);

								echo'<center><h3 style="color: black;">TOTAL DE LA COMPRA: <br><br> $'. number_format($f["suma"]).'</h3></center>';

								?>

								<br>

								<?php 

								$pedidos="SELECT * FROM pedido WHERE fecha LIKE '%$q%' LIMIT $inicial,$limite";
								$pedidos_=mysqli_query($mysqli,$pedidos);

								while ($pedido=mysqli_fetch_row ($pedidos_)){

									$estado_pd = $pedido[5];

								}


									if($estado_pd==2){

										echo '<button class="btn btn-success btn-block" style="background-color: #36B502; border: none;">PEDIDO ENTREGADO CON EXITO</button>';

									}else{

										echo '<a href="validaciones_/_pedidos/pedidos-entregado?pedido='.$_GET['id'].'?>"><button class="btn btn-success btn-block" style="background-color: #0281B5; border: none;">ENTREGADO Y RECIBIDO</button></a>';
									}


									?>

									

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