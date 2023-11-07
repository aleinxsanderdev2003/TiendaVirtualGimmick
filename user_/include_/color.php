<?php
require("../../../conexion_/conexion.php");
$sql="SELECT color FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$color=$row[0];
}
?>