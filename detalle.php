<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--------------TITLE--------------->
    <?php include'include_/titulo.php' ?>
    <!--------------TITLE--------------->

    <!-------------FAVICON--------------->
    <?php include'include_/favicon.php' ?>
    <!-------------FAVICON--------------->

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bundle">
    <link rel="stylesheet" href="assets/css/plugins.css">
    <link rel="stylesheet" href="assets/css/style">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <link href="css_/sweetalert2.min.css" rel="stylesheet" type="text/css">
    <script src="assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>
<body>

 <!-------------HEADER--------------->
 <?php include'include_/header2.php' ?>
 <!-------------HEADER--------------->

 <?php

 require("conexion_/conexion.php");

 $i=$_GET['i'];

 if($i==true){

    $productos="SELECT * FROM productos WHERE estado='0' and id_producto='$i'";
    $productos_=mysqli_query($mysqli,$productos);


    $result = 0;
    $result = mysqli_num_rows($productos_);
    if ($result > 0) {

        while ($product=mysqli_fetch_row ($productos_)){


         $id_producto = $product[0];
         $nombre = $product[1];
         $resumen = $product[2];
         $descripcion = $product[3];
         $precio = $product[4];
         $referencia = $product[5];
         $condicion = $product[6];
         $descuento = $product[7];
         $estrellas = $product[8];
         $categoria = $product[9];
         $estado = $product[10];
         $stock = $product[11];

         $precio_=$precio*$descuento;
         $precio2=$precio-$precio_;

        //CATEGORIA
         $categoria_c="SELECT nombre FROM categorias WHERE id_categoria='$categoria'";
         $c_categoria=mysqli_query($mysqli,$categoria_c);
         while ($categoria_v=mysqli_fetch_row ($c_categoria)){
            $nombre_categoria=$categoria_v[0];
        }
        //CATEGORIA


        $imagenes="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
        $imagenes_=mysqli_query($mysqli,$imagenes);
        while ($img=mysqli_fetch_row ($imagenes_)){

            $imagen_principal=$img[0];

        }

        ?>


        <div class="breadcrumbs_area bread_about">
           <div class="container">
               <div class="row">
                   <div class="col-12">
                       <div class="breadcrumb_content">
                           <div class="breadcrumb_header">
                               <a href="index"><i class="fa fa-home"></i></a>
                               <span><i class="fa fa-angle-right"></i></span>
                               <a href="shop?to=products"><span> productos</span></a>

                               <span><i class="fa fa-angle-right"></i></span>
                               <span> <?php echo $nombre ?></span>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>

       <div class="product_details">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-6">


                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                      <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <?php 
                        $im="SELECT id_imagen FROM productos_imagenes WHERE id_producto='$id_producto'";
                        $im_=mysqli_query($mysqli,$im);
                        while ($im=mysqli_fetch_row ($im_)){$id_i=$im[0];
                            echo '<li data-target="#carouselExampleIndicators" data-slide-to="'.htmlentities($id_i).'"></li>';
                        }
                        ?>   
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src="img_/img_productos/<?php echo $imagen_principal ?>" alt="First slide">
                        </div>
                        <?php 


                        $imagenes="SELECT id_imagen, imagen FROM productos_imagenes WHERE id_producto='$id_producto'";
                        $imagenes_=mysqli_query($mysqli,$imagenes);
                        while ($img=mysqli_fetch_row ($imagenes_)){

                            $id_imagenes=$img[0];
                            $imagenes=$img[1];

                            echo 
                            '
                            <div class="carousel-item">
                            <img class="d-block w-100" src="img_/img_productos/'.htmlentities($imagenes).'" alt="First slide">
                            </div>
                            ';

                        }


                        ?>

                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>


            </div>
            <div class="col-lg-7 col-md-6">
                <div class="product_d_right">
                    <h1><?php echo $nombre ?></h1>
                    <div class="samll_product_ratting mb-10">
                        <ul>
                            <?php 

                            if($estrellas==1){

                                echo '
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                ';

                            }else if($estrellas==2){

                                echo
                                '
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                ';
                            }else if($estrellas==3){

                                echo
                                '
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                ';
                            }else if($estrellas==4){
                                echo
                                '
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a class="comment_form"><i class="fa fa-star"></i></a></li>
                                ';

                            }else if($estrellas==5){
                                echo
                                '
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                <li><a href="#"><i class="fa fa-star"></i></a></li>
                                ';

                            }else{

                            }


                            ?>
                        </ul>
                    </div>
                    <div class="product_reference">
                        <p>Referencia: <span><?php echo $referencia ?></span></p>
                    </div>
                    <div class="product_condition">
                        <p>Condición:  <span>Producto <?php echo $condicion ?></span></p>
                    </div>
                    <div class="product_condition">
                        <p>Categoria:  <span><?php echo $nombre_categoria ?></span></p>
                    </div>
                    <div class="product_condition">
                        <p>Stock:  <span><?php echo $stock ?> unidades</span></p>
                    </div>
                    <div class="product_short_desc">
                        <p><?php echo nl2br($resumen); ?></p>
                    </div>
                    <div class="small_product_price mb-15">
                        <?php 

                        if($descuento>0){

                            echo 
                            '
                            <span class="new_price">$ '.htmlentities(number_format($precio2)).' </span>
                            <span class="old_price">$  '.htmlentities(number_format($precio)).'  </span>
                            ';

                        }else{

                         echo 
                         '
                         <span class="new_price">$ '.htmlentities(number_format($precio)).' </span>
                         ';

                     }

                     ?>
                 </div>
                 <div class="product_d_quantity mb-20">
                    <form action="#">
                        <label>Cantidad</label>
                        <input type="number" id="cantidad" value="1" min="1" maxlength="2" oninput="if(this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" />
                        <input type="text" id="id_producto" style="display: none;" value="<?php echo $id_producto ?>">
                    </form> 
                    <button type="button" id="agregar_carrito"><i class="fa fa-shopping-cart"></i> Añadir al carrito</button>    
                </div>

            </div>
        </div>
    </div>
</div>
</div>

<div class="product__details_tab mb-40">
    <div class="container">
        <div class="row">
            <div class="col-12 ">
                <div class="product_details_tab_inner"> 
                    <div class="product_details_tab_button">    
                        <ul class="nav" role="tablist">
                            <li >
                                <a class="nav-link active" data-toggle="tab" href="#info" role="tab" aria-controls="info" aria-selected="false">Más información</a>
                            </li>
                        </ul>
                    </div> 
                    <div class="tab-content product_details_content">
                        <div class="tab-pane fade show active" id="info" role="tabpanel" >
                            <div class="product_d_tab_content">
                                <p><?php echo nl2br($descripcion); ?></p>
                            </div>    
                        </div>
                    </div>  
                </div>
            </div>   

        </div>
    </div>
</div>


<!-------------MODAL--------------->
<?php include'include_/modal.php' ?>
<!-------------MODAL--------------->    

<!-------------FOOTER--------------->
<?php include'include_/footer.php' ?>
<!-------------FOOTER--------------->   

<?php 

}
}else{

    echo'
    <script>
    function redireccionarPagina() {
        window.location = "javascript:history.back()";
    }
    setTimeout("redireccionarPagina()");
    </script>
    ';

}

}else{

    echo'
    <script>
    function redireccionarPagina() {
        window.location = "javascript:history.back()";
    }
    setTimeout("redireccionarPagina()");
    </script>
    ';

}

?>


<script src="assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="assets/js/popper.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>
<script src="js_/sweetalert2.min.js"></script>
<script src="validaciones_/js/login.js"></script>
<script src="validaciones_/js/sign_up.js"></script>
<script src="validaciones_/js/carrito_compras.js"></script>
<script src="validaciones_/js/actualizar_card.js"></script>
<script src="validaciones_/js/boletines.js"></script>

</body>

</html>
