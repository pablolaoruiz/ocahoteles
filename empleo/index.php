<?php

    require('../startPage.inc');
  
if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "empleo";
    
    $class_menu = "menu-interior";
    $titulo =  "Empleo";
    $descripcion =   "Empleo";

    require(getTmpl('tmpl_main','main'));
    
?>