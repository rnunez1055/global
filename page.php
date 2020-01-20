<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval($_GET["id"]);

    $objProd=new Page();
	if (!$objProd ->loadByKey($objProd ->getIdKey(), intval($page_id))) Tzn::redirect("index.php");
?>
<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head>
	<title>INSPECCION ELEMENTOS IZAJE | ESLINGAS SINTETICAS | GANCHOS | GRILLETES | CANCAMOS | BRACKETS | ARNES | LINEAS DE VIDA | ACCESORIOS DE IZAJE</title>
	<meta name="description" content="INSPECCION ELEMENTOS IZAJE | ESLINGAS SINTETICAS | GANCHOS | GRILLETES | CANCAMOS | BRACKETS | ARNES | LINEAS DE VIDA | ACCESORIOS DE IZAJE" />
	<meta name="keywords" content="INSPECCION ELEMENTOS IZAJE | ESLINGAS SINTETICAS | GANCHOS | GRILLETES | CANCAMOS | BRACKETS | ARNES | LINEAS DE VIDA | ACCESORIOS DE IZAJE" />
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
			<div class="w_text w_text_big icon_green" id="e_titulo"><p><?= $objProd ->title?></p></div>
			<div class="row row_margin">
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
						
                        <?php
							if ($img = $objProd ->gObjImage(LBN_ADMIN_STATUS_ON)) : ?>
							  <a href="upload/<?= $img->target ?>" class="html5lightbox" title="<?= $img ->title;?>">
                              	<img src="upload/<?= $img ->target;?>" alt="<?= $img ->title;?>"/>
                              </a>
          				<?php endif; ?>
                        
                        <!--<a href="contenido/img/certificacion_elementos/contenido/certificacion_contenido1.jpg" class="html5lightbox"><img src="contenido/img/certificacion_elementos/contenido/certificacion_contenido1.jpg"></a>-->
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 ">
					<div class="ui_back ui_max_h" style="background-image:url('upload/<?= $objProd ->foto_derecho;?>')">
						<div class="ui_content">
							<?= $objProd ->description?>
                            <!--<ul class="w_list_det ui_lis_text">
								<li>ESLINGAS SINTETICAS</li>
								<li>ESLINGAS DE CABLE(ESTROBOS)</li>
								<li>ESLINGA DE CADENA</li>
								<li>GANCHOS</li>
								<li>GRILLETES</li>
								<li>CANCAMOS</li>
								<li>BRACKETS</li>
								<li>TENSORES</li>
								<li>ARNES</li>
								<li>LINEAS DE VIDA</li>
								<li>ACCESORIOS DE IZAJE</li>
							</ul>-->
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
<script>
    $(document).ready(function(){
       $('html, body').animate({scrollTop: $("#w_contenido").offset().top}, 1000);
	});
</script>
