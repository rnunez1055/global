<?php 
		$pPageIsPublic = false;
		include '../_common.php';
		$_SESSION["m1"]="general";
		$_SESSION["m2"]="general";
		
		$objLoad1 = new Variable();
		$objLoad1 ->loadByKey($objLoad1 ->getIdKey(), "15");
		if (isset($_POST["submit"])) {
			$objLoad1 ->valor = $_POST["t_correos_tru"];
			$objLoad1 ->getConnection();
			$objLoad1 ->update("valor");
		}
		
		$objLoad2 = new Variable();
		$objLoad2 ->loadByKey($objLoad2 ->getIdKey(), "16");
		if (isset($_POST["submit"])) {
			$objLoad2 ->valor = $_POST["t_telefonos_tru"];
			$objLoad2 ->getConnection();
			$objLoad2 ->update("valor");
		}

        $objLoad4 = new Variable();
		$objLoad4 ->loadByKey($objLoad4 ->getIdKey(), "18");
		if (isset($_POST["submit"])) {
			$objLoad4 ->valor = $_POST["t_celulares_tru"];
			$objLoad4 ->getConnection();
			$objLoad4 ->update("valor");
		}
		
		$objLoad3 = new Variable();
		$objLoad3 ->loadByKey($objLoad3 ->getIdKey(), "17");
		if (isset($_POST["submit"])) {
			$objLoad3 ->valor = $_POST["t_direccion_tru"];
			$objLoad3 ->getConnection();
			$objLoad3 ->update("valor");
		}


        $objLoad5 = new Variable();
		$objLoad5 ->loadByKey($objLoad5 ->getIdKey(), "19");
		if (isset($_POST["submit"])) {
			$objLoad5 ->valor = $_POST["t_correos_cax"];
			$objLoad5 ->getConnection();
			$objLoad5 ->update("valor");
		}

        $objLoad6 = new Variable();
		$objLoad6 ->loadByKey($objLoad6 ->getIdKey(), "20");
		if (isset($_POST["submit"])) {
			$objLoad6 ->valor = $_POST["t_telefonos_cax"];
			$objLoad6 ->getConnection();
			$objLoad6 ->update("valor");
		}

        $objLoad7 = new Variable();
		$objLoad7 ->loadByKey($objLoad7 ->getIdKey(), "21");
		if (isset($_POST["submit"])) {
			$objLoad7 ->valor = $_POST["t_celulares_cax"];
			$objLoad7 ->getConnection();
			$objLoad7 ->update("valor");
		}

        $objLoad8 = new Variable();
		$objLoad8 ->loadByKey($objLoad8 ->getIdKey(), "22");
		if (isset($_POST["submit"])) {
			$objLoad8 ->valor = $_POST["t_direccion_cax"];
			$objLoad8 ->getConnection();
			$objLoad8 ->update("valor");
		}

        $objLoad9 = new Variable();
		$objLoad9 ->loadByKey($objLoad9 ->getIdKey(), "23");
		if (isset($_POST["submit"])) {
			$objLoad9 ->valor = $_POST["t_facebook"];
			$objLoad9 ->getConnection();
			$objLoad9 ->update("valor");
		}

        $objLoad10 = new Variable();
		$objLoad10 ->loadByKey($objLoad10 ->getIdKey(), "24");
		if (isset($_POST["submit"])) {
			$objLoad10 ->valor = $_POST["t_instagram"];
			$objLoad10 ->getConnection();
			$objLoad10 ->update("valor");
		}

        $objLoad11 = new Variable();
		$objLoad11 ->loadByKey($objLoad11 ->getIdKey(), "25");
		if (isset($_POST["submit"])) {
			$objLoad11 ->valor = $_POST["t_linkedin"];
			$objLoad11 ->getConnection();
			$objLoad11 ->update("valor");
		}

        $objLoad12 = new Variable();
		$objLoad12 ->loadByKey($objLoad12 ->getIdKey(), "26");
		if (isset($_POST["submit"])) {
			$objLoad12 ->valor = $_POST["t_youtube"];
			$objLoad12 ->getConnection();
			$objLoad12 ->update("valor");
		}


	?>
	<?php include("header.php"); ?>    
    <?php include("sidebar.php"); ?>
		

        <form method="post" >


        <div id="list"><h2>Trujillo:</h2>
				<table cellpadding="0" cellspacing="0" class="table-form">
                     <tr>
                      <th width="20%" >Teléfonos : </th>
                      <td><input name="t_telefonos_tru" value="<?= $objLoad2 ->valor  ?>" type="text" style="width:98%;"/></td>
                     </tr>
                     <tr>
                      <th width="20%" >Dirección : </th>
                      <td><input name="t_direccion_tru" value="<?= $objLoad3 ->valor  ?>" type="text" style="width:98%;"/></td>
                     </tr>
				</table>
        </div>


        <div id="list"><h2>Cajamarca:</h2>
				<table cellpadding="0" cellspacing="0" class="table-form">
                     <tr>
                      <th width="20%" >Teléfonos : </th>
                      <td><input name="t_telefonos_cax" value="<?= $objLoad6 ->valor  ?>" type="text" style="width:98%;"/></td>
                     </tr>
                    <?php /*?>
                     <tr>
                      <th width="20%" >Celulares : </th>
                      <td><input name="t_celulares_cax" value="<?= $objLoad7 ->valor  ?>" type="text" style="width:98%;"/></td>
                     </tr>
                     <tr>
                      <th width="20%" >Correos : </th>
                      <td ><input name="t_correos_cax" value="<?= $objLoad5 ->valor  ?>" type="text" style="width:98%;"/></td>
                     </tr>
                     <?php */?>
                     <tr>
                      <th width="20%" >Dirección : </th>
                      <td><input name="t_direccion_cax" value="<?= $objLoad8 ->valor  ?>" type="text" style="width:98%;"/></td>
                     </tr>
            </table>
				
        </div>
            
        <div id="list"><h2>Celulares y Correos:</h2>
            <table cellpadding="0" cellspacing="0" class="table-form">
                 <tr>
                  <th width="20%" >Celulares : </th>
                  <td><input name="t_celulares_tru" value="<?= $objLoad4 ->valor  ?>" type="text" style="width:98%;"/></td>
                 </tr>
                 <tr>
                  <th width="20%" >Correos : </th>
                  <td ><input name="t_correos_tru" value="<?= $objLoad1 ->valor  ?>" type="text" style="width:98%;"/></td>
                 </tr>
            </table>
        </div>
            
        <div id="list"><h2>Redes Sociales:</h2>
            <table cellpadding="0" cellspacing="0" class="table-form">
            <tr>
				  <th width="15%" >Facebook : </th>
				  <td><input name="t_facebook" value="<?= $objLoad9 ->valor  ?>" type="text" style="width:98%;"/></td>
				 </tr>
                 <tr>
				  <th width="15%" >Instagram : </th>
				  <td><input name="t_instagram" value="<?= $objLoad10 ->valor  ?>" type="text" style="width:98%;"/></td>
				 </tr>
                 <tr>
				  <th width="15%" >Linkedin : </th>
				  <td><input name="t_linkedin" value="<?= $objLoad11 ->valor  ?>" type="text" style="width:98%;"/></td>
				 </tr>
				 <tr>
				  <th width="15%" >Youtube : </th>
				  <td><input name="t_youtube" value="<?= $objLoad12 ->valor  ?>" type="text" style="width:98%;"/></td>
				 </tr>
            </table>
            <input type="submit" name="submit" value="Guardar" >
       </div>
        </form>
        <div class="clear"></div>    
    <?php include("footer.php"); ?>
-