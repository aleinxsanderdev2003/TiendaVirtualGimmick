<?php

$titulo= $_POST['titulo'];
$nombre= $_POST['nombre'];
$correo= $_POST['correo'];
$descripcion= $_POST['descripcion'];

$fecha= date('d-m-Y h:i:s');

$carta =

'
<!DOCTYPE html>
<html lang="en">
<body>
<div style="background-color: #fff;color: #fff;padding: 30px;padding-bottom: 40px;">
<center>
<img src="https://i.pinimg.com/originals/99/b0/e5/99b0e593f9237abf16df5cb1b1a87735.png" style="max-height: 150px;">
</center>
</div>

<div style="border: 1px solid #ccc; padding: 10px;height: 35px;margin-top: -50px;">
<span style="float: left;font-size: 17px"><b>Fecha:</b> '.$fecha.'</span><br>
</div>
<div style="border: 1px solid #ccc; padding-top: 15px;padding-left: 10px;padding-bottom: 50px;width: auto;height: 300px">
<span style="float: left;font-size: 17px;"><b>Enviar a:</b> </span><br><br>
<span style="float: left;font-size: 17px;width: 100%"><b>Nombre:</b> '.$nombre.'</span><br><br>
<span style="float: left;font-size: 17px;width: 100%"><b>Correo:</b> '.$correo.'</span><br><br>
<span style="float: left;font-size: 17px;width: 100%;"><b>Mensaje:</b> '.$descripcion.'</span><br><br>
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



	$mail->setFrom('enviadorcorreosdemo@gmail.com', 'TIENDA - '.$titulo.'');
	$mail->addAddress($correo);  

	$mail->isHTML(true);                                
	$mail->Subject = 'TIENDA - '.$titulo.'';
	$mail->Body    = ($carta);

	$mail->SMTPOptions = array(
		'ssl' => array(
			'verify_peer' => false,
			'verify_peer_name' => false,
			'allow_self_signed' => true
		)
	);

	$mail->send();


	echo'
	<script>
	function redireccionarPagina() {
		window.location = "../../correo?correo=&nombre=";
	}
	setTimeout("redireccionarPagina()");
	</script>
	';

} catch (Exception $e) {
	echo 'Message Error: ', $mail->ErrorInfo;
}
