<?php

session_start();

require("../../../conexion_/conexion.php");

$id_usuario = $_SESSION['id_usuario'];
$clave_actual= sha1(trim($_POST['clave_actual']));
$clave_nueva= sha1(trim($_POST['clave_nueva']));
$clave_nueva_r= sha1(trim($_POST['clave_nueva_r']));

if($id_usuario==null || $clave_actual==null || $clave_nueva==null || $clave_nueva_r==null){

	header("location: https://economictheme.net/");

}else{


	$query="SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
	$ejecutar= $mysqli->query($query);
	$row=$ejecutar->fetch_assoc();


	if($row['clave']==$clave_actual){

		if($clave_nueva==$clave_nueva_r){


			$query=mysqli_query($mysqli,"UPDATE usuarios SET clave='$clave_nueva' WHERE id_usuario='$id_usuario'");

			if($query){

				echo 2;

			}else{

				echo 3;

			}

		}else{

			echo 1;

		}

	}else{

		echo 0;

	}


}





?>