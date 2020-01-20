<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval($_GET["id"]);
    $page_id_noticias = intval(recovery_page(ID_SUBCAT_BANNERS_BOLSA));
	
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
                      <a href="upload/<?= $objProd->logo_empresa_anuncia ?>" class="html5lightbox" title="<?= $objProd ->title;?>">
                        <img src="upload/<?= $objProd ->logo_empresa_anuncia;?>" alt="<?= $objProd ->title;?>"/>
                      </a>
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 ">
					
                    <div class="w_new_link btn_new_link">
     <a href="<?= $objProd ->url_fuente;?>" title="Ir a fuente de anuncio : <?= $objProd ->title?>" target="_blank">VER ANUNCIO</a>
                    </div>
                    
                    <div class="ui_back">
						<div class="ui_content ui_det_new">
							<?= $objProd ->title?>
						</div>
					</div>
                    <div class="ui_back">
						<div class="ui_content ui_det_new">
                            <strong>Fuente :</strong> <?= $objProd ->fuente?>
						</div>
					</div>
                    <div class="ui_back">
						<div class="ui_content ui_det_new">
							<strong>Anunciante :</strong> <?= $objProd ->empresa_anuncia?>
						</div>
					</div>
                    <div class="ui_back">
						<div class="ui_content ui_det_new">
                            <?= $objProd ->description?>
						</div>
					</div>
				</div>
			</div>
			<div class="w_new_link btn_new_link">
                <a href="bolsa-de-trabajo.php">REGRESAR A BOLSA DE TRABAJO</a>
            </div>
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>
</html>