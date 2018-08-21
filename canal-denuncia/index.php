<?php

    require('../startPage.inc');
  
if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "canal-denuncia";
    
    $class_menu = "menu-interior";
    $titulo =  "Canal denuncia";
    $descripcion =   "Canal denuncia";

    require(getTmpl('tmpl_main','main'));
    
?>