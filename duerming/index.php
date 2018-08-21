<?php

    require('../startPage.inc');
  
if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "duerming";
    
    $class_menu = "menu-interior";
    $titulo =  "Duerming";
    $descripcion =   "Duerming";

    require(getTmpl('tmpl_main','main'));
    
?>