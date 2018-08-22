<?php

    require('startPage.inc');

    $destinos = $ctrlHoteles->getDestinos();

    $tmplCuerpo = "tmpl_normal";
    $seccion = "404";

    $class_menu = "meddddnu-interior";
    $titulo =  "404";
    $descripcion =   "404";

    require(getTmpl('tmpl_main','main'));

?>
