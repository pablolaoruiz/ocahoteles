<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "turismo-rural";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles rurales en Ourense, Asturias, Pontevedra y Lugo. Oca Hotels";
    $descripcion =   "Haz turismo rural en Galicia y Asturias en hoteles OCA.";

    require(getTmpl('tmpl_main','main'));
    
?>