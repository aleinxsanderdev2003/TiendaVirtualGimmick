<?php

require("../../../conexion_/conexion.php");

$id=$_GET['id'];

$sql="DELETE FROM pedido WHERE id_pedido='$id'";
$ejecutar= $mysqli->query($sql);

$sql2="DELETE FROM pedido_detalle WHERE id_pedido='$id'";
$ejecutar2= $mysqli->query($sql2);

header("location: ../../pedidos");



?>


