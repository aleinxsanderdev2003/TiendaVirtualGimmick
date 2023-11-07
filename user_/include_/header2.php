<div class="header_area">

	<div class="header_top top_three">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="top_left_sidebar">
						<div class="contact_link link_three">
							<span>Llámanos gratis: <strong><?php include'include_/informacion_principal_telefono.php' ?></strong></span>
						</div>
						<div class="switcher switcher_three">
							<ul>
								<li class="currency"><a href="#">Moneda : <strong>COP </strong><i class="fa fa-angle-down"></i></a>
									<ul class="dropdown_currency">
										<li class="select"><a href="#" title="Dolar (USD)">Dolar (USD)</a></li>
									</ul>
								</li>
								<li class="languages"><a href="#"><img src="assets/img/logo/lion.jpg" alt=""> Ingles <i class="fa fa-angle-down"></i></a>
									<ul class="dropdown_languages">
										<li class="select"><img src="assets/img/logo/lion.jpg" alt=""> Ingles</li>
									</ul>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="header_right_info right_info_three text-right">
						<ul>
							<li class="link_checkout"><a href="mi-perfil"><i class="fa fa-check" aria-hidden="true"></i> Mi perfil </a></li>
							<li class="log_in"><a href="#"><?php echo $_SESSION['nombre']." ".$_SESSION['apellido'];?></a></li>
							<li class="log_in"><a href="#"><?php echo $_SESSION['correo']; ?></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="header_middle middle_three">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-3">
					<div class="logo">
						<!-------------LOGO--------------->
						<?php include'include_/logo.php' ?>
						<!-------------LOGO--------------->
					</div>
				</div>
				<div class="col-lg-6">
					<div class="search_form">
						<form action="<?php $_SERVER['PHP_SELF']; ?>shop-search?to=products#the-best-products" method="POST">
							<input placeholder="Escribe el producto que buscas..." id="nombre_busqueda" name="nombre_busqueda" type="text" required>
							<button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>

						</form>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="header_widget about_widget text-right">
						<ul>
							<li class="shopping_cart"><a href="#" title="View my shopping cart"><i class="fa fa-shopping-bag"></i></a> 
								<span class="cart__quantity" id="numero"></span>
								<div class="mini_cart cart_left" id="detalle">


									<!-------------AQUI ESTA EL DTALLE DE LA COMPRA--------------->


								</div>                                                                                                                                                               
							</li>

							<!---------------------CERRAR------------------------->
							<li>
								<a href="desconectar">
									<img src="img_/cerrar.png" style="border-radius: 30px;">
								</a>                                                                                                           
							</li>
							<!---------------------CERRAR------------------------->
						</ul>

					</div>

				</div>
			</div>
		</div>
	</div> 

	<div class="header_bottom sticky-header">
		<div class="container">
			<div class="row">
				<div class="col-12">
					<div class="main_menu_inner">
						<div class="main_menu d-none d-lg-block">
							<nav>
								<ul>
									<li class="dropdown_item"><a href="hiperofertas?to=products">HIPEROFERTAS</a></li>
									<li class="dropdown_item"><a href="catalogo">CATALOGO</a></li>
									<li class="dropdown_item"><a href="shop?to=products">MERCADO</a></li>
									<li><a href="nuestras-tiendas">NUESTRAS TIENDAS</a></li>
									<li><a href="ayuda">AYUDA</a></li>
									<li><a href="mis-compras">MIS COMPRAS</a></li>
								</ul>
							</nav>
						</div>

						<div class="mobile-menu portfolio_mobail about d-lg-none">
							<nav>
								<ul>
									<li><a href="hiperofertas?to=products">HIPEROFERTAS</a></li>
									<li><a href="catalogo">CATALOGO</a></li>
									<li><a href="shop?to=products">MERCADO</a></li>
									<li><a href="nuestras-tiendas">NUESTRAS TIENDAS</a></li>
									<li><a href="ayuda">AYUDA</a></li>
									<li><a href="mis-compras">MIS COMPRAS</a></li>
								</ul>
							</nav>
						</div>

					</div>
				</div>
			</div>
		</div> 
	</div>  
</div>
