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
					<i class="fa fa-money"></i>
				</div>
				<div class="header-title">  
					<h1>VENTAS</h1>
					<small>Lista de ventas</small>
					<ol class="breadcrumb hidden-xs">
						<li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
						<li class="active">VENTAS</li>
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
												<label>Ventas registradas en el sistema <?php include'include_/nombre.php' ?></label>
											</div>
										</div>

										<div class="col-sm-6 col-xs-12">
											<div class="dataTables_length">
												<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
													<div class="input-group custom-search-form">
														<input type="search" class="form-control" id="buscando" name="buscando" placeholder="Busca ventas por fecha..">
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
												<th class="all">ID</th>
												<th class="min-perfil">MODERADOR</th>
												<th class="min-ip">REMITENTE</th>
												<th class="min-ip">CONCEPTO</th>
												<th class="min-totalcompra">VALOR</th>
												<th class="min-fechacompra">TELEFONO</th>
												<th class="min-fechacompra">PAIS</th>
												<th class="min-fechacompra">FECHA</th>
												<th class="min-fechacompra">ESTADO</th>
												<th class="">OPCIONES</th>
											</tr>
										</thead>
										<tbody>


											<?php

											require("../conexion_/conexion.php");

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


											$dinero_entradas="SELECT * FROM dinero_entrada WHERE fecha LIKE '%$q%' ORDER BY fecha ASC LIMIT $inicial,$limite";
											$entradas=mysqli_query($mysqli,$dinero_entradas);

											while ($entrada=mysqli_fetch_row ($entradas)){

												$id_entrada=$entrada[0];
												$id_moderador=$entrada[1]; 
												$remitente=$entrada[2];
												$concepto=$entrada[3]; 
												$valor=$entrada[4]; 
												$telefono=$entrada[5]; 
												$pais=$entrada[6];  
												$fecha=$entrada[7];  
												$estado=$entrada[8];  

												//USUARIO
												$usuario_="SELECT nombre FROM usuarios WHERE id_usuario='$id_moderador'";
												$u_usuario=mysqli_query($mysqli,$usuario_);
												while ($usuarios_v=mysqli_fetch_row ($u_usuario)){
													$nombre_u=$usuarios_v[0];
												}
												//USUARIO

												echo 
												'
												<tr>
												<td>'.htmlentities($id_entrada).'</td>
												<td>'.htmlentities($nombre_u).'</td>
												<td>'.htmlentities($remitente).'</td>
												<td>'.htmlentities($concepto).'</td>
												<td>$'.htmlentities(number_format($valor)).'</td>
												<td>'.htmlentities($telefono).'</td>
												<td>'.htmlentities($pais).'</td>
												<td>'.htmlentities($fecha).'</td>
												<td>
												';
												if($estado==0){

													echo '<div class="btn-warning btn btn-sm">PENDIENTE</div>';

												}else if($estado==1){

													echo '<div class="btn-success btn btn-sm">APROBADO</div>';

												}
												echo
												'
												</td>
												<td><a href="entradas-editar?id_entrada='.htmlentities($id_entrada).'#entradas-de-saldo-editar-economic"><div class="btn-info btn btn-sm">EDITAR</div></a></td>
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
										$ressql=mysqli_query($mysqli,$dinero_entradas);
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