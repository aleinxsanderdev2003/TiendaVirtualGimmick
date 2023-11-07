<?php

$id=$_GET['id'];

require("../../../conexion_/conexion.php");

$sql_c1="SELECT * FROM pedido_detalle WHERE id_pedido='$id'";
$ressql_c1=mysqli_query($mysqli,$sql_c1);
while ($row_c1=mysqli_fetch_row ($ressql_c1)){

	$id_producto=$row_c1[3];
	$cantidad=$row_c1[7];

	$sql_c2="SELECT * FROM productos WHERE id_producto='$id_producto'";
	$ressql_c2=mysqli_query($mysqli,$sql_c2);
	while ($row_c2=mysqli_fetch_row ($ressql_c2)){

		$stock=$row_c2[11];

		$stock_total= $stock-$cantidad;

		mysqli_query($mysqli, "UPDATE productos SET stock='$stock_total' WHERE id_producto='$id_producto'");

	}
}



$sentencia="update pedido set estado='1' where id_pedido='$id'";
$resent=mysqli_query($mysqli,$sentencia);
if ($resent==null) {
	header("location: ../../pedidos");
}else {
	header("location: ../../pedidos");
}
?>