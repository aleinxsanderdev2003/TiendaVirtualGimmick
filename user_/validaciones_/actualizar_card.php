	<?php 
	require("../../conexion_/conexion.php");
	$ip=$_SERVER['REMOTE_ADDR'];
	$productos = mysqli_query($mysqli,"SELECT COUNT(*) AS carrito FROM carrito_compras WHERE  ip='$ip'");
	$productos_ = mysqli_fetch_array($productos);
	echo $productos_['carrito'];;
	?>