<?php
require("../conexion_/conexion.php");
$sql="SELECT correo FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$correo=$row[0];
}

echo $correo;
?>