<div class="row">
    <div class="col-lg-6 col-xs-12" >

    <form class="cmxform" id="frmEquipos" method="post">

        <fieldset>

            <div class="form-group">

                    <!-- <label>Tipo de Usuario (*)</label> -->

                    <?php

                        if ($LstTipoUsuario) {

                            foreach ($LstTipoUsuario as $key => $listar) {
                                if($listar['TipoUsuario_Id'] !=1){
                                ?>
                            <input type="hidden" class="form-control" name="cbotipousuario" id="cbotipousuario" value="<?php echo $listar['TipoUsuario_Id'] ?>">

                        <?php }}

                            } ?>

                </div>

            <div class="form-group">

                <label for="cnombre">Código del Equipo (*)</label>

                <input class="form-control" id="txtcodigo_equipo" name="txtcodigo_equipo" minlength="2" maxlength="10" type="text" required>

            </div>

            <div class="form-group">

                <label for="cnombre">Placa (*)</label>

                <input class="form-control" id="txtplaca_equipo" name="txtplaca_equipo" minlength="2" maxlength="10" type="text" required>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Nro de Serie (*)</label>

                <input class="form-control" id="txtnroserie_equipo" name="txtnroserie_equipo" minlength="2" maxlength="20" type="text" required>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Tipo de Equipo (*)</label>

                <input class="form-control" id="txttipo_equipo" name="txttipo_equipo" minlength="2" maxlength="100" type="text" required>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Marca / Modelo (*)</label>

                <input class="form-control" id="txtmarcamodelo_equipo" name="txtmarcamodelo_equipo" minlength="2" maxlength="100" type="text" required>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Capacidad (*)</label>

                <input class="form-control" id="txtcapacidad_equipo" name="txtcapacidad_equipo" minlength="2" maxlength="10" type="text">

            </div>
            
            <div class="form-group">

                <label for="cnombre">Empresa Titular (*)</label>

                <input class="form-control" id="txtempresatitular_equipo" name="txtempresatitular_equipo" minlength="2" maxlength="100" type="text" required>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Observaciones</label>
                
<textarea id="txtobservaciones_equipo" name="txtobservaciones_equipo"  class="form-control" rows="4" cols="50"></textarea>

            </div>
            
            <?php /*?>
            
            
           
            
            

            <div class="form-group">

                <label for="cnombre">Contraseña (*)</label>

                <input class="form-control" id="txtcontrasena" name="txtcontrasena" minlength="2" type="password" autocomplete>

            </div>

            <div class="form-group">

                <label for="cnombre">Repetir Contraseña (*)</label>

                <input class="form-control" id="txtrecontrasena" name="txtrecontrasena" minlength="2" type="password" autocomplete>

            </div>

            <div class="form-group">

                        <div class="form-check form-check-flat form-check-primary">

                            <label class="form-check-label">

                            <input type="checkbox" checked class="form-check-input" name="chkestado" id="chkestado" >

                            Activo

                            <i class="input-helper"></i></label>

                        </div>

                        </div>
            <?php */?>

            <button type="submit" class="btn btn-dark btn-icon-text">

                            <i class="far fa-save btn-icon-prepend"></i> Guardar

            </button>

        </fieldset>

    </form>

    </div>
</div>