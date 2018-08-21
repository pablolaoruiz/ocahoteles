<?php
    require('../startPage.inc');
    $idTorneo = (int )$_GET["id"];
    $torneo = $_REQUEST['torneo'];
    
    
    
    if ($torneo!='') {
        $torneo = $ctrlTorneos->getTorneoById($torneo);
        if ($torneo) {
            $googleMap = true;
            $hotel = $_REQUEST["hotel"];
             $height_map = "25vh";
           
            $datos_hotel = $ctrlHoteles->getHotelByLink($hotel);
           
            $seccion_hotel = "torneos-golf";
            Secciones::cargarSecciones($hotel);
            $ctrlHotelDisplay = new HotelesDisplay($hotel,$datos_hotel,$seccion_hotel,$language);
           
            $tmplCuerpo = "tmpl_torneo";
            $seccion = "torneos-golf";
            $titulo =  _("Torneos de Golf");
            $descripcion =   _("Torneos de Golf");

            $class_menu = "menu-interior";
            require(getTmpl('tmpl_main','main'));
            
        } else {
           // die();
        }
    } else {
       // die();
    }
    
?>