<div class="row">
    <div class="col-lg-6 col-xs-12" >

    <form class="cmxform" id="frmUsuario" method="post" enctype="multipart/form-data">

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

                <label for="cnombre">Código del Alumno (*)</label>

                <input class="form-control" id="txtcodigo_alumno" name="txtcodigo_alumno" minlength="2" maxlength="10" type="text" required>

            </div>

            <div class="form-group">

                <label for="cnombre">Apellidos y Nombres (*)</label>

                <input class="form-control" id="txtusuario" name="txtusuario" minlength="2" maxlength="100" type="text" required>

            </div>

            <div class="form-group">

                <label for="cnombre">DNI (*)</label>

                <input class="form-control" id="txtdni" name="txtdni" minlength="2" maxlength="8" type="text" required>

            </div>
            
            <div class="form-group">

                <label for="cnombre">Empresa Titular (*)</label>

                <input class="form-control" id="txtempresatitular" name="txtempresatitular" minlength="2" maxlength="200" type="text" required>

            </div>
            
            <?php /*?>
            
            <div class="form-group">

                <label for="cnombre">Condición (*)</label>

                <input class="form-control" id="txtcondicion" name="txtcondicion" minlength="2" maxlength="50" type="text">

            </div>

            <div class="form-group">

                <label for="cnombre">E-mail (*)</label>

                <input class="form-control" id="txtemail" name="txtemail" minlength="2" type="email">

            </div>

            <div class="form-group">

                <label for="cnombre">Celular (*)</label>

                <input class="form-control" id="txtcelular" name="txtcelular" minlength="2" type="tel">

            </div>

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