<?php  
$pPageIsPublic = false;
include '../_common.php';
$_SESSION["m1"]="content";
$_SESSION["m2"]='productos-list';
$objName="Page"; $objUrl="productos"; $objTitle="Producto";

$pTitle  = "Nuevo {$objTitle}";
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
	$objLoad ->category ->id = ID_SUBCAT_PRODUCTOS;
    
    $mensaje = "";
    if ($_POST['action'] == 'edit') {
		$objLoad ->getConnection();
		$objLoad ->setUid($id);
		$objLoad ->update();
        $msg="{$objTitle} ha sido actualizado.";
	} elseif ($_POST['action'] == 'add') {
		$objLoad ->add();
        $msg="{$objTitle} ha sido registrado.";
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
});

</script>
    <?php include("sidebar.php"); ?>
      <div id="list">
        <h2> <?php echo $pTitle;?> </h2>
        <div id="content-tabs">
          <ul>
            <li><a href="#fragment-1" ><span>Cliente</span></a></li>
            <li><a href="#fragment-3"><span>Im&aacute;genes</span></a></li>
          </ul>
          <div id="fragment-1">
          <form action="" method="post" name = "frmMain" id = "frmMain"  enctype="multipart/form-data" >
            <fieldset>
              <legend> Informaci&oacute;n </legend>
              <table cellpadding="0" cellspacing="0" class="table-form">                
                <tr>
                  <th>T&iacute;tulo: </th>
                  <td><?php $objLoad ->qText('title', '', 'width:548px', 'class="required"');?></td>
                </tr>
                <tr>
                  <th>Página Web: </th>
                  <td><?php $objLoad ->qText('url_fuente', '', 'width:548px');?></td>
                </tr>                               
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
      </div>
      <?php include("footer.php"); ?>