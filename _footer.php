	<footer class="border_top">
		<div id="f_b1">
			<div class="container">
				<div class="sedes">
					<div class="sedes__item">
						<div class="w_text icon_green">
							<p>OFICINA TRUJILLO</p>
						</div>
						<?php if (SITE_DIRECCION) { ?>
							<div class="sedes__item__wrap">
								<div class="w_contact">
									<p class="w_c_text icon_mapa"><?= SITE_DIRECCION ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if (SITE_TELEFONOS) { ?>
							<div class="sedes__item__wrap">
								<div class="w_contact">
									<p class="w_c_text icon_fono"><?= SITE_TELEFONOS ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="sedes__item">
						<div class="w_text icon_green">
							<p>OFICINA CAJAMARCA</p>
						</div>
						<?php if (SITE_DIRECCION_CAX) { ?>
							<div class="sedes__item__wrap">
								<div class="w_contact">
									<p class="w_c_text icon_mapa"><?= SITE_DIRECCION_CAX ?></p>
								</div>
							</div>
						<?php } ?>
						<?php if (SITE_TELEFONOS_CAX) { ?>
							<div class="sedes__item__wrap">
								<div class="w_contact">
									<p class="w_c_text icon_fono"><?= SITE_TELEFONOS_CAX ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
					<div class="sedes__item">
						<?php if (SITE_CELULARES) { ?>
							<div class="sedes__item__wrap">
								<div class="w_contact">
									<p class="w_c_text icon_cel"><?= SITE_CELULARES ?></p>
								</div>
							</div>
						<?php } ?>

						<?php if (SITE_CORREOS) { ?>
							<div class="sedes__item__wrap">
								<div class="w_contact">
									<p class="w_c_text icon_email"><?= SITE_CORREOS ?></p>
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
				<!-- 
				<div class="row">
					<?php if (SITE_DIRECCION) { ?>
						<div class="col-xs-12 col-sm-6">
							<div class="w_contact">
								<p class="w_c_text icon_mapa"><?= SITE_DIRECCION ?></p>
							</div>
						</div>
					<?php } ?>
					<?php if (SITE_TELEFONOS) { ?>
						<div class="col-xs-12 col-sm-6">
							<div class="w_contact">
								<p class="w_c_text icon_fono"><?= SITE_TELEFONOS ?></p>
							</div>
						</div>
					<?php } ?>
				</div> -->
			</div>
		</div>

		<!-- <div id="f_b1">
			<div class="container">
				<div class="w_text icon_green">
					<p>OFICINA CAJAMARCA</p>
				</div>
				<div class="row">
					<?php if (SITE_DIRECCION_CAX) { ?>
						<div class="col-xs-12 col-sm-6">
							<div class="w_contact">
								<p class="w_c_text icon_mapa"><?= SITE_DIRECCION_CAX ?></p>
							</div>
						</div>
					<?php } ?>
					<?php if (SITE_TELEFONOS_CAX) { ?>
						<div class="col-xs-12 col-sm-6">
							<div class="w_contact">
								<p class="w_c_text icon_fono"><?= SITE_TELEFONOS_CAX ?></p>
							</div>
						</div>
					<?php } ?>
				</div>
			</div>
		</div> -->

		<!-- <div id="f_b1">
			<div class="container">

				<div class="w_text icon_green">
					<p>CORREOS Y CELULARES</p>
				</div>

				<div class="row">

					<?php if (SITE_CELULARES) { ?>
						<div class="col-xs-12 col-sm-4">
							<div class="w_contact">
								<p class="w_c_text icon_cel"><?= SITE_CELULARES ?></p>
							</div>
						</div>
					<?php } ?>

					<?php if (SITE_CORREOS) { ?>
						<div class="col-xs-12 col-sm-8">
							<div class="w_contact">
								<p class="w_c_text icon_email"><?= SITE_CORREOS ?></p>
							</div>
						</div>
					<?php } ?>

				</div>

			</div>
		</div> -->


		<div id="f_b2">
			<div class="container">
				<div class="w_text icon_white w_white">
					<p>PRINCIPALES CLIENTES</p>
				</div>
				<div class="row">

					<?php
					$objNot = new Page();
					$objNot->loadItems("#orderId ASC", "category.categoryId=" . ID_SUBCAT_CLIENTES . " AND #status='Activo'");
					if ($objNot->loadList()) {
						while ($kk = $objNot->rNext()) {


							print '<div class="col-xs-12 col-sm-3 w_50">';
							print '<div class="w_clientes">';
							print '<ul class="w_list_det w_list_clientes">';
							print '<li><a href="' . $kk->url_fuente . '" title="' . $kk->title . '" target="_blank">' . $kk->title . '</a></li>';
							print '</ul>';
							print '</div>';
							print '</div>';
						}
					}
					?>

					<!--<div class="col-xs-12 col-sm-3 w_50">
						<div class="w_clientes">
							<ul class="w_list_det w_list_clientes">
								<li>Transgroup Cajamarca S.A.</li>
								<li>Multitransportes Cajamarca S.A.</li>
								<li>Multiservicios Cajamarca S.A.C.</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 w_50">
						<div class="w_clientes">
							<ul class="w_list_det w_list_clientes">
								<li>DCR Mineria y Construcción S.A.C.</li>
								<li>EXSA</li>
								<li>Transportes Acuario.</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 w_50">
						<div class="w_clientes">
							<ul class="w_list_det w_list_clientes">
								<li>Transportes Acuario</li>
								<li>Inversiones Generales Cristian S.R.L.</li>
								<li>Minera Coimolache S.A.</li>
							</ul>
						</div>
					</div>
					<div class="col-xs-12 col-sm-3 w_50">
						<div class="w_clientes">
							<ul class="w_list_det w_list_clientes">
								<li>Matpel S.A.</li>
								<li>Qimex S.A.</li>
								<li>Cementos Lima</li>
							</ul>
						</div>
					</div>-->
				</div>
			</div>
		</div>
		<div id="f_b3">
			<div class="container">
				<div id="logo_footer">
					<img src="contenido/img/logo_blanco.png">
					<p>Copyright 2017. Todos los derechos reservados.</p>
				</div>
				<div id="logo_em">
					<a href="http://evolucionmedia.pe/" target="_blank" title="diseño web profesional | diseño de paginas web | tiendas virtuales | aulas virtuales | gestor de cursos online | realidad aumentada | desarrollo de logotipos | diseño de logotipo"><img src="contenido/img/logo_em.png" alt="diseño web profesional | diseño de paginas web | tiendas virtuales | aulas virtuales | gestor de cursos online | realidad aumentada | desarrollo de logotipos | diseño de logotipo" class="opacity" /></a>
				</div>
			</div>
		</div>
	</footer>
	<!--SMARTH-->
	<link rel="stylesheet" type="text/css" href="contenido/smart/jquery.smartmenus.bootstrap.min.css">

	<!--CARROUSEL-->
	<link rel="stylesheet" type="text/css" href="contenido/carousel/carouselengine/initcarousel-2.min.css">

	<!--SLIDER CARROUSEL-->
	<link rel="stylesheet" type="text/css" href="contenido/slick/slick.min.css">
	<link rel="stylesheet" type="text/css" href="contenido/slick/slick-theme.min.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js" type="text/javascript"></script>
	<script src="contenido/js/bootstrap.min.js"></script>
	<script src="contenido/smart/jquery.smartmenus.min.js"></script>
	<script src="contenido/smart/jquery.smartmenus.bootstrap.min.js"></script>
	<script src="contenido/carousel/carouselengine/amazingcarousel.js"></script>
	<script src="contenido/carousel/carouselengine/initcarousel-2.js"></script>
	<script src="contenido/slick/slick.min.js" type="text/javascript" charset="utf-8"></script>
	<script type="text/javascript">
		$(document).on('ready', function() {
			$(".slider_mov").slick({
				dots: true,
				infinite: true,
				slidesToShow: 1,
				slidesToScroll: 1,
				autoplay: true
			});
		});
	</script>