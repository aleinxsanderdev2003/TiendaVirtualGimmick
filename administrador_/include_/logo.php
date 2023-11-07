<?php
require("../conexion_/conexion.php");
$sql="SELECT logo FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$logo=$row[0];
}

echo '<img src="../img_/'.$logo.'" alt="">';
?>