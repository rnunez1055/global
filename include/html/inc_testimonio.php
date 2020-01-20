
<div class="derecho_interior2">

<?php

$objLst  = new Testimonio();
if ($objLst ->loadItems("#orderId ASC", "#status ='". LBN_ADMIN_STATUS_ON ."' AND #". LBN_ADMIN_PAGE_EXCLUDE_1."=1")) : 
?>
  
 <div class="cuerpo_3_int"> 
      <!--slider text -->
          <ul id="flexiselDemo3">
             
  
<?php while( $item = $objLst ->rNext()):  ?>
 			<!--1--> 
            <li>
               <a href="interior.php?pid=<?= $item ->id  ?>"><div class="text_coment2"><?= truncate_string(strip_tags($item ->description), 130) ?></div></a>
				<div class="clear"></div>
            </li>
            <!--1--> 
<?php endwhile; ?>  	

          </ul>
          <!--slider text -->   
  </div>

<?php endif; ?>
<center></center>
  <div class="redes">
  <a href="#"><div class="redes_img2"><img src="contenido/img/facebook.png" width="65" height="19"></div></a>
    <a href="#"><div class="redes_img2"><img src="contenido/img/twitter.png" width="70" height="19"></div></a>
      <a href="#"><div class="redes_img2"><img src="contenido/img/youtube.png" width="50" height="19"></div></a>
  </div> </div>