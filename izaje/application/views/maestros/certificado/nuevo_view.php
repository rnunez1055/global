<div class="col-lg-6 col-xs-12">

    <form class="cmxform" id="frmCertificado" method="POST" enctype="multipart/form-data">
        
        <fieldset>
            <div class="form-group">
                
                <input checked type="radio" name="tipoCertificado" id="tipoCertificado"  value="alumno">Alumno
                <input type="radio" name="tipoCertificado" id="tipoCertificado" value="equipo">x Placa
                <input type="radio" name="tipoCertificado" id="tipoCertificado" value="serie">x Nro Serie
                
                <hr>
                
                    <div class="v_alumno">
                        <select class="form-control select2" name="cbousuario" id="cbousuario" required>
                            <option value="0" selected>Buscar Alumno</option>
                            <?php
                            if ($LstUsuario) {                        
                                foreach ($LstUsuario as $key => $listar) {
                                    ?>
                            <option value="<?php echo $listar['Usuario_Id'] ?>">
                                <?php echo $listar['sUsuLogin'] ?>
                            </option>
                            <?php }}?>
                        </select>
                    </div>
                
                    <div class="v_equipo">
                        <select class="form-control select2" name="cboequipo" id="cboequipo" required>
                            <option value="0" selected>Buscar x Placa</option>
                            <?php
                            if ($LstEquipo) {                        
                                foreach ($LstEquipo as $key => $listar) {
                                    ?>
                            <option value="<?php echo $listar['Equipo_Id'] ?>">
                                <?php echo $listar['sEquPlaca'] ?>
                            </option>
                            <?php }}?>
                        </select>
                    </div>
                
                    <div class="v_serie">
                        <select class="form-control select2" name="cboequipo_serie" id="cboequipo_serie" required>
                            <option value="0" selected>Buscar x Serie</option>
                            <?php
                            if ($LstEquipo) {                        
                                foreach ($LstEquipo as $key => $listar) {
                                    ?>
                            <option value="<?php echo $listar['Equipo_Id'] ?>">
                                <?php echo $listar['sEquNroSerie'] ?>
                            </option>
                            <?php }}?>
                        </select>
                    </div>
                
            </div>
            
            <div class="form-group">

                <label for="cnombre">Código del Certificado (*)</label>

                <input class="form-control" id="txtcodigo_certificado" name="txtcodigo_certificado"  minlength="2" maxlength="100" type="text" required>

            </div>
            
            <div class="v_alumno">

                <div class="form-group">

                    <label for="cnombre">Nombre del Certificado (*)</label>

                    <input class="form-control" id="txtcertificado" name="txtcertificado"  minlength="2" maxlength="100" type="text">

                </div>
                
            </div>
            
            <div class="v_alumno">
                        
                <div class="form-group">

                    <label for="cnombre">Calificación (*)</label>

                    <input class="form-control" id="txtcalificacion_certificado" name="txtcalificacion_certificado"  minlength="1" maxlength="3" type="text">

                </div>
                
            </div>
            
            <div class="form-group">

                <label for="cnombre">Fecha de Emisión (*)</label>

<input class="form-control" id="txtfechaemision_certificado" name="txtfechaemision_certificado"  minlength="2" type="date" value="2019-01-01" min="2019-01-01" required>

            </div>
            <?php /*?>
            <div class="form-group">
                <div class="form-check form-check-flat form-check-primary">
                    <label class="form-check-label">
                        <input type="checkbox" checked class="form-check-input" name="chkestado" id="chkestado">Activo
                        <i class="input-helper"></i>
                    </label>
                </div>
            </div>
            <?php */?>
            
            <button type="submit" class="btn btn-dark btn-icon-text">

                <i class="far fa-save btn-icon-prepend"></i> Guardar

            </button>
        </fieldset>
    </form>
</div>