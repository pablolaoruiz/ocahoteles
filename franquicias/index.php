<?php

    require('../startPage.inc');
  
  if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "franquicias";
    
    $class_menu = "menu-interior";
    $titulo =  "Franquicias";
    $descripcion =   "Franquicias";

    require(getTmpl('tmpl_main','main'));
    
?>