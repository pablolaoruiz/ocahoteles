<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "bodas-celebraciones";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles para bodas, eventos y celebraciones";
    $descripcion =   "Los mejores hoteles para celebrar tu boda o tu evento en A Coruña, Ourense, Oviedo, Gijón, Lugo, Salamanca...";

    require(getTmpl('tmpl_main','main'));
    
?>