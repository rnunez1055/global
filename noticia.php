<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval($_GET["id"]);
    $page_id_noticias = intval(recovery_page(ID_SUBCAT_BANNERS_NOTICIAS));
	
	$objProd=new Page();
	if (!$objProd ->loadByKey($objProd ->getIdKey(), intval($page_id))) Tzn::redirect("index.php");

    $objProdNoticias=new Page();
	if (!$objProdNoticias ->loadByKey($objProdNoticias ->getIdKey(), intval($page_id_noticias))) Tzn::redirect("index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	
	<?php include("_head.php") ?>
</head>
<body>
	<?php include("_header.php") ?>
	<div id="slider">
        
        
        
		
        <div class="slider_t slider_mov hidden-xs">
	  		<?php if ($objProdNoticias ->banner_pc) { ?>
            <div class="item_mov">
                <img src="upload/<?= $objProdNoticias ->banner_pc?>" alt="<?= $objProdNoticias ->title?>">
                <h2 class="item_mov__title"><?= $objProd ->title?>..........</h2>
	  		</div>
            <?php } ?>
            <?php if ($objProdNoticias ->banner_pc2) { ?>
	  		<div class="item_mov">
                <img src="upload/<?= $objProdNoticias ->banner_pc2?>" alt="<?= $objProdNoticias ->title?>">
                <h2 class="item_mov__title"><?= $objProd ->title?>..........</h2>
	  		</div>
            <?php } ?>
            <?php if ($objProdNoticias ->banner_pc3) { ?>
	  		<div class="item_mov">
                <img src="upload/<?= $objProdNoticias ->banner_pc3?>" alt="<?= $objProdNoticias ->title?>">
                <h2 class="item_mov__title"><?= $objProd ->title?>..........</h2>
	  		</div>
            <?php } ?>
	 	</div>
        
	 	<div class="slider_t slider_mov visible-xs">
	  		<?php if ($objProdNoticias ->banner_movil) { ?>
            <div class="item_mov">
	  			<img src="upload/<?= $objProdNoticias ->banner_movil?>" alt="<?= $objProdNoticias ->title?>">
	  		</div>
            <?php } ?>
            <?php if ($objProdNoticias ->banner_movil2) { ?>
            <div class="item_mov">
	  			<img src="upload/<?= $objProdNoticias ->banner_movil2?>" alt="<?= $objProdNoticias ->title?>">
	  		</div>
            <?php } ?>
            <?php if ($objProdNoticias ->banner_movil3) { ?>
            <div class="item_mov">
	  			<img src="upload/<?= $objProdNoticias ->banner_movil3?>" alt="<?= $objProdNoticias ->title?>">
	  		</div>
            <?php } ?>
	 	</div>
	 	<!--<div id="slider_text">INSPECCIÓN Y CERTIFICACIÓN DE ELEMENTOS Y ACCESORIOS DE IZAJE</div>-->
        
	</div>
	<div id="w_contenido" class="ui_page_m">
		<div class="container">			
            <div class="w_text w_text_big icon_green"><p><?= $objProd ->title?></p></div>
			<div class="row row_margin">
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
                        <?php
							if ($img = $objProd ->gObjImage(LBN_ADMIN_STATUS_ON)) : ?>
							  <a href="upload/<?= $img->target ?>" class="html5lightbox" title="<?= $img ->title;?>">
                              	<img src="upload/<?= $img ->target;?>" alt="<?= $img ->title;?>"/>
                              </a>
          				<?php endif; ?>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 ">
					<div class="ui_back">
						<div class="ui_content ui_det_new">
							<?= $objProd ->description?>
						</div>
						
					</div>
				</div>
			</div>
			<div class="w_new_link btn_new_link">
                <a href="noticias.php">REGRESAR ULTIMAS NOTICIAS</a>
            </div>
			<br><br>
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
						<a href="contenido/img/inspeccion_equipos/contenido/inspeccion_contenido2.jpg" class="html5lightbox"><img src="contenido/img/inspeccion_equipos/contenido/inspeccion_contenido2.jpg"></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
						<a href="contenido/img/inspeccion_equipos/contenido/inspeccion_contenido3.jpg" class="html5lightbox"><img src="contenido/img/inspeccion_equipos/contenido/inspeccion_contenido3.jpg"></a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4">
					<div class="g_img">
						<a href="contenido/img/inspeccion_equipos/contenido/inspeccion_contenido4.jpg" class="html5lightbox"><img src="contenido/img/inspeccion_equipos/contenido/inspeccion_contenido4.jpg"></a>
					</div>
				</div>-->
			</div>
            
            
            <?php if ($imgs = $objProd ->gImages(LBN_ADMIN_STATUS_ON,0,1)): ?>
            
            	<br><br>
                <div class="row row_margin">
                    <div id="w_b1">
                        <p class="w_b1_text"><b>GALERIA DE VIDEOS</b></p>
                    </div>
                    <?php while ($i = $imgs ->rNext()):?>
                        <div class="col-xs-12 col-sm-4">
                        	<div class="g_img">
                                <a href="<?= $i->getUrlEmbedYT() ?>" title="<?= $i->title ?>"  class="html5lightbox">
                                    <?= $i->getThumbYT();?>
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <!--<div class="col-xs-12 col-sm-4">
                        <div class="g_img">
                            <a href="https://www.youtube.com/embed/bfQ2c4wmod0" class="html5lightbox" title="">
                                <img src="contenido/img/empresa.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="g_img">
                            <a href="https://www.youtube.com/embed/bfQ2c4wmod0" class="html5lightbox" title="">
                                <img src="contenido/img/empresa.jpg" alt=""/>
                            </a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div class="g_img">
                            <a href="https://www.youtube.com/embed/bfQ2c4wmod0" class="html5lightbox" title="">
                                <img src="contenido/img/empresa.jpg" alt=""/>
                            </a>
                        </div>
                    </div>-->
                </div>
           <?php endif; ?>
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>
</html>