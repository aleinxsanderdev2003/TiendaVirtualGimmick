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
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<link href="assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">

</head>

<script type="text/javascript">
	
	$( document ).ready(function() {
		$('#Modal').modal('toggle')
	});

</script>

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
					<h1>PRODUCTOS</h1>
					<small>Lista de productos</small>
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

								<div class="row">
									<div class="panel-header">

										<div class="col-sm-6 col-xs-12">
											<div class="dataTables_length">
												<label>Productos registrados en el sistema <?php include'include_/nombre.php' ?></label>
											</div>
										</div>

										<div class="col-sm-6 col-xs-12">
											<div class="dataTables_length">
												<form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
													<div class="input-group custom-search-form">
														<input type="search" class="form-control" id="buscando" name="buscando" placeholder="Busca usuarios por nombre, descripción, referencia o condición..">
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
												<th>Stock</th>
												<th>Precio</th>
												<th>Referencia</th>
												<th>Condición</th>
												<th>Descuento</th>
												<th>Estado</th>
												<th>Opciones</th>
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

											$productos="SELECT * FROM productos WHERE nombre LIKE '%$q%' or descripcion LIKE '%$q%' or referencia LIKE '%$q%' or condicion LIKE '%$q%' LIMIT $inicial,$limite";
											$productos_=mysqli_query($mysqli,$productos);

											while ($product=mysqli_fetch_row ($productos_)){

												$id_producto = $product[0];
												$nombre = $product[1];
												$resumen = $product[2];
												$descripcion = $product[3];
												$precio = $product[4];
												$referencia = $product[5];
												$condicion = $product[6];
												$descuento = $product[7];
												$estrellas = $product[8];
												$categoria = $product[9];
												$estado = $product[10];
												$stock = $product[11];

												echo 
												'
												<tr>
												<td>'.htmlentities($id_producto).'</td>
												<td>'.htmlentities($nombre).'</td>
												<td>
												';

												if($stock<=2){

													echo '<font color="C00101"><b>'.htmlentities($stock).' und</b></font>';

												}else{

													echo '<font color="01950A"><b>'.htmlentities($stock).' und</b></font>';	

												}

												echo
												'
												</td>
												<td>$ '.htmlentities(number_format($precio)).'</td>
												<td>'.htmlentities($referencia).'</td>
												<td>'.htmlentities($condicion).'</td>
												<td>'.htmlentities($descuento).'%</td>
												';
												if($estado==0){

													echo '<td><span class="badge light badge-success">Activo</span></td>';

												}else if($estado==1){

													echo '<td><span class="badge light badge-danger">Bloqueado</span></td>';

												}

												if($estado==0){

													echo '
													<td>

													<a href="validaciones_/_productos/productos-activo?id='.htmlentities($id_producto).'#tienda"><button type="button" class="btn btn-info btn-xs" style="background-color: #358E01; border: none;"><i class="fa fa-eye"></i></button></a>

													<a href="?producto='.htmlentities($id_producto).'&nombre='.htmlentities($nombre).'"><button type="submit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></button></a>

													</td>';

												}else if($estado==1){

													echo '
													<td>

													<a href="validaciones_/_productos/productos-inactivo?id='.htmlentities($id_producto).'#tienda"><button type="button" class="btn btn-info btn-xs" style="background-color: #C60909; border: none;"><i class="fa fa-eye-slash"></i></button></a>

													<a href="?producto='.htmlentities($id_producto).'&nombre='.htmlentities($nombre).'"><button type="submit" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i></button></a>

													</td>';

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
										$ressql=mysqli_query($mysqli,$productos);
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

			<?php 


			if(isset($_GET['producto'])){

				$producto=$_GET['producto'];

				$productos2="SELECT * FROM productos WHERE id_producto='$producto'";
				$productos2_=mysqli_query($mysqli,$productos2);

				while ($product2=mysqli_fetch_row ($productos2_)){

					$id_producto2 = $product2[0];
					$nombre2 = $product2[1];
					$resumen2 = $product2[2];
					$descripcion2 = $product2[3];
					$precio2 = $product2[4];
					$referencia2 = $product2[5];
					$condicion2 = $product2[6];
					$descuento2 = $product2[7];
					$estrellas2 = $product2[8];
					$categoria2 = $product2[9];
					$estado2 = $product2[10];
					$stock2 = $product2[11];
				}

				$categoria="SELECT * FROM categorias WHERE id_categoria='$categoria2'";
				$categoria_=mysqli_query($mysqli,$categoria);

				while ($cat=mysqli_fetch_row ($categoria_)){

					$nombre_categoria = $cat[1];
				}


				echo'

				<div id="Modal" class="modal fade" role="dialog">
				<div class="modal-dialog">

				<div class="modal-content ">
				<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title text-uppercase">'.htmlentities($nombre2).'</h4>
				</div>
				<div class="modal-body">
				<div class="panel panel-bd">
				<div class="panel-body">

				<form class="col-sm-12">
				<div class="row">

				<input type="text" id="id_producto2" value="'.htmlentities($producto).'" style="display: none;">

				<div class="col-md-6">
				<label>Nombre</label>
				<input type="text" class="form-control" id="nombre" placeholder="Ingresa un nombre" value="'.htmlentities($nombre2).'">
				</div>

				<div class="col-md-3">
				<label>Precio</label>
				<input type="text" class="form-control" id="precio" placeholder="Ingresa un precio" value="'.htmlentities($precio2).'">
				</div>

				<div class="col-md-3">
				<label>Stock</label>
				<input type="number" class="form-control" id="stock" placeholder="Stock del producto" value="'.htmlentities($stock2).'">
				</div>

				</div>

				<br>

				<div class="row">

				<div class="col-md-4">
				<label>Referencia</label>
				<input type="text" class="form-control" id="referencia" placeholder="Ingresa la referencia" value="'.htmlentities($referencia2).'">
				</div>

				<div class="col-md-4">
				<label>Condición</label>
				<select class="form-control" id="condicion" size="1">
				<option value="'.htmlentities($condicion2).'">'.htmlentities($condicion2).'</option>
				<option value="Nuevo">Nuevo</option>
				<option value="Usado">Usado</option>
				</select>
				</div>

				<div class="col-md-4">
				<label>Categoria</label>
				<select class="form-control" id="categoria" size="1">
				<option value="'.htmlentities($categoria2).'">'.htmlentities($nombre_categoria).'</option>
				';
				$sql=("SELECT * FROM categorias WHERE estado=0");
				$query=mysqli_query($mysqli,$sql);
				while($cate=mysqli_fetch_array($query)){
					$id_categoria = $cate['id_categoria'];
					$nombre = $cate['nombre'];
					echo '<option value="'.$id_categoria.'">'.$nombre.'</option>';
				}
				echo'
				</select>
				</div>

				</div>

				<br>

				<div class="row">

				<div class="col-md-6">
				<label>Descuento</label>
				<select class="form-control" id="descuento" size="1">
				<option value="'.htmlentities($descuento2).'">'.htmlentities($descuento2).'%</option>
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
				<option value="'.htmlentities($estrellas2).'">'.htmlentities($estrellas2).'</option>
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
				<textarea class="form-control" id="resumen" rows="5" placeholder="Ingresa un resumen corto">'.htmlentities($resumen2).'</textarea>
				</div>

				<div class="col-md-12">
				<label>Descripción</label>
				<textarea class="form-control" id="descripcion" rows="5" placeholder="Ingresa una descripción">'.htmlentities($descripcion2).'</textarea>
				</div>

				</div>

				<br>

				<div class="reset button">
				<a type="button" id="editar_productos" class="btn btn-success btn-block">Guardar</a>
				</div>
				</form>
				</div>
				</div>

				</div>
				</div>
				</div>
				</div>

				';
			}

			?>

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
	<script src="validaciones_/_productos/js/productos-editar.js"></script>

</body>

</html>