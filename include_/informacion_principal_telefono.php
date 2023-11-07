<?php
require("conexion_/conexion.php");
$sql="SELECT telefono FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$telefono=$row[0];
}

echo $telefono;
?>