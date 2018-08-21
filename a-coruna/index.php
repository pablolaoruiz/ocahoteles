<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "a-coruna";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles en A Coruña. Oca Hotels.";
    $descripcion =   "Encuentre su hotel en A Coruña, Galicia";

    require(getTmpl('tmpl_main','main'));
    
?>