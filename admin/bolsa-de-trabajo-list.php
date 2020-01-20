<?php 
$pPageIsPublic = false;
include '../_common.php';
$_SESSION["m1"]="content";
$_SESSION["m2"]='bolsa-de-trabajo-list';
$objName="Page"; $objUrl="bolsa-de-trabajo"; $objTitle="Bolsa de Trabajo";
?>
<?php include("header.php"); ?>
<?php include("sidebar.php"); ?>
<div id="list">		
<h2><?= $objTitle ?></h2>
<?php Common::hFrmFilterAdmin($objName, $objTitle, $objUrl) ?>
<div id="wrap-list">
<?php
$objLoaded = new Page();
$objLoaded->loadItems ("#orderId ASC", "#status like '". $chkstatus ."%'  AND #categoryId='".ID_SUBCAT_BOLSA_DE_TRABAJO."'");
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