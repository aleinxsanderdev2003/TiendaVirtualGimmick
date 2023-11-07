<?php

session_start();
if (@!$_SESSION['correo']) {
    header("Location:desconectar");
}elseif ($_SESSION['rol']==2) {
    header("Location:desconectar");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--------------TITLE--------------->
    <?php include'include_/titulo.php' ?>
    <!--------------TITLE--------------->

    <!-------------FAVICON--------------->
    <?php include'include_/favicon.php' ?>
    <!-------------FAVICON--------------->


    <link href="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/lobipanel/lobipanel.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/plugins/pace/flash.css" rel="stylesheet" type="text/css"/>
    <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
    <link href="assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"/>
    <link href="assets/themify-icons/themify-icons.css" rel="stylesheet" type="text/css"/>
    <link href="assets/dist/css/stylehealth.min" rel="stylesheet" type="text/css"/>

</head>


<?php

require("../conexion_/conexion.php");

$id=$_GET['id'];

$pedido_detalle="SELECT * FROM pedido_detalle WHERE id_pedido='$id'";
$pedido_detalle_=mysqli_query($mysqli,$pedido_detalle);


while ($detalle=mysqli_fetch_row ($pedido_detalle_)){


    $id_detalle=$detalle[0];
    $id_pedido=$detalle[1];
    $id_usuario=$detalle[2]; 
    $id_producto=$detalle[3]; 
    $precio=$detalle[4]; 
    $fecha=$detalle[5];
    $estado=$detalle[6];
    $cantidad=$detalle[7];


    //USUARIO
    $usuario_="SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
    $u_usuario=mysqli_query($mysqli,$usuario_);
    while ($usuarios_v=mysqli_fetch_row ($u_usuario)){
        $nombre=$usuarios_v[1];
        $apellido=$usuarios_v[2];
        $correo=$usuarios_v[3];
        $telefono=$usuarios_v[4];
        $departamento=$usuarios_v[9];
        $direccion_one=$usuarios_v[10];
        $direccion_two=$usuarios_v[11];
    }
    //USUARIO

}

?>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">


        <!-------------HEADER-------------->
        <?php include'include_/header.php' ?>
        <!-------------HEADER-------------->


        <!-------------ASIDE-------------->
        <?php include'include_/aside.php' ?>
        <!-------------ASIDE-------------->



        <!-- =============================================== -->
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="header-icon">
                    <i class="pe-7s-news-paper"></i>
                </div>
                <div class="header-title"> 
                    <h1>Factura</h1>
                    <small>Factura #<?php echo $id_pedido ?></small>
                    <ol class="breadcrumb hidden-xs">
                        <li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
                        <li class="active">FACTURA</li>
                    </ol>
                </div>
            </section>
            <!-- Main content -->
            <section class="content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="panel panel-bd">
                            <div class="panel-body">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <address>
                                            <strong>Detalle del cliente</strong>
                                            <br>
                                            <br>
                                            -<?php echo $nombre ?> <?php echo $apellido ?>
                                            <br>
                                            -<?php echo $correo ?>
                                            <br>
                                            -<abbr title="Phone">Telefono:</abbr> <?php echo $telefono ?>
                                        </address>
                                    </div>
                                    <div class="col-sm-6 text-left">
                                        <h1 class="m-t-0">Factura  #<?php echo $id_pedido ?></h1>
                                        <div class="text-danger m-b-15"><?php echo $fecha ?></div>
                                        <address>
                                            <strong>Dirección de envio.</strong><br>
                                            <?php echo $departamento ?><br>
                                            <?php echo $direccion_one ?><br>
                                            <?php echo $direccion_two ?>
                                        </address>
                                    </div>
                                </div> <hr>
                                <div class="table-responsive m-b-20">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>Producto</th>
                                                <th>Precio unidad</th>
                                                <th>Cantidad</th>
                                                <th>Fecha</th>
                                                <th>estado</th>
                                                <th>Envio</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <?php

                                            $q = "";

                                            if(!empty($_POST))
                                            {
                                                $q = $_POST['buscando'];
                                            }

                                            if(isset($_GET['pag']) == TRUE){ 
                                                $pag = $_GET['pag']; 
                                            } 

                                            else{ 
                                                $pag = 0; 
                                            } 

                                            $limite = 40; 

                                            $inicial = $pag * $limite; 

                                            $resultados_mostrados=0;

                                            require("../conexion_/conexion.php");

                                            $pedido_g=$_GET['id'];

                                            $pedidos="SELECT * FROM pedido_detalle WHERE id_pedido='$pedido_g' and fecha LIKE '%$q%' LIMIT $inicial,$limite";
                                            $pedidos_=mysqli_query($mysqli,$pedidos);

                                            while ($pedido=mysqli_fetch_row ($pedidos_)){

                                                $id_detalle  = $pedido[0];
                                                $id_pedido = $pedido[1];
                                                $id_usuario = $pedido[2];
                                                $id_producto = $pedido[3];
                                                $precio = $pedido[4];
                                                $fecha = $pedido[5];
                                                $estado = $pedido[6];
                                                $cantidad = $pedido[7];


                                                //USUARIO
                                                $usuario_="SELECT * FROM usuarios WHERE id_usuario='$id_usuario'";
                                                $u_usuario=mysqli_query($mysqli,$usuario_);
                                                while ($usuarios_v=mysqli_fetch_row ($u_usuario)){
                                                    $nombre=$usuarios_v[1];
                                                    $apellido=$usuarios_v[2];
                                                    $correo=$usuarios_v[3];
                                                    $telefono=$usuarios_v[4];
                                                    $departamento=$usuarios_v[9];
                                                    $direccion_one=$usuarios_v[10];
                                                    $direccion_two=$usuarios_v[11];
                                                }
                                                //USUARIO


                                                //PRODUCTO
                                                $productos="SELECT nombre FROM productos WHERE id_producto='$id_producto'";
                                                $productos_=mysqli_query($mysqli,$productos);
                                                while ($producto_v=mysqli_fetch_row ($productos_)){
                                                    $nombre_producto=$producto_v[0];

                                                    $guiones = str_replace(" ", "-", $nombre_producto);
                                                }
                                                //PRODUCTO

                                                //IMAGENES
                                                $imagenes_p="SELECT imagen FROM productos_imagenes WHERE id_producto='$id_producto' LIMIT 1";
                                                $p_imagenes=mysqli_query($mysqli,$imagenes_p);
                                                while ($imagenes_v=mysqli_fetch_row ($p_imagenes)){
                                                    $imagen_principal=$imagenes_v[0];
                                                }
                                                //IMAGENES

                                                echo 
                                                '
                                                <tr>
                                                <td>'.htmlentities($nombre_producto).'</td>
                                                <td>$ '.htmlentities(number_format($precio)).'</td>
                                                <td>'.htmlentities($cantidad).'</td>
                                                <td>'.htmlentities($fecha).'</td>
                                                ';
                                                if($estado==0){

                                                    echo '<td><span class="badge light badge-success">En espera</span></td>';

                                                    echo '
                                                    <td>

                                                    <a href="validaciones_/_pedidos/pedidos-enviado?id='.htmlentities($id_detalle).'&pedido='.htmlentities($id_pedido).'"><button class="btn btn-danger" style="background-color: #017903; border: none;">ENVIADO..</button></a>

                                                    </td>';


                                                }else if($estado==1){

                                                    echo '<td><span class="badge light badge-danger">Enviado</span></td>';

                                                    echo '<td><img src="../img_/envios.png" width="30"></button></td>';

                                                }else if($estado==2){

                                                    echo '<td><span class="badge light badge-danger">Entregado</span></td>';

                                                    echo '<td><img src="../img_/bien.png" width="30"></button></td>';
                                                }

                                                echo
                                                '
                                                </tr>

                                                ';

                                                

                                            }

                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8">
                                        <p><strong>Muchas gracias por elegirnos. Ha sido un placer trabajar contigo.</strong></p>
                                        <img src="assets/dist/img/credit/AM_mc_vs_ms_ae_UK.png" class="img-responsive" alt="">

                                    </div>
                                    <div class="col-sm-4">
                                        <ul class="list-unstyled text-left">
                                            <li>
                                                <?php 

                                                $r = mysqli_query($mysqli, "SELECT SUM(precio*cantidad) AS suma FROM pedido_detalle WHERE id_pedido='$id_pedido'");
                                                $f = mysqli_fetch_assoc($r);

                                                ?>
                                                <strong>Sub - monto total</strong> $ <?php echo number_format($f["suma"]) ?> </li>
                                                <li>
                                                    <li>
                                                        <strong>IVA:</strong> 19%</li>
                                                        <li>
                                                            <strong>Gran total:</strong> $ <?php echo number_format($f["suma"]) ?> </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel-footer text-left">
                                                <button type="button" class="btn btn-info" onclick="myFunction()"><span class="fa fa-print"></span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section> 
                        </div> 


                        <!--------------FOOTER-------------->
                        <?php include'include_/footer.php' ?>
                        <!--------------FOOTER-------------->


                    </div> 

                    <script src="assets/plugins/jQuery/jquery-1.12.4.min.js" type="text/javascript"></script>
                    <script src="assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
                    <script src="assets/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
                    <script src="assets/plugins/lobipanel/lobipanel.min.js" type="text/javascript"></script>
                    <script src="assets/plugins/pace/pace.min.js" type="text/javascript"></script>
                    <script src="assets/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
                    <script src="assets/plugins/fastclick/fastclick.min.js" type="text/javascript"></script>
                    <script src="assets/dist/js/custom1.js" type="text/javascript"></script>
                    <script src="assets/dist/js/custom.js" type="text/javascript"></script>
                    <script>

                        function myFunction() {
                            window.print();
                        }
                    </script>
                </body>

                </html>