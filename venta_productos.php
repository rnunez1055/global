<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval(recovery_page(ID_SUBCAT_VENTA_PRODUCTOS));

    $objProd=new Page();
	if (!$objProd ->loadByKey($objProd ->getIdKey(), intval($page_id))) Tzn::redirect("index.php");
?>
<!DOCTYPE html PUBLIC "-/W3C/DTD XHTML 1.0 Transitional/EN" "http:/www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http:/www.w3.org/1999/xhtml">
<head>
	<title>VENTA DE PRODUCTOS | Pinturas Industriales JET | Tintes penetrantes marca MAGNAFLUX | Partículas magnéticas visibles MAGNAVIS en la marca MAGNAFLUX | Partículas magnéticas fluorescentes MAGNAFLUX</title>
	<meta name="description" content="VENTA DE PRODUCTOS | Pinturas Industriales JET | Tintes penetrantes marca MAGNAFLUX | Partículas magnéticas visibles MAGNAVIS en la marca MAGNAFLUX | Partículas magnéticas fluorescentes MAGNAFLUX" />
	<meta name="keywords" content="VENTA DE PRODUCTOS | Pinturas Industriales JET | Tintes penetrantes marca MAGNAFLUX | Partículas magnéticas visibles MAGNAVIS en la marca MAGNAFLUX | Partículas magnéticas fluorescentes MAGNAFLUX" />
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
                        
						<!--<a href="contenido/img/venta/contenido/venta_contenido1.jpg" class="html5lightbox"><img src="contenido/img/venta/contenido/venta_contenido1.jpg"></a>-->
					</div>
				</div>
				<div class="col-xs-12 col-sm-8 ">
					<div class="ui_back ui_max_h" style="background-image:url('contenido/img/venta/contenido/venta_focus.jpg')">
						<div class="ui_content">
							<?= $objProd ->description?>
                            <!--<ul class="w_list_det ui_lis_text">
								<li>Pinturas Industriales JET</li>
								<li>Tintes penetrantes marca MAGNAFLUX</li>
								<li>Partículas magnéticas fluorescentes MAGNAFLUX</li>
								<li>Partículas magnéticas visibles MAGNAVIS<br> en la marca MAGNAFLUX</li>
							</ul>-->
						</div>
					</div>
				</div>
			</div>
			<br>
            <div class="row row_margin">
                <?php				
                    $objNot=new Page();
                    $objNot->loadItems ("#orderId ASC","category.categoryId=".ID_SUBCAT_PRODUCTOS." AND #status='Activo'");
                    if ($objNot->loadList()){
                        while ($kk = $objNot->rNext()){
                         
                            if ($img = $kk ->gObjImage(LBN_ADMIN_STATUS_ON)){
                            
                print '<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2">';
					print '<div class="g_img2">';
						print '<a href="'.$kk ->url_fuente.'" title="'.$kk ->title.'" target="_blank">';
                            print '<img src="upload/'.$img ->target.'" alt="'.$kk ->title.'"/>';                                
                        print '</a>';
					print '</div>';
				print '</div>';
                            }
                        }
                    }
               ?>
			</div>
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>
</html>