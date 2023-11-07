<?php
require("../conexion_/conexion.php");
$sql="SELECT pie_pagina FROM configuracion ";
$ressql=mysqli_query($mysqli,$sql);
while ($row=mysqli_fetch_row ($ressql)){
	$pie_pagina=$row[0];
}

?>

<footer class="main-footer">
	<div class="pull-right hidden-xs"> <b>Version</b> 1.0</div>
	<strong><?php echo $pie_pagina ?></strong>
</footer>