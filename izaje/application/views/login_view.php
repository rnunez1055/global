<!DOCTYPE html>

<html lang="es">

<head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">

    <title>GLOBAL SUPPLIER - ALUMNOS</title>

    <meta content="Admin Dashboard" name="description">

    <meta content="Themesbrand" name="author">

    <link rel="shortcut icon" href="<?php echo URL_IMAGES ?>favicon.ico">

    <link href="<?php echo URL_CSS ?>bootstrap.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo URL_CSS ?>metismenu.min.css" rel="stylesheet" type="text/css">

    <!-- <link href="<?php echo URL_CSS ?>icons.css" rel="stylesheet" type="text/css"> -->

    <link href="<?php echo URL_CSS ?>style.css" rel="stylesheet" type="text/css">

    <link href="<?php echo URL_CSS ?>custom.css" rel="stylesheet" type="text/css">

    <link href="<?php echo URL_CSS ?>responsive.css" rel="stylesheet" type="text/css">

</head>



<body>

    <!-- Background -->

    <div class="account-pages"></div><!-- Begin page -->

    <div class="wrapper-page">

        <div class="card cont-form">

            <div class="card-body">

                <a href="index.php" class="logo logo-admin cont-form_logo">

                    <img src="<?php echo URL_IMAGES ?>logo_blanco.png">

                </a>

                <div class="p-3 container-form">

                    <h2 class="ingreso_h2">INGRESO DE USUARIO</h2>

                    <h4 class="text-muted font-18 m-b-5 text-center">Bienvenido !</h4>

                    <p class="text-muted text-center">Inicie sesión para continuar.</p>

                    <form id="frmlogin" method="POST" class="form-horizontal m-t-30" >

                        <div class="form-group input-ingreso">

                            <span class="input-ingreso_span"><img src="<?php echo URL_IMAGES ?>icons/email.png" alt=""style="width: 65%;"></span>

                            <input type="email" class="form-control form-control-lg" id="txtusuario" name="txtusuario" placeholder="E-mail">

                        </div>

                        <div class="form-group input-ingreso">

                            <span class="input-ingreso_span"><img src="<?php echo URL_IMAGES ?>icons/user.png" alt=""style="width: 65%;"></span>

                            <input type="password" class="form-control form-control-lg" id="txtcontrasena" name="txtcontrasena" placeholder="*********" autocomplete>

                        </div>

                        <div class="mt-3 btn-ingreso">

                            <button type="submit" class="btn btn-block btn-lg font-weight-medium auth-form-btn" >Ingresar</button>                  

                        </div>

                        <div id="mensaje"></div>

                    </form>

                </div>

            </div>

        </div>

        

    </div><!-- END wrapper -->

    <!-- jQuery  -->

    <script src="<?php echo URL_JS ?>jquery.min.js"></script>

    <script src="<?php echo URL_JS ?>bootstrap.bundle.min.js"></script>

    <script src="<?php echo URL_JS ?>metisMenu.min.js"></script>

    <script src="<?php echo URL_JS ?>jquery.slimscroll.js"></script>

    <script src="<?php echo URL_JS ?>waves.min.js"></script>

    <script src="<?php echo URL_PLUGINS ?>jquery-sparkline/jquery.sparkline.min.js"></script><!-- App js -->

    <script src="<?php echo URL_JS ?>app.js"></script>    

    

    <script src="<?php echo URL_JS ?>jquery-validation/dist/jquery.validate.min.js"></script>

    <script src="<?php echo URL_JS ?>jsSitio/login/jsLogin.js"></script>

</body>



</html>