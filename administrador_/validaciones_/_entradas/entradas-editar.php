<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_entrada = $_POST['id_entrada'];
$remitente = $_POST['remitente'];
$valor = $_POST['valor'];
$concepto = $_POST['concepto'];
$telefono = $_POST['telefono'];
$pais = $_POST['pais'];
$estado = $_POST['estado'];

$precio=str_replace ( ".", "", $valor);

$entrada_editar = mysqli_query($mysqli, "UPDATE dinero_entrada SET remitente = '$remitente', valor = '$precio', concepto = '$concepto', telefono='$telefono', pais='$pais', estado='$estado' where id_entrada = '$id_entrada'");
if ($entrada_editar) {
	echo 0;
}else{
	echo 1;
}


?>