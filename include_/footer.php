<div class="newsletter_area">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-2 col-md-6">
				<div class="footer_logo">
					<!-------------LOGO--------------->
					<?php include'include_/logo.php' ?>
					<!-------------LOGO--------------->
				</div>
			</div>
			<div class="col-lg-2 col-md-6">
				<div class="social_icone">
					<ul>
						<li><a href="#" title="facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" title="twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" title="linkedin"><i class="fa fa-linkedin"></i></a></li>
						<li><a href="#" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
					</ul>
				</div>
			</div>
			<div class="col-lg-8">
				<div class="newslatter_inner fix">
					<h4>SUSCRIBIRSE AL BOLETIN</h4>
					<form action="#">
						<input placeholder="Introduce tu correo electrónico" id="correo_boletin" type="text">
						<button type="button" id="boletin">SUSCRIBIRSE</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="footer_area">
	<div class="container">
		<div class="footer_top">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_footer">
						<h4>
							
							<!-------------LOGO--------------->
							<?php include'include_/nombre.php' ?>
							<!-------------LOGO--------------->
							
						</h4>

						<ul>
							<li><i class="fa fa-home"></i> <?php include'include_/informacion_principal_direccion.php' ?></li>
							<li><i class="fa fa-phone"></i> <?php include'include_/informacion_principal_telefono.php' ?></li>
							<li><i class="fa fa-envelope-square"></i> <?php include'include_/informacion_principal_correo.php' ?></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_footer">
						<h4>INFORMACIÓN</h4>
						<ul>
							<li><a href="hiperofertas?to=products"><i class="fa fa-circle"></i> Hiperofertas</a></li>
							<li><a href="catalogo"><i class="fa fa-circle"></i> Catalogo</a></li>
							<li><a href="shop?to=products"><i class="fa fa-circle"></i> Mercado</a></li>
							<li><a href="nuestras-tiendas"><i class="fa fa-circle"></i> Nuestras tiendas</a></li>
							<li><a href="ayuda"><i class="fa fa-circle"></i> Ayuda</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_footer">
						<h4>MI CUENTA</h4>
						<ul>
							<li><a href="#" data-toggle="modal" data-target="#login_"><i class="fa fa-circle"></i> Iniciar sesión</a></li>
							<li><a href="#" data-toggle="modal" data-target="#registro_"><i class="fa fa-circle"></i> Registrarme</a></li>
							<li><a href="recover"><i class="fa fa-circle"></i> Recuperar contraseña</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="single_footer">
						<h4>INSTAGRAM</h4>
						<div class="instagram_img">
							<div class="single_instagram_img">
								<a href="#"><img src="assets/img/instagram/instagram1.jpg" alt=""></a>
							</div>
							<div class="single_instagram_img">
								<a href="#"><img src="assets/img/instagram/instagram2.jpg" alt=""></a>
							</div>
							<div class="single_instagram_img">
								<a href="#"><img src="assets/img/instagram/instagram3.jpg" alt=""></a>
							</div>
							<div class="single_instagram_img">
								<a href="#"><img src="assets/img/instagram/instagram4.jpg" alt=""></a>
							</div>
							<div class="single_instagram_img">
								<a href="#"><img src="assets/img/instagram/instagram5.jpg" alt=""></a>
							</div>
							<div class="single_instagram_img">
								<a href="#"><img src="assets/img/instagram/instagram6.jpg" alt=""></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-12">
				<div class="footer_tags">
					<a href="shop?to=products" title="More about Accessories"> Accesorios </a>
					<a href="shop?to=products" title="More about Furnitured & Decor"> Amueblado Y Decoración  </a>
					<a href="shop?to=products" title="More about Electronics">  Electrónica   </a>
					<a href="shop?to=products" title=" sale ">  Rebaja   </a>
					<a href="shop?to=products" title=" Digital Cameras"> Cámaras Digitales </a>
					<a href="shop?to=products" title=" Most Populars ">  Mas Populares  </a>
					<a href="shop?to=products" title=" Clothing"> Ropa  </a>
					<a href="shop?to=products" title=" New Arrivals"> Los Recién Llegados  </a>
					<a href="shop?to=products" title=" Laptop"> Ordenador Portátil  </a>
					<a href="shop?to=products" title=" Sport & Outdoor"> Deporte Y Al Aire Libre  </a>
				</div>
			</div>
		</div>

		<div class="copyright_area">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">

					<?php
					require("conexion_/conexion.php");
					$sql="SELECT pie_pagina FROM configuracion ";
					$ressql=mysqli_query($mysqli,$sql);
					while ($row=mysqli_fetch_row ($ressql)){
						$pie_pagina=$row[0];
					}
					?>
					<div class="widget_copyright">
						<p><?php echo $pie_pagina ?></p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="payment">
						<a href="#"><img src="assets/img/visha/payment.png" alt=""></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>