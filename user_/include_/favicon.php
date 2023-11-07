<?php
require("../conexion_/conexion.php");
$sql="SELECT favicon FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$favicon=$row[0];
}

echo '<link rel="icon" type="text/css" href="../img_/'.$favicon.'">';
?>


