<?php
require("conexion_/conexion.php");
$sql="SELECT titulo FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$titulo=$row[0];
}

echo '<title>'.$titulo.'</title>';
?>