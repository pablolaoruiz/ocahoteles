<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "lugo";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles en Lugo. Oca Hotels";
    $descripcion =   "Encuentre su hotel o apartamento en Lugo, Galicia. Ribeira Sacra, comarca de Ulloa, Sarria, Viveiro.";

    require(getTmpl('tmpl_main','main'));
    
?>