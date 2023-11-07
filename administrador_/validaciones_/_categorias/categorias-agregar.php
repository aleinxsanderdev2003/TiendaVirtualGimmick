<?php

require("../../../conexion_/conexion.php");

$nombre=$_POST['nombre'];

$query=mysqli_query($mysqli,"INSERT INTO categorias (nombre, estado) VALUES('$nombre','0')");

if($query){

echo 1;

}else{

echo 2;
}




?>
