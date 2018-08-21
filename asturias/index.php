<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "asturias";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles en Asturias. Oca Hotels.";
    $descripcion =   "Encuentre su hotel en Asturias";

    require(getTmpl('tmpl_main','main'));
    
?>