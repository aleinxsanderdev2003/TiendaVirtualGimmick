<?php

session_start();

require("../../../conexion_/conexion.php");

$id_usuario = $_GET['i'];

$user = mysqli_query($mysqli,"SELECT * FROM usuarios WHERE id_usuario='$id_usuario'");
$users    = mysqli_fetch_array($user);

date_default_timezone_set('America/Panama');	      
$fecha=date('Y-m-d h:i:s');

$nombre=$users[1];
$apellido=$users[2];
$ip=$users[8];
$correo=$users[3];

$carta =

'
<!DOCTYPE html>
<html lang="en">
<body>
<div style="background-color: #CB1D1D;color: #fff;padding: 30px;padding-bottom: 40px;">
<center>
<img src="https://i.pinimg.com/originals/99/b0/e5/99b0e593f9237abf16df5cb1b1a87735.png" style="max-height: 120px;">
</center>
</div>

<div style="border: 1px solid #ccc; padding: 10px;height: 55px;margin-top: -50px;">
<span style="font-size: 17px;"><b>Tienda:</b> TIENDA ONLINE</span><br><br>
<span style="float: left;font-size: 17px"><b>Fecha:</b> '.$fecha.'</span>
</div>
<div style="border: 1px solid #ccc; padding-top: 15px;padding-left: 10px;padding-bottom: 50px;width: auto;height: 220px">
<span style="float: left;font-size: 17px;width: 100%"><b>Nombre:</b> '.$nombre.'</span><br><br>
<span style="float: left;font-size: 17px;width: 100%"><b>Apellido:</b> '.$apellido.'</span><br><br>
<span style="float: left;font-size: 17px;width: 100%"><b>Ip Transaccion:</b> '.$ip.'</span><br><br>
<span style="float: left;font-size: 17px;width: 100%"><b>Correo:</b> '.$correo.'</span><br><br>
<span style="float: left;font-size: 17px;width: 100%;"><b>Respuesta:</b> Transaccion Aprobada, su pedido sera entregado en un plazo de 2 a 4 dias habiles.</span><br><br>
</div> 
</body>
</html>  

';



?>

</body>
</html>



<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

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



	$mail->setFrom('enviadorcorreosdemo@gmail.com', 'COMPRA CON EXITO');
	$mail->addAddress($correo);  

	$mail->isHTML(true);                                
	$mail->Subject = 'COMPRA CON EXITO';
	$mail->Body    = ($carta);

	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	$mail->send();

	header("location: notificacion_admin");

} catch (Exception $e) {
	echo 'Message Error: ', $mail->ErrorInfo;
}
