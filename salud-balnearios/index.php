<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "salud-balnearios";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles con SPA y balneario en Asturias, Lugo y Ourense";
    $descripcion =   "Hoteles con SPA, balneario y aguas termales para relajarse y cuidar tu salud durante las vacaciones";

    require(getTmpl('tmpl_main','main'));
    
?>