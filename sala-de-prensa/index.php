<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "sala-de-prensa";
    
    $class_menu = "menu-interior";
    $titulo =  "Sala de Prensa";
    $descripcion =   "Sala de Prensa telefónicas";

    require(getTmpl('tmpl_main','main'));
    
?>