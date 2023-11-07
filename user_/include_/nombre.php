<?php
require("../conexion_/conexion.php");
$sql="SELECT nombre FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$nombre_web=$row[0];
}

echo $nombre_web;
?>