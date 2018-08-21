<!DOCTYPE html>
<html lang="<?=$lang?>">
 
    <head>
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="puraenvidia.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="<?php echo $lang?>"/>
        <meta name="title" content="<?php echo $titulo?> <?php echo $oferta['titulo'] ?>">
        <meta name="description" content="<?php echo $descripcion?> <?php echo $oferta['titulo'] ?> : <?php echo $oferta['descripcion'] ?> ">
        <meta name="language" content="<?php echo $lang?>"> 
        <meta name="geo.region" content="ES-GA" />
        <meta name="geo.placename" content="Santiago de Compostela" />
        <meta name="geo.position" content="42.884305;-8.513024" />
        <meta name="ICBM" content="42.884305, -8.513024" />
        <meta name="robots" CONTENT="all"/>
        <meta content="Global" name="distribution"/>
        <meta content="https://www.ocahotels.com" name="identifier-url"/>
        <meta http-equiv="Pragma" content="no-cache/cache"/>
        <meta http-equiv="Cache-Control" content="no-cache"/>
        <meta content="2 days" name="revisit-after"/>
        <meta name="google-site-verification" content="mHDORFCa_LWjX8qUJKJDsAj_qxBrJ8vgNtsUczfOpXQ" />
        <title><?php echo $titulo?> <?php echo $oferta['titulo'] ?></title>
       
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $ROOT?>images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $ROOT?>images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $ROOT?>images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $ROOT?>images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $ROOT?>images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $ROOT?>images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $ROOT?>images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $ROOT?>images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT?>images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $ROOT?>images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT?>images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $ROOT?>images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT?>images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $ROOT?>images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo $ROOT?>images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <script>
            var root = "<?php echo $ROOT?>";
        </script>
        
        <link href="<?php echo $ROOT?>css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="<?php echo $ROOT?>js/jquery-1.11.3.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link href="<?php echo $ROOT . 'css/' . $css_template; ?>" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo $ROOT?>css/least.min.css" rel="stylesheet" />
        <script src="<?php echo $ROOT?>js/bootstrap.min.js" type="text/javascript"></script>
        <script src="<?php echo $ROOT?>js/ocahoteles.js" type="text/javascript"></script>
        <script src="<?php echo $ROOT?>js/buscador.js" type="text/javascript"></script>
        <script src="<?php echo $ROOT?>js/parte_nieve.js" type="text/javascript"></script>
        <script src="<?php echo $ROOT?>js/jquery.validate.min.js" type="text/javascript"></script>
        <script src="<?php echo $ROOT?>js/loading.js" type="text/javascript"></script>
        <script type="text/javascript" src="<?php echo $ROOT?>js/localization/messages_es.min.js"></script>
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?php echo $ROOT?>js/typeahead.bundle.min.js"></script>
        
        
           
    
        <script src="<?php echo $ROOT?>js/jquery.touchSwipe.min.js" type="text/javascript"></script>
        <?php if (isset($googleMap) && $googleMap)  {?>
            <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAU6PIlehUGaxhMD-V6pAelZcfsCjTTKhE" type="text/javascript"></script>
            <script src="<?php echo $ROOT?>js/mapas.js" type="text/javascript"></script>
        <?php } ?>
            

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        
        <?php include(getTmpl('tmpl_share_redes',"main"))?>
        
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M27K7D6');</script>
<!-- End Google Tag Manager -->


<!-- ZOPIM CHAT -->
<?php
if ($datos_hotel['link'] == 'rocallaura' OR $datos_hotel['link'] == 'palacio-llorea'){
    ?>
<!--Start of Zendesk Chat Script-->
<script type="text/javascript">
window.$zopim||(function(d,s){var z=$zopim=function(c){z._.push(c)},$=z.s=
d.createElement(s),e=d.getElementsByTagName(s)[0];z.set=function(o){z.set.
_.push(o)};z._=[];z.set._=[];$.async=!0;$.setAttribute("charset","utf-8");
$.src="https://v2.zopim.com/?5mGyy6nZ2eVuZqQNuAHYXOq85hA51Q3i";z.t=+new Date;$.
type="text/javascript";e.parentNode.insertBefore($,e)})(document,"script");
</script>
<!--End of Zendesk Chat Script-->
<?php
    
}else{}

?>
<!-- zopim chat END -->
    </head>
    <body>
        
 <!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-M27K7D6"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

  <!--
                if (($datos_hotel['link'])==='palacio-llorea'){
                  
                  echo '<script type="text/javascript">
                      /* <![CDATA[ */
var google_conversion_id = 844826001;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "PmwKCIO7lnMQkYvskgM";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/844826001/?label=PmwKCIO7lnMQkYvskgM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>';
                };                
                    --> 


        <!-- analytics descomentar para producción -->
         <!--script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-55370050-1', 'auto');
        ga('send', 'pageview');
      </script-->
       
        <?php include(getTmpl('tmpl_menu',"main"))?>
        <div id="wrapper">
            <?php include(getTmpl($tmplCuerpo,$seccion))?>
        </div>
        <?php include(getTmpl('tmpl_footer',"main"))?>
        <?php include(getTmpl('tmpl_pop_up_buscador',"main"))?>
        <div id="ancla-ir-arriba"><a href="#inicio" class="ir-arriba-es"><i class="icon-chevron-up"></i></a></div>
        <script src="<?php echo $ROOT?>js/least.min.js" type="text/javascript"></script>
        
    <!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/3850039.js"></script>
  <script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});
</script>
<!-- End of HubSpot Embed Code -->
   <script>function loadScript(a){var b=document.getElementsByTagName("head")[0],c=document.createElement("script");c.type="text/javascript",c.src="https://tracker.metricool.com/resources/be.js",c.onreadystatechange=a,c.onload=a,b.appendChild(c)}loadScript(function(){beTracker.t({hash:"af4177d8cfca734edeffb0d83443d878"})});</script>
    </body>

    
</html>