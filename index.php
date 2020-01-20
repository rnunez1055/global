<?php
	$pPageIsPublic = true;
	include ('_common.php');
	$_SESSION['vmnu']='';
	
	$page_id_portada = intval(recovery_page(ID_SUBCAT_PORTADA));

    $objProdPortada=new Page();
	if (!$objProdPortada ->loadByKey($objProdPortada ->getIdKey(), intval($page_id_portada))) Tzn::redirect("index.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<?php include("_head.php") ?>
</head>

<body>
	<?php include("_header.php") ?>    
    
    <?php
        $objFile = new File();	
           if ( $objFile ->loadItems("#orderId ASC", "#status = '". LBN_ADMIN_STATUS_ON ."' AND LENGTH(#video)=0   AND #pageId=0 AND #".LBN_VAR2."='".LBN_VAR2_BANNER ."'")) {
               print '<div id="slider">';
                print '<div class="slider_t slider_mov hidden-xs">';
                 while ($i = $objFile->rNext()) {
                     print '<div class="item_mov">';
                        print '<img src="upload/'.$i ->target.'">';
                    print '</div>';
                 }
                print '</div>';
               print '</div>';
           }
    ?>
    
    
    
	<!--<div id="slider">
		 <div class="slider_t slider_mov hidden-xs">
			<div class="item_mov">
				<img src="contenido/img/slider_principal/banner600.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_principal/banner100.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_principal/banner300.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_principal/banner400.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_principal/banner500.jpg">
			</div>
		</div>
		<div class="slider_t slider_mov visible-xs">
			<div class="item_mov">
				<img src="contenido/img/slider_movil/slider_principal/banner600_slider_movil.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_movil/slider_principal/banner100_slider_movil.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_movil/slider_principal/banner300_slider_movil.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_movil/slider_principal/banner400_slider_movil.jpg">
			</div>
			<div class="item_mov">
				<img src="contenido/img/slider_movil/slider_principal/banner500_slider_movil.jpg">
			</div>
		</div>
	</div>-->
    

	<div id="w_contenido">
		<div id="w_b1">
			<div class="w_b1_text">
                
                <!--<b>Global Supplier S&P S.A.C </b> es una empresa dirigida integramente al ámbito industrial,
				tenemos como propósito ser aliados estratégicos en la prevención y seguridad de sus operaciones.-->
                
                <?= $objProdPortada ->description?>
            
            </div>
		</div>
		<div id="servicios" class="visible-xs visible-sm">
			<div class="container w_servicios">
				<a href="page.php?id=<?= ID_PAG_CAPACITACION_PERSONAL?>">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/capacitacion_personal_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							CAPACITACION DE PERSONAL
						</div>
					</div>
				</a>
				<a href="page.php?id=<?= ID_PAG_INSPECCION_EQUIPOS?>">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/inspeccion_equipos_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							INSPECCIÓN DE EQUIPOS
						</div>
					</div>
				</a>
				<a href="page.php?id=<?= ID_PAG_MANTENIMIENTO_PREDICTIVO?>">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/mantenimiento_predictivo_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							MANTENIMIENTO PREDICTIVO
						</div>
					</div>
				</a>
				<a href="page.php?id=<?= ID_PAG_ENSAYOS_NO_DESTRUCTIVOS?>">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/ensayos_no_destructivos_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							ENSAYOS NO DESTRUCTIVOS
						</div>
					</div>
				</a>
				<a href="page.php?id=<?= ID_PAG_HOMOLOGACION_SOLDADORES?>">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/homologacion_soldadoresl_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							HOMOLOGACION Y CERTIFICACIONES DE SOLDADORES
						</div>
					</div>
				</a>
				<a href="page.php?id=<?= ID_PAG_INSPECCION_MAQUINARIA_ACARREO?>">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/acarreo_mineral_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							INSPECCIÓN DE MAQUINARIA DE ACARREO MINERAL
						</div>
					</div>
				</a>
				<a href="page.php?id=<?= ID_PAG_ENSAYOS_DESTRUCTIVOS?>">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/ensayos_destructivos_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							ENSAYOS DESTRUCTIVOS
						</div>
					</div>
				</a>
				<a href="venta_productos.php">
					<div class="w_item_serv">
						<figure>
							<img src="contenido/img/botones_moviles/venta_productos_btn_movil.png">
						</figure>
						<div class="w_serv_title">
							VENTAS DE PRODUCTOS INDUSTRIALES
						</div>
					</div>
				</a>
			</div>
		</div>
		<div id="w_b2" class="hidden-xs hidden-sm">
			<div class="container">
				<div class="btn_servicios btn_capacitacion">
					<a href="page.php?id=<?= ID_PAG_CAPACITACION_PERSONAL?>" class="circle_link"></a>
                    
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_CAPACITACION_PERSONAL))) Tzn::redirect("index.php");
                    ?>
                    
					<div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						
                        <?= $objProd ->description?>
                        
						<a href="page.php?id=<?= ID_PAG_CAPACITACION_PERSONAL?>" class="w_btn_link">Leer más</a>
					</div>
				</div>
				<div class="btn_servicios btn_inspeccion">
					<a href="page.php?id=<?= ID_PAG_HOMOLOGACION_SOLDADORES?>" class="circle_link"></a>
					
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_HOMOLOGACION_SOLDADORES))) Tzn::redirect("index.php");
                    ?>
                    
                    <div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						<?= $objProd ->description?>
						<a href="page.php?id=<?= ID_PAG_HOMOLOGACION_SOLDADORES?>" class="w_btn_link">Leer más</a>
					</div>
				</div>
				<div class="btn_servicios btn_mantenimiento">
					<a href="page.php?id=<?= ID_PAG_INSPECCION_EQUIPOS?>" class="circle_link"></a>
                    
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_INSPECCION_EQUIPOS))) Tzn::redirect("index.php");
                    ?>
                    
					<div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						<?= $objProd ->description?>
						<a href="page.php?id=<?= ID_PAG_INSPECCION_EQUIPOS?>" class="w_btn_link">Leer más</a>
					</div>
				</div>
				<div class="btn_servicios btn_ensayos_dest">
					<!--estos son ensayos no destructivos-->
					<a href="page.php?id=<?= ID_PAG_INSPECCION_MAQUINARIA_ACARREO?>" class="circle_link"></a>
                    
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_INSPECCION_MAQUINARIA_ACARREO))) Tzn::redirect("index.php");
                    ?>
                    
					<div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						<?= $objProd ->description?>
						<a href="page.php?id=<?= ID_PAG_INSPECCION_MAQUINARIA_ACARREO?>" class="w_btn_link">Leer más</a>
					</div>
				</div>
				<div class="btn_servicios btn_homologacion">
					<a href="page.php?id=<?= ID_PAG_MANTENIMIENTO_PREDICTIVO?>" class="circle_link"></a>
                    
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_MANTENIMIENTO_PREDICTIVO))) Tzn::redirect("index.php");
                    ?>
                    
					<div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						<!--<ul class="w_btn_list">
							<li>Elaboración de Procedimiento de Soldadura (WPS)</li>
							<li>Registro de calificación del procedimiento (PQR)</li>
						</ul>-->
                        <?= $objProd ->description?>
						<a href="page.php?id=<?= ID_PAG_MANTENIMIENTO_PREDICTIVO?>" class="w_btn_link">Leer más</a>
					</div>
				</div>
				<div class="btn_servicios btn_insp_maq">
					<a href="page.php?id=<?= ID_PAG_ENSAYOS_DESTRUCTIVOS?>" class="circle_link"></a>
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_ENSAYOS_DESTRUCTIVOS))) Tzn::redirect("index.php");
                    ?>
					<div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						<!--<ul class="w_btn_list">
							<li>Contamos con un Staff de profesionales con más de 10 años de experiencia en inspección de equipos de acarreo de mineral, en las diferentes minas del Perú.</li>
						</ul>-->
                        <?= $objProd ->description?>
						<a href="page.php?id=<?= ID_PAG_ENSAYOS_DESTRUCTIVOS?>" class="w_btn_link">Leer más</a>
					</div>
				</div>
				<div class="btn_servicios btn_ensayos_nodest">
					<!--este son ensayos destructivos-->
					<a href="page.php?id=<?= ID_PAG_ENSAYOS_NO_DESTRUCTIVOS?>" class="circle_link"></a>
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_ENSAYOS_NO_DESTRUCTIVOS))) Tzn::redirect("index.php");
                    ?>
					<div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						<!--<ul class="w_btn_list">
							<li>Prueba de Doblez</li>
							<li>Prueba de Tracción</li>
							<li>Metalografía</li>
							<li>Prueba de dureza Análisis Químico</li>
						</ul>-->
                        <?= $objProd ->description?>
						<a href="page.php?id=<?= ID_PAG_ENSAYOS_NO_DESTRUCTIVOS?>" class="w_btn_link">Leer más</a>
					</div>
				</div>
				<div class="btn_servicios btn_venta">
					<a href="venta_productos.php" class="circle_link"></a>
					
                    <?php
                        $objProd=new Page();
                        if (!$objProd ->loadByKey($objProd ->getIdKey(), intval(ID_PAG_VENTA_PRODUCTOS))) Tzn::redirect("index.php");
                    ?>
                    
                    <div class="w_btn_servicios">
						<p class="w_btn_title"><?= $objProd ->title?></p>
						<!--<ul class="w_btn_list">
							<li>Pinturas Industriales JET</li>
							<li>Tintes penetrantes marca MAGNAFLUX</li>
							<li>Partículas magnéticas fluorescentes MAGNAFLUX</li>
							<li>Partículas magnéticas visibles MAGNAVIS en la marca MAGNAFLUX</li>
						</ul>-->
                        <?= $objProd ->description?>
						<a href="venta_productos.php" class="w_btn_link">Leer más</a>
					</div>
				</div>

			</div>
		</div>
		<div id="w_b3">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6 w_b_fondo">
						<div class="w_b3_fondo">
							<div class="title_fondo">IZAJE</div>
							<div class="w_list_fondo">
								<div class="row">
									
                                    <?= $objProdPortada ->description_en;?>
                                    
                                    
                                    <!--<div class="col-xs-12 col-sm-6 w_50">
										<div class="w_list_title">CAPACITACIÓN Y CERTIFICACIÓN DEL PERSONAL</div>
										<ul>
											<li>Operadores de Grúas Telescopias</li>
											<li>Operador de Camión Grúa</li>
											<li>Operador de Grúa Puente</li>
											<li>Operador de Montacargas</li>
											<li>Operador de Telehandler</li>
											<li>Operador de Manlift</li>
											<li>Rigger de Grúa Telescopia</li>
											<li>Rigger de Grúa Puente</li>
											<li>Rigger de Camión Grúa os de Izaje</li>
										</ul>
									</div>
									<div class="col-xs-12 col-sm-6 w_50">

										<ul class="w_list_v">
											<li>Inspección de Equipos de Izaje
												(Grúas, Manlift, Montacargas, Telehandler)
												Inspección de Elementos y accesorios de Izaje</li>
										</ul>
										<div class="w_list_title">
											INSPECCION DE <br> EQUIPOS
										</div>
										<ul>
											<li>Inspección de equipos Moviles de Izaje
												(Grúas, manlift, Montacarga, Telehandler, etc)</li>
										</ul>
									</div>-->
                                    <div class="btn_mas">
                                        <a href="page.php?id=<?= ID_PAG_CAPACITACION_PERSONAL?>">LEER MAS</a>
                                    </div>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div class="w_b3_det">
							<div class="w_title_border">
								<p>VENTA DE PRODUCTOS INDUSTRIALES</p>
							</div>
                            <?= $objProdPortada ->description_ventasproductos;?>
							<!--<ul class="w_list_det">
								<li>Pinturas industriales JET</li>
								<li>Tintes penetrantes marca MAGNAFLUX</li>
								<li>Partículas magnéticas fluorescente MAGNAFLUX</li>
								<li>Partículas magnéticas visibles MAGNAVIS en la marca MAGNAFLUX</li>
							</ul>-->
							<br>
							<img src="contenido/img/b3_img2.jpg" class="img-responsive">
						</div>
					</div>
				</div>
			</div>
		</div>


	</div>
	<div id="noticias" class="border_top">
		<div id="w_b1">
			<p class="w_b1_text">ULTIMAS NOTICIAS</p>
		</div>
		<div class="container">
			<div class="slider_mov slider_t slider_noticias">

				<?php
				$objNot = new Page();
				$objNot->loadItems("#orderId ASC LIMIT 8", "category.categoryId=" . ID_SUBCAT_NOTICIAS . " AND #status='Activo'");
				$GLOBALS["c"] = 1;
				if ($objNot->loadList()) {
					while ($kk = $objNot->rNext()) {

						if ($GLOBALS["c"] == 1) {
							print '<div class="item_new">';
						}

				?>
						<div class="w_new">
							<div class="row">
								<div class="col-xs-12 col-sm-4">
									<?php if ($img = $kk->gObjImage(LBN_ADMIN_STATUS_ON)) : ?>
										<figure class="w_new_img">
											<a href="noticia.php?id=<?= $kk->id; ?>" title="Ir a Noticia : <?= $kk->title ?>">
												<img src="upload/<?= $img->target; ?>" alt="<?= $img->title; ?>" class="img-responsive" />
											</a>
										</figure>
									<?php endif; ?>
								</div>
								<div class="col-xs-12 col-sm-8">
									<div class="w_new_det">
										<h3><?= truncate_string(strip_tags($kk->title), 80); ?></h3>
										<div><?= truncate_string(strip_tags($kk->description), 200); ?></div>
										<div class="w_new_link">
											<a href="noticia.php?id=<?= $kk->id; ?>" title="Ir a Noticia : <?= $kk->title ?>">LEER MAS</a>
										</div>
									</div>
								</div>
							</div>
						</div>

				<?php
						$GLOBALS["c"]++;
						if ($GLOBALS["c"] == 3) {
							print '</div>';
							$GLOBALS["c"] = 1;
						}
					}
				}
				?>

				<!--<div class="item_new">
		  			<div class="w_new">
		  				<div class="row">
		  					<div class="col-xs-12 col-sm-4">
		  						<figure class="w_new_img">
		  							<img src="contenido/img/foto_noticia.jpg" class="img-responsive">
		  						</figure>
		  					</div>
		  					<div class="col-xs-12 col-sm-8">
		  						<div class="w_new_det">
		  							<h3>Titulo de la Noticia</h3>
		  							<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem....</p>
		  							<div class="w_new_link">
		  								<a href="">LEER MAS</a>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  			<div class="w_new">
		  				<div class="row">
		  					<div class="col-xs-12 col-sm-4">
		  						<figure class="w_new_img">
		  							<img src="contenido/img/foto_noticia.jpg" class="img-responsive">
		  						</figure>
		  					</div>
		  					<div class="col-xs-12 col-sm-8">
		  						<div class="w_new_det">
		  							<h3>Titulo de la Noticia</h3>
		  							<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem....</p>
		  							<div class="w_new_link">
		  								<a href="">LEER MAS</a>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  		</div>
		  		<div class="item_new">
		  			<div class="w_new">
		  				<div class="row">
		  					<div class="col-xs-12 col-sm-4">
		  						<figure class="w_new_img">
		  							<img src="contenido/img/foto_noticia.jpg" class="img-responsive">
		  						</figure>
		  					</div>
		  					<div class="col-xs-12 col-sm-8">
		  						<div class="w_new_det">
		  							<h3>Titulo de la Noticia</h3>
		  							<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem....</p>
		  							<div class="w_new_link">
		  								<a href="">LEER MAS</a>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  			<div class="w_new">
		  				<div class="row">
		  					<div class="col-xs-12 col-sm-4">
		  						<figure class="w_new_img">
		  							<img src="contenido/img/foto_noticia.jpg" class="img-responsive">
		  						</figure>
		  					</div>
		  					<div class="col-xs-12 col-sm-8">
		  						<div class="w_new_det">
		  							<h3>Titulo de la Noticia</h3>
		  							<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem....</p>
		  							<div class="w_new_link">
		  								<a href="">LEER MAS</a>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  		</div>
		  		<div class="item_new">
		  			<div class="w_new">
		  				<div class="row">
		  					<div class="col-xs-12 col-sm-4">
		  						<figure class="w_new_img">
		  							<img src="contenido/img/foto_noticia.jpg" class="img-responsive">
		  						</figure>
		  					</div>
		  					<div class="col-xs-12 col-sm-8">
		  						<div class="w_new_det">
		  							<h3>Titulo de la Noticia</h3>
		  							<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem....</p>
		  							<div class="w_new_link">
		  								<a href="">LEER MAS</a>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  			<div class="w_new">
		  				<div class="row">
		  					<div class="col-xs-12 col-sm-4">
		  						<figure class="w_new_img">
		  							<img src="contenido/img/foto_noticia.jpg" class="img-responsive">
		  						</figure>
		  					</div>
		  					<div class="col-xs-12 col-sm-8">
		  						<div class="w_new_det">
		  							<h3>Titulo de la Noticia</h3>
		  							<p>Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem....</p>
		  							<div class="w_new_link">
		  								<a href="">LEER MAS</a>
		  							</div>
		  						</div>
		  					</div>
		  				</div>
		  			</div>
		  		</div>-->
			</div>
			<div class="btn_vermas">
				<a href="noticias.php" title="Ver todas las noticias">VER TODAS LAS NOTICIAS</a>
			</div>
		</div>
	</div>
	<div id="w_b4" class="border_top">
		<div class="container">
			<div class="w_text_min">
                
                
                <!--Inspeccionamos mediante ensayos <b>NO DESTRUCTIVOS</b> unidades móviles de transporte de materiales peligrosos <b>(MATPEL)</b>.
				Siendo nuestros principales clientes las empresas que transportan <b>MATPEL</b>
				a minera <b>YANACOCHA.</b>-->
            
            <?= $objProdPortada ->description_ultimo;?>
            
            </div>
		</div>
	</div>
	<?php include("_footer.php") ?>
	<!-- iconos -->
	<div class="iconos-fijos">
		<a class="iconos-fijos__wrap" href="buscador_certificados.php">
			<figure class="iconos-fijos__icon">
				<img src="contenido/img/miner.svg" alt="">
			</figure>
			<p class="iconos-fijos__text">CONSULTAR VIGENCIA<br>DE CERTIFICADO</p>
		</a>
	</div>
	<div class="iconos-fijos-2">
		<a class="iconos-fijos__wrap" href="http://globalsuppliersp.com/brochure_izaje/brochure.pdf" title="Descargar Brochure Digital" target="_blank">
			<figure class="iconos-fijos__icon">
				<img src="contenido/img/pdf.svg" alt="">
			</figure>
		</a>
	</div>
	<!-- redes -->
	<div class="redes-fijas">

        <?php if (SITE_FACEBOOK) { ?>
        
		<a href="<?= SITE_FACEBOOK ?>" target="_blank" title="Facebook">
			<div>
				<figure>
					<i class="fab fa-facebook-square"></i>
				</figure>
			</div>
		</a>
        
        <?php } ?>
        
        <?php if (SITE_INSTAGRAM) { ?>

		<a href="<?= SITE_INSTAGRAM ?>" target="_blank" title="Instagram">
			<div>
				<figure>
					<i class="fab fa-instagram"></i>
				</figure>
			</div>
		</a>
        
        <?php } ?>

		<?php if (SITE_YOUTUBE) { ?>
        <a href="<?= SITE_YOUTUBE ?>" target="_blank" title="Youtube">
			<div>
				<figure>
					<i class="fab fa-youtube"></i>
				</figure>
			</div>
		</a>
        <?php } ?>
		
		<?php if (SITE_LINKEDIN) { ?>
        <a href="<?= SITE_LINKEDIN ?>" target="_blank" title="Linkedin">
			<div>
				<figure>
					<i class="fab fa-linkedin"></i>
				</figure>
			</div>
		</a>
        <?php } ?>
	</div>
</body>

</html>