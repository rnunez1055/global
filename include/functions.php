<?php
function gMenuHeader() {
	$ret = "";
	$cats = new Category();
	$scats = new Category();
	if ($cats ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId=0")) {
			while ($cat = $cats ->rNext()) {					
				if(strtoupper($cat->title)=="NUESTRA EMPRESA" || strtoupper($cat->title)=="NUESTROS SERVICIOS"){
					$link_act="";
					if(strtoupper($cat->title)=="NUESTRA EMPRESA"){
						$titleCat="NUESTRA<br/>EMPRESA";				
					}else if(strtoupper($cat->title)=="NUESTROS SERVICIOS"){
						$titleCat="NUESTROS<br/>SERVICIOS";
					}
					$first = null;
					$sm = gSubMenu($cat, $first);
					$ret .= '<a href="page.php?id='.@$first ->gFirstItem() ->id .'&sid='. $first ->id .'" title="'.$cat ->title.'"><div class="item_menu1">'. $titleCat .'</div></a>';
				}
			}
	}			
	return $ret;
}

function gMenuFooter() {
	$ret = "";
	$cats = new Category();
	$scats = new Category();
	if ($cats ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId=0")) {
			while ($cat = $cats ->rNext()) {					
				if(strtoupper($cat->title)=="NUESTRA EMPRESA" || strtoupper($cat->title)=="NUESTROS SERVICIOS"){
					if(strtoupper($cat->title)=="NUESTRA EMPRESA"){
						$titleCat="NUESTRA<br/>EMPRESA";
					}else if(strtoupper($cat->title)=="NUESTROS SERVICIOS"){
						$titleCat="NUESTROS<br/>SERVICIOS";
					}					
					$first = null;
					$sm = gSubMenu($cat, $first);
					$ret .= '<a href="page.php?id='.@$first ->gFirstItem() ->id .'&sid='. $first ->id .'" title="'.$cat ->title.'"><div class="menu_link_f">'. $titleCat .'</div></a>';
				}
			}
	}			
	return $ret;
}

function gMenu() {
	$ret = "";
	$cats = new Category();
	$subcats0 = new Category();
	if ($cats ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId=0")) {
		$ret .= '<ul>'. PHP_EOL;
		$conta=0;
		while ($cat = $cats ->rNext()) {
			if(strtoupper($cat->title)!="NUESTRA EMPRESA" && strtoupper($cat->title)!="NUESTROS SERVICIOS" && strtoupper($cat->title)!="MARCAS QUE REPRESENTAMOS"){
				$first = null;
				$sm = gSubMenu($cat, $first);
				$subcats0 ->loadByKey($subcats0 ->getIdKey(), intval($_GET["sid"]));				
				if($_SESSION['vmnu']=='inicio' && $conta==0){
					$ret .= '<li class="active has-sub"><a href="#" class="submenu1">'.strtoupper($cat->title).'</a><div class="vineta1"></div>';	
				}else{
					$ret .= '<li class="'.($cat->id == $subcats0->parentId ? "active has-sub" : "has-sub").'"><a href="#" class="submenu1">'.strtoupper($cat->title).'</a><div class="vineta1"></div>';	
				}				
				$ret .= $sm. "</li>". PHP_EOL;
				$conta ++;
			}
		}
		$ret .= '</ul>';
	}
	return $ret;
}  

function gSubMenu($cat, &$first=null) {
	$ret = "";
	if ($cat ->id) {
		$scats = new Category();
		if ($scats ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId='{$cat ->id}'")) {
			$ret .= "<ul>". PHP_EOL;
			$len = $scats ->rCount();
			$first = $scats ->rNext();
			$scats ->rReset();
			while ($scat = $scats ->rNext()) {
				$len--;
				$ret .= '<li><a href="listado.php?sid='.$scat ->id.'">'. strtoupper($scat->title).'</a></li>';
			}
			$ret .= "</ul>". PHP_EOL;
		}
	}
	return $ret;
}

function gMenu2() {
	$ret = "";
	$cats = new Category();
	$subcats0 = new Category();
	if ($cats ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId=0")) {		
		$ret .= '<ul>'. PHP_EOL;		
		while ($cat = $cats ->rNext()) {			
			if(strtoupper($cat->title)=="NUESTRA EMPRESA" || strtoupper($cat->title)=="NUESTROS SERVICIOS"){
				$first = null;
				$sm = gSubMenu2($cat, $first);
				$subcats0 ->loadByKey($subcats0 ->getIdKey(), intval($_GET["sid"]));
				$ret .= '<li class="'.($cat->id == $subcats0->parentId ? "active has-sub" : "has-sub").'"><a href="#" class="submenu1">'.strtoupper($cat->title).'</a><div class="vineta1"></div>';
				$ret .= $sm. "</li>". PHP_EOL;
			}
		}
		$ret .= '</ul>';
	}
	return $ret;
}
function gSubMenu2($cat, &$first=null) {
	$ret = "";
	if ($cat ->id) {
		$scats = new Category();
		if ($scats ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId='{$cat ->id}'")) {
			$ret .= "<ul>". PHP_EOL;
			$len = $scats ->rCount();			
			$scats ->rReset();
			while ($scat = $scats ->rNext()) {
				$ret .= '<li><a href="page.php?id='.recovery_page($scat->id).'&sid='. $scat ->id .'">'. strtoupper($scat->title).'</a></li>';				
			}
			$ret .= "</ul>". PHP_EOL;
		}
	}
	return $ret;
}
function gSubMenu3($cat) {
	$ret = "";
	$scats = new Category();
	if ($scats ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId=".$cat."")) {
		$ret .= "<ul>". PHP_EOL;
		while ($scat = $scats ->rNext()) {			
			$ret .= '<li><a href="listado.php?sid='.$scat ->id.'">'. strtoupper($scat->title).'</a></li>';
		}
		$ret .= "</ul>". PHP_EOL;
	}
	return $ret;
}
function recovery_page($scat){
	$firstpage = "";
	$objProdPage = new Page();
	$objProdPage->loadItems ("#orderId ASC","category.categoryId=$scat AND #status='". LBN_ADMIN_STATUS_ON  ."'");
	if ($objProdPage->loadList()) {
		while ($kk = $objProdPage->rNext()){							
			$firstpage=$kk ->id;
			break;		
		}
	}
	return $firstpage;
}