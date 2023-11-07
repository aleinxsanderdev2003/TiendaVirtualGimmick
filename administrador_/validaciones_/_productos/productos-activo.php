<?php

$id=$_GET['id'];

require("../../../conexion_/conexion.php");

$sentencia="update productos set estado='1' where id_producto='$id'";
$resent=mysqli_query($mysqli,$sentencia);
if ($resent==null) {
	header("location: ../../productos");
}else {
	header("location: ../../productos");
}
?>