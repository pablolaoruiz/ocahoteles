<?php
    require('startPage.inc');
    
    $googleMap = true;
    
    $destinos = $ctrlHoteles->getDestinos();
   
    $tmplCuerpo = 'tmpl_normal';
    $seccion = "home";
    $titulo =  _("Oca Hotels. Hoteles en Galicia, Asturias, Castilla León y Brasil.");
    $descripcion =   _("Oca Hoteles. Alojamiento, SPA, golf y Estación de Montaña en Galicia, Asturias, Castilla y León y Brasil.");
  
    require(getTmpl('tmpl_main','main'));
    
?>