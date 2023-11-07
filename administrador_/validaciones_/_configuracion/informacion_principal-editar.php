<?php 

require("../../../conexion_/conexion.php");


$telefono= $_POST['telefono'];
$correo= $_POST['correo'];
$direccion= $_POST['direccion'];

$configuracion_editar = mysqli_query($mysqli, "UPDATE configuracion SET telefono = '$telefono', correo = '$correo', direccion = '$direccion' where id_config  = '1'");

if ($configuracion_editar) {
	echo 0;
}else{
	echo 1;
}


?>