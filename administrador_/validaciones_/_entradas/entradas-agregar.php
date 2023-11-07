<?php

session_start();

require("../../../conexion_/conexion.php");

$id_moderador=$_SESSION['id_usuario'];
$remitente=$_POST['remitente'];
$valor=$_POST['valor'];
$concepto=$_POST['concepto'];
$telefono=$_POST['telefono'];
$pais=$_POST['pais'];


$precio=str_replace ( ".", "", $valor);

date_default_timezone_set('America/Panama');
$fecha = date('Y-m-d h:i:s');

$query=mysqli_query($mysqli,"INSERT INTO dinero_entrada (id_moderador, remitente, concepto, valor, telefono, pais, fecha, estado) VALUES('$id_moderador','$remitente','$concepto','$precio','$telefono','$pais','$fecha','1')");

if($query){

echo 1;

}else{

echo 2;
}




?>
