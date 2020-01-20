<?php 
$pPageIsPublic = false;
include '../_common.php';
$_SESSION["m1"]="content";
$_SESSION["m2"]='productos-list';
$objName="Page"; $objUrl="productos"; $objTitle="Productos";
?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div id="list">		
<h2><?= $objTitle ?></h2>
<?php Common::hFrmFilterAdmin($objName, $objTitle, $objUrl) ?>
<div id="wrap-list">
<?php
$objLoaded = new Page();
$objLoaded->loadItems ("#orderId ASC", "#status like '". $chkstatus ."%'  AND #categoryId='".ID_SUBCAT_PRODUCTOS."'");
	echo Common::hSimpleGridV2($objName, $objTitle, $objUrl,$objLoaded, true,
				array(
					'description' => true,
					'navs' => array (
						0 => array (
							'title' 	=> 'Im&aacute;genes',
							'count'     => 'gImagesCount',
							'objName' 	=> 'File',
							'more'  	=> true
 						)
					) 
				) 
			);
?>
</div>
</div>
<?php include("footer.php"); ?>