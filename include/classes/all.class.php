<?php
class Category extends Generic {
	private static $myInstance = NULL;
	public static function getInstance() {
		if (!self::$myInstance) {
			self::$myInstance = new Category() ;
		}

		return self::$myInstance;
	}


	function __construct() {
		parent::Generic('category');
		$this->addProperties(array(
				'seo'  		   => 'STR',
				'parentId'     => 'NUM',
				'allowPages'   => 'NUM',
				'title_en'   => 'STR',
				'photo'   => 'STR',
				'isNews'   => 'NUM'
		));
	}
    
    function getCategory($coddep) {
		if ($coddep) {
			$this ->addWhere("categoryId='$coddep'");
			$this ->loadList();
			return $this;
		}
	}

	function delete() {
		if (parent::delete()) {
			$tmp = new Page();
			if ($tmp ->loadItems(null, "#categoryId = {$this->id}"))
				while ($it = $tmp ->rNext())
				$it ->delete();
		}
	}

	function add() {
		$this->setNum('allowPages', 1);
		return parent::add();
	}
	
	
	function gSubCats($status=LBN_ADMIN_STATUS_ALL) {
		if ($this->id) {
			$tmp = new Category();
			$tmp->addOrder ( $tmp ->gTable().'.orderId ASC' );
			$tmp->addWhere ( $tmp ->gTable().".parentId='{$this ->id}' AND ifnull(". $tmp ->gTable().".". LBN_ADMIN_CAT_EXCLUDE_1.", 0)=0" );
			if ($status != LBN_ADMIN_STATUS_ALL) $tmp->addWhere ( $tmp ->gTable().".status='". $status  ."'" );
			$tmp->loadList ();
			return $tmp->rMore () ? $tmp : false;
		}
	}
	
	function gSubCatsCount() {
		$ret = 0;
		if ($tmp = $this->gSubCats ())
			$ret = $tmp->rCount ();
		return $ret;
	}
	
	
	
	function gItems($status=LBN_ADMIN_STATUS_ALL) {
		if ($this->id) {
			$tmp = new Page();
			$tmp->addOrder ( $tmp ->gTable().'.orderId ASC' );
			$tmp->addWhere ( $tmp ->gTable().".categoryId='{$this ->id}' AND ifnull(category.". LBN_ADMIN_CAT_EXCLUDE_1.", 0)=0 AND ifnull(".$tmp ->gTable().".". LBN_ADMIN_PAGE_EXCLUDE_1.",0)=0  " );
			if ($status != LBN_ADMIN_STATUS_ALL) $tmp->addWhere ( $tmp ->gTable().".status='". $status  ."'" );
			$tmp->loadList ();
			return $tmp->rMore () ? $tmp : false;
		}
	}
	
	function gItemsCount() {
		$ret = 0;
		if ($tmp = $this->gItems ())
			$ret = $tmp->rCount ();
		return $ret;
	}
	
	function gTree(&$cat,&$scat) {
		$ret = array();
		$tmp = new Category();
		if ($tmp ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' and ifnull(#". LBN_ADMIN_CAT_EXCLUDE_1.",0)=0 AND #parentId='0'")) {
			while ($item = $tmp ->rNext()) {
				$cat[$item ->id] = array('title' => $item ->title, 'item' => $s_item) ;
				
				$s_items = new Category();
				
				if ($s_items ->loadItems("#orderId ASC", "#status='". LBN_ADMIN_STATUS_ON  ."' AND #parentId='{$item->id}'")) 
				{
					while ($s_item = $s_items ->rNext()) {
						$scat[$item ->id][$s_item ->id] = array('title' => $s_item ->title, 'url' => 'interior.php') ;
					}
				}
			}
		}
		return $ret;
	}
	
	function gFirstItem(/*$id*/) {
		/*$ret = new Page();
		$cat = new Category(); 
		$cat ->loadByKey($cat ->getIdKey(), $id);
		if ($cat ->isLoaded()) {
			if ($items = $cat ->gItems(LBN_ADMIN_STATUS_ON)) {
				$ret = $items ->rNext();
			}
		}
		return $ret;*/
		$ret = new Page();
		if ($this ->isLoaded()) {
			if ($items = $this ->gItems(LBN_ADMIN_STATUS_ON)) {
				$ret = $items ->rNext();
			}
		}
		return $ret;
		
	}  
	
	function gFirstSubItem() {
		if ($this ->id && $this ->parentId==0) {
			$tmp = new Category();
			if ($tmp ->loadItems("#orderId ASC", "#parentId='{$this ->id}' AND #status='". LBN_ADMIN_STATUS_ON ."'")) {
				return $tmp ->rNext();
			}
		}
		return false;
	}
    
    function banner_pc() {
		if ($this ->id) {
			$obj = new Category();
			if ($this ->parentId>0) 
				$obj ->loadByKey($obj ->getIdKey(), $this ->parentId);
			else
				$obj = $this;
			if ($obj ->isLoaded())
				if ($obj ->banner_pc)
					return $obj ->getImage("banner_pc", 1280, 350);
		}
		return false;
	}
    
    
     function banner_movil() {
		if ($this ->id) {
			$obj = new Category();
			if ($this ->parentId>0) 
				$obj ->loadByKey($obj ->getIdKey(), $this ->parentId);
			else
				$obj = $this;
			if ($obj ->isLoaded())
				if ($obj ->banner_movil)
					return $obj ->getImage("banner_movil", 770, 286);
		}
		return false;
	}
	
	function photo() {
		if ($this ->id) {
			$obj = new Category();
			if ($this ->parentId>0) 
				$obj ->loadByKey($obj ->getIdKey(), $this ->parentId);
			else
				$obj = $this;
			if ($obj ->isLoaded())
				if ($obj ->photo)
					return $obj ->getImage("photo", 960, 120);
		}
		return false;
	}
	
}

class NewsCategory extends Category {
	private static $myInstance = NULL;
	public static function getInstance() {
		if (!self::$myInstance) {
			self::$myInstance = new Page() ;
		}

		return self::$myInstance;
	}
	function __construct() {
		return parent::__construct();
	}
	
	
	function gTree(&$cat,&$scat) {
		$ret = array();
		$tmp = new NewsCategory();
		if ($tmp ->loadItems("#orderId ASC", "#parentId>0 AND #status='". LBN_ADMIN_STATUS_ON  ."' and ifnull(#". LBN_ADMIN_CAT_EXCLUDE_1.",0)=1 ")) {
			while ($item = $tmp ->rNext()) {
				$cat[$item ->id] = $item ->title;
				if ($s_items = $item ->gItems(LBN_ADMIN_STATUS_ON)) {
					while ($s_item = $s_items ->rNext()) {
						$scat[$item ->id][$s_item ->id] = array('title' => $s_item ->title, 'url' => 'noticia.php') ;
					}
				}
			}
		}
		return $ret;
	}
	
	
	function gItems($status=LBN_ADMIN_STATUS_ALL) {
		
		if ($this->id) {
			$tmp = new Page();
			$tmp->addOrder ( $tmp ->gTable().'.orderId ASC' );
			$tmp->addWhere ( $tmp ->gTable().".categoryId='{$this ->id}'  " );
			if ($status != LBN_ADMIN_STATUS_ALL) $tmp->addWhere ( $tmp ->gTable().".status='". $status  ."'" );
			$tmp->loadList ();
			return $tmp->rMore () ? $tmp : false;
		}
	}
	
}

class DetailPage extends Generic{
    private static $myInstance = NULL;
	public static function getInstance() {
		if (!self::$myInstance) {
			self::$myInstance = new DetailPage() ;
		}

		return self::$myInstance;
	}


	function __construct() {
		parent::Generic('pagedetail');
		$this->addProperties(array(
				'categoryId'=> 'NUM',
				'pageId'    => 'NUM',
				'subpageId' => 'NUM'
		));
	}
}

class Page extends Generic {
	private static $myInstance = NULL;
	public static function getInstance() {
		if (!self::$myInstance) {
			self::$myInstance = new Page() ;
		}

		return self::$myInstance;
	}


	function __construct() {
		parent::Generic('page');
		$this->addProperties(array(
				'seo'  		   				   => 'STR',
				'parentId'     				   => 'NUM',
				'category'     				   => 'OBJ',
				'featured'	   				   => 'NUM',
								
				'title_en'   	   				=> 'STR',
				'description_en'   	   			=> 'TXT',
                'description_ventasproductos'	=> 'TXT',
                'description_ultimo'	        => 'TXT',
                'fuente'   	   			        => 'STR',
                'url_fuente'   	   			    => 'STR',
                'empresa_anuncia'   	   		=> 'STR',
                'logo_empresa_anuncia'   	   	=> 'STR',
                
                'banner_pc'	   => 'STR',
                'banner_pc2'	   => 'STR',
                'banner_pc3'	   => 'STR',
            
                'banner_movil'	   => 'STR',
                'banner_movil2'	   => 'STR',
                'banner_movil3'	   => 'STR',
                'foto_derecho'	   => 'STR'
            
		));
	}

        function add() {
            //echo "inser"; exit;
            $rpta = parent::add();
            
            foreach ($this->marcas as $m)
            {
                $objDetalle= new DetailPage();
                $objDetalle->pageId=$this->id;
                $objDetalle->categoryId=ALL_BRANDS;
                $objDetalle->subpageId=$m;
                $objDetalle->getConnection();
                $objDetalle->add();
            }
            
            foreach ($this->materiales as $m)
            {
                $objDetalle= new DetailPage();
                $objDetalle->pageId=$this->id;
                $objDetalle->categoryId=12;
                $objDetalle->subpageId=$m;
                $objDetalle->getConnection();
                $objDetalle->add();
            }
            
            return $rpta;
	}
        
        function update(){
            $rpta = parent::update();
            $this->query('DELETE FROM ' .$this->gTable('pagedetail'). ' WHERE pageId='.$this->id);
            
            if(count($this->marcas) > 0){
                foreach ($this->marcas as $m)
                {
                    $objDetalle= new DetailPage();
                    $objDetalle->pageId=$this->id;
                    $objDetalle->categoryId=ALL_BRANDS;
                    $objDetalle->subpageId=$m;
                    $objDetalle->getConnection();
                    $objDetalle->add();
                }
            }
            //echo "nro de elementos".count($this->marcas)."<br/>";
            
            if(count($this->materiales) > 0){
                foreach ($this->materiales as $m)
                {
                    $objDetalle= new DetailPage();
                    $objDetalle->pageId=$this->id;
                    $objDetalle->categoryId=12;
                    $objDetalle->subpageId=$m;
                    $objDetalle->getConnection();
                    $objDetalle->add();
                }
            }
            
            //echo "nro de elementos".count($this->materiales)."<br/>";
            
            //echo "actualizare2<br/>";
            //exit;
            return $rpta;
        }
        
        function load() {
            $rpta = parent::load();
            $marcas = new DetailPage();
            $marcas->loadItems ( "", "#pageId='" . $this->id . "' AND #categoryId=".ALL_BRANDS."" );
            $this->marcas = array();
            while ($mr = $marcas->rNext()) { 
                array_push($this->marcas, $mr->subpageId);
            }            
            $materiales = new DetailPage();
            $materiales->loadItems ( "", "#pageId='" . $this->id . "' AND #categoryId=12" ); 
            $this->materiales = array();
            while ($mt = $materiales->rNext()) { 
                array_push($this->materiales, $mt->subpageId);
            }
            return $rpta;
        }
        
	function delete() {
		if ($this->id) {
			if (parent::delete()) {
				$this->query('DELETE FROM ' .$this->gTable('file').			 ' WHERE pageId='.$this->id);
				$this->query('DELETE FROM ' .$this->gTable('page').  		 ' WHERE parentId='.$this->id);
				return true;
			}
		} return false;
	}
	
	/*function gImages() {
		if ($this ->id) {
			$tmp = new File();
			$tmp ->addOrder($tmp ->gTable() . '.orderId ASC');
			$tmp ->addOrder($tmp ->gTable() . ".orderId ASC LIMIT $limit");
			
			$tmp ->addWhere($tmp ->gTable() . ".pageId='{$this ->id}' and ". $tmp ->gTable() .".isProfile=0");
			$tmp ->loadList();
			return $tmp ->rMore() ? $tmp : false;
		}
	}*/



	function gImages($status = null, $limit = 0, $video = false) {
		if ($this ->id) {
			$tmp = new File();
			if ($limit) {
				$tmp ->addOrder($tmp ->gTable() . ".orderId ASC LIMIT {$limit}");
			} else {
				$tmp ->addOrder($tmp ->gTable() . '.orderId ASC');
			}
			
			//$tmp ->addWhere($tmp ->gTable() . ".pageId='{$this ->id}' and ". $tmp ->gTable() .".isProfile=0");
			$tmp ->addWhere($tmp ->gTable() . ".pageId='{$this ->id}' and isProfile=0 and length(jh_file.video)". ($video?">1" : "=0"));
			if ($status) $tmp ->addWhere($tmp ->gTable() . ".status='$status'");
			$tmp ->loadList();
			return $tmp ->rMore() ? $tmp : false;
		}
	}

	function gImagesCount() {
		$ret = 0;
		if ($tmp = $this ->gImages())
			$ret = $tmp ->rCount();
		return $ret;
	}

	function gImage($w=50,$h=50, $extra='') {
		if ($this ->id) {
			$tmp = new File();
			if ($tmp ->loadByFilter($tmp ->gTable() .".pageId='{$this ->id}' and ".$tmp ->gTable() .".isProfile=1 and ". $tmp ->gTable() .".status='". LBN_ADMIN_STATUS_ON. "'"))
				return $tmp ->getImage('target', $w, $h, TZN_FILE_UPLOAD_PATH, 100, $extra);
		}
		return false;
	}
	
	function gObjImage() {
		if ($this ->id) {
			$tmp = new File();
			if ($tmp ->loadByFilter($tmp ->gTable() .".pageId='{$this ->id}' and ".$tmp ->gTable() .".isProfile=1 and ". $tmp ->gTable() .".status='". LBN_ADMIN_STATUS_ON. "'"))
				return $tmp;
		}
		return false;
	}
	
	/*function gObjImage() {
		if ($this ->id) {
			$tmp = new File();
			if ($tmp ->loadByFilter($tmp ->gTable() .".pageId='{$this ->id}' and ".$tmp ->gTable() .".isProfile=1 and ". $tmp ->gTable() .".status='". LBN_ADMIN_STATUS_ON. "' and length(file.video)=0"))
				return $tmp;
			else {
				if ($i = $this ->gImages(LBN_ADMIN_STATUS_ON, 1)) {
					return  $i ->rNext();
 				}
			}
		}
		return false;
	}*/
	
	
	function qSelectCustom($default = true) {
		$ret = '<select name="categoryId" class="required" >' . PHP_EOL;
		$ret .= $default ? '<option value="">-- seleccione una categor&iacute;a --</option>' . PHP_EOL : '';
		$tmp = new Category();
		if ($tmp->loadItems ( "#orderId ASC", "#parentId='0' AND #status = '" . LBN_ADMIN_STATUS_ON . "' and ifnull(#". LBN_ADMIN_CAT_EXCLUDE_1.",0)=0" )) {
			while ( $cat = $tmp->rNext () ) {
				$ret .= "<optgroup label='{$cat ->title}'>" . PHP_EOL;
				if ($items = $cat ->gSubCats()) {
					while ( $item = $items->rNext () ) {
						$ret .= "<option value='{$item ->id}' " . ($this->category ->id == $item->id ? "selected" : "") . ">{$item ->title}</option>" . PHP_EOL;
					}
				}
				$ret .= "</optgroup>" . PHP_EOL;
			}
		}
		$ret .= "</select>";
		return $ret;
	}
	
        function qSelectBrand() {
            $ret = '<select name="brands[]" style="width:548px; height:220px;" multiple >' . PHP_EOL;
            $tmp = new Page();
            if ($tmp ->loadItems("#title ASC", "#categoryId = '" . ALL_BRANDS . "' AND #status = '" . LBN_ADMIN_STATUS_ON . "'"))
            {   
                while ( $page = $tmp->rNext () ) {
                    $selected = "";
                    if(count($this->marcas) > 0){
                        foreach ($this->marcas as $m) {
                            if($m == $page->id){
                                $selected = "selected";
                                break;
                            }                        
                        }
                    }   
                    $ret .= "<option value='{$page ->id}' $selected >{$page ->title}</option>" . PHP_EOL;
                }
            }
            $ret .= "</select>";
            return $ret;
	}
        
        function qSelectMaterial() {
            $ret = '<select name="materials[]" style="width:548px; height:140px;" multiple >' . PHP_EOL;
            $tmp = new Page();
            if ($tmp ->loadItems("#title ASC", "#categoryId = '12' AND #status = '" . LBN_ADMIN_STATUS_ON . "'"))
            {   
                while ( $page = $tmp->rNext () ) {
                    $selected = "";
                    if(count($this->materiales) > 0){
                        foreach ($this->materiales as $m) {
                            if($m == $page->id){
                                $selected = "selected";
                                break;
                            }                        
                        }
                    }
                    $ret .= "<option value='{$page ->id}' $selected >{$page ->title}</option>" . PHP_EOL;
                }
            }
            $ret .= "</select>";
            return $ret;
	}
        
	function pCustomCategory() {
		if ($this ->id) {
			$c = new Category();
			$c ->setUid($this ->category ->parentId);
			$c ->load();
			$s = '<p class="sub-nav">&raquo; Categor&iacute;a: <strong>'. truncate_string($c ->title,ALL_BRANDS)  .'</strong></p>';
			$s .= '<p class="sub-nav">&raquo; Sub Cat: <strong>'. truncate_string($this ->category ->title, 14)  .'</strong></p>';
			return $s;
		}
	}
	
	function photo() {
		if ($this ->id) {
			$obj = new Category();
			if (!$this ->category ->{LBN_ADMIN_CAT_EXCLUDE_1} && !$this ->{LBN_ADMIN_PAGE_EXCLUDE_1N}) 
				return $this ->category ->photo();
		}
		return false;
	}
}

class Testimonio extends Page {
	private static $myInstance = NULL;
	public static function getInstance() {
		if (!self::$myInstance) {
			self::$myInstance = new Testimonio() ;
		}

		return self::$myInstance;
	}


	function __construct() {
		
		$this->addProperties(array(
				'isTestimonio'   => 'NUM'
		));
		return parent::__construct();
	}
}

class Noticia extends Page {
	private static $myInstance = NULL;
	public static function getInstance() {
		if (!self::$myInstance) {
			self::$myInstance = new Noticia() ;
		}

		return self::$myInstance;
	}


	function __construct() {

		$this->addProperties(array(
				'isNoticia'   => 'NUM'
		));
		return parent::__construct();
	}
}

class File extends Generic {
	private static $myInstance = NULL;
	public static function getInstance() {
		if (!self::$myInstance) {
			self::$myInstance = new File() ;
		}

		return self::$myInstance;
	}

	function __construct() {
		parent::Generic('file');
		$this->addProperties(array(
				'title_en'	  => 'STR',
				'type'	  => 'STR',
				'target'  => 'STR',
				'size'    => 'STR',
                'video'    => 'STR',
				'page'    => 'OBJ',
				'isProfile'  => 'NUM',
				'var1'  => 'STR',
				'var2'  => 'STR'
		));
	}

	 
	function delete() {
		if (parent::delete()) {
			$this ->removeFile('target', false);
		}
	}
    
    function soloBannerPortada() {
		$this ->addWhere($this ->gTable(). ".". LBN_VAR2 ."='". LBN_VAR2_BANNER. "'");
		return $this;
	}
	
	function soloBannerPromo() {
		$this ->addWhere($this ->gTable(). ".". LBN_VAR2 ."='". LBN_VAR2_PROMO. "'");
		return $this;
	}
}


class Test extends TznDb {
	function __construct() {
		parent::TznDb('test');
		$this ->addProperties(array(
			'id' 	 => 'NUM',
			'nombre' => 'STR',
			'edad'   => 'NUM'
		));
	}
}



?>
