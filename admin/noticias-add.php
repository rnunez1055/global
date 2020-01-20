<?php  
$pPageIsPublic = false;
include '../_common.php';
	
$_SESSION["m1"]="content";
$_SESSION["m2"]="noticias-list";
$objName="Page"; $objUrl="noticias"; $objTitle="Noticia";

$pTitle  = "Nueva {$objTitle}";
$pButton = 'Guardar';
$action  = 'add';
$id 	 = intval($_REQUEST['id']);
$seo	 = NULL;
//exit;

$objLoad = new Page();
$objLoad ->setUid($id);
if ($objLoad ->load()) {
	$pTitle  = "Editar {$objTitle}";
	$pButton = 'Actualizar';
	$action  = 'edit';
	$seo = json_decode($objLoad ->seo);
}
//exit;
if (isset($_POST['submit'])) {
	$objLoad ->setAuto($_POST);
	$objLoad ->category ->id = ID_SUBCAT_NOTICIAS;
	//$objLoad ->featured = !$_POST["featured"] ? 0 : 1;
	$objLoad ->seo = arr2json($_POST, array('metaTitle', 'metaDescription', 'metaKeyword', 'friendlyUrl'));	
    
    $mensaje = "";
    if ($_POST['action'] == 'edit') {
		$objLoad ->getConnection();
		$objLoad ->setUid($id);
		$objLoad ->update();
        $msg="{$objTitle} ha sido actualizado.";
		//Tzn::redirect("{$objUrl}-list.php", "{$objTitle} ha sido actualizado.");
	} elseif ($_POST['action'] == 'add') {
		$objLoad ->add();
        $msg="{$objTitle} ha sido registrado.";
        //Tzn::redirect("{$objUrl}-add.php?id={$objLoad ->id}", "{$objTitle} ha sido registrado.");
	}
    
    Tzn::redirect("{$objUrl}-add.php?id={$objLoad ->id}", $msg);
}
?>
<?php include("header.php"); ?>
    <?php
//$tabs 	= array('file' => 1);
$tabs 	= array('file' => 2, 'video' => 3 );
$selTab = $tabs[$_REQUEST['tab']] ? $tabs[$_REQUEST['tab']] : 0;
?>
    <script type="text/javascript">

$(document).ready(function(){
	$("#frmMain").validate({
		rules: {
			categoryId: "required"
		},
		messages: {
			categoryId: "*"
		}
	});
	
	$('#content-tabs').tabs({
		disabled :[<?php echo !$objLoad ->isLoaded() ? "2" : "" ?>],
		initial  : <?php echo $selTab ?>
	});
    
    $('#content-tabs').tabs({
        disabled :[<?php echo !$objLoad ->isLoaded() ? "3" : "" ?>],
		initial  : <?php echo $selTab ?>
	});
	
	$('#content-tabs').tabs({
        disabled :[<?php echo !$objLoad ->isLoaded() ? "4" : "" ?>],
		initial  : <?php echo $selTab ?>
	});
});

</script>
    <?php include("sidebar.php"); ?>
      <ul id="subnav" >
        <li ><a class="back" href="<?= $objUrl ?>-list.php" > Atras </a></li>
        <li class="noborder" > <a class="add" href="<?= $objUrl ?>-add.php" > Agregar
          <?= $objTitle ?>
          </a> </li>
      </ul>
      <div id="list">
        <h2> <?php echo $pTitle;?> </h2>
        <div id="content-tabs">
          <ul>
            <li><a href="#fragment-1" ><span>Noticia</span></a></li>
            <li><a href="#fragment-3"><span>Im&aacute;genes</span></a></li>
            <li><a href="#fragment-4"><span>Videos</span></a></li>
          </ul>
          
          <div id="fragment-1" >
          <form action="" method="post" name = "frmMain" id = "frmMain"  enctype="multipart/form-data" >
            <fieldset>
              <legend> Informaci&oacute;n Español </legend>
              <table cellpadding="0" cellspacing="0" class="table-form">
                <tr>
                  <th>T&iacute;tulo: </th>
                  <td><?php $objLoad ->qText('title', '', 'width:548px', 'class="required"');?></td>
                </tr>
                <tr>
                  <th>Descripción: </th>
                  <td><?php $objLoad ->qEditor('description', array('toolbar' => 'multimedia', 'stylesSet' => 'custom')); ?></td>
                </tr>
                <?php $objLoad ->printSEO();?>
                <tr>
                  <th>Estado: </th>
                  <td><?php $objLoad ->arrayToSelect($objLoad ->_arrStatus, 'status', $objLoad ->status, false, 'width:100px', '');?></td>
                </tr>
              </table>
              <div style="margin-top:10px">
                <input type="hidden" name="id" value="<?php echo $id; ?>" />
                <input type="hidden" name="action" value="<?php echo $action; ?>" />
                <input type="submit" name="submit"  value="<?php echo $pButton; ?>" />
                &nbsp;
                <input type="reset" value="Cancelar" onClick="window.location.href='<?= $objUrl ?>-list.php'" />
              </div>
            </fieldset>
          </form>
            </div>  
          <div id="fragment-3">
            <?php
				$objPage = clone $objLoad;
				include PRJ_INCLUDE_PATH.'admin/page-image-list.php';
			?>
          </div>
            <div id="fragment-4" >
            <?php
				$objPage = clone $objLoad; 
				include PRJ_INCLUDE_PATH.'admin/page-video-list.php';
			?>
          </div>
        </div>
      </div>
      <?php include("footer.php"); ?>