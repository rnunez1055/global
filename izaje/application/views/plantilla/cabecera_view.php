<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=0,minimal-ui">
    <title><?php echo $titulo; ?></title>
    <meta content="Admin Dashboard" name="description">
    <meta content="Themesbrand" name="author">
    <link rel="shortcut icon" href="<?php echo URL_IMAGES ?>favicon.ico">
    <link rel="stylesheet" href="<?php echo URL_PLUGINS ?>morris/morris.css">
    <link href="<?php echo URL_PLUGINS ?>datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_PLUGINS ?>datatables/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css">
    <!-- Responsive datatable examples -->
    <link href="<?php echo URL_PLUGINS ?>datatables/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css">
    
    <link href="<?php echo URL_PLUGINS ?>bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_PLUGINS ?>bootstrap-md-datetimepicker/css/bootstrap-material-datetimepicker.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>vendor.bundle.addons.css" rel="stylesheet" type="text/css">
    
    <link href="<?php echo URL_PLUGINS ?>select2/css/select2.min.css" rel="stylesheet" type="text/css">
        
    <link href="<?php echo URL_CSS ?>bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>metismenu.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>icons.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>style.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>custom.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>responsive.css" rel="stylesheet" type="text/css">
    <link href="<?php echo URL_CSS ?>vendor.bundle.addons.css" rel="stylesheet" type="text/css">
    
    

    <script src="<?php echo URL_JS ?>jquery.min.js"></script>
    <script src="<?php echo URL_JS ?>bootstrap.bundle.min.js"></script>
    
    <script src="<?php echo URL_JS ?>jquery-validation/dist/jquery.validate.min.js"></script>    
    

</head>

<body>
    <!-- Begin page -->
    <div id="wrapper">
        <!-- Top Bar Start -->
        <div class="topbar">
            <!-- LOGO -->
            <div class="topbar-left">
                <a href="<?php echo URL_INICIO ?>maestros/usuario" class="logo">
                    <span>
                        <img src="<?php echo URL_IMAGES ?>logo.png" alt="" height="auto">
                    </span>
                    <i>
                        <img src="<?php echo URL_IMAGES ?>logo-sm.png" alt="" height="auto">
                    </i>
                </a>
            </div>
            <nav class="navbar-custom">
                <ul class="navbar-right d-flex list-inline float-right mb-0">
                    <li class="dropdown notification-list" style="width: 50px;">
                        <a href="<?php echo URL_INICIO ?>logout" class="nav-link dropdown-toggle arrow-none waves-effect waves-light" title="Cerrar Sessión" style="width: 100%;padding: 0 10px;">
                            <img src="<?php echo URL_IMAGES ?>icons/power-button-off.png" alt=""style="width: 100%;">
                        </a>                            
                    </li>
                    <li class="dropdown notification-list ds-none">
                        <div class="dropdown notification-list nav-pro-img"><a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                            <?php if($this->session->userdata('sUsuRutaImagen')==""){?>
                                
                                <img src="<?php echo URL_IMAGES ?>users/avatar_in.png" alt="user" class=""></a>            
                                
                            <?php }?>

                            <?php if($this->session->userdata('sUsuRutaImagen')!=""){?>
                                
                                <img src="<?php echo $this->session->userdata('sUsuRutaImagen') ?>" alt="user" class=""></a>            
                                
                            <?php }?>
                            


                        </div>
                    </li>
                    <li class="cont-hola-user ds-none">
                        <p>Hola</p>
                        <span><?php echo $this->session->userdata('sUsuLogin'); ?></span>
                    </li>
                </ul>
                <ul class="list-inline menu-left mb-0">
                    <li class="float-left"><button class="button-menu-mobile open-left waves-effect waves-light"><i class="mdi mdi-menu"></i></button></li>
                </ul>
            </nav>
        </div>
        <div class="ds-block">
            <ul>
                <li class="dropdown notification-list">
                        <div class="dropdown notification-list nav-pro-img"><a class="dropdown-toggle nav-link arrow-none waves-effect nav-user waves-light" data-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">

                            <?php if($this->session->userdata('sUsuRutaImagen')==""){?>
                                
                                <img src="<?php echo URL_IMAGES ?>users/avatar_in.png" alt="user" class=""></a>            
                                
                            <?php }?>

                            <?php if($this->session->userdata('sUsuRutaImagen')!=""){?>
                                
                                <img src="<?php echo $this->session->userdata('sUsuRutaImagen') ?>" alt="user" class=""></a>            
                                
                            <?php }?>
                            


                        </div>
                    </li>
                    <li class="cont-hola-user">
                        <p>Hola</p>
                        <span><?php echo $this->session->userdata('sUsuLogin'); ?></span>
                    </li>
            </ul>
        </div>
        <!-- Top Bar End -->