<script src="<?php echo URL_JS ?>jsSitio/administracion/maestros/jsUsuario_u.js" ></script>
<div class="col-lg-6 col-xs-12" >
    <h3>Datos Personales</h3>
    <form class="cmxform" id="frmUsuario_u" method="post">

        <input type="hidden" value="<?php echo $Entidad['Usuario_Id'] ?>" name="txtUsuario_id" id="txtUsuario_id" >

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

                <label for="cnombre">Código del Alumno (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtcodigo_alumno_u" name="txtcodigo_alumno_u"  minlength="2" disabled type="text" value="<?php echo $Entidad['sUsuCodigo'] ?>">
                    
                <?php }else { ?>
                        
                    <label for="" class="label-desabilitado"><?php echo $Entidad['sUsuCodigo'] ?></label>
                    <input class="form-control" id="txtcodigo_alumno_u" name="txtcodigo_alumno_u" type="hidden" value="<?php echo $Entidad['sUsuCodigo'] ?>">
                
                <?php } ?>
            </div>

            <div class="form-group">

                <label for="cnombre">Apellidos y Nombres (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtnombre_u" name="txtnombre_u"  minlength="2" type="text" value="<?php echo $Entidad['sUsuLogin'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sUsuLogin'] ?></label>
                    
                    <input class="form-control" id="txtnombre_u" name="txtnombre_u" type="hidden" value="<?php echo $Entidad['sUsuLogin'] ?>">

                <?php } ?>
            </div>
            
            

            <div class="form-group">

                <label for="cnombre">DNI (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input  class="form-control" id="txtdni_u" name="txtdni_u"  minlength="2" maxlength="8" type="text" value="<?php echo $Entidad['sUsuDni'] ?>">

                <?php }else { ?>
                    
                    <label for="" class="label-desabilitado"><?php echo $Entidad['sUsuDni'] ?></label>

                    <input  class="form-control" id="txtdni_u" name="txtdni_u"  type="hidden" value="<?php echo $Entidad['sUsuDni'] ?>">

                <?php } ?> 


            </div>
            
            
            
            <div class="form-group">

                <label for="cnombre">Empresa Titular (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input  class="form-control" id="txtempresatitular_u" name="txtempresatitular_u"  minlength="2" type="text" value="<?php echo $Entidad['sUsuEmpresaTitular'] ?>">

                <?php }else { ?>
                    
                    <label for="" class="label-desabilitado"><?php echo $Entidad['sUsuEmpresaTitular'] ?></label>

                    <input  class="form-control" id="txtempresatitular_u" name="txtempresatitular_u"  type="hidden" value="<?php echo $Entidad['sUsuEmpresaTitular'] ?>">

                <?php } ?> 


            </div>
            
            <?php /*?>
            
            <div class="form-group">

                <label for="cnombre">Condición (*)</label>

                <?php if($this->session->userdata('TipoUsuario_di')==1){ ?>

                    <input class="form-control" id="txtcondicion_u" name="txtcondicion_u"  minlength="2" type="text" value="<?php echo $Entidad['sUsuCondicion'] ?>">

                <?php }else { ?>

                    <label for="" class="label-desabilitado"><?php echo $Entidad['sUsuCondicion'] ?></label>
                    
                    <input class="form-control" id="txtcondicion_u" name="txtcondicion_u" type="hidden" value="<?php echo $Entidad['sUsuCondicion'] ?>">

                <?php } ?>
            </div>            

            <div class="form-group">

                <label for="cnombre">E-mail (*)</label>

                <input  class="form-control" id="txtemail_u" name="txtemail_u"  minlength="2" type="email" value="<?php echo $Entidad['sUsuEmail'] ?>">

            </div>

            <div class="form-group">

                <label for="cnombre">Celular (*)</label>

                <input  class="form-control" id="txtcelular_u" name="txtcelular_u"  minlength="2" type="tel" value="<?php echo $Entidad['sUsuCelular'] ?>">

            </div>

            <div class="form-group">

                <label for="cnombre">Subir Foto de Perfil (*)</label>

                <input class="form-control" id="txtruta_u" name="txtruta_u"  minlength="2" type="hidden" value="<?php echo $Entidad['sUsuRutaImagen'] ?>">
                
                <input  class="form-control" id="userFiles_u" name="userFiles_u[]" multiple type="file">

            </div>
            
            <?php if ($this->session->userdata('TipoUsuario_di')==1) { ?>
            <div class="form-group">

                        <div class="form-check form-check-flat form-check-primary">

                            <label class="form-check-label">

                            <?php if ($Entidad['nUsuEstado']==1) { ?>

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
    