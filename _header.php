<header>
		<div class="">
			<div id="logo" class="hidden-xs">
				<a href="index.php"><img src="contenido/img/logo.png" alt="GLOBAL SUPPLIER SAC"></a>
			</div>
			<div id="logo" class="visible-xs">
				<a href="index.php"><img src="contenido/img/logo_moviles.png" class="opacity"alt="GLOBAL SUPPLIER SAC"></a>
			</div>
			<div id="fb">
                
        <?php if (SITE_FACEBOOK) { ?>
                <span>Siguenos en <a href="<?= SITE_FACEBOOK ?>" title="Ir a Facebook : Global Supplier S&P S.A.C" target="_blank"><img src="contenido/img/fb.png" class="opacity"alt="GLOBAL SUPPLIER SAC"></a></span>
        <?php } ?>
                
			</div>
			<div id="menu" class="hidden-xs">
				<ul class="menu">
					<li><a href="index.php">PAGINA <br> PRINCIPAL</a></li>
					<li><a href="javascript:void()">NUESTRA <br> EMPRESA</a>
                        <ul class="sub_menu">
                            <li><a href="nuestra_empresa.php">QUIENES SOMOS</a></li>
                            <li><a href="nuestros_clientes.php">NUESTROS CLIENTES</a></li>
                        </ul>                    
                    </li>
					<li><a href="javascript:void()">NUESTROS <br> SERVICIOS</a>
                    <?php
                        $tmp = new Page();
                        if ($tmp->loadItems("#orderId ASC", "#status='".LBN_ADMIN_STATUS_ON."' AND #categoryId ='".ID_SUBCAT_SERVICIOS."'")){
                             print '<ul class="sub_menu">';
                                        while ( $page = $tmp->rNext () ) {
print '<li><a href="page.php?id='.$page->id.'">'.$page->title.'</a></li>';
                                        }
                            print '</ul>';
                        } 
                    ?>
					</li>
					<li><a href="javascript:void()">IZAJE</a>
						
                        <?php
                            $tmp = new Page();
                            if ($tmp->loadItems("#orderId ASC", "#status='".LBN_ADMIN_STATUS_ON."' AND #categoryId ='".ID_SUBCAT_IZAJE."'")){
                                 print '<ul class="sub_menu">';
                                            while ( $page = $tmp->rNext () ) {
    print '<li><a href="page.php?id='.$page->id.'">'.$page->title.'</a></li>';
                                            }
                                print '</ul>';
                            } 
                        ?>
					</li>
                    <li><a href="#">CURSOS <br> ONLINE</a></li>
                    <li><a href="noticias.php">ULTIMAS <br> NOTICIAS</a></li>
                    <li><a href="bolsa-de-trabajo.php">BOLSA DE<br> TRABAJO</a></li>
                    <li><a href="venta_productos.php">VENTA DE <br> PRODUCTOS</a></li>
					<li><a href="contacto.php">COMO <br> CONTACTARNOS</a></li>
				</ul>
			</div>
			<div id="nav_movil" class="visible-xs navbar navbar-default" role="navigation">
			  <div class="navbar-header">
			    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
			      <span class="sr-only">Toggle navigation</span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			      <span class="icon-bar"></span>
			    </button>
			    <!--<a class="navbar-brand" href="index.php"><img src="contenido/img/logo.png"></a>-->
			  </div>
			  <div class="navbar-collapse collapse">
			    <ul class="nav navbar-nav">
			      <li><a href="index.php">INICIO</a></li>
			      <li><a href="#">NUESTRA EMPRESA <span class="caret"></span></a>
                    <ul class="dropdown-menu">
			      		<li><a href="nuestra_empresa.php">QUIENES SOMOS</a></li>
			      		<li><a href="nuestros_clientes.php">NUESTROS CLIENTES</a></li>
			      	</ul>
                </li>
			      <li><a href="#">NUESTROS SERVICIOS <span class="caret"></span></a>
                      <?php
                        $tmp = new Page();
                        if ($tmp->loadItems("#orderId ASC", "#status='".LBN_ADMIN_STATUS_ON."' AND #categoryId ='".ID_SUBCAT_SERVICIOS."'")){
                             print '<ul class="dropdown-menu"">';
                                        while ( $page = $tmp->rNext () ) {
print '<li><a href="page.php?id='.$page->id.'">'.$page->title.'</a></li>';
                                        }
                            print '</ul>';
                        } 
                    ?>
			      </li>
			      <li><a href="#">IZAJE <span class="caret"></span></a>
			      		<?php
                        $tmp = new Page();
                        if ($tmp->loadItems("#orderId ASC", "#status='".LBN_ADMIN_STATUS_ON."' AND #categoryId ='".ID_SUBCAT_IZAJE."'")){
                             print '<ul class="dropdown-menu"">';
                                        while ( $page = $tmp->rNext () ) {
print '<li><a href="page.php?id='.$page->id.'">'.$page->title.'</a></li>';
                                        }
                            print '</ul>';
                        } 
                    ?>
					</li>			      
                    <li><a href="#">CURSOS <br> ONLINE</a></li>
                    <li><a href="noticias.php">ULTIMAS <br> NOTICIAS</a></li>
                    <li><a href="bolsa-de-trabajo.php">BOLSA DE<br> TRABAJO</a></li>
                    <li><a href="venta_productos.php">VENTA DE <br> PRODUCTOS</a></li>
					<li><a href="contacto.php">COMO <br> CONTACTARNOS</a></li>
			    </ul>
			  </div>
			</div>
		</div>
	</header>
