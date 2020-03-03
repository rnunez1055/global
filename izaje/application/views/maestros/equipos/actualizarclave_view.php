<script src="<?php echo URL_JS ?>jsSitio/administracion/maestros/jsEquipos_u_clave.js" ></script>

<div class="col-lg-6 col-xs-12" >

<form class="cmxform" id="frmEquipos_u" method="post">

    <input type="hidden" value="<?php echo $Entidad['Equipo_Id'] ?>" name="txtequipo_id" id="txtequipo_id" >

    <fieldset>        

        <div class="form-group">

            <label for="cnombre">Placa / Identificación (*)</label>

            <input id="cplaca" class="form-control" id="txtplaca_u" name="txtplaca_u" disabled minlength="2" type="text" value="<?php echo $Entidad['sEquPlaca'] ?>">

        </div>

        <div class="form-group">

            <label for="cplaca">Contraseña (*)</label>

            <input class="form-control" id="txtcontrasena_u" name="txtcontrasena_u" minlength="2" type="password">

        </div>

        <button type="submit" class="btn btn-dark btn-icon-text">

                          <i class="far fa-save btn-icon-prepend"></i>Actualizar

        </button>

    </fieldset>

</form>

</div>