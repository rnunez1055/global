<script src="<?php echo URL_JS ?>jsSitio/administracion/maestros/jsUsuario_u_clave.js" ></script>

<div class="col-lg-6 col-xs-12" >

<form class="cmxform" id="frmUsuario_u" method="post">

    <input type="hidden" value="<?php echo $Entidad['Usuario_Id'] ?>" name="txtUsuario_id" id="txtUsuario_id" >

    <fieldset>        

        <div class="form-group">

            <label for="cnombre">Apellidos Y Nombres (*)</label>

            <input id="cnombre" class="form-control" id="txtnombre_u" name="txtnombre_u" disabled minlength="2" type="text" value="<?php echo $Entidad['sUsuLogin'] ?>">

        </div>

        <div class="form-group">

            <label for="cnombre">Contraseña (*)</label>

            <input class="form-control" id="txtcontrasena_u" name="txtcontrasena_u" minlength="2" type="password">

        </div>

        <button type="submit" class="btn btn-dark btn-icon-text">

                          <i class="far fa-save btn-icon-prepend"></i>Actualizar

        </button>

    </fieldset>

</form>

</div>