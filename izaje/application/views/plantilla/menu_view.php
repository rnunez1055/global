<!-- ========== Left Sidebar Start ========== -->
<?php //echo $this->session->userdata('TipoUsuario_di'); ?>
<div class="left side-menu side-menu-dark">

            <div class="slimscroll-menu" id="remove-scroll">

                <!--- Sidemenu -->

                <div id="sidebar-menu">

                    <!-- Left Menu Start -->

                    <ul class="metismenu" id="side-menu">

                        <li class="menu-title">Menú</li>

                        <li><a href="<?php echo URL_INICIO ?>maestros/usuario" class="waves-effect"><i class="mdi mdi-home"></i>

                        <span>Inicio</span></a></li>
                        
                        <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-buffer"></i><span>Accesos <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>

                            <ul class="submenu">

                                <?php if($this->session->userdata('TipoUsuario_di')==1){?>

                                    <li><a href="<?php echo URL_INICIO ?>maestros/usuario">Alumnos</a></li>
                                
                                    <li><a href="<?php echo URL_INICIO ?>maestros/equipos">Equipos</a></li>

                                <?php }else{ ?>

                                    <li><a href="<?php echo URL_INICIO ?>maestros/usuario">Mi Perfil</a></li>

                                <?php } ?>

                                    <li><a href="<?php echo URL_INICIO ?>maestros/certificado">Certificados</a></li>
                                
                            </ul>

                        </li>
                        <li><a href="<?php echo URL_INICIO ?>maestros/reporte" class="waves-effect"><i class="mdi mdi-content-paste"></i><span>Reportes</span></a></li>
                        <!-- <li>
                            <a href="javascript:void(0);" class="waves-effect"><i class="mdi mdi-content-paste"></i><span>Reportes <span class="float-right menu-arrow"><i class="mdi mdi-plus"></i></span></span></a>
                            <ul class="submenu">
                                <li><a href="<?php //echo URL_INICIO ?>maestros/reporte">Estatus del Certificado</a></li>
                                <li><a href="<?php //echo URL_INICIO ?>maestros/reporte2">Empresa</a></li>
                            </ul>
                        </li> -->
                    </ul>

                </div><!-- Sidebar -->

                <div class="clearfix"></div>

            </div><!-- Sidebar -left -->

        </div><!-- Left Sidebar End -->



                <!-- ============================================================== -->

        <!-- Start right Content here -->

        <!-- ============================================================== -->

        <div class="content-page">

            <!-- Start content -->

            <div class="content">