<script src="<?php echo URL_JS ?>jsSitio/administracion/maestros/jsEquipos_u.js" ></script>
<div class="col-lg-6 col-xs-12" >
    <h3>Datos del Equipo</h3>
    <form class="cmxform" id="frmEquipos_u" method="post">

        <input type="hidden" value="<?php echo $Entidad['Equipo_Id'] ?>" name="txtEquipo_id" id="txtEquipo_id" >

        <fieldset>

            <div class="form-group">

                <!-- <label>Tipo de Usuario (*)</label> -->

                <?php if($LstTipoUsuario_u) { 

                    foreach ($LstTipoUsuario_u as $key => $listar) {     

                if ($Entidad['TipoUsuario_Id']==$listar['TipoUsuario_Id']){

                ?>
                <input type="hidden" class="form-control select2" name="cbotipousuario_u" id="cbotipousuario_u" value="<?php  echo $listar['TipoUsuario_Id'] ?>">

                <?php }else if($listar['TipoUsuario_Id'] !=1){?>

                    <input type="hidden" class="form-control select2" name="cbotipousuario_u" id="cbotipousuario_u" value="<?php  echo $listar['TipoUsuario_Id'] ?>">

                <?php }}} ?>

            </div>

            <div class="form-group">

                <label for="cnombre">Código del Equipo (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtcodigo_equipo_u" name="txtcodigo_equipo_u"  minlength="2" disabled type="text" value="<?php echo $Entidad['sEquCodigo'] ?>">
                    
                <?php }else { ?>
                        
                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquCodigo'] ?></label>
                    <input class="form-control" id="txtcodigo_equipo_u" name="txtcodigo_equipo_u" type="hidden" value="<?php echo $Entidad['sEquCodigo'] ?>">
                
                <?php } ?>
            </div>

            <div class="form-group">

                <label for="cnombre">Placa / Identificación (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtplaca_equipo_u" name="txtplaca_equipo_u"  minlength="2" type="text" value="<?php echo $Entidad['sEquPlaca'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquPlaca'] ?></label>
                    
                    <input class="form-control" id="txtplaca_equipo_u" name="txtplaca_equipo_u" type="hidden" value="<?php echo $Entidad['sEquPlaca'] ?>">

                <?php } ?>
            </div>
            
            <div class="form-group">

                <label for="cnombre">Tipo de Equipo (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txttipo_equipo_u" name="txttipo_equipo_u"  minlength="2" type="text" value="<?php echo $Entidad['sEquTipoEquipo'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquTipoEquipo'] ?></label>
                    
                    <input class="form-control" id="txttipo_equipo_u" name="txttipo_equipo_u" type="hidden" value="<?php echo $Entidad['sEquTipoEquipo'] ?>">

                <?php } ?>
            </div>
            
            <div class="form-group">

                <label for="cnombre">Marca / Modelo (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtmarcamodelo_equipo_u" name="txtmarcamodelo_equipo_u"  minlength="2" type="text" value="<?php echo $Entidad['sEquMarcaModelo'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquMarcaModelo'] ?></label>
                    
                    <input class="form-control" id="txtmarcamodelo_equipo_u" name="txtmarcamodelo_equipo_u" type="hidden" value="<?php echo $Entidad['sEquMarcaModelo'] ?>">

                <?php } ?>
            </div>
            
            <div class="form-group">

                <label for="cnombre">Nro de Serie (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtnroserie_equipo_u" name="txtnroserie_equipo_u"  minlength="2" type="text" value="<?php echo $Entidad['sEquNroSerie'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquNroSerie'] ?></label>
                    
                    <input class="form-control" id="txtnroserie_equipo_u" name="txtnroserie_equipo_u" type="hidden" value="<?php echo $Entidad['sEquNroSerie'] ?>">

                <?php } ?>
            </div>
            
            <div class="form-group">

                <label for="cnombre">Capacidad (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtcapacidad_equipo_u" name="txtcapacidad_equipo_u"  minlength="2" type="text" value="<?php echo $Entidad['sEquCapacidad'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquCapacidad'] ?></label>
                    
                    <input class="form-control" id="txtcapacidad_equipo_u" name="txtcapacidad_equipo_u" type="hidden" value="<?php echo $Entidad['sEquCapacidad'] ?>">

                <?php } ?>
            </div>
            
            <div class="form-group">

                <label for="cnombre">Empresa Titular (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtempresatitular_equipo_u" name="txtempresatitular_equipo_u"  minlength="2" type="text" value="<?php echo $Entidad['sEquEmpresaTitular'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquEmpresaTitular'] ?></label>
                    
                    <input class="form-control" id="txtempresatitular_equipo_u" name="txtempresatitular_equipo_u" type="hidden" value="<?php echo $Entidad['sEquEmpresaTitular'] ?>">

                <?php } ?>
            </div>
            
            <div class="form-group">

                <label for="cnombre">Observaciones</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>
                
<textarea id="txtobservaciones_equipo_u" name="txtobservaciones_equipo_u"  class="form-control" rows="4" cols="50" ><?php echo $Entidad['sEquObservaciones'] ?></textarea>

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sEquObservaciones'] ?></label>
                
<textarea id="txtobservaciones_equipo_u" name="txtobservaciones_equipo_u"  class="form-control" rows="4" cols="50" type="hidden" ><?php echo $Entidad['sEquObservaciones'] ?></textarea>

                <?php } ?>
            </div>
            
            <?php /*?>
            
            <div class="form-group">

                <label for="cnombre">Subir Foto de Perfil (*)</label>

                <input class="form-control" id="txtruta_u" name="txtruta_u"  minlength="2" type="hidden" value="<?php echo $Entidad['sEquRutaImagen'] ?>">
                
                <input  class="form-control" id="userFiles_u" name="userFiles_u[]" multiple type="file">

            </div>
            
            
            
            <?php if ($this->session->userdata('TipoUsuario_di')==1) { ?>
            <div class="form-group">

                <div class="form-check form-check-flat form-check-primary">

                    <label class="form-check-label">

                    <?php if ($Entidad['nEquEstado']==1) { ?>

                    <input type="checkbox" checked name="chkestado_u" id="chkestado_u" class="form-check-input">

                    <?php }else{ ?>

                    <input type="checkbox" name="chkestado_u" id="chkestado_u" class="form-check-input">

                    <?php } ?>

                    Activo

                    <i class="input-helper"></i></label>

                </div>

            </div>
            
            <?php }?>
            
            <?php */?>
            

            <button type="submit" class="btn btn-dark btn-icon-text">

                <i class="far fa-save btn-icon-prepend"></i> Actualizar

            </button>

        </fieldset>

    </form>

</div>
    