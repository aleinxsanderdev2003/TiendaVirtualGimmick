<?php 

require("../../../conexion_/conexion.php");

$id_categoria = $_POST['id_categoria'];
$nombre = $_POST['nombre'];

$categorias_editar = mysqli_query($mysqli, "UPDATE categorias SET nombre = '$nombre' where id_categoria = '$id_categoria'");
if ($categorias_editar) {
	echo 0;
}else{
	echo 1;
}


?>