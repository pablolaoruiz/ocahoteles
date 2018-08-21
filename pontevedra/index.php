<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "pontevedra";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles y apartamentos de vacaciones en Sanxenxo, Vigo y O Grove, Pontevedra. Oca Hotels.";
    $descripcion =   "Encuentre su hotel en la ciudad de playa de Sanxenxo, en Vigo y en O Grove, Pontevedra, Galicia";

    require(getTmpl('tmpl_main','main'));
    
?>