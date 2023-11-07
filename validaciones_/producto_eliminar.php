<?php  

require("../conexion_/conexion.php");

$ip=$_SERVER['REMOTE_ADDR'];
$id_producto=$_GET['i'];

$eliminar_producto="DELETE FROM carrito_compras WHERE id_producto='$id_producto' and ip='$ip'";
$eliminar_producto2=$mysqli->query($eliminar_producto);

header("location: ../cart");



?>




