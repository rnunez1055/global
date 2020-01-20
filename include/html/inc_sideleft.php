 <?php
	if (sizeof($cat)>0) { ?>
<div class="izquierdo_interior">
  <!--      MENU-->
      <div class="arrowlistmenu">	<a href="#"> </a>
<?php 
		$i=1;
		foreach ($cat as $k => $v) :
?>
			<!--1-->
        <h3 class="menuheader expandable fondomenu<?= $i < count($cat) ? "3" : "1" ?>" ><?= mb_strtoupper($v["title"]) ?></h3>
		  <ul class="categoryitems<?= $i < count($cat) ? " fondoverde" : "" ?>">
	          <div id="segundo_nivel_menu_" class="<?= $i < count($cat) ?  "" : "fondomarron" ?>" >
	          <li>				
  		
<?php 			
			if (sizeof($scat)>0) : 
				if ($scat[$k]) : 				
				?>

<?php
				
					foreach ($scat[$k] as $k2 => $v2) :
					
						   
?>
		         <?php //if ($objPage ->id == $k2) 
		         	print '<a class="arrowlistmenu_activado3" href="'. $v2["url"].'?id='.$k2.'"  >' . ucwords((truncate_string($v2["title"], 25))). '</a>';
		         ?>
<?php 
					
					endforeach; ?>
 
<?php 					
				endif;
			endif;
?> 	  

				</li>
	          </div>
	      </ul>
	     <!--1-->  
<?php 
			$i++;
		endforeach;  ?>

      
<?php
	$news  = new NewsCategory();
	if ($news ->loadItems("#parentId, #orderId ASC", "#status like '". $chkstatus ."%' and #". LBN_ADMIN_CAT_EXCLUDE_1. "='1' AND #parentId='0'")) :
?>      
      
        <!--1-->
        <h3 class="menuheader expandable fondomenu2" >RESOURCES</h3>
        <ul class="categoryitems">
          <div id="segundo_nivel_menu_" class="fondomenu2">
            <li>
<?php while ($item = $news ->rNext() ) : ?>            
              <a class="arrowlistmenu_activado" href="interior.php?id=<?= $item ->id ?>"><?= ucwords((truncate_string($item ->title, 25)))   ?></a>
<?php endwhile; ?>
            </li>
          </div>
        </ul>
       	<!--1-->
<?php endif; ?>       	
      
	</div>
<!--      MENU-->     
      
</div>
<?php 
	} 
?>