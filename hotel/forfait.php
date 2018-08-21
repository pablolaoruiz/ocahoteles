<?php
    require('../startPage.inc');
    
    $googleMap = true;
     
    $hotel = $_REQUEST["hotel"];
    $seccion_hotel = $_REQUEST["seccion"];
    $datos_hotel = $ctrlHoteles->getHotelByLink($hotel);
    $tmplCuerpo = "tmpl_default";
    $seccion = "hoteles";
    $height_map = "25vh";
    
    //obtenemos los datos dela resercva en funcion del id y email codificados en sha1;
    
    $ctrlForfait = new ForFait($enlace);
      
    //solo si vienen informados el id reserva y el email
    if (isset($_REQUEST['id'])
        &&  $_REQUEST['id'] !=''
        &&  isset($_REQUEST['email'])
        &&  $_REQUEST['email'] !='') {
          
        $id = $_REQUEST['id'];
        $email = $_REQUEST['email'];

        $reserva = $ctrlForfait->getReservaSHA1($id, $email);

        Secciones::cargarSecciones($hotel);

        $ctrlHotelDisplay = new HotelesDisplay($hotel,$datos_hotel,$seccion_hotel,$language);

        $titulo =  $ctrlHotelDisplay->getMetaTitulo();
        $descripcion =   $ctrlHotelDisplay->getMetaDescripcion();
        
        if (count($ctrlHotelDisplay->datos_hotel['galeria'])==0) {
            $class_menu = "menu-interior";
        }

        require(getTmpl('tmpl_main','main'));
        
    } 
    
    
    
?>