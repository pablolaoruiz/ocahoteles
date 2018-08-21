<?php

/**
 * Description of HotelesDisplay
 *
 * @author Juan
 */
class HotelesDisplay {
    
    var $datos_hotel;
    var $hotel;
    var $content;
    var $seccion;
    var $language;
    var $metaTitulo;
    var $metaDescripcion;

    var $menu;
    var $tituloSeccion;
    var $descripcionSeccion;
    var $contentSeccion;
    
    function __construct($hotel,$datos_hotel,$seccion,$language) {
      
        
      $this->datos_hotel = $datos_hotel;
      $this->seccion = $seccion;
      $this->hotel = $hotel;
      $this->language = $language;
      
      $this->menu = Secciones::getMenuHotel($this->hotel, $this->language,$this->datos_hotel); 
     
      $this->datos_hotel['galeria'] = $this->getGaleria();
      $this->setSeccion();
       
      
    }
    
    public function getHeader() {
        
        
        //obtenemos galeria de la sección
        
        if (!isset($this->seccion) || $this->seccion=="") { 
            
            $fichero_header = GestionTemplates::getTmpl("default","hoteles/" . $this->hotel . "/headers");
            
             if (file_exists($fichero_header)) {
                //header por defecto
                GestionTemplates::getTmplInclude("default","hoteles/" . $this->hotel . "/headers", $this->datos_hotel,$this->getTituloSeccion(),$this->getDescripcionSeccion());
            } else {
                
                GestionTemplates::getTmplInclude("header_default","hoteles", $this->datos_hotel,$this->getTituloSeccion(),$this->getDescripcionSeccion());
    
                }

        } else {

            $fichero = GestionTemplates::getTmpl($this->seccion,"hoteles/" . $this->hotel . "/headers");

            if (file_exists($fichero)) {

                GestionTemplates::getTmplInclude($this->seccion, "hoteles/" . $this->hotel . "/headers",$this->datos_hotel,$this->getTituloSeccion(),$this->getDescripcionSeccion());
                
            } else {
                
                //header por defecto
                GestionTemplates::getTmplInclude("header_seccion_default","hoteles", $this->datos_hotel,$this->getTituloSeccion(),$this->getDescripcionSeccion());
            }
            
        }
        
    }
    
    public function getMenuNavegacion() {
        
        $datos = [];
        
        

        $menu = $this->menu;
        
        $datos['hotel'] = $this->hotel;
        $datos['seccion'] = $this->seccion;
        $datos['menu'] = $menu;
   
        $fichero = GestionTemplates::getTmpl("menu","hoteles");
        
        if (file_exists($fichero)) {
            
             GestionTemplates::getTmplInclude("menu", "hoteles", $datos);
            
        } 
        
    }
    
    public function getContent() {
        
        global $appConfig;
        $seccion_hotel = $this->seccion;
        //sacar el origen para ver que sección es la original
        if ($this->language!='') {
            
            $menu_hotel = Secciones::getOrigenSeccion($this->hotel,$this->seccion);
            if ($menu_hotel!='') {
                
                $seccion_hotel = $menu_hotel;
                
            }
            
        }
        
        //diferenciar entre ofertas (es común)
        if ($seccion_hotel!='ofertas') {
            
            $direccion_seccion = "hoteles/" . $this->hotel . "/content";  
    
            $datos_seccion = $this->datos_hotel;
        } else {
            //utlizamos el template general para listar las ofertas
            $direccion_seccion = "ofertas";
            $seccion_hotel = "ofertas";
            $datos_seccion = $this->datos_hotel['ofertas'];
        }

        
        //contenido de la sección
        if (!isset($seccion_hotel) || $seccion_hotel=="") { 

            $fichero_inicio = GestionTemplates::getTmpl("inicio",$direccion_seccion);
            
            if (file_exists($fichero_inicio)) {
       
                GestionTemplates::getTmplInclude("inicio", $direccion_seccion,$datos_seccion,$this->tituloSeccion,$this->descripcionSeccion,$this->contentSeccion);
             } else {
                 
                GestionTemplates::getTmplInclude("content_default", "hoteles",$datos_seccion,$this->tituloSeccion,$this->descripcionSeccion,$this->contentSeccion);
             }
             
        } else { 
            
            $fichero_inicio = GestionTemplates::getTmpl($seccion_hotel,$direccion_seccion);
           
            if (file_exists($fichero_inicio)) {
                GestionTemplates::getTmplInclude($seccion_hotel,  $direccion_seccion,$datos_seccion,$this->tituloSeccion,$this->descripcionSeccion,$this->contentSeccion);
            } else {
                GestionTemplates::getTmplInclude("content_default", "hoteles",$datos_seccion,$this->tituloSeccion,$this->descripcionSeccion,$this->contentSeccion);
            }
            
            
            
        } 
        
    }
    
    public function getFooter() {
        
        
        
        //obtenemos galeria de la sección
        
        if (!isset($this->seccion) || $this->seccion=="") { 
            
            $fichero_footer = GestionTemplates::getTmpl("default","hoteles/" . $this->hotel . "/footers");
            
             if (file_exists($fichero_footer)) {
                //footer por defecto
                GestionTemplates::getTmplInclude("default","hoteles/" . $this->hotel . "/footers", $this->datos_hotel);
            } else {
                
                GestionTemplates::getTmplInclude("footer_default","hoteles", $this->datos_hotel);
            }

        } else {

            $fichero = GestionTemplates::getTmpl($this->seccion,"hoteles/" . $this->hotel . "/footers");

            if (file_exists($fichero)) {

                GestionTemplates::getTmplInclude($this->seccion, "hoteles/" . $this->hotel . "/footers",$this->datos_hotel);
                
            } else {
                
                //footer por defecto
                GestionTemplates::getTmplInclude("footer_default","hoteles", $this->datos_hotel);
            }
            
        }
        
        
        
        
        
        
        /*
        if (!isset($this->seccion) || $this->seccion=="") { 

            //footer por defecto
            GestionTemplates::getTmplInclude("default","hoteles/" . $this->hotel . "/footers",$this->datos_hotel);

        } else {

            $fichero = GestionTemplates::getTmpl($this->seccion,"hoteles/" . $this->hotel . "/footers");

            if (file_exists($fichero)) {

                GestionTemplates::getTmplInclude($this->seccion, "hoteles/" . $this->hotel . "/footers",$this->datos_hotel);
                
            } else {
                
                //footer por defecto
                GestionTemplates::getTmplInclude("default","hoteles/" . $this->hotel . "/footers",$this->datos_hotel);
                
            }

        }*/
        
    }
    
    // carga la galeria correspondiente a la seccion activa
    // busca el la ruta /images/hoteles/<nombre-de-hotel>/<nombre-de-seccion>/ y carga todas las imagenes en un array
    public function getGaleria() {
        //carga la galeria de la sección 
        global $ROOT;
        $seccion = $this->seccion;
        if ($seccion=='') {
            $seccion = "inicio";
        }
        
      /*  $ficheros = $_SERVER['DOCUMENT_ROOT'] . "/" . $ROOT ."images/hoteles/" . $this->hotel . "/" . $seccion . "/*.jpg";
        echo $ficheros;
        $galeria=[];
        foreach (glob($ficheros) as $filename) {
            $galeria[] = $filename;  
        }*/
        
        
        $ficheros = $_SERVER['DOCUMENT_ROOT'] . "/" . $ROOT ."images/hoteles/" . $this->hotel . "/" . $seccion . "/";
        $galeria=[];
        if (file_exists($ficheros)) {
            $directory = $ficheros;
            chdir($directory);
            $images = glob("*.{jpg,JPG,jpeg,JPEG,png,PNG}", GLOB_BRACE);

            foreach($images as $image) {

              $galeria[] = $ROOT ."images/hoteles/" . $this->hotel . "/" . $seccion . "/" . $image;  
            }

        }
      
        return $galeria;
    }
    
    
    private function setSeccion() {
        
        $titulo = "";
        $descripcion = "";
        $titulo_seccion = "";
        $descripcion_seccion = "";
        $content_seccion = ""; 
        foreach($this->menu as $menu) {            
                    if ($menu['slug']==$this->seccion) {                        
                        $titulo = $menu['meta_titulo'];
                        $descripcion = $menu['meta_descripcion'];
                        $titulo_seccion = $menu['seccion_titulo'];
                        $descripcion_seccion = $menu['seccion_descripcion'];
                        $content_seccion = $menu['content'];               
                        $fb_img = $menu['meta_titulo'];
                        break;
                    }

        }

        foreach($this->menu as $menu) { 
            if (isset($menu['submenu']) && is_array($menu['submenu'])) {
                // print_r($menu['submenu']);
                 foreach ($menu['submenu'] as $submenu) {
                     if ($submenu['slug']==$this->seccion) {
                        $titulo = $submenu['meta_titulo'];
                        $descripcion = $submenu['meta_descripcion'];
                        $titulo_seccion = $submenu['seccion_titulo'];
                        $descripcion_seccion = $submenu['seccion_descripcion'];
                        $content_seccion = $submenu['content'];
                        break;
                    }
                 }                
            }
        }
        
        $this->metaTitulo = $titulo;
        $this->metaDescripcion = $descripcion;              
        $this->tituloSeccion = $titulo_seccion;
        $this->descripcionSeccion = $descripcion_seccion;       
        $this->contentSeccion = $content_seccion;        
                   
    }
    /*
    private function setMetaTitulo() {

        $titulo = "";
        foreach($this->menu as $menu) {
            if ($menu['slug']==$this->seccion) {
                $titulo = $menu['meta_titulo'];
                break;
            }

        }
        
        $this->metaTitulo = $titulo;
                   
        
    }
    
    private function setMetaDescripcion() {
        
        $descripcion = "";
        foreach($this->menu as $menu) {
            if ($menu['slug']==$this->seccion) {
                $descripcion = $menu['meta_descripcion'];
                break;
            }

        }
        
        $this->metaDescripcion = $descripcion;
        
    }*/
    
    public function getMetaTitulo() {
        return $this->metaTitulo;
    }
    
    public function getMetaDescripcion() {
        return $this->metaDescripcion;
    }
    
    public function getTituloSeccion() {
        return $this->tituloSeccion;
    }
    
    public function getDescripcionSeccion() {
        return $this->descripcionSeccion;
    }
    
     
    
    public static function getLogo($hotel,$seccion_hotel) {
        global $ROOT;
        $class="oca";
        if (isset($hotel)) {
            $alt=$hotel['longNameTemp'];
            if ($hotel['duerming']=="0") {
                $src= $ROOT ."images/logo-ocahotels.png";
            } else if ($hotel['duerming']=="1"){
                $src= $ROOT."images/logo-duerming.png";
                $class="duerming";
            } else if ($hotel['duerming']=="2"){
                 $src= $ROOT ."images/logo-maragogi.png";
            }  
                 else if ($hotel['duerming']=="3"){
                 $src= $ROOT ."images/logo-oca-manzaneda.png";
            }
        } else {
            $alt="Oca Hotels";
            $src= $ROOT."images/logo-ocahotels.png";
        }
         
        
        $imagen ="<img src='$src'  alt='$alt' class='$class'>";
        return $imagen;
    }
    
    public static function getLinkLogo($hotel,$seccion_hotel='') {
        global $ROOT;
         global $ROOT_LANG;
        
        if (isset($hotel) && $hotel!='' && $seccion_hotel!='') {   
            //logo de un hotel
            //sacar el link
            $link_hotel = $ROOT.$ROOT_LANG . "hoteles" . "/" . GestionTemplates::slugify($hotel['country']) . "/"  . GestionTemplates::slugify($hotel['province']) . "/" . GestionTemplates::slugify($hotel['city']) . "/oca-" . $hotel['link'] . "/";
            //$link_oferta = $ROOT . $link_oferta . "oferta/" .  GestionTemplates::slugify($oferta["titulo"]) . "/" . $oferta["id_oferta"];
            return $link_hotel;
        } else {
            //logo por defecto
            return $ROOT.$ROOT_LANG;
        }
    }
        public static function getLinkLogoB($hotel,$seccion_hotel='') {
        global $ROOT;
         global $ROOT_LANG;
        
        if (isset($hotel) && $hotel!='' && $seccion_hotel!='') {   
            //logo de un hotel
            //sacar el link
            $link_hotel = $ROOT. "hoteles" . "/" . GestionTemplates::slugify($hotel['country']) . "/"  . GestionTemplates::slugify($hotel['province']) . "/" . GestionTemplates::slugify($hotel['city']) . "/oca-" . $hotel['link'] . "/";
            //$link_oferta = $ROOT . $link_oferta . "oferta/" .  GestionTemplates::slugify($oferta["titulo"]) . "/" . $oferta["id_oferta"];
            return $link_hotel;
        } else {
            //logo por defecto
            return $ROOT;
        }
    }
    
    public static function getLinkLogoC($hotel,$seccion_hotel='') {
        global $ROOT;
         global $ROOT_LANG;
        
        if (isset($hotel) && $hotel!='') {   
            //logo de un hotel
            //sacar el link
            $link_hotel = $ROOT. "hoteles" . "/" . GestionTemplates::slugify($hotel['country']) . "/"  . GestionTemplates::slugify($hotel['province']) . "/" . GestionTemplates::slugify($hotel['city']) . "/oca-" . $hotel['link'] . "/";
            //$link_oferta = $ROOT . $link_oferta . "oferta/" .  GestionTemplates::slugify($oferta["titulo"]) . "/" . $oferta["id_oferta"];
            return $link_hotel;
        } else {
            //logo por defecto
            return $ROOT;
        }
    }
    
    public static function getTelefonoHead($datos_hotel) {
       
        if (isset($datos_hotel) && $datos_hotel['tlf']!='') {
            //telefono del hotel
            return $datos_hotel['tlf'];
        } else {
            //telefono general
            return "";
        }
    }
 
    

}
?>
