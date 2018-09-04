<?php

    require('../startPage.inc');
  
if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "partners";
    
    $class_menu = "menu-interior";
    $titulo =  "Partners";
    $descripcion =   "OCA Partners";

    require(getTmpl('tmpl_main','main'));
    
?>