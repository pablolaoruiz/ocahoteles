<?php

    require('../startPage.inc');
  
  if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "empresas";
    
    $class_menu = "menu-interior";
    $titulo =  "Empresas";
    $descripcion =   "Empresas";

    require(getTmpl('tmpl_main','main'));
    
?>