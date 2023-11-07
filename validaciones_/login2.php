<?php

session_start();

require("../conexion_/conexion.php");

$correo_one2=$_POST['correo_one2'];
$clave_one2=$_POST['clave_one2'];
$ip=$_SERVER['REMOTE_ADDR'];

$tienda=sha1(trim($clave_one2));

$sql=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$correo_one2'");

if($f=mysqli_fetch_array($sql)){

	if($tienda==$f['clave']){

		$_SESSION['id_usuario']=$f['id_usuario'];	
		$_SESSION['nombre']=$f['nombre'];
		$_SESSION['apellido']=$f['apellido'];		
		$_SESSION['correo']=$f['correo'];	
		$_SESSION['telefono']=$f['telefono'];
		$_SESSION['clave']=$f['clave'];	
		$_SESSION['fecha_registro']=$f['fecha_registro'];
		$_SESSION['ultima_conexion']=$f['ultima_conexion'];
		$_SESSION['ip']=$f['ip'];
		$_SESSION['departamento']=$f['departamento'];
		$_SESSION['direccion_one']=$f['direccion_one'];
		$_SESSION['direccion_two']=$f['direccion_two'];
		$_SESSION['estado']=$f['estado'];
		$_SESSION['rol']=$f['rol'];

		date_default_timezone_set('America/Caracas');    
		$ultima_conexion = date('Y-m-d h:i a');


		if($f['rol']==1){

			mysqli_query($mysqli, "UPDATE usuarios SET ultima_conexion = '$ultima_conexion', ip = '$ip' WHERE id_usuario ='".$f['id_usuario']."'");
			echo 0;

		}else{


			if($f['estado']==0){

				mysqli_query($mysqli, "UPDATE usuarios SET ultima_conexion = '$ultima_conexion', ip = '$ip' WHERE id_usuario ='".$f['id_usuario']."'");
				echo 1;

			}else if($f['estado']==1){

				echo 2;

			}else{

				echo 2;
			}

		}


	}else{

		echo 3;

	}


}else{

	echo 3;

}



?>    

