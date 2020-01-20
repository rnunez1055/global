<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval(recovery_page(ID_SUBCAT_CONTACTO));

    $objProd=new Page();
	if (!$objProd ->loadByKey($objProd ->getIdKey(), intval($page_id))) Tzn::redirect("index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CONTACTO | LLAMANOS | Cualquier consulta, duda y/o sugerencia no dude en comunicarse nosotros | ventas@globalsuppliersp.com | rcrispin@globalsuppliersp.com</title>
	<meta name="description" content="CONTACTO | LLAMAMNOS | Cualquier consulta, duda y/o sugerencia no dude en comunicarse nosotros." />
	<meta name="keywords" content="CONTACTO | LLAMAMNOS | Cualquier consulta, duda y/o sugerencia no dude en comunicarse nosotros" />
	<?php include("_head.php") ?>
</head>
<body>
	<?php include("_header.php") ?>
	<div id="slider">
        
        
        
		
        <div class="slider_t slider_mov hidden-xs">
	  		<?php if ($objProd ->banner_pc) { ?>
            <div class="item_mov">
                <img src="upload/<?= $objProd ->banner_pc?>" alt="<?= $objProd ->title?>">
                <h2 class="item_mov__title"><?= $objProd ->title?>..........</h2>
	  		</div>
            <?php } ?>
            <?php if ($objProd ->banner_pc2) { ?>
	  		<div class="item_mov">
                <img src="upload/<?= $objProd ->banner_pc2?>" alt="<?= $objProd ->title?>">
                <h2 class="item_mov__title"><?= $objProd ->title?>..........</h2>
	  		</div>
            <?php } ?>
            <?php if ($objProd ->banner_pc3) { ?>
	  		<div class="item_mov">
                <img src="upload/<?= $objProd ->banner_pc3?>" alt="<?= $objProd ->title?>">
                <h2 class="item_mov__title"><?= $objProd ->title?>..........</h2>
	  		</div>
            <?php } ?>
	 	</div>
        
	 	<div class="slider_t slider_mov visible-xs">
	  		<?php if ($objProd ->banner_movil) { ?>
            <div class="item_mov">
	  			<img src="upload/<?= $objProd ->banner_movil?>" alt="<?= $objProd ->title?>">
	  		</div>
            <?php } ?>
            <?php if ($objProd ->banner_movil2) { ?>
            <div class="item_mov">
	  			<img src="upload/<?= $objProd ->banner_movil2?>" alt="<?= $objProd ->title?>">
	  		</div>
            <?php } ?>
            <?php if ($objProd ->banner_movil3) { ?>
            <div class="item_mov">
	  			<img src="upload/<?= $objProd ->banner_movil3?>" alt="<?= $objProd ->title?>">
	  		</div>
            <?php } ?>
	 	</div>
	 	<!--<div id="slider_text">INSPECCIÓN Y CERTIFICACIÓN DE ELEMENTOS Y ACCESORIOS DE IZAJE</div>-->
        
        
        
        
	</div>
	<div id="w_contenido" class="ui_page_m">
		<div class="container">
			<div class="w_text w_text_big icon_green"><p>FORMULARIO DE CONTACTO</p></div>
			<div class="row row_margin">
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
                        <?php
							if ($img = $objProd ->gObjImage(LBN_ADMIN_STATUS_ON)) : ?>
							  <a href="upload/<?= $img->target ?>" class="html5lightbox" title="<?= $img ->title;?>">
                              	<img src="upload/<?= $img ->target;?>" alt="<?= $img ->title;?>"/>
                              </a>
          				<?php endif; ?>
						<!--<img src="contenido/img/contacto2.jpg"/>-->
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 ui_content_contacto">
					<div class="ui_back ui_max_h">
						<div class="ui_content ui_contact">
							<p class="ui_text_p"><?= $objProd ->description?></p>
							
                            <?php
									if(isset($_POST['send'])){
										$emailFrom = "ventas@globalsuppliersp.com";
										$emailTo = "ventas@globalsuppliersp.com";
										$subject = " | FORMULARIO DE CONTACTO";
										
										$Nombre = strip_tags($_POST['Nombre']);
										$Email = strip_tags($_POST['Email']);
										$Telefono = strip_tags($_POST['Telefono']);
										$Celular = strip_tags($_POST['Celular']);
										$Mensaje = strip_tags($_POST['Mensaje']);										
										
										$body = "Nombres y Apellidos: ".$Nombre."\n";
										$body .= "Email: ".$Email."\n";
										$body .= "Telefono: ".$Telefono."\n";				
										$body .= "Celular: ".$Celular."\n";
										$body .= "Mensaje: ".$Mensaje."\n";	
											
										$headers = "From: ".$emailFrom."\n";
										$headers .= "Reply-To:".$email."\n";	
										
										$success = mail($emailTo, $subject, $body, $headers);
										if ($success){
							print '<a href="contacto.php" class="ok_rpta">Gracias!! por ponerse en contacto con nosotros.</a>';
										  }
										  else{
							print '<a href="contacto.php" class="no_rpta">Algo salio mal, por favor vuelva a intentarlo.</a>';
										  }
											  
									} else {
									?>
                                    
								<form id="ui_contact" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">                                    
                                    <div class="ui_input">
										<input id="Nombre" name="Nombre" data-name="Nombre" type="text" placeholder="Nombres y Apellidos" required>
									</div>
									<div class="ui_input">
										<input id="Email" type="email" placeholder="E-mail*" name="Email" data-name="Email" required>
									</div>
									<div class="ui_input">
                                        <input id="Telefono" type="text" placeholder="Teléfono*" name="Telefono" data-name="Telefono" required>
									</div>
									<div class="ui_input">
										<input id="Celular" type="text" placeholder="Celular*" name="Celular" data-name="Celular" required>
									</div>
									<div class="ui_input">
										<textarea id="Mensaje" placeholder="Mensaje*" name="Mensaje" data-name="Mensaje"></textarea>
									</div>
									<div class="ui_input right">
                                        <input id="send" name="send" type="submit" value="ENVIAR CONSULTA">
									</div>
								</form>
                                <?php } ?>
						</div>
						
					</div>
                    <br/><br/><br/>
				</div>
			</div>
			<br>
			
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>
</html>