<?php
    require('../startPage.inc');



    $codigo = $_REQUEST['colectivo'];

    if ($codigo!='') {
        $colectivo = $ctrlColectivos->getColectivo($codigo);
        if ($colectivo) {

            $tmplCuerpo = 'tmpl_normal';
            $seccion = "alta-persona";
              $class_menu = "menu-interior";
            $titulo =  _("Alta de personas - Colectivos");
            $descripcion =   _("Alta de personas - Colectivos");

            require(getTmpl('tmpl_main','main'));

        } else {
            die();
        }
    } else {
        die();
    }

    $ctrlColectivos->getColectivo($codigo);


?>
