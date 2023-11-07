<?php

$id=$_GET['id'];
$pedido=$_GET['pedido'];

require("../../../conexion_/conexion.php");

$sentencia="update pedido_detalle set estado='1' where id_detalle='$id'";
$resent=mysqli_query($mysqli,$sentencia);
if ($resent==null) {
	header("location: ../../pedidos_detalle?id=".$pedido."#tienda ");
}else {
	header("location: ../../pedidos_detalle?id=".$pedido."#tienda ");
}
?>