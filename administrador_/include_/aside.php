		<aside class="main-sidebar">
			<div class="sidebar">

				<div class="user-panel">
					<div class="image pull-left">
						<img src="assets/dist/img/avatar5.png" class="img-circle" alt="User Image">
					</div>
					<div class="info">
						<h4><?php include'include_/nombre.php' ?></h4>
						<p><?php echo $_SESSION['nombre']; ?></p>
					</div>
				</div>


				<ul class="sidebar-menu">
					<li><a href="index"><i class="fa fa-tachometer"></i><span>INICIO</span></a></li>

					<li><a href="usuarios"><i class="fa fa-user"></i><span>USUARIOS</span></a></li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-shopping-bag"></i><span>PRODUCTOS</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="productos_nuevo">Nuevo producto</a></li>
							<li><a href="productos">Ver productos</a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-columns"></i><span>PEDIDOS</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="pedidos">Ver pedidos en espera</a></li>
						</ul>
						<ul class="treeview-menu">
							<li><a href="pedidos-entregados">Ver pedidos entregados</a></li>
						</ul>
					</li>


					<li class="treeview">
						<a href="#">
							<i class="fa fa-money"></i><span>VENTAS</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="entradas-agregar">Agregar una venta</a></li>
							<li><a href="entradas">Ver ventas</a></li>
						</ul>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-sitemap"></i><span>BANNERS</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="banners-agregar">Nuevo banner</a></li>
							<li><a href="banners">Ver banner</a></li>
						</ul>
					</li>

					<li>
						<a href="boletines">
							<i class="fa fa-envelope"></i><span>BOLETINES</span>
						</a>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-list-alt"></i> <span>CATEGORIAS</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="categorias-agregar">Nueva categoria</a></li>
							<li><a href="categorias">Ver categorias</a></li>

						</ul>
					</li>

					<li>
						<a href="correo?correo=&nombre=">
							<i class="fa fa-envelope"></i><span>CORREO</span>
						</a>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-gear"></i> <span>CONFIGURACIÓN</span>
							<span class="pull-right-container">
								<i class="fa fa-angle-left pull-right"></i>
							</span>
						</a>
						<ul class="treeview-menu">
							<li><a href="informacion_principal">Información principal</a></li>
							<li><a href="titulo">Titulo</a></li>
							<li><a href="nombre">Nombre web</a></li>
							<li><a href="pie_pagina">Pie de pagina</a></li>
							<li><a href="logo">Logo</a></li>
							<li><a href="icono">Icono</a></li>
							<li><a href="color">Color</a></li>
						</ul>
					</li>
					
				</ul>
			</div>
		</aside>