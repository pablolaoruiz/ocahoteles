<?php

    require('../startPage.inc');
  
if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "agentes";
    
    $class_menu = "menu-interior";
    $titulo =  "Agentes";
    $descripcion =   "Agentes";

    require(getTmpl('tmpl_main','main'));
    
?>