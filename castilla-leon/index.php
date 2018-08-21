<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "castilla-leon";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles en Castilla y León. Oca Hotels.";
    $descripcion =   "Encuentre su hotel en Salamanca, Castilla y León";

    require(getTmpl('tmpl_main','main'));
    
?>