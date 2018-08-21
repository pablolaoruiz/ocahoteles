<?php

    require('../startPage.inc');
  
if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "bonos-regalo";
    
    $class_menu = "menu-interior";
    $titulo =  "BONOS REGALO";
    $descripcion =   "Bonos Regalo en Oca Hotels";

    require(getTmpl('tmpl_main','main'));
    
?>