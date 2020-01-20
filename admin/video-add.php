<?php  
$pPageIsPublic = false;
include '../_common.php';
$u = $_SESSION["u"];
// switch(intval($_REQUEST["u"])) {
// 	case 1:
// 		$u = LBN_VAR2_BANNER;break;
// 	case 2:
// 		$u = LBN_VAR2_GALLERY;break;
// 	case 3:
// 		$u = LBN_VAR2_PROMO;break;
// 	default:
// 		$u = 0;
//}
//$u = intval($_REQUEST["u"]) == LBN_VAR2_BANNER ? LBN_VAR2_BANNER : (intval($_REQUEST["u"]) == LBN_VAR2_GALLERY) ? LBN_VAR2_GALLERY : 0;

$urlBack = "";
	if ($u == LBN_VAR2_BANNER) {
		$_SESSION["m1"]	= "banners";
		$_SESSION["m2"] = 'banner-portada';
		$urlBack = "banner-portada.php";
	} elseif ($u == LBN_VAR2_GALLERY) {
		$_SESSION["m1"]	= "gallery";
		$_SESSION["m2"] = 'gallery-list';
	} elseif ($u == LBN_VAR2_PROMO) {
		$_SESSION["m1"]	= "banners";
		$_SESSION["m2"] = 'banner-promo';
		$urlBack = "banner-promo.php";
	} elseif ($u == LBN_VAR2_SECCION) {
		$_SESSION["m1"]	= "s-interna";
		$_SESSION["m2"] = 'sec';
		$urlBack = "section-add.php?id=". $_REQUEST["pid"]."&tab=file" ;
	} elseif ($u == LBN_VAR2_PRODUCTO) {
		$_SESSION["m1"]	= "productos";
		$_SESSION["m2"] = 'p-list';
		$urlBack = "page-add.php?id=". $_REQUEST["pid"]."&tab=video" ;
	} elseif ($u == LBN_VAR2_PRODUCTO_VIDEO) {
		$_SESSION["m1"]	= "productos";
		$_SESSION["m2"] = 'p-list';
		$urlBack = "page-add.php?id=". $_REQUEST["pid"]."&tab=video" ;
	} elseif ($u == LBN_VAR2_NOTICIA) {
		$_SESSION["m1"]	= "news";
		$_SESSION["m2"] = 'news';
		$urlBack = "noticia-add.php?id=". $_REQUEST["pid"]."&tab=file" ;
	} elseif ($u == LBN_VAR2_GALERIA) {
		$_SESSION["m1"]	= "gallery";
		$_SESSION["m2"] = 'gallery';
		$urlBack = "galeria-add.php?id=". $_REQUEST["pid"]."&tab=file" ;
	}


$objName="File"; $objUrl="page"; $objTitle="Video";

$pTitle  = "Nuevo {$objTitle}";
$pButton = 'Guardar';
$action  = 'add';
$id 	 = intval($_REQUEST['id']);
$pid 	 = intval($_REQUEST['pid']);
$seo	 = NULL;

$tmp = Page::getInstance();
$tmp ->setUid($pid);
//if (!$tmp ->load()) Tzn::redirect("page-add.php");;

 
   

$objLoad = new File();
$objLoad ->setUid($id);
if ($objLoad ->load()) {
	$pTitle  = "Editar {$objTitle}";
	$pButton = 'Actualizar';
	$action  = 'edit';
	$pid = $tmp ->id;
	
	if ($_REQUEST["action"]=="del") {
		$objLoad ->getConnection();
		$objLoad ->video = "";
		$objLoad ->update("video");
	}
}

if (isset($_POST['submit'])) {
	$objLoad ->setAuto($_POST);
	$objLoad ->page ->id = $_POST["pid"];
	$objLoad ->{LBN_VAR2} = $u;
	//$objLoad ->uploadFile();
	
	#die(var_dump(get_youtube_id($_POST["video"])));
	
	$objLoad ->video = get_youtube_id($_POST["video"]);
	if ($_POST['action'] == 'edit') {
		$objLoad ->getConnection();
		$objLoad ->setUid($id);
		$objLoad ->update();
		//if (!$pid) Tzn::redirect("banner-list.php", "{$objTitle} ha sido actualizado.");
		Tzn::redirect("page-add.php?id={$objLoad ->page ->id}&tab=video", "{$objTitle} ha sido actualizado.");
		
	} elseif ($_POST['action'] == 'add') {
		$objLoad ->add();
		//if (!$pid) Tzn::redirect("banner-list.php", "{$objTitle} ha sido actualizado.");
		Tzn::redirect("page-add.php?id={$objLoad ->page ->id}&tab=video", "{$objTitle} ha sido registrado.");
	}
	
	
	if ($u == LBN_VAR2_BANNER)
		Tzn::redirect("banner-portada.php", "{$objTitle} se ha guardado correctamente.");
	elseif ($u == LBN_VAR2_GALLERY)
		Tzn::redirect("gallery-list.php", "{$objTitle} se ha guardado correctamente.");
	elseif ($u == LBN_VAR2_PROMO)
		Tzn::redirect("banner-promo.php", "{$objTitle} se ha guardado correctamente.");
	elseif ($u == LBN_VAR2_SECCION)
		Tzn::redirect($urlBack, "{$objTitle} se ha guardado correctamente.");
	elseif ($u == LBN_VAR2_GALERIA)
	Tzn::redirect($urlBack, "{$objTitle} se ha guardado correctamente.");
}
?>
<?php include("header.php"); ?>
<script type="text/javascript">
$(document).ready(function(){
	Shadowbox.init();  

	$('#frmMain').validate();	
});
</script>
<?php include("sidebar.php"); ?>
<ul id="subnav" >
<?php
	if ($u == LBN_VAR2_SECCION || $u == LBN_VAR2_PRODUCTO || $u == LBN_VAR2_PRODUCTO_VIDEO  || $u == LBN_VAR2_NOTICIA || $u == LBN_VAR2_GALERIA): 
?>
	<li ><a class="back" href="<?= $urlBack ?>" > Atras </a></li>
<?php endif; ?>	
	<li class="noborder" >
		<a class="add" href="<?= $_SERVER["PHP_SELF"] ?>?pid=<?= $pid?>" > Agregar un <?= $objTitle ?> </a>
	</li>
</ul>
<div id="list">
<h2> <?php echo $pTitle;?> </h2>  
<form action="" method="post" name = "frmMain" id = "frmMain" enctype="multipart/form-data"  >
<input type="hidden" name="u" value="<?= $_REQUEST["u"] ?>" />
<fieldset><legend> Informaci&oacute;n General </legend>
	<table cellpadding="0" cellspacing="0" class="table-form"  >
		<tr>
			<th>T&iacute;tulo: </th>
					<td><?php $objLoad ->qText('title', '', 'width:548px', 'class="required"');?></td>
				</tr>
				<tr>
					<th>Video: </th>
					<td><?php $objLoad ->pVideo('video', "{$_SERVER['PHP_SELF']}?pid={$objLoad ->page ->id}&id={$objLoad ->id}&action=del&u={$_REQUEST["u"]}") ?></td>
				</tr>
				
				<tr>
					<th>Estado: </th>
					<td><?php $objLoad ->arrayToSelect($objLoad ->_arrStatus, 'status', $objLoad ->status, false, 'width:100px', '');?></td>
				</tr>
			</table>
	</fieldset>
	<div style="margin-top:10px">
		<input type="hidden" name="id" value="<?php echo $id; ?>" />
		<input type="hidden" name="pid" value="<?php echo $pid; ?>" />
		<input type="hidden" name="action" value="<?php echo $action; ?>" />
                <input type="submit" name="submit"  value="<?php echo $pButton; ?>" /> &nbsp;
                <input type="reset" value="Cancelar" onClick="window.location.href='<?= $urlBack ?>'" />
            </div>
            </form>
</div>
<?php include("footer.php"); ?>