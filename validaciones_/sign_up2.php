<?php

session_start();

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

require("../conexion_/conexion.php");

$ip=$_SERVER['REMOTE_ADDR'];

$nombre_two2=$_POST['nombre_two2'];
$apellido_two2=$_POST['apellido_two2'];
$correo_two2=$_POST['correo_two2'];
$telefono_two2=$_POST['telefono_two2'];
$direccion_two2=$_POST['direccion_two2'];
$dire2_two2=$_POST['dire2_two2'];
$departamento_two2=$_POST['departamento_two2'];
$clave_two2=$_POST['clave_two2'];


date_default_timezone_set('America/Caracas');
$ultima_conexion = date('Y-m-d h:i a');

$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$correo_two2'");
$check_mail=mysqli_num_rows($checkemail);
if($check_mail>0){

	echo 0;


}else{

	//------------------------------ENVIADOR DE CORREOS------------------------------
	$carta =

	'
	<!DOCTYPE html>
	<html lang="en">
	<body>

	<div style="border: 2px solid #CB1D1D; background-color:#CB1D1D; padding: 10px;height: 90px;margin-top: -25px;">
	<center>
	<img src="https://i.pinimg.com/originals/99/b0/e5/99b0e593f9237abf16df5cb1b1a87735.png" style="max-height: 120px;">
	</center>
	</div>
	<div style="border: 2px solid #CB1D1D; padding-top: 15px;padding-left: 10px;padding-bottom: 50px;width: auto;height: 250px">
	<span style="float: left;font-size: 17px;width: 100%;">

	Hola '.$nombre_two2.',
	<br>
	¡Felicidades! Has creado tu cuenta en tienda-chiphysi.com con éxito.
	<br>
	<br>
	Gracias por registrarte con nosotros. Su nueva cuenta ha sido configurada.
	<br>
	Para iniciar sesión, visite https://tienda-chiphysi.com
	<br>
	<br>
	Esperamos verte pronto.
	<br>
	<br>
	Este sistema esta en venta puedes conseguirlo <a href="https://economictheme.net/site-templates-sistemas?to=economic">AQUI</a>
	</span>
	</div> 

	</body>
	</html> 

	';

	$mail = new PHPMailer(true);


	try {

		$mail->SMTPDebug = 0;  
		$mail->isSMTP();                                            
		$mail->Host       = 'smtp.gmail.com';   
		$mail->SMTPAuth   = true;
		$mail->Username   = 'enviadorcorreosdemo@gmail.com';                     
		$mail->Password   = 'Demo123Demo';                               
		$mail->SMTPSecure = 'tls';
		$mail->Port       = 587;



		$mail->setFrom('enviadorcorreosdemo@gmail.com', 'Tienda Online');
		$mail->addAddress($correo_two2);  

		$mail->isHTML(true);                                
		$mail->Subject = 'Se ha creado su cuenta';
		$mail->Body    = ($carta);

		$mail->SMTPOptions = array(
			'ssl' => array(
				'verify_peer' => false,
				'verify_peer_name' => false,
				'allow_self_signed' => true
			)
		);

		$mail->send();


	} catch (Exception $e) {
		echo 'Message Error: ', $mail->ErrorInfo;
	}

	//------------------------------ENVIADOR DE CORREOS------------------------------

	$tienda=sha1(trim($clave_two2));

	$query=mysqli_query($mysqli,"INSERT INTO usuarios (nombre, apellido, correo, telefono, clave, fecha_registro, ultima_conexion, ip, departamento, direccion_one, direccion_two, estado, rol) VALUES('$nombre_two2','$apellido_two2','$correo_two2','$telefono_two2','$tienda','$ultima_conexion','$ultima_conexion','$ip','$departamento_two2','$direccion_two2','$dire2_two2','0','2')");


	$query_usuario = mysqli_query($mysqli, "SELECT * FROM usuarios ORDER BY id_usuario DESC LIMIT 1");
	$data = mysqli_fetch_array($query_usuario);

	$_SESSION['id_usuario']=$data['id_usuario'];	
	$_SESSION['nombre']=$data['nombre'];
	$_SESSION['apellido']=$data['apellido'];		
	$_SESSION['correo']=$data['correo'];	
	$_SESSION['telefono']=$data['telefono'];
	$_SESSION['clave']=$data['clave'];	
	$_SESSION['fecha_registro']=$data['fecha_registro'];
	$_SESSION['ultima_conexion']=$data['ultima_conexion'];
	$_SESSION['ip']=$data['ip'];
	$_SESSION['departamento']=$data['departamento'];
	$_SESSION['direccion_one']=$data['direccion_one'];
	$_SESSION['direccion_two']=$data['direccion_two'];
	$_SESSION['estado']=$data['estado'];
	$_SESSION['rol']=$data['rol'];

	echo 1;

}




?>
