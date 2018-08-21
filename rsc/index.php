<?php

    require('../startPage.inc');
  
 if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "rsc";
    
    $class_menu = "menu-interior";
    $titulo =  "RSC";
    $descripcion =   "Responsabilidad Social Corporativa";

    require(getTmpl('tmpl_main','main'));
    
?>