jQuery(document).ready(function(){

    var scripts = document.getElementsByTagName("script");

    var jsFolder = "";

    for (var i= 0; i< scripts.length; i++)

    {

        if( scripts[i].src && scripts[i].src.match(/initcarousel-2\.js/i))

            jsFolder = scripts[i].src.substr(0, scripts[i].src.lastIndexOf("/") + 1);

    }

    if ( typeof html5Lightbox === "undefined" )

    {

        html5Lightbox = jQuery(".html5lightbox").html5lightbox({

            skinsfoldername:"",

            jsfolder:jsFolder,

            barheight:64,

            showtitle:true,

            showdescription:false,

            shownavigation:false,

            thumbwidth:80,

            thumbheight:60,

            thumbtopmargin:12,

            thumbbottommargin:8,

            titlebottomcss:'{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}',

            descriptionbottomcss:'{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}'

        });

    }

    jQuery("#amazingcarousel-2").amazingcarousel({

        jsfolder:jsFolder,

        width:299,

        height:216,

        skinsfoldername:"",

        interval:3000,

        itembottomshadowimagetop:100,

        donotcrop:true,

        random:false,

        showhoveroverlay:false,

        height:225,

        arrowheight:32,

        showbottomshadow:false,

        itembackgroundimagewidth:100,

        imageheight:225,

        skin:"Classic",

        responsive:true,

        lightboxtitlebottomcss:"{color:#333; font-size:14px; font-family:Armata,sans-serif,Arial; overflow:hidden; text-align:left;}",

        enabletouchswipe:true,

        navstyle:"bullets",

        backgroundimagetop:-40,

        arrowstyle:"none",

        bottomshadowimagetop:95,

        transitionduration:1000,

        itembackgroundimagetop:0,

        hoveroverlayimage:"hoveroverlay-64-64-3.png",

        itembottomshadowimage:"itembottomshadow-100-100-5.png",

        lightboxshowdescription:false,

        width:299,

        navswitchonmouseover:false,

        showhoveroverlayalways:false,

        transitioneasing:"easeOutExpo",

        lightboxshownavigation:false,

        showitembackgroundimage:false,

        itembackgroundimage:"",

        playvideoimagepos:"center",

        circular:true,

        arrowimage:"arrows-32-32-2.png",

        scrollitems:1,

        direction:"horizontal",

        lightboxdescriptionbottomcss:"{color:#333; font-size:12px; font-family:Arial,Helvetica,sans-serif; overflow:hidden; text-align:left; margin:4px 0px 0px; padding: 0px;}",

        supportiframe:false,

        navimage:"bullet-24-24-6_22.png",

        backgroundimagewidth:110,

        showbackgroundimage:false,

        lightboxbarheight:64,

        showplayvideo:false,

        spacing:5,

        lightboxthumbwidth:80,

        navdirection:"horizontal",

        itembottomshadowimagewidth:100,

        backgroundimage:"",

        lightboxthumbtopmargin:12,

        autoplay:true,

        arrowwidth:32,

        transparent:false,

        bottomshadowimage:"bottomshadow-110-95-0.png",

        scrollmode:"page",

        navmode:"item",

        lightboxshowtitle:true,

        lightboxthumbbottommargin:8,

        arrowhideonmouseleave:1000,

        showitembottomshadow:false,

        lightboxthumbheight:60,

        navspacing:2,

        pauseonmouseover:true,

        imagefillcolor:"FFFFFF",

        playvideoimage:"playvideo-64-64-0.png",

        visibleitems:3,

        imagewidth:299,

        usescreenquery:false,

        bottomshadowimagewidth:110,

        screenquery:{

	tablet: {

		screenwidth: 900,

		visibleitems: 2

	},

	mobile: {

		screenwidth: 600,

		visibleitems: 1

	}

},

        navwidth:24,

        loop:0,

        navheight:24

    });

});