<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

require("../conexion_/conexion.php");

$ip=$_SERVER['REMOTE_ADDR'];

$nombre_two=$_POST['nombre_two'];
$apellido_two=$_POST['apellido_two'];
$correo_two=$_POST['correo_two'];
$telefono_two=$_POST['telefono_two'];
$clave_two=$_POST['clave_two'];


date_default_timezone_set('America/Caracas');
$ultima_conexion = date('Y-m-d h:i a');

$checkemail=mysqli_query($mysqli,"SELECT * FROM usuarios WHERE correo='$correo_two'");
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

	Hola '.$nombre_two.',
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
		$mail->addAddress($correo_two);  

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

	$tienda=sha1(trim($clave_two));

	$query=mysqli_query($mysqli,"INSERT INTO usuarios (nombre, apellido, correo, telefono, clave, fecha_registro, ultima_conexion, ip, departamento, direccion_one, direccion_two, estado, rol) VALUES('$nombre_two','$apellido_two','$correo_two','$telefono_two','$tienda','$ultima_conexion','$ultima_conexion','$ip','','','','0','2')");

	echo 1;

}




?>
