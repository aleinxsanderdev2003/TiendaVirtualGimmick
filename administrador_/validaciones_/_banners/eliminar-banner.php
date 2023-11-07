<?php

require("../../../conexion_/conexion.php");

$id_banner=$_GET['id_banner'];

$sql="DELETE FROM banners WHERE id_banner='$id_banner'";
$ejecutar= $mysqli->query($sql);


header("location: ../../banners");



?>


