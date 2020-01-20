<?php  
$pPageIsPublic = false;
include '../_common.php';
	
$_SESSION["m1"]="content";
$_SESSION["m2"]="venta-productos-list";
$objName="Page"; $objUrl="venta-productos"; $objTitle="Venta de Productos";

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
    
    if ($_GET['action']=='delfoto_derecho') {
		$objLoad ->removeFile('foto_derecho');
		$message = "Imagen ha sido eliminado.";
	}
    
    if ($_GET['action']=='delbanner_pc') {
		$objLoad ->removeFile('banner_pc');
		$message = "Imagen ha sido eliminado.";
	}
    
    if ($_GET['action']=='delbanner_pc2') {
		$objLoad ->removeFile('banner_pc2');
		$message = "Imagen ha sido eliminado.";
	}
    
    if ($_GET['action']=='delbanner_pc3') {
		$objLoad ->removeFile('banner_pc3');
		$message = "Imagen ha sido eliminado.";
	}
    
    if ($_GET['action']=='delbanner_movil') {
		$objLoad ->removeFile('banner_movil');
		$message = "Imagen ha sido eliminado.";
	}
    
    if ($_GET['action']=='delbanner_movil2') {
		$objLoad ->removeFile('banner_movil2');
		$message = "Imagen ha sido eliminado.";
	}
    
    if ($_GET['action']=='delbanner_movil3') {
		$objLoad ->removeFile('banner_movil3');
		$message = "Imagen ha sido eliminado.";
	}
}
//exit;
if (isset($_POST['submit'])) {
	$objLoad ->setAuto($_POST);
	$objLoad ->category ->id = ID_SUBCAT_VENTA_PRODUCTOS;
    
    $objLoad ->uploadFile('foto_derecho', 'foto_derecho');
    
    $objLoad ->uploadFile('banner_pc', 'banner_pc');
    $objLoad ->uploadFile('banner_pc2', 'banner_pc2');
    $objLoad ->uploadFile('banner_pc3', 'banner_pc3');
    
    $objLoad ->uploadFile('banner_movil', 'banner_movil');
    $objLoad ->uploadFile('banner_movil2', 'banner_movil2');
    $objLoad ->uploadFile('banner_movil3', 'banner_movil3');
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
            <li><a href="#fragment-1" ><span>Izaje</span></a></li>
            <li><a href="#fragment-3"><span>Im&aacute;genes</span></a></li>
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
                      <th>Foto derecho: </th>
                <td>
<?php $objLoad ->pFile('foto_derecho', "{$_SERVER['PHP_SELF']}?id={$objLoad ->id}&action=delfoto_derecho", 'foto_derecho', 'img', false) ?></td>
				   </tr>
                  
                <tr>
                      <th>Banner 1 PC: </th>
                <td>
<?php $objLoad ->pFile('banner_pc', "{$_SERVER['PHP_SELF']}?id={$objLoad ->id}&action=delbanner_pc", 'banner_pc', 'img', false) ?></td>
				   </tr>
                  
                  <tr>
                      <th>Banner 2 PC: </th>
                <td>
<?php $objLoad ->pFile('banner_pc2', "{$_SERVER['PHP_SELF']}?id={$objLoad ->id}&action=delbanner_pc2", 'banner_pc2', 'img', false) ?></td>
				   </tr>
                  
                  
                  <tr>
                      <th>Banner 3 PC: </th>
                <td>
<?php $objLoad ->pFile('banner_pc3', "{$_SERVER['PHP_SELF']}?id={$objLoad ->id}&action=delbanner_pc3", 'banner_pc3', 'img', false) ?></td>
				   </tr>
                  
                  <tr>
                      <th>Banner Movil1: </th>
                <td>
<?php $objLoad ->pFile('banner_movil', "{$_SERVER['PHP_SELF']}?id={$objLoad ->id}&action=delbanner_movil", 'banner_movil', 'img', false) ?></td>
				   </tr>
                  <tr>
                      <th>Banner Movil2: </th>
                <td>
<?php $objLoad ->pFile('banner_movil2', "{$_SERVER['PHP_SELF']}?id={$objLoad ->id}&action=delbanner_movil2", 'banner_movil2', 'img', false) ?></td>
				   </tr>
                  <tr>
                      <th>Banner Movil3: </th>
                <td>
<?php $objLoad ->pFile('banner_movil3', "{$_SERVER['PHP_SELF']}?id={$objLoad ->id}&action=delbanner_movil3", 'banner_movil3', 'img', false) ?></td>
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
        </div>
      </div>
      <?php include("footer.php"); ?>