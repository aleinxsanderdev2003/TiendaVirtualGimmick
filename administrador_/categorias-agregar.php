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
    <link href="assets/css/photo.css" rel="stylesheet" type="text/css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <link href="assets/css/sweetalert2.min.css" rel="stylesheet" type="text/css">

</head>

<body class="hold-transition sidebar-mini">        
    <div class="wrapper">


        <!-------------HEADER-------------->
        <?php include'include_/header.php' ?>
        <!-------------HEADER-------------->


        <!-------------ASIDE-------------->
        <?php include'include_/aside.php' ?>
        <!-------------ASIDE-------------->


        <div class="content-wrapper">

           <section class="content-header">
            <div class="header-icon">
                <i class="fa fa-list-alt"></i>
            </div>
            <div class="header-title">  
                <h1>NUEVA CATEGORIA</h1>
                <small>Nueva categoria</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
                    <li class="active">CATEGORIAS</li>
                </ol>
            </div>
        </section>


        <section class="content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="panel panel-bd lobidrag">

                        <div class="panel-body">


                           <div class="card shadow-sm border-0 mb-4">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-md-10 ">
                                        <div class="row ">
                                            <div class="col-lg-12 col-md-12">
                                                <div class="form-group ">
                                                    <label>Nombre</label>
                                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresa el nombre">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="categorias"><button class="btn btn-outline-primary">Cancelar</button></a>
                                <button type="button" id="categorias-agregar" class="btn btn-primary float-right">Agregar</button>
                            </div>
                        </div>

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
<script src="assets/js/sweetalert2.min.js"></script>
<script src="validaciones_/_categorias/js/categorias-agregar.js"></script>

</body>

</html>
