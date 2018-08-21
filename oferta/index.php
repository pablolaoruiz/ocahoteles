<?php
    require('../startPage.inc');

    $id_oferta = $_REQUEST['id_oferta'];

    
    if ($id_oferta!='') {
        $oferta = $ctrlHoteles->getOferta($id_oferta);
  
        if ($oferta) {
            
            $tmplCuerpo = $oferta['template'];
            if ($oferta['template']=='') {
                $tmplCuerpo = "tmpl_default";
            }
            $hotel = $oferta['link'];
         
            $seccion = "oferta";
            $seccion_hotel = "oferta";
            $titulo =  _("Oferta");
            $descripcion =   _("Oferta");

            require(getTmpl('tmpl_main_oferta','main'));
            
        } else {
            die();
        }
    } else {
        die();
    }
    
?>