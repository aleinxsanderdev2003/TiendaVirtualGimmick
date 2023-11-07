<?php

session_start();


require("../../../conexion_/conexion.php");

$id=$_SESSION['id_usuario'];


$foto = $_FILES['foto'];
$nombre_foto = $foto['name'];
$type        = $foto['type'];
$url_temp    = $foto['tmp_name'];

$sql="SELECT foto FROM usuarios WHERE id_usuario = '$id'";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){

	$foto2= $row[0];
	$imgproducto = $foto2;

}

if ($nombre_foto != '') {

	$destino     = '../../../img_/img_usuarios/';
	$img_nombre  = 'perfil_'.$id.'_'.md5(date('d-m-Y H:m:s'));
	$imgproducto = $img_nombre.'.jpg';
	$src         =$destino.$imgproducto;

}


$query = "UPDATE usuarios SET foto='$imgproducto' WHERE id_usuario='$id'";

$resul = $mysqli->query($query);

if($resul){

	if ($nombre_foto != ''){
		move_uploaded_file($url_temp, $src);
	}

	header("location: ../../mi-perfil");
	
}

else{

	header("location: ../../mi-perfil");
	

}



?>