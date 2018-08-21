<?php
    require('../startPage.inc');
    
    $googleMap = true;
     
    $hotel = $_REQUEST["hotel"];
    $seccion_hotel = $_REQUEST["seccion"];
    $parametros = $_REQUEST;
    
    $datos_hotel = $ctrlHoteles->getHotelByLink($hotel,$parametros);

    $tmplCuerpo = "tmpl_default";
    $seccion = "hoteles";
    $height_map = "25vh";
    
  
    Secciones::cargarSecciones($hotel);
    
    $ctrlHotelDisplay = new HotelesDisplay($hotel,$datos_hotel,$seccion_hotel,$language);
    if (count($ctrlHotelDisplay->datos_hotel['galeria'])==0) {
         $class_menu = "menu-interior";
    }
  
    
    $titulo =  $ctrlHotelDisplay->getMetaTitulo();
    $descripcion =   $ctrlHotelDisplay->getMetaDescripcion();

    require(getTmpl('tmpl_main','main'));
    
?>