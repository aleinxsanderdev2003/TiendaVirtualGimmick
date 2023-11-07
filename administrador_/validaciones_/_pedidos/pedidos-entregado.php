<?php

$pedido=$_GET['pedido'];

require("../../../conexion_/conexion.php");

$sentencia="update pedido set estado='2' where id_pedido='$pedido'";
$resent=mysqli_query($mysqli,$sentencia);

$sentencia="update pedido_detalle set estado='2' where id_pedido='$pedido'";
$resent=mysqli_query($mysqli,$sentencia);

if ($resent==null) {
	header("location: ../../pedidos_detalle?id=".$pedido."#tienda ");
}else {
	header("location: ../../pedidos_detalle?id=".$pedido."#tienda ");
}
?>