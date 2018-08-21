<?php

    require('../startPage.inc');
  
if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "atencion-al-cliente";
    
    $class_menu = "menu-interior";
    $titulo =  "Atención al cliente";
    $descripcion =   "Atención al cliente";

    require(getTmpl('tmpl_main','main'));
    
?>