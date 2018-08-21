<?php

    require('../startPage.inc');

    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "cookies";
    
    $class_menu = "menu-interior";
    $titulo =  "Política de Cookies";
    $descripcion =   "Política de Cookies";

    require(getTmpl('tmpl_main','main'));
    
?>