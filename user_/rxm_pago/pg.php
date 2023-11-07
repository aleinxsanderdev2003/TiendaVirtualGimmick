<?php

session_start();


$id_usuario=$_GET['i'];
$ip=$_SERVER['REMOTE_ADDR'];


require("../../conexion_/conexion.php");

$carrito_compras = mysqli_query($mysqli,"SELECT * FROM carrito_compras WHERE ip='$ip'");
$carrito = mysqli_fetch_array($carrito_compras);

$ip_pedido=$carrito[2];

if($ip==$ip_pedido){


	date_default_timezone_set('America/Panama');	      
	$fecha=date('Y-m-d h:i:s');


	$total1 = mysqli_query($mysqli, "SELECT SUM((p.precio*c.cantidad)-((p.precio*c.cantidad)*p.descuento)) as total FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto where c.ip='$ip'");
	$total2 = mysqli_fetch_assoc($total1);
	$total= $total2["total"];

	$query= mysqli_query($mysqli,"INSERT INTO pedido (id_usuario, ip, total, fecha, estado) VALUES('$id_usuario','$ip','$total','$fecha','0')");


	$sql="SELECT * FROM carrito_compras WHERE ip='$ip'";
	$ressql=mysqli_query($mysqli,$sql);
	while ($row=mysqli_fetch_row ($ressql)){

		$id_producto = $row[1];
		$precio = $row[3];
		$cantidad = $row[4];

		$r = mysqli_query($mysqli, "SELECT max(id_pedido) as id_pedido FROM pedido");
		$f = mysqli_fetch_assoc($r);

		$id_pedido=$f['id_pedido'];

		$query= mysqli_query($mysqli,"INSERT INTO pedido_detalle (id_pedido, id_usuario, id_producto, precio, fecha, estado, cantidad) VALUES('$id_pedido','$id_usuario','$id_producto','$precio','$fecha','0','$cantidad')");

	}

	$sql="DELETE FROM carrito_compras WHERE ip='$ip'";
	$ejecutar= $mysqli->query($sql);


	header("location: pgx/notificacion_user?incriptando=653458435&upc=569&r=123&g=123&m=34676&i=".$id_usuario."");


}else{

	header("location: ../checkout?to=tienda#checkout");

}



?>


