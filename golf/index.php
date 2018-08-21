<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "golf";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles para jugar al golf en Lugo y Asturias";
    $descripcion =   "Hoteles junto a campos de golf para poder jugar durante tus vacaciones";

    require(getTmpl('tmpl_main','main'));
    
?>