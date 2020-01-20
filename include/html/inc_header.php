<?php initSEO($seo);   ?>
<!doctype html>
<html class="">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=<?php echo LBN_CHARSET; ?>" />
	<title><?= $seo ->metaTitle  ?></title>
	<meta name="description" content="<?php echo $seo ->metaDescription; ?>" />
	<meta name="Keywords" content="<?php echo $seo ->metaKeyword; ?>"  />
        
<meta name="viewport" content="width=device-width, initial-scale=1">

<!-- IMG FLOTANTE - BLANCO Y NEGRO-->
<script type="text/javascript" src="contenido/flotante_img/highslide-with-gallery.js"></script>
<link rel="stylesheet" type="text/css" href="contenido/flotante_img/highslide.css" />
<script type="text/javascript">
hs.graphicsDir = 'contenido/flotante_img/graphics/';
hs.align = 'center';
hs.transitions = ['expand', 'crossfade'];
hs.outlineType = 'rounded-white';
hs.fadeInOut = true;
//hs.dimmingOpacity = 0.75;

// Add the controlbar
hs.addSlideshow({
	//slideshowGroup: 'group1',
	interval: 5000,
	repeat: false,
	useControls: false,
	fixedControls: 'fit',
	overlayOptions: {
		opacity: 0.75,
		position: 'bottom center',
		hideOnMouseOut: true
	}
});
</script>
<!-- IMG FLOTANTE - BLANCO Y NEGRO-->
<!--slider-->
<link href="contenido/slider_responsive/css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="contenido/slider_responsive/js/jquery.flexisel.js"></script>
<!--slider-->

<!--MENU MOBIL-->
<script>
var originalNavClasses;

function toggleNav() {
    var elem = document.getElementById('navigation_list');
    var classes = elem.className;
    if (originalNavClasses === undefined) {
        originalNavClasses = classes;
    }
    elem.className = /expanded/.test(classes) ? originalNavClasses : originalNavClasses + ' expanded';
}
</script>
<!--MENU MOBIL-->
<?php
	if (!preg_match("/index/i", basename($_SERVER["PHP_SELF"]))):
?>
<!--MENU-->
<script type="text/javascript" src="contenido/menu/ddaccordion.js">
</script>
<!-- >script type="text/javascript" src="contenido/js/jquery.min2.js"/></script-->
<script type="text/javascript" src="contenido/menu/js.js">

</script>
<link href="contenido/menu/css.css" rel="stylesheet" type="text/css" />
<link href="contenido/css/body2.css" rel=
<!--MENU-->
<?php endif; ?>

<!-------------RESPONSIVE----------->
<link href="contenido/css/boilerplate.css" rel="stylesheet" type="text/css">
<meta id="view" name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="IE=9" />
<link rel="stylesheet" type="text/css" href="contenido/css/escritorio.css" />
<link rel="stylesheet" type="text/css" media="only screen and (min-width:50px) and (max-width:480px)"  href="contenido/css/movil.css">
<link rel="stylesheet" type="text/css" media="only screen and (min-width:481px) and (max-width:800px)"  href="contenido/css/tableta.css">
<!--SLIDER-->
<link rel="stylesheet" href="contenido/nivo_slider/themes/default/default.css" type="text/css" media="screen" />
<link rel="stylesheet" href="contenido/nivo_slider/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="contenido/nivo_slider/demo/style.css" type="text/css" media="screen" />
<link href="contenido/SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<!--[if lt IE 9]>
<script src="contenido/js/html5.js"></script>
<![endif]-->
<script src="contenido/js_responsive/respond.min.js"></script>
<script src="contenido/SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>

<!-------------RESPONSIVE----------->
</head>
<body>
<!--HEADER-->
  <div id="header_principal"> 
  <div class="gridContainer clearfix"> 
    <!--MENU-->
    <div class="menu">
<?php
$top = new Category ();
$top ->loadItems ( "#orderId ASC LIMIT 4", "#parentId='0' AND #status like '" . $chkstatus . "%' and ifnull(#". LBN_ADMIN_CAT_EXCLUDE_1.",0)=0" );
if ($top ->rMore()) 
	while ($item = $top ->rNext())
		print '<a href="interior.php?id='. (method_exists($item, 'gFirstSubItem') ? $item ->gFirstSubItem() ->id : $item ->id ) .'"><div class="link" style="'. ($_GET["id"] ==
				(method_exists($item, 'gFirstSubItem') ? $item ->gFirstSubItem() ->id : $item ->id ) ? 'color:#f00;'  : '') . '"  >'. mb_strtoupper($item ->title)  .'</div></a>';
?>    	 
    	 
       
    </div>
    <!--MENU--> 
    <!--BUSCAR-->
    <div class="buscar">
      <div id="buscador">
        <div id='search2'>
          <form id="searchform" action="buscar.php" style="display:inline;" method="get">
            <span id="sprytextfield1">
            <input id="s" name="q" type="text" value="<?= $_GET["q"]?>"/>
</span>
            <input id="searchsubmit2" value="" type="submit"/>
          </form>
        </div>
      </div>
    </div>
    
    <!--BUSCAR-->
       <!--menu mobil-->
       <div class="menu_contenido_mobile">
        
<nav id="navigation">

    <a class="menu_button" href="#footer_nav" onclick="toggleNav(); return false;">&#9776;  MENU</a><div class="clear_menu"></div>
    <ul id="navigation_list" role="navigation">

    <?php
     
if ($top ->rReset()) 
	while ($item = $top ->rNext())
		print '<li><a href="interior.php?id='. (method_exists($item, 'gFirstSubItem') ? $item ->gFirstSubItem() ->id : $item ->id ) .'">'. mb_strtoupper($item ->title)  .'</a></li>';
?>  
      
    </ul>
</nav>
       </div>
            <!--menu mobil-->
    <div id="arriba_cabecera">
      <div id="header_principal_logo<?= !preg_match("/index/i", basename($_SERVER["PHP_SELF"])) ? "_int" : ""   ?>"><a href="./"><img src="contenido/img/logo.png" width="238" height="137"></a></div>
    </div>
  </div></div>
  <!--HEADER--> 

  
<div class="clear_mobil"></div>


<?php if (!preg_match("/index/i", basename($_SERVER["PHP_SELF"]))) { ?>
<!--CENTRAL-->
<div class="centro_fondo_int">
  <div class="centro_fondo_c_int2">
<?php
	
	$photo = '<img src="contenido/img/header2.png">';
	if (method_exists($objPage, "photo") )
		if ($objPage ->photo() !== false)
			$photo = $objPage ->photo();
	print $photo;
?>  	
  </div>
</div>
<!--CENTRAL--> 
<?php } else { ?>
<!--CENTRAL-->
<div class="centro_fondo">
  <div class="centro_fondo_c">
    <div class="cent_f_izquier">
    <div class="clear2"></div>
<?php
$top = new Page();
$top ->loadItems ( "#orderId ASC LIMIT 4", "#status like '" . $chkstatus . "%' AND ifnull(category.". LBN_ADMIN_CAT_EXCLUDE_1.", 0)=0 AND ifnull(#". LBN_ADMIN_PAGE_EXCLUDE_1.",0)=0  " );
if ($top ->rMore()) 
	while ($item = $top ->rNext())
		print '<a href="interior.php?pid='.  $item ->id  .'"><div class="link_central">'. mb_strtoupper($item ->title)  .'</div></a>';
?> 
    
   </div>
    
    
    
    <div class="cent_f_derech">
    
    <div id="wrapper" style="position: relative;">
  <div class="slider-wrapper theme-default">
    <div id="slider" class="nivoSlider">
<?php
	$objFile = new File();
	if ( $objFile ->loadItems("#orderId ASC", "#status = '". LBN_ADMIN_STATUS_ON ."' AND LENGTH(#video)=0   AND #pageId=0")) {
		while ($objItem = $objFile->rNext()) { 
?>    
		<img src="thumb.php?src=<?= TZN_FILE_UPLOAD_PATH.$objItem ->target   ?>&w=617&h=350&zc=1&q=60" title="#caption<?= $objItem ->id ?>"   />
<?php
		}
	} 
?>		
	</div>

<?php
	$objFile ->rReset();
	while ($item = $objFile->rNext()) { 
?>	
	<div style="display: none;"  >
		<div id="caption<?= $item ->id  ?>" class="nivo-html-caption">
			<h4 style="font-size:18px;font-weight:bold;"><?= $item ->title  ?></h4>
			<a href="<?= $item ->var1  ?>"  >Learn More</a>
		</div>
	</div>
<?php } ?>
  </div>
</div>

    </div>
<style>
.nivo-caption {
	width: 100%;
	color: #fff;
	position: absolute;
	left: 5%;
	top: 60%;
	}
.nivo-caption h4 {
text-shadow: 2px 2px 4px #000;
font-size: 38px !important;
color: #fff;
margin: 0 0 12px 0;
 font-style: italic;	
}
  
  .nivo-caption a { display:inline-block !important; background:#FE0B11; font-size:18px; font-style:italic; color:#fff; text-shadow: 2px 2px 2px #000; padding:6px;border:0 !important;     

	}
  
  
    </style>
    
    
    
  </div>
</div>
<!--CENTRAL--> 
<?php } ?>
