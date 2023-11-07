<?php

/* Foto 1*/
$foto1        = $_FILES['foto1'];
$nombre_foto1 = $foto1['name'];
$type         = $foto1['type'];
$url_temp1    = $foto1['tmp_name'];

$fotoproducto1 = 'defect.png';

if ($nombre_foto1 != '') {

	$destino     = '../../../img_/img_banners/';
	$foto1_nombre  = 'Banner_'.md5(date('d-m-Y H:m:s'));
	$fotoproducto1 = $foto1_nombre.'.png';
	$src1        =$destino.$fotoproducto1;
}
/* Foto 1*/



$categoria=$_POST['categoria'];
$texto_one=$_POST['texto_one'];
$texto_two=$_POST['texto_two'];
$boton=$_POST['boton'];

if($categoria==null){

	echo "<script>location.href='../../desconectar'</script>";

}else{

	require("../../../conexion_/conexion.php");


	$query=mysqli_query($mysqli,"INSERT INTO banners (imagen, categoria, texto_one, texto_two, boton, estado) VALUES('$fotoproducto1','$categoria','$texto_one','$texto_two','$boton', '0')");


	if($query){

		if ($nombre_foto1 != ''){
			move_uploaded_file($url_temp1, $src1);
		}


		header("location: ../../banners");


	}

}


?>