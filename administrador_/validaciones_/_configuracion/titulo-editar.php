<?php 

require("../../../conexion_/conexion.php");


$titulo= $_POST['titulo'];

$configuracion_editar = mysqli_query($mysqli, "UPDATE configuracion SET titulo = '$titulo' where id_config  = '1'");

if ($configuracion_editar) {
	echo 0;
}else{
	echo 1;
}


?>