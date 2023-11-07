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
                <i class="fa fa-money"></i>
            </div>
            <div class="header-title">  
                <h1>EDITAR VENTA</h1>
                <small>Editar venta</small>
                <ol class="breadcrumb hidden-xs">
                    <li><a href="index"><i class="pe-7s-home"></i> INICIO</a></li>
                    <li class="active">VENTAS</li>
                </ol>
            </div>
        </section>


        <?php

        require("../conexion_/conexion.php");

        $id_entrada=$_GET['id_entrada'];

        $entradas="SELECT * FROM dinero_entrada WHERE id_entrada='$id_entrada'";
        $entrada=mysqli_query($mysqli,$entradas);

        while ($entrada_=mysqli_fetch_row ($entrada)){

            $id_entrada = $entrada_[0];
            $id_moderador = $entrada_[1];
            $remitente = $entrada_[2];
            $concepto = $entrada_[3];
            $valor = $entrada_[4];
            $telefono = $entrada_[5];
            $pais = $entrada_[6];
            $fecha = $entrada_[7];
            $estado = $entrada_[8];

        }


        ?>

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
                                                        <input type="text" class="form-control" id="id_entrada" name="id_entrada" value="<?php echo $id_entrada ?>" style="display: none;">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group ">
                                                        <label>Remitente</label>
                                                        <input type="text" class="form-control" id="remitente" name="remitente" value="<?php echo $remitente ?>" placeholder="Ingresa el remitente nombre">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group ">
                                                        <label>Valor</label>
                                                        <input type="text" class="form-control number" id="valor" name="valor" value="<?php echo $valor ?>" placeholder="Ingresa el valor sin puntos">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group ">
                                                        <label>Concepto</label>
                                                        <textarea type="text" class="form-control" rows="5" id="concepto" name="concepto" placeholder="Ingresa la concepto del pago"><?php echo $concepto ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row ">
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group ">
                                                        <label>Telefono</label>
                                                        <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $telefono ?>" placeholder="Ingresa el telefono">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6 col-md-6">
                                                    <div class="form-group ">
                                                        <label>Pais</label>
                                                        <input type="text" class="form-control" id="pais" name="pais" value="<?php echo $pais ?>" placeholder="Ingresa el pais">
                                                    </div>
                                                </div>
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="form-group ">
                                                        <label>Estado</label>
                                                        <select class="form-control" name="estado" id="estado">
                                                            <option value="<?php echo $estado ?>"><?php echo $estado ?></option>
                                                            <option value="0">0 (pendiente)</option>
                                                            <option value="1">1 (aprobado)</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <a href="entradas"><button class="btn btn-outline-primary">Cancelar</button></a>
                                    <button type="button" id="entradas-editar" class="btn btn-primary float-right">Editar</button>
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
<script type="text/javascript" src="validaciones_/_entradas/js/entradas-editar.js"></script>

</body>

</html>
