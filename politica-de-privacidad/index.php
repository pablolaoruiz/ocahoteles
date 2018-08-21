<?php

    require('../startPage.inc');
  
 
    
     if ($ROOT_LANG ==''){$tmplCuerpo = "tmpl_normal";}
    else {
        $tmplCuerpo = "tmpl_normal_en";
    };
    $seccion = "politica-de-privacidad";
    
    $class_menu = "menu-interior";
    $titulo =  "Política de privacidad";
    $descripcion =   "Política de privacidad";

    require(getTmpl('tmpl_main','main'));
    
?>