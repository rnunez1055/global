
<div class="span-4 last">
  <div>
    <ul class="markermenu">
      <?php if ($_SESSION['m1']=='home') { ?>
      <li class="<?php if ($_SESSION['m2']=='dashboard') { echo "active"; } else { echo "" ;}?>" ><a href="index.php">Dashboard</a></li>
      <?php } ?>
      <?php if ($_SESSION['m1']=='content') { ?>
      <li class="<?php if ($_SESSION['m2']=='category-list') { echo "active"; } else { echo "" ;}?>" ><a href="category-list.php">Categor&iacute;as</a></li>
      <li class="<?php if ($_SESSION['m2']=='servicios-list') { echo "active"; } else { echo "" ;}?>" ><a href="servicios-list.php">Servicios</a></li>
      <li class="<?php if ($_SESSION['m2']=='izaje-list') { echo "active"; } else { echo "" ;}?>" ><a href="izaje-list.php">Izaje</a></li>
      <li class="<?php if ($_SESSION['m2']=='noticias-pag-list') { echo "active"; } else { echo "" ;}?>" ><a href="noticias-pag-list.php">Banners Noticias</a></li>
      <li class="<?php if ($_SESSION['m2']=='noticias-list') { echo "active"; } else { echo "" ;}?>" ><a href="noticias-list.php">Noticias</a></li>
      <li class="<?php if ($_SESSION['m2']=='bolsa-pag-list') { echo "active"; } else { echo "" ;}?>" ><a href="bolsa-pag-list.php">Banners B. de Trabajo</a></li>
      <li class="<?php if ($_SESSION['m2']=='bolsa-de-trabajo-list') { echo "active"; } else { echo "" ;}?>" ><a href="bolsa-de-trabajo-list.php">Bolsa de Trabajo</a></li>
      <li class="<?php if ($_SESSION['m2']=='clientes-pag-list') { echo "active"; } else { echo "" ;}?>" ><a href="clientes-pag-list.php">Banners Clientes</a></li>
      <li class="<?php if ($_SESSION['m2']=='clientes-list') { echo "active"; } else { echo "" ;}?>" ><a href="clientes-list.php">Clientes</a></li>
      <li class="<?php if ($_SESSION['m2']=='empresa-list') { echo "active"; } else { echo "" ;}?>" ><a href="empresa-list.php">Empresa</a></li>
      <li class="<?php if ($_SESSION['m2']=='venta-productos-list') { echo "active"; } else { echo "" ;}?>" ><a href="venta-productos-list.php">Venta de Productos</a></li>
      <li class="<?php if ($_SESSION['m2']=='productos-list') { echo "active"; } else { echo "" ;}?>" ><a href="productos-list.php">Productos</a></li>
      <li class="<?php if ($_SESSION['m2']=='contacto-list') { echo "active"; } else { echo "" ;}?>" ><a href="contacto-list.php">Contacto</a></li>
      <li class="<?php if ($_SESSION['m2']=='portada-list') { echo "active"; } else { echo "" ;}?>" ><a href="portada-list.php">Portada</a></li>
      <?php } ?>
      <?php if ($_SESSION['m1']=='banner') { ?>
<li class="<?php if ($_SESSION['m2']=='banner-list') { echo "active"; } else { echo "" ;}?>" ><a href="banner-list.php">Banners</a></li>      
      <?php } ?>
    </ul>
  </div>
</div>
<div class="span-19 last content" >
