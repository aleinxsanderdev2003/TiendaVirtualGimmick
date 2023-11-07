<?php 

require("../../../conexion_/conexion.php");


$id_producto2= $_POST['id_producto2'];
$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$referencia = $_POST['referencia'];
$condicion = $_POST['condicion'];
$categoria = $_POST['categoria'];
$descuento = $_POST['descuento'];
$estrellas = $_POST['estrellas'];
$resumen = $_POST['resumen'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];

$productos_editar = mysqli_query($mysqli, "UPDATE productos SET nombre = '$nombre', resumen = '$resumen', precio = '$precio', referencia = '$referencia', condicion='$condicion', categoria='$categoria', descuento='$descuento', estrellas='$estrellas', descripcion='$descripcion', stock='$stock' where id_producto = '$id_producto2'");

if ($productos_editar) {
	echo 0;
}else{
	echo 1;
}


?>