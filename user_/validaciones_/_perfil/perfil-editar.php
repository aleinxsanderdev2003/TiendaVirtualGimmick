<?php 

session_start();

require("../../../conexion_/conexion.php");

$id_usuario = $_SESSION['id_usuario'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$departamento = $_POST['departamento'];
$direccion_one = $_POST['direccion_one'];
$direccion_two = $_POST['direccion_two'];

if($id_usuario==null || $nombre==null || $apellido==null || $telefono==null || $correo==null){

header("location: ../../index");

}else{

$perfil_editar = mysqli_query($mysqli, "UPDATE usuarios SET nombre = '$nombre', apellido = '$apellido', telefono = '$telefono', correo='$correo', departamento = '$departamento', direccion_one = '$direccion_one', direccion_two = '$direccion_two' where id_usuario = '$id_usuario'");
if ($perfil_editar) {
	echo 0;
}else{
	echo 1;
}

}





?>