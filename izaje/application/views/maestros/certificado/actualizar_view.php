<script src="<?php echo URL_JS ?>jsSitio/administracion/maestros/jsCertificado_u.js" ></script>
<div class="col-lg-6 col-xs-12">

    <h3>Actualizar Certificado</h3>

    <form class="cmxform" id="formCertificado_u" method="POST" enctype="multipart/form-data">

        <input type="hidden" value="<?php echo $Entidad['certificado_id'] ?>" name="txtcertificado_id" id="txtcertificado_id" >
        <fieldset>
            
            <div class="form-group">

                <label for="cnombre">Código del Certificado (*)</label>

                <input class="form-control" id="txtcodigo_certificado_u" name="txtcodigo_certificado_u"  minlength="2" maxlength="100" type="text" value="<?php echo $Entidad['nCertCodigo'] ?>" disabled>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Alumno (*)</label>

                <?php if($LstUsuario) { 

                    foreach ($LstUsuario as $key => $listar) {     

                    if ($Entidad['Usuario_Id']==$listar['Usuario_Id']){

                    ?>
                <input class="form-control" id="txtalumno_u" name="txtalumno_u"  minlength="2" type="text" value="<?php echo $listar['sUsuLogin'] ?>" disabled>
                <?php }}} ?>
            </div>
            <div class="form-group">

                <label for="cnombre">Nombre del Certificado (*)</label>

                <input class="form-control" id="txtcertificado_u" name="txtcertificado_u"  minlength="2" type="text" value="<?php echo $Entidad['nCertNombre'] ?>" disabled>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Calificación (*)</label>

                <input class="form-control" id="txtcalificacion_certificado_u" name="txtcalificacion_certificado_u"  minlength="1" maxlength="3" type="text" value="<?php echo $Entidad['nCertCalificacion'] ?>">

            </div>
            
            <div class="form-group">

                <label for="cnombre">Fecha de Emisión (*)</label>
                
                <input class="form-control" id="txtfechaemision_certificado_u" name="txtfechaemision_certificado_u"  minlength="2" type="date" value="<?php echo $Entidad['nCertFechaEmision'] ?>" min="2019-01-01" required>

            </div>
            
            <div class="form-group">
                <label for="cnombre">Fecha de Vencimiento (*)</label>
              <?php 
                
                    $nueva_fecha_ven = strtotime('+1 Year', strtotime($Entidad['nCertFechaEmision']));
                    $nueva_fecha_ven = date('d-m-Y', $nueva_fecha_ven);                
                    
                    print '<input class="form-control" type="text" value="'.$nueva_fecha_ven.'" disabled>';
              ?>                
            </div>
              
            <div class="form-group">
                <?php              
                    $fecha_hoy = date('Y-m-d');    
                
                    $nueva_fecha_ven = strtotime('+1 Year', strtotime($Entidad['nCertFechaEmision']));
                    $nueva_fecha_ven = date('Y-m-d', $nueva_fecha_ven);
                
                    if($nueva_fecha_ven > $fecha_hoy){
                        print '<div class="badge badge-success">Habilitado</div>';
                    }else if($nueva_fecha_ven <= $fecha_hoy){
                        print '<div class="badge badge-danger">Inhabilitado</div>';
                    }       
               ?>
            </div>
            
            <?php /*?>
            
            <div class="form-group">
                <label for="cnombre">Fecha de Vencimiento (*)</label>
                <input class="form-control" type="date" value="<?php echo $Entidad['nCertFechaVencimiento']?>" disabled>
            </div>
            
            <?php if ($this->session->userdata('TipoUsuario_di')==1) { ?>
            <div class="form-group">
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <?php if ($Entidad['nCertEstado']==1) { ?>
                    <input type="checkbox" checked name="chkestado_u" id="chkestado_u" class="form-check-input">
                    <?php }else{ ?>
                    <input type="checkbox" name="chkestado_u" id="chkestado_u" class="form-check-input">
                    <?php } ?>
                    Activo
                    <i class="input-helper"></i></label>
                </div>
            </div>      
            <?php }?>
            
            <?php /*?>

            <div class="form-group">

                <input class="form-control" id="txtruta_u" name="txtruta_u"  minlength="2" type="hidden" value="<?php echo $Entidad['nCertRutaArchivo'] ?>">

            </div>
            
            <div class="form-group">

                <label for="cnombre">Actualizar PDF (*)</label>

                <input  class="form-control" id="userFiles_u" name="userFiles_u[]" multiple type="file">

            </div>
            
            <?php */?>
            
            <button type="submit" class="btn btn-dark btn-icon-text">

                <i class="far fa-save btn-icon-prepend"></i> Guardar

            </button>
        </fieldset>
    </form>
</div>
