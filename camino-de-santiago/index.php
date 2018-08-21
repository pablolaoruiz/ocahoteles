<?php

    require('../startPage.inc');
  
    if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "camino-de-santiago";
   
    $class_menu = "menu-interior";
    $titulo =  "Hoteles para hacer el Camino de Santiago. Oca Hotels";
    $descripcion =   "Los mejores hoteles y alojamientos para hacer el Camino de Santiago con comodidad.";

    require(getTmpl('tmpl_main','main'));
    
?>