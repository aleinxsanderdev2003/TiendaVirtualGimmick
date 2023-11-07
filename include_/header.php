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
                                    <li class="link_checkout"><a href="hiperofertas?to=products"><i class="fa fa-check" aria-hidden="true"></i> Ofertas </a></li>
                                    <li class="log_in"><a href="#" data-toggle="modal" data-target="#login_"><i class="fa fa-lock" aria-hidden="true"></i> Iniciar Sesión  </a></li>
                                    <li class="log_in"><a href="#" data-toggle="modal" data-target="#registro_"><i class="fa fa-lock" aria-hidden="true"></i> Registrarme  </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header_middle middle_three">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-3 ">
                            <div class="logo">
                                <!-------------LOGO--------------->
                                <?php include'include_/logo.php' ?>
                                <!-------------LOGO--------------->
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="main_menu_inner menu_inner_three">
                                <div class="main_menu menu_three  d-none d-lg-block">
                                    <nav>
                                        <ul>
                                            <li class="active"><a href="hiperofertas?to=products">HIPEROFERTAS</a></li>
                                            <li class="dropdown_item"><a href="catalogo">CATALOGO</a></li>
                                            <li class="dropdown_item"><a href="shop?to=products">MERCADO</a></li>
                                            <li><a href="nuestras-tiendas">NUESTRAS TIENDAS</a></li>
                                            <li><a href="ayuda">AYUDA</a></li>
                                        </ul>
                                    </nav>
                                </div>
                                
                                <div class="mobile-menu mobaile_menu_three d-lg-none">
                                    <nav>
                                       <ul>
                                        <li><a href="hiperofertas?to=products">HIPEROFERTAS</a></li>
                                        <li><a href="catalogo">CATALOGO</a></li>
                                        <li><a href="shop?to=products">MERCADO</a></li>
                                        <li><a href="nuestras-tiendas">NUESTRAS TIENDAS</a></li>
                                        <li><a href="ayuda">AYUDA</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div> 
                    </div>
                    <div class="col-lg-2">
                        <div class="header_widget widget_three about_widget text-right">
                            <ul>
                                <li class="shopping_cart">

                                    <a href="#" title="View my shopping cart">
                                        <i class="fa fa-shopping-bag"></i>
                                    </a> 
                                    <span class="cart__quantity" id="numero"></span>
                                    <div class="mini_cart mini_cart_three cart_left" id="detalle">


                                        <!-------------AQUI ESTA EL DTALLE DE LA COMPRA--------------->
                                        

                                    </div>                                                                                                                                                               
                                </li>
                            </ul>

                        </div>

                    </div>
                </div>
            </div>
        </div> 


        <div class="header_bottom bottom_three">
         <div class="container">
             <div class="row">
                <div class="col-lg-3 col-md-5">
                    <div class="categories_menu categorie__three">
                        <div class="categories_title ca_title_two">
                            <h2 class="categori_toggle"><img src="assets/img/logo/categorie.png" alt=""> CATEGORIAS</h2>
                        </div>
                        <div class="categories_menu_inner categorie_inner_three">
                            <ul>

                                <?php
                                require("conexion_/conexion.php");

                                $categorias="SELECT * FROM categorias WHERE estado='0'";
                                $cate=mysqli_query($mysqli,$categorias);
                                while ($categoria=mysqli_fetch_row ($cate)){

                                    $id_categoria = $categoria[0];
                                    $nombre_categoria = $categoria[1];
                                    $estado_categoria = $categoria[2];

                                    echo 
                                    '
                                    <div style="margin-left: 20px;">
                                    <a href="shop-category?to=products&st='.htmlentities($id_categoria).'#the-best-products">
                                    <i class="fa fa-caret-right"></i> '.htmlentities($nombre_categoria).' 
                                    (<span>
                                    ';

                                    $productos_total = mysqli_query($mysqli,"SELECT COUNT(*) AS total_productos FROM productos WHERE categoria='$id_categoria'");
                                    $productos_total_ = mysqli_fetch_array($productos_total);
                                    echo $productos_total_['total_productos'];

                                    echo'
                                    </span>)
                                    </a>
                                    </div>
                                    ';
                                }

                                ?>
                            </ul>
                        </div>
                    </div> 
                </div>
                <div class="col-lg-9 col-md-7">
                    <div class="search_form form_three">
                        <form action="<?php $_SERVER['PHP_SELF']; ?>shop-search?to=products#the-best-products" method="POST">
                            <input placeholder="Escribe el producto que buscas..." id="nombre_busqueda" name="nombre_busqueda" type="text" required>
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </form>
                    </div> 
                </div>
            </div>
        </div> 
    </div>  
</div>