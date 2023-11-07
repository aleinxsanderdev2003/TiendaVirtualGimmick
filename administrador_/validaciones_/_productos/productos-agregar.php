<?php 

session_start();

require("../../../conexion_/conexion.php");

$nombre = $_POST['nombre'];
$precio = $_POST['precio'];
$referencia = $_POST['referencia'];
$condicion = $_POST['condicion'];
$categoria = $_POST['categoria'];
$descuento = $_POST['descuento'];
$estrellas = $_POST['estrellas'];
$resumen = $_POST['resumen'];
$descripcion = $_POST['descripcion'];
$stock = $_POST['stock'];

date_default_timezone_set('America/Panama');
$fecha_registro = date('Y-m-d h:i:s');

$insertar = mysqli_query($mysqli, "INSERT INTO productos (nombre, resumen, descripcion, precio, referencia, condicion, descuento, estrellas, categoria, estado, stock) VALUES('$nombre', '$resumen', '$descripcion', '$precio', '$referencia', '$condicion' ,'$descuento' ,'$estrellas' ,'$categoria', '0', '$stock')");

if ($insertar) {
	echo 0;
}else{
	echo 1;
}

$query = mysqli_query($mysqli, "SELECT MAX(id_producto) as id_producto FROM productos");
$data = mysqli_fetch_array($query);
$id_producto = $data['id_producto'];

/*IMAGEN DINAMICA*/
$foto = $_FILES['foto'];
$nombre_foto = $foto['name'];
$type = $foto['type'];
$url_temp = $foto['tmp_name'];

if ($nombre_foto != '') {
	$destino = '../../../img_/img_productos/';
	$img_nombre = 'img_'.md5(date('d-m-Y H:m:s'));
	$imgProducto = $img_nombre.'.jpg';
	$src = $destino.$imgProducto;
}

$fotos = $_FILES['foto'];
$arrayFotos = [];
$cantidad = count($_FILES['foto']['name']);
for($i = 0; $i < $cantidad; $i++){
	$nombre_foto = $fotos['name'][$i];
	$type = $fotos['type'][$i];
	$url_temp = $fotos['tmp_name'][$i];
	$imgProducto = '';
	$token = bin2hex(random_bytes(10));

	$destino = '../../../img_/img_productos/';
	$img_nombre = 'img_'.$token;
	$imgProducto = $img_nombre.'.jpg';
	$src  = $destino.$imgProducto;

	move_uploaded_file($url_temp, $src);
	array_push($arrayFotos, $imgProducto);

	$insertar = mysqli_query($mysqli, "INSERT INTO productos_imagenes (id_producto, imagen, estado) VALUES('$id_producto', '$imgProducto', '0')");
}
/*IMAGEN DINAMICA*/


?>