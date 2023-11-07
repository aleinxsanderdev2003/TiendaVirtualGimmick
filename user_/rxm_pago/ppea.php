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


	$total1 = mysqli_query($mysqli, "SELECT SUM(p.precio) as total FROM plantillas p inner join carrito_compras c on p.id_plantilla=c.id_plantilla where c.ip='$ip'");
	$total2 = mysqli_fetch_assoc($total1);
	$total= $total2["total"];

	$query3="SELECT * FROM cupones_usados WHERE ip='$ip'";
	$ejecutar3= $mysqli->query($query3);
	$row=$ejecutar3->fetch_assoc();

	$descuento=$row['descuento'];

	$query= mysqli_query($mysqli,"INSERT INTO w_e_pedido (id_usuario, ip, total, descuento, fecha, estado) VALUES('$id_usuario','$ip','$total','$descuento','$fecha','0')");


	$sql="SELECT * FROM carrito_compras WHERE ip='$ip'";
	$ressql=mysqli_query($mysqli,$sql);
	while ($row=mysqli_fetch_row ($ressql)){

		$id_plantilla = $row[1];
		$precio = $row[3];

		$r = mysqli_query($mysqli, "SELECT max(id_pedido) as id_pedido FROM w_e_pedido");
		$f = mysqli_fetch_assoc($r);

		$id_pedido=$f['id_pedido'];

		$query= mysqli_query($mysqli,"INSERT INTO w_e_pedido_detalle (id_pedido, id_usuario, id_plantilla, precio, cod_descarga, fecha, estado) VALUES('$id_pedido','$id_usuario','$id_plantilla','$precio','','$fecha','0')");


		$r2 = mysqli_query($mysqli, "SELECT ventas as ventas FROM plantillas where id_plantilla = '$id_plantilla'");
		$f2 = mysqli_fetch_assoc($r2);

		$ventas=$f2['ventas'];
		$ventas_total=$ventas+1;

		$plantilla_venta = mysqli_query($mysqli, "UPDATE plantillas SET ventas='$ventas_total' where id_plantilla = '$id_plantilla'");

	}

	$sql="DELETE FROM carrito_compras WHERE ip='$ip'";
	$ejecutar= $mysqli->query($sql);

	$sql2="DELETE FROM cupones_usados WHERE ip='$ip'";
	$ejecutar2= $mysqli->query($sql2);

	header("location: pgx/notificacion_admin#Comprobando-el-pago-a-la-plataforma-economic");


}else{

	header("location: ../checkout-pago?to=economic#checkout");

}



?>


