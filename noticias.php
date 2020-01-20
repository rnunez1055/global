<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id = intval(recovery_page(ID_SUBCAT_BANNERS_NOTICIAS));

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
			<div class="w_text w_text_big icon_green"><p>ULTIMAS NOTICIAS</p></div>
			<?php				
                    $objNot=new Page();
                    $objNot->loadItems ("#orderId ASC","category.categoryId=".ID_SUBCAT_NOTICIAS." AND #status='Activo'");
                    if ($objNot->loadList()){
                        while ($kk = $objNot->rNext()){
							print '<div class="row row_margin w_new_list">';
								print '<div class="col-xs-12 col-sm-3">';
									if ($img = $kk ->gObjImage(LBN_ADMIN_STATUS_ON)) :?>
<figure class="w_new_img">
<a href="noticia.php?id=<?= $kk ->id;?>" title="<?= $kk ->title?>">
<img src="upload/<?= $img ->target;?>" alt="<?= $img ->title; ?>" class="img-responsive img-opacity"/>
</a>
</figure>
           						<?php endif;?>
					
				</div>
				<div class="col-xs-12 col-sm-9">
					<div class="w_new_det">
		  				<h3><?= truncate_string(strip_tags($kk ->title),135);?></h3>
		  				<div><?= truncate_string(strip_tags($kk ->description),460);?></div>
                        <!--<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño</p>-->
		  				<div class="w_new_link">
		  					<a href="noticia.php?id=<?= $kk ->id;?>" title="Ir a Noticia : <?= $kk ->title?>">LEER MAS</a>
		  				</div>
		  			</div>
				</div>
			</div>
					
            
            <?php
						}					
                    }
           ?>
            <!--<div class="row row_margin w_new_list">
				<div class="col-xs-12 col-sm-3">
					<figure class="w_new_img">
		  				<a href=""><img src="contenido/img/foto_noticia.jpg" class="img-responsive img-opacity"></a>
		  			</figure>
				</div>
				<div class="col-xs-12 col-sm-9">
					<div class="w_new_det">
		  				<h3>Titulo de la Noticia</h3>
		  				<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño</p>
		  				<div class="w_new_link">
		  					<a href="">LEER MAS</a>
		  				</div>
		  			</div>
				</div>
			</div>
			<div class="row row_margin w_new_list">
				<div class="col-xs-12 col-sm-3">
					<figure class="w_new_img">
		  				<a href=""><img src="contenido/img/foto_noticia.jpg" class="img-responsive img-opacity"></a>
		  			</figure>
				</div>
				<div class="col-xs-12 col-sm-9">
					<div class="w_new_det">
		  				<h3>Titulo de la Noticia</h3>
		  				<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño</p>
		  				<div class="w_new_link">
		  					<a href="">LEER MAS</a>
		  				</div>
		  			</div>
				</div>
			</div>
			<div class="row row_margin w_new_list">
				<div class="col-xs-12 col-sm-3">
					<figure class="w_new_img">
		  				<a href=""><img src="contenido/img/foto_noticia.jpg" class="img-responsive img-opacity"></a>
		  			</figure>
				</div>
				<div class="col-xs-12 col-sm-9">
					<div class="w_new_det">
		  				<h3>Titulo de la Noticia</h3>
		  				<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño</p>
		  				<div class="w_new_link">
		  					<a href="">LEER MAS</a>
		  				</div>
		  			</div>
				</div>
			</div>-->
			
		</div>
	</div>
	<?php include("_footer.php") ?>
</body>
</html>