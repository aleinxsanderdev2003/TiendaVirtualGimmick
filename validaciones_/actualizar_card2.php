	<?php

	require("../conexion_/conexion.php");

	$ip=$_SERVER['REMOTE_ADDR'];

	$card="SELECT p.id_producto, p.nombre, p.precio, p.descuento, c.id_producto, c.ip, c.cantidad FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto WHERE c.ip='$ip'";
	$card_c=mysqli_query($mysqli,$card);

	$result = 0;
	$result = mysqli_num_rows($card_c);

	if ($result > 0) {

		while ($carrito=mysqli_fetch_row ($card_c)){

			$id_producto_p = $carrito[0];    
			$nombre = substr($carrito[1], 0, 18);
			$precio = $carrito[2];
			$descuento = $carrito[3];
			$id_producto_c = $carrito[4];
			$ip = $carrito[5];
			$cantidad = $carrito[6];

			$total_=$precio*$descuento;
			$total=$precio-$total_;

			$cantidad_product=$total*$cantidad;

			//IMAGENES
			$imagenes_p="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto_p' LIMIT 1";
			$p_imagenes=mysqli_query($mysqli,$imagenes_p);
			while ($imagenes_v=mysqli_fetch_row ($p_imagenes)){
				$imagen_principal_c=$imagenes_v[0];
			}
			//IMAGENES

			$guiones = str_replace(" ", "-", $nombre);

			echo 
			'
			<div class="cart_item">
			<div class="cart_img">
			<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto_p).'"><img src="img_/img_productos/'.$imagen_principal_c.'" alt=""></a>
			</div>
			<div class="cart_info">
			<a href="detalle?n='.htmlentities($guiones).'&i='.htmlentities($id_producto_p).'">'.htmlentities($nombre).'...</a>
			<span class="cart_price">$'.htmlentities(number_format($total)).'</span>
			<span class="quantity">Cantidad: '.htmlentities($cantidad).'</span>
			<br>
			<span class="quantity">Total: $'.htmlentities(number_format($cantidad_product)).'</span>
			</div>
			<div class="cart_remove">
			<a title="Remove this item" href="validaciones_/producto_eliminar?i='.htmlentities($id_producto_p).'&n='.htmlentities($guiones).'"><i class="fa fa-times-circle"></i></a>
			</div>
			</div>
			';
		}

		?>

		<div class="cart_total">
			<span> Total </span>
			<span class="prices">  
				$ 
				<?php
				$r = "SELECT SUM((p.precio*c.cantidad)-((p.precio*c.cantidad)*p.descuento)) FROM productos p inner join carrito_compras c on p.id_producto=c.id_producto where c.ip='$ip' ";
				$f2 = mysqli_query($mysqli,$r);

				while ($f=mysqli_fetch_row ($f2)){


					echo $precio_p= number_format($f[0]);

				}
				?>

			</span>
		</div>
		<div class="cart_button pt-20">
			<a href="cart" class="button primary half">Ir al carrito</a>
		</div>


		<?php 

	}else{

		echo "
		<br>
		<center>
		<font color='black' size='4'>SU CESTA ESTÁ VACIA</font>
		<br>
		<br>
		</center>

		";

	}

	?>
