<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval(recovery_page(ID_SUBCAT_EMPRESA));

    $objProd=new Page();
	if (!$objProd ->loadByKey($objProd ->getIdKey(), intval($page_id))) Tzn::redirect("index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>NUESTRA EMPRESA | MISION:Brindar soluciones confiables de calidad, atendiendo oportunamente los requerimientos de nuestros clientes. | VISION:Ser considerados como la mejor opción en mantenimiento predictivo, ensayos no destructivos y certificación de Izaje, cumpliendo con los más altos estándares internacionales de calidad.</title>
	<meta name="description" content="NUESTRA EMPRESA | MISION:Brindar soluciones confiables de calidad, atendiendo oportunamente los requerimientos de nuestros clientes. | VISION:Ser considerados como la mejor opción en mantenimiento predictivo, ensayos no destructivos y certificación de Izaje, cumpliendo con los más altos estándares internacionales de calidad." />
	<meta name="keywords" content="NUESTRA EMPRESA | MISION:Brindar soluciones confiables de calidad, atendiendo oportunamente los requerimientos de nuestros clientes. | VISION:Ser considerados como la mejor opción en mantenimiento predictivo, ensayos no destructivos y certificación de Izaje, cumpliendo con los más altos estándares internacionales de calidad." />
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
			<div class="w_text w_text_big icon_green">
				<p>QUIENES SOMOS</p>
			</div>
			<div class="row row_margin">
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
						<!--<a href="contenido/img/empresa/empresa_contenido.jpg" class="html5lightbox"><img src="contenido/img/empresa/empresa_contenido.jpg"></a>-->
                        
                        
                        <?php
							if ($img = $objProd ->gObjImage(LBN_ADMIN_STATUS_ON)) : ?>
							  <a href="upload/<?= $img->target ?>" class="html5lightbox" title="<?= $img ->title;?>">
                              	<img src="upload/<?= $img ->target;?>" alt="<?= $img ->title;?>"/>
                              </a>
          				<?php endif; ?>
                        
                        
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 ui_content_contacto">
					<div class="ui_back">
						<div class="ui_content">
							
                            
                            <?= $objProd ->description?>
                            
                            
                            <!--<p style="text-align: justify;">Global Supplier S&P SAC es una empresa dirigida íntegramente al ámbito industrial, tenemos como propósito ser aliados estratégicos en la prevención y seguridad de sus operaciones.<br>
								<b>MISION:</b><br>
								Brindar soluciones confiables de calidad, atendiendo oportunamente los requerimientos de nuestros <br class="hidden-xs"> clientes. <br>
								<b>VISION:</b><br>
								Ser considerados como la mejor opción en <br class="hidden-xs">mantenimiento predictivo, ensayos no <br class="hidden-xs">destructivos y certificación de Izaje, cumpliendo <br class="hidden-xs">con los más altos estándares internacionales de <br class="hidden-xs">calidad.</p>-->
						</div>
					</div>
				</div>
			</div>
			<br>
			<div class="row row_margin">
                <?php if ($imgs = $objProd ->gImages(LBN_ADMIN_STATUS_ON)): ?>                 	
                    <?php while ($i = $imgs ->rNext()){?>
                        <div class="col-xs-12 col-sm-4">
                            <div class="g_img">
                                <a href="upload/<?= $i ->target?>" class="html5lightbox" title="<?= $i ->title;?>">
                                	<img src="upload/<?= $i ->target;?>" alt="<?= $i->title;?>"/>
                                </a>
                            </div>
                        </div>
                     <?php }?>
                  <?php endif?>
                
				<!--<div class="col-xs-12 col-sm-4">
					<div class="g_img">
						<a href="contenido/img/certificacion_elementos/contenido/certificacion_contenido2.jpg" class="html5lightbox"><img src="contenido/img/certificacion_elementos/contenido/certificacion_contenido2.jpg"></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
						<a href="contenido/img/certificacion_elementos/contenido/certificacion_contenido3.jpg" class="html5lightbox"><img src="contenido/img/certificacion_elementos/contenido/certificacion_contenido3.jpg"></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
						<a href="contenido/img/certificacion_elementos/contenido/certificacion_contenido4.jpg" class="html5lightbox"><img src="contenido/img/certificacion_elementos/contenido/certificacion_contenido4.jpg"></a>
					</div>
				</div>-->
			</div>
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>

</html>