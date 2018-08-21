<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "ourense";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles en Ourense. Oca Hotels.";
    $descripcion =   "Encuentre su hotel en Ourense, SPA, celebraciones, bike park y estacíon de ski.";

    require(getTmpl('tmpl_main','main'));
    
?>