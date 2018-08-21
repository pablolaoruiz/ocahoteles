<!DOCTYPE html>
<html>
    <head  lang="es">
        
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="puraenvidia.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="<?php echo $lang?>"/>
        <meta name="title" content="<?php echo $titulo?> <?php echo $oferta['titulo'] ?>">
        <meta name="description" content="<?php echo $oferta['titulo'] ?> <?php echo $descripcion?> ">
        <meta name="language" content="<?php echo $lang?>"> 
        <meta name="geo.region" content="ES-GA" />
        <meta name="geo.placename" content="Santiago de Compostela" />
        <meta name="geo.position" content="42.884305;-8.513024" />
        <meta name="ICBM" content="42.884305, -8.513024" />
        <meta name="robots" CONTENT="all"/>
        <meta content="Global" name="distribution"/>
        <meta content="http://www.ocahotels.com" name="identifier-url"/>
        <meta http-equiv="Pragma" content="no-cache/cache"/>
        <meta http-equiv="Cache-Control" content="no-cache"/>
        <meta content="2 days" name="revisit-after"/>
        
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
        
  
     


        <!-- analytics descomentar para producción -->
         <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-55370050-1', 'auto');
        ga('send', 'pageview');
      </script>
       
     
        <div id="wrapper">
            <?php include(getTmpl($tmplCuerpo,$seccion))?>
        </div>
     
     
     
        <script src="<?php echo $ROOT?>js/least.min.js" type="text/javascript"></script>
        
    
   
    </body>

    
</html>