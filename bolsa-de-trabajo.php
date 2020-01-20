<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval(recovery_page(ID_SUBCAT_BANNERS_BOLSA));

    $objProd=new Page();
	if (!$objProd ->loadByKey($objProd ->getIdKey(), intval($page_id))) Tzn::redirect("index.php");
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
			<div class="w_text w_text_big icon_green"><p>BOLSA DE TRABAJO</p></div>
			<?php				
                    $objNot=new Page();
                    $objNot->loadItems ("#orderId ASC","category.categoryId=".ID_SUBCAT_BOLSA_DE_TRABAJO." AND #status='Activo'");
                    if ($objNot->loadList()){
                        while ($kk = $objNot->rNext()){
							print '<div class="row row_margin w_new_list">';
								print '<div class="col-xs-12 col-sm-3">';
            ?>
            
            
<figure class="w_new_img">
<a href="anuncio.php?id=<?= $kk ->id;?>" title="<?= $kk ->title?>">
<img src="upload/<?= $kk ->logo_empresa_anuncia;?>" alt="<?= $kk ->title; ?>" class="img-responsive img-opacity"/>
</a>
</figure>	
				</div>
				<div class="col-xs-12 col-sm-9">
					<div class="w_new_det">
		  				<h3><?= truncate_string(strip_tags($kk ->title),135);?></h3>
                        
                        <h4>Fuente : <?= truncate_string(strip_tags($kk ->fuente),135);?></h4>
                        
                        <h4>Anunciante : <?= truncate_string(strip_tags($kk ->empresa_anuncia),135);?></h4>
                        
		  				<div><?= truncate_string(strip_tags($kk ->description),460);?></div>
                        <!--<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño</p>-->
		  				<div class="w_new_link">
		  					<a href="anuncio.php?id=<?= $kk ->id;?>" title="Ir a Anuncio : <?= $kk ->title?>">LEER MÁS</a>
		  				</div>
		  			</div>
				</div>
			</div>
            <?php
						}
                        
                    }
           ?>			
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>
</html>