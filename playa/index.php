<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "playa";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles de playa. Oca Hotels";
    $descripcion =   "Los mejores hoteles y alojamientos de playa en Gijón, Sanxenxo, O Grove, Viveiro, Vigo...";

    require(getTmpl('tmpl_main','main'));
    
?>