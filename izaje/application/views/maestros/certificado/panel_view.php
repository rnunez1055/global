<script src="<?php echo URL_JS ?>jsSitio/administracion/maestros/jsCertificado.js"></script>

<div class="container-fluid">

    <div class="row">

        <div class="col-sm-12">

            <div class="page-title-box">

                <h4 class="page-title">
                    <?php echo $titulo_pagina ?>
                </h4>

            </div>

        </div>

    </div><!-- end row -->

    <div class="page-content-wrapper">

        <div class="row">

            <div class="col-lg-12">

                <div class="card m-b-20">

                    <div class="card-body">

                        <ul class="nav nav-tabs" role="tablist">

                            <li class="nav-item"><a onclick="buscar();" class="nav-link active" data-toggle="tab" href="#home" role="tab">Listar Alumnos Certificados</a></li>
                            
                            <li class="nav-item"><a onclick="buscar_equipos();" class="nav-link" data-toggle="tab" href="#home" role="tab">Listar Equipos Certificados</a></li>
                            
                            <?php if($this->session->userdata('TipoUsuario_di')==1){?>
                            <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#profile" role="tab">Nuevo Certificado</a></li>
                            <?php }?>
                        </ul>
                        <!-- Tab panes -->

                        <div class="tab-content">

                            <div class="tab-pane active p-3" id="home" role="tabpanel">

                                <div id="mostrar_lista"></div>

                            </div>
                            <div class="tab-pane p-3" id="profile" role="tabpanel">

                                <?php $this->load->view('maestros/certificado/nuevo_view'); ?>

                            </div>
                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div><!-- end page content-->

</div><!-- container-fluid -->