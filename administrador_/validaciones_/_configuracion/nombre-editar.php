<?php 

require("../../../conexion_/conexion.php");


$nombre= $_POST['nombre'];

$configuracion_editar = mysqli_query($mysqli, "UPDATE configuracion SET nombre = '$nombre' where id_config  = '1'");

if ($configuracion_editar) {
	echo 0;
}else{
	echo 1;
}


?>