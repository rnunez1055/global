<div class="clear"></div>
<!---------------------FOOTER--------------------->
<div class="footer">
    <?php
	if (sizeof($cat)>0) {
		print '<div class="footer1">';
		foreach ($cat as $k => $v) {
//			if ($k >= 148 && $k <= 150) continue;
			print '<div class="footer_link_c">
      				<div class="footer_link_tex">'. $v["title"] .'</div>';
			if (sizeof($scat)>0) 
				if ($scat[$k])
					foreach ($scat[$k] as $k2 => $v2) 
						print '<a href="'. $v2["url"].'?id='. $k2 .'"> <div class="links">'. truncate_string($v2["title"], 200)  .'</div></a>';
			print '</div>';
		}	
		print '</div><div class="clear"></div>';
	} 
	?>
  
  <div class="footer2">
    <div class="logo_footer"><img src="contenido/img/logo_footer.png"></div>
    <div class="logo_footer_text">COPYRIGHT &copy; 2013 - VIVEPERU.ORG TODOS LOS DERECHOS RESERVADOS</div>
    <div class="clear_mobil"></div>
    <div class="text_datos_footer4">
       <div class="desarrollado_por"><div class="logo_desarrollado"><a href="http://evolucionmedia.pe/" target="_blank" title="Evolucionmedia Estudio Web | Paginas web Trujillo | diseño de paginas web en trujillo | diseñador profesional en trujillo | Ricardo Nuñez Alvarado | www.evolucionmedia.pe | http://www.evolucionmedia.pe | evolucionmedia.pe | Evolucionmedia Perú | Diseño Trujillo | Trujillo Web | Diseñador y Desarrollador web | Pequeñas ideas Magníficos proyectos | web design in trujillo | web design | professional designer trujillo | design Trujillo | Web Designer and Developer | professional development of web pages"> <img src="contenido/img/emedia.png" width="37" height="30" alt="Evolucionmedia Estudio Web | Paginas web Trujillo | diseño de paginas web en trujillo | diseñador profesional en trujillo | Ricardo Nuñez Alvarado | www.evolucionmedia.pe | http://www.evolucionmedia.pe | evolucionmedia.pe | Evolucionmedia Perú | Diseño Trujillo | Trujillo Web | Diseñador y Desarrollador web | Pequeñas ideas Magníficos proyectos | web design in trujillo | web design | professional designer trujillo | design Trujillo | Web Designer and Developer | professional development of web pages" title="Evolucionmedia Estudio Web | Paginas web Trujillo | diseño de paginas web en trujillo | diseñador profesional en trujillo | Ricardo Nuñez Alvarado | www.evolucionmedia.pe | http://www.evolucionmedia.pe | evolucionmedia.pe | Evolucionmedia Perú | Diseño Trujillo | Trujillo Web | Diseñador y Desarrollador web | Pequeñas ideas Magníficos proyectos | web design in trujillo | web design | professional designer trujillo | design Trujillo | Web Designer and Developer | professional development of web pages"></a></div>DEVELOPED</div>
       
       </div>
  </div>
</div></div>
<!---------------------FOOTER--------------------->
<!-- script type="text/javascript" src="js/jquery.min.js"></script-->
<script type="text/javascript" src="contenido/nivo_slider/jquery.nivo.slider.js"></script> 
<script type="text/javascript">

<?php if (preg_match("/index/i", basename($_SERVER["PHP_SELF"]))): ?>	
jQuery(window).on('load', function() {
	 $('#slider').nivoSlider({
			effect:'fade',
			/*captionOpacity:0.8,
			animSpeed:1000,
			pauseTime:5000,
			slices:6,*/
			/*directionNav:true,
			prevText: '<',
			nextText: '>',
			controlNav:true,
			controlNavThumbs:true,
			controlNavThumbsSearch: '.jpg',
			controlNavThumbsReplace: '_thumb.jpg'*/
		});
});

<?php endif; ?>

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1", "none", {hint:"BUSCAR AQUI", isRequired:false});
</script>

  
  <script type="text/javascript">

$(window).load(function() {
/*	$("#flexiselDemo1").flexisel();
	$("#flexiselDemo2").flexisel({
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 1
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 1
    		}
    	}
    });*/

	$("#flexiselDemo3").flexisel({
		enableResponsiveBreakpoints: true,
    	responsiveBreakpoints: { 
    		portrait: { 
    			changePoint:480,
    			visibleItems: 1
    		}, 
    		landscape: { 
    			changePoint:640,
    			visibleItems: 1
    		},
    		tablet: { 
    			changePoint:768,
    			visibleItems: 1
    		} 
    		
    		
    	}
    });
    
});
</script> 
  
  
     
</body>

</html>
