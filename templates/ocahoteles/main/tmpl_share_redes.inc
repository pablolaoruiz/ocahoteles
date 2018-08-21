<!-- Facebook -->
<?php $actual_link = "https://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>





<meta property="og:site_name" content="Oca Hotels" />
<meta property="og:title" content="<?php echo $titulo?> <?php echo $oferta['titulo'] ?>">
<meta property="og:type" content="article" >
<meta property="og:url" content="<?php echo $actual_link?>">
<meta property="og:image"  content="https://ocahotels.com<?php $ROOT?>/images/fb/<?php  echo  GestionTemplates::slugify($titulo) ?>.jpg">
<meta property="og:image"  content="https://ocahotels.com<?php echo $ROOT ?>images/ofertas/<?php echo $oferta['link']?>/<?php echo $oferta['id_oferta']?>/001-<?php echo $oferta['id_oferta']?>.jpg">
<meta property="og:description" content="<?php echo $descripcion?> <?php echo $oferta['titulo'] ?>">
<!--<meta property="fb:app_id" content="" />-->
<meta property="fb:admins" content="" />

<!-- Twitter -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="@ocahotels">
<meta name="twitter:creator" content="@ocahotels">
<meta name="twitter:title" content="<?php echo $titulo?> <?php echo $oferta['titulo'] ?>">
<meta name="twitter:description" content="<?php echo $descripcion?> <?php echo $oferta['titulo'] ?>">
<!--<meta name="twitter:image" content="">
<meta name="twitter:image:alt" content="">-->
    

