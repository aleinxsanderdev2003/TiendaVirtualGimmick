<?php

require("../conexion_/conexion.php");

$cantidad=$_POST['cantidad'];
$id_producto=$_POST['id_producto'];


$cantidad_=mysqli_query($mysqli,"SELECT * FROM productos where id_producto='$id_producto' and stock>=$cantidad ");
$cantidad_v=mysqli_num_rows($cantidad_);

if($cantidad_v>0 ){


	/*-----------------------PRODUCTO SACANDO EL PRECIO---------------------------*/
	$query="SELECT * FROM productos WHERE id_producto='$id_producto'";
	$ejecutar= $mysqli->query($query);
	$row=$ejecutar->fetch_assoc();

	$precio=$row['precio'];
	$descuento=$row['descuento'];

	$total_cuenta=$precio*$descuento;
	$total_a_pagar=$precio-$total_cuenta;
	/*-----------------------PRODUCTO SACANDO EL PRECIO---------------------------*/

	$ip=$_SERVER['REMOTE_ADDR'];


	$carrito_compras=mysqli_query($mysqli,"SELECT * FROM carrito_compras where ip='$ip' and id_producto='$id_producto'");
	$car_compra=mysqli_num_rows($carrito_compras);

	if($car_compra>0 ){

		echo 0;

	}else{

		date_default_timezone_set('America/Panama');    
		$fecha = date('Y-m-d h:i:s');

		mysqli_query($mysqli,"INSERT INTO carrito_compras (id_producto, ip, precio, cantidad, fecha) VALUES('$id_producto','$ip','$total_a_pagar','$cantidad','$fecha')");

		echo 1;

	}


}else{


	echo 2;

}


?>


