<?php

/**
 * Description of Secciones
 *
 * @author Juan
 */
class Secciones {
    
    
    //cargar los arrays dinamicamente. Habrá un fichero con el menu de cada hotel
    
    static $menu_hoteles = [];
    
    public static function cargarSecciones($hotel) {
        $filename = dirname(__FILE__) . "/hoteles/". $hotel . ".php";
      
        if (file_exists($filename)) {
            $secciones_hotel = include $filename;
            
            self::$menu_hoteles = array_merge(self::$menu_hoteles, $secciones_hotel);     
        }
        
    }
    
    public static function getMenuHotel($hotel,$lang,$datos_hotel) {

        //obtenemos el menú concreto
        $menu = self::$menu_hoteles[$hotel];
        $def = [];
     
        
        if (isset($menu)) {
            foreach ($menu as $item) {
                  
                if ($item['lang'] == $lang) {
                    // mostrar la opción de menú de ofertas en función de si existen ofertas del hotel o no
                    if (strtolower($item['titulo'])=='ofertas' 
                            || strtolower($item['titulo'])=='offers') {
                        // comprobar si hay ofertas
                        if (count($datos_hotel['ofertas'])==0) {
                            continue;
                        }
                    }
                    $link_url = "hoteles" . "/" . GestionTemplates::slugify($datos_hotel['country']) . "/"  . GestionTemplates::slugify($datos_hotel['province']) . "/" . GestionTemplates::slugify($datos_hotel['city']) . "/oca-" . $datos_hotel['link'] . "/";
                    $item['link_url'] = $link_url;
                    $def[] = $item;
                }
            }
        }
        
        return $def;

    }
    
    public static function getOrigenSeccion($hotel,$seccion_hotel) {
        
        $menu = self::$menu_hoteles[$hotel];
        return $menu[$seccion_hotel]['origen'];
        
    }
          
}
?>
