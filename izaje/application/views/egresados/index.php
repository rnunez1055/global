<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Consultar Alumnos Egresados</title>

    <link rel="shortcut icon" href="<?php echo URL_IMAGES ?>favicon.ico">
    <link rel="stylesheet" href="<?php echo URL_PLUGINS ?>morris/morris.css">
    <link href="<?php echo URL_PLUGINS ?>datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_PLUGINS ?>datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="<?php echo URL_PLUGINS ?>datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo URL_PLUGINS ?>bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo URL_PLUGINS ?>bootstrap-md-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet"
        type="text/css">
    <link href="<?php echo URL_CSS ?>vendor.bundle.addons.css" rel="stylesheet" type="text/css">

    <link href="<?php echo URL_PLUGINS ?>select2/css/select2.min.css" rel="stylesheet" type="text/css">

    <link href="<?php echo URL_CSS ?>bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>metismenu.min.css" rel="stylesheet" type="text/css">
    <!-- <link href="<?php echo URL_CSS ?>icons.css" rel="stylesheet" type="text/css"> -->
    <link href="<?php echo URL_CSS ?>style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>custom.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>responsive.css" rel="stylesheet" type="text/css">
    <!-- <link href="<?php echo URL_CSS ?>vendor.bundle.addons.css" rel="stylesheet" type="text/css"> -->



    <script src="<?php echo URL_JS ?>jquery.min.js"></script>
    <script src="<?php echo URL_JS ?>bootstrap.bundle.min.js"></script>

    <script src="<?php echo URL_JS ?>jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="<?php echo URL_JS ?>jsSitio/administracion/maestros/jsEgresados.js"></script>
</head>

<body>
<section class="full-container">
    <div class="cont-nav">
        <figure class="cont-nav-fg">
            <a href="javascript:void(0);" title="GLOBAL SUPPLIER S&P SAC">
            <img class="" src="<?php echo URL_IMAGES ?>/logo_blanco.png" alt="">
            </a>
        </figure>
        <div class="cont-enlace">
            <div class="enlace_contenido">
                <a href="#" class="icon_enlaces" title="GLOBAL SUPPLIER S&P SAC">
                    <img src="<?php echo URL_IMAGES ?>/aula-virtual.svg" alt="">
                </a>
                <a href="#!" class="icon_enlaces" title="Egresados | GLOBAL SUPPLIER S&P SAC">
                    <img src="<?php echo URL_IMAGES ?>/user_egresado.svg" alt="">
                </a>
                <a href="../" target="_blank" class="icon_enlaces" title="Mi Cuenta | GLOBAL SUPPLIER S&P SAC">
                    <img src="<?php echo URL_IMAGES ?>/usuario.svg" alt="">
                </a>
                <span class="icon-facebook">
                    Síguenos en: 
                    <a href="https://www.facebook.com/cetpro.microchip.peru/" title="Facebook GLOBAL SUPPLIER S&P SAC" target="_blank"><i class="fab fa-facebook-square ico-fb-h"></i></a>
                </span>
            </div>
        </div>
    </div>
</section>

    <div class="container bg-color">
        <h2 class="title_consulta">Consulta de Alumnos Egresados</h2>
        <form class="cont-inputs_buscar" id="frmBuscar" method="post">
            <input class="form-control" type="search" value="" id="txtbuscar" name="txtbuscar" placeholder="Buscar por Código de Alumno, DNI y/o Apellidos y Nombres">
            <button type="submit" class="btn btn-dark btn-icon-text">
                <i class="fas fa-search btn-icon-prepend"></i>
            </button>
        </form>
        <div id="mostrar_lista">
        
        </div>
    </div>
    <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel"
        data-vivaldi-spatnav-clickable="1" aria-hidden="true" style="display: none;">

        <div class="modal-dialog modal-lg">

            <div class="modal-content">

                <div class="modal-header">

                    <h5 class="modal-title mt-0" id="myLargeModalLabel">Vista previa</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>

                </div>

                <div class="modal-body">

                    <iframe id="vistaprevia" class="col-12" src="" height="800px"></iframe>

                </div>

            </div>

            <!-- /.modal-content -->

        </div>

        <!-- /.modal-dialog -->

    </div>
    <footer class="cont-footer">
        <div class="full-footer">
            <figure class="logo-footer">
                <img  src="<?php echo URL_IMAGES ?>logo_blanco.png" alt="">
            </figure>

            <div class="desarrollado">
                <p class="text-fo">
                    desarrollado por
                    <a href="http://evolucionmedia.pe" target="_blank" title="Diseño y desarrollo de páginas web en Trujillo y Chiclayo.">
                        <img class="evo-animation" src="<?php echo URL_IMAGES ?>logo_evolucionmedia.png" alt="">
                    </a>
                </p>
            </div>
        </div>
    </footer>
    <script src="<?php echo URL_PAGES ?>datatables.init.js"></script><!-- App js -->

    <script>
        $(document).ready(function () {

            $('#data').DataTable();

        });

        function verarchivo(url) {

            document.getElementById('vistaprevia').src = url;

        }
    </script>
    <!-- jQuery  -->

    <script src="<?php echo URL_JS ?>metisMenu.min.js"></script>
    <script src="<?php echo URL_JS ?>jquery.slimscroll.js"></script>
    <script src="<?php echo URL_JS ?>waves.min.js"></script>
    <script src="<?php echo URL_PLUGINS ?>jquery-sparkline/jquery.sparkline.min.js"></script><!-- Peity JS -->
    <script src="<?php echo URL_PLUGINS ?>peity/jquery.peity.min.js"></script>

    <script src="<?php echo URL_PLUGINS ?>raphael/raphael-min.js"></script>

    <script src="<?php echo URL_PLUGINS ?>bootstrap-md-datetimepicker/js/moment-with-locales.min.js"></script>
    <script src="<?php echo URL_PLUGINS ?>bootstrap-md-datetimepicker/js/bootstrap-material-datetimepicker.js"></script><!-- Plugins js -->

    <script src="<?php echo URL_PLUGINS ?>select2/js/select2.min.js"></script>

    <script src="<?php echo URL_PLUGINS ?>datatables/jquery.dataTables.min.js"></script>
    <script src="<?php echo URL_PLUGINS ?>datatables/dataTables.bootstrap4.min.js"></script><!-- Buttons examples -->
    <script src="<?php echo URL_PLUGINS ?>datatables/dataTables.responsive.min.js"></script>
    <script src="<?php echo URL_PLUGINS ?>datatables/responsive.bootstrap4.min.js"></script><!-- Datatable init js -->


    <script src="<?php echo URL_PLUGINS ?>bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js"></script><!-- Plugins Init js -->
    <script src="<?php echo URL_PAGES ?>form-advanced.js"></script><!-- App js -->
    <script src="<?php echo URL_JS ?>toastDemo.js"></script>
    <script src="<?php echo URL_JS ?>desktop-notification.js"></script>
    <script src="<?php echo URL_JS ?>vendor.bundle.addons.js"></script>


    <script src="<?php echo URL_JS ?>app.js"></script>
</body>

</html>