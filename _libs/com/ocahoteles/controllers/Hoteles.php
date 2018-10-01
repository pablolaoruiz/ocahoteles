<?php

/**
 * Description of Hoteles
 *
 * @author Juan
 */
class Hoteles extends BBDD_PDO {
    
    var $language;
    
    function __construct($link_bbdd,$language='') {
       $this->language = $language;
       parent::__construct($link_bbdd);
      
    }
    /**
     * 
     * @param type $provincia
     * @param type $experiencia
     * @return type
     */
    public function getHoteles($provincia="",$experiencia='') {
         global $ROOT;
        global $ROOT_LANG;
        
        $experiencias['salud'] = [3074,2997,1101,3456,666];
        $experiencias['camino'] = [515,3430,1101,3074,6606,10005,10008,3614,1890,1372];
        $experiencias['playa'] = [3278,3456,10009,247,71,334,2975,6594,10007,4205,];
        $experiencias['ski'] = [4117];
        $experiencias['bikepark'] = [4117];
        $experiencias['bodas'] = [2997,3456,515,3074,3614,10001];
        $experiencias['golf'] = [2997, 3456];
        $experiencias['gastronomia'] = [515,1372];
        $experiencias['turismo'] = [3614,3074,247,71,334,2975,10007,666];
 
        $parametros = [];
        $sql_hoteles = "SELECT * FROM products where activo=1 ORDER BY type DESC, quality DESC, tienemicro ASC, longName ASC";
        if ($provincia!='') {
            $filtro = " AND products.province=:provincia";
            $parametros["provincia"]= $provincia;
        } 
        
        if ($experiencia!='') {
            $hoteles = implode(",",$experiencias[$experiencia]);
            $filtro = " AND products.shortName IN (" . $hoteles . ")";
        }
        
        $sql_hoteles = "SELECT * FROM products where activo=1 " . $filtro . " ORDER BY type DESC, quality DESC, tienemicro ASC, longName ASC";

        $hoteles = $this->db_list($sql_hoteles,$parametros);
        $hoteles_result = [];
        
        foreach($hoteles as $hotel) {

            //construimos link del hotel:/<idioma>/hoteles/espana/provincia/ciudad/oca-nombrehotel/
            $link = "hoteles" . "/" . GestionTemplates::slugify($hotel['country']) . "/"  . GestionTemplates::slugify($hotel['province']) . "/" . GestionTemplates::slugify($hotel['city']) . "/oca-" . $hotel['link'] . "/";
            $hotel['link_parse'] = $link;
            $pictures = $this->getImageHotel($hotel['shortName']);
            $hotel['pictures'] =$pictures;
            $hoteles_result[] = $hotel;
    
        }

        return $hoteles_result;
 
    }
    
    /**
     * 
     * 
     * @return type
     */
    public function getHotelesBuscador() {
        
        $parametros = [];
        $sql_hoteles = "SELECT * , CONCAT(longName , ' - ', city ,', ', province) as nombre FROM products where activo=1 AND province!='Maragogi' ORDER BY type DESC, quality DESC,longName ASC";
        $hoteles = $this->db_list($sql_hoteles,$parametros);
        $hoteles_result = [];
        foreach($hoteles as $hotel) {
            $pictures = $this->getImageHotel($hotel['shortName']);
            $hotel['pictures'] =$pictures;
            $hoteles_result[] = $hotel;
        }
            
        return $hoteles_result;
 
    }
    
    /**
     * 
     * 
     * @global type $ROOT
     * @global type $ROOT_LANG
     * @param type $filtro
     * @return string
     */
    
    public function buscarHotel($filtro) {
        global $ROOT;
        global $ROOT_LANG;
        
        $parametros = [];
        $sql_hoteles = "SELECT * , CONCAT(longNameTemp , ' - ', city ,', ', province) as nombre FROM products where activo=1 "
                . "AND (longName LIKE '%" . $filtro. "%' OR city LIKE '%" . $filtro. "%' OR province LIKE '%" . $filtro. "%')"

                . " ORDER BY type DESC, quality DESC,longName ASC";
        
        $hoteles = $this->db_list($sql_hoteles,$parametros);
        $hoteles_result = [];
        foreach($hoteles as $hotel) {
            $pictures = $this->getImageHotel($hotel['shortName']);
            $hotel['pictures'] =$pictures;
            $link = "hoteles" . "/" . GestionTemplates::slugify($hotel['country']) . "/"  . GestionTemplates::slugify($hotel['province']) . "/" . GestionTemplates::slugify($hotel['city']) . "/oca-" . $hotel['link'] . "/";
            $hotel['url'] = $ROOT . $ROOT_LANG . $link;
            $hoteles_result[] = $hotel;
        }
            
        return $hoteles_result;
        
        
    }
    /**
     * 
     * @param type $id_hotel
     * @return type
     */
    public function getImageHotel($id_hotel) {
        
        $parametros = [];
        $sql_imagen = "SELECT * FROM pictures WHERE tabla='products' AND table_id=:id_hotel ORDER BY orden ASC LIMIT 1";
        $parametros = array("id_hotel"=>$id_hotel);
        $images = $this->db_list($sql_imagen,$parametros);
        return $images;
        
    }
    
    /*public function getApartados($short_name) {
        $query ="SELECT * FROM apartados WHERE shortName='" . $short_name . "' ORDER BY orden ASC";
        $apartados = $this->db_list($query);
        return $apartados;
    }*/
    
    public function getPestana($tipo,$filtro=[]) {
        global $ROOT_LANG;
        global $appConfig;
        $contenido = '';        
        switch ($tipo) {            
            case 'destinos':
                $destinos = $this->getDestinos();
                
                $contenido = GestionTemplates::getTmplInclude("tmpl_destinos","boxes",$destinos);
            break;
        
          case 'bonos':
                              
                $contenido = GestionTemplates::getTmplInclude("tmpl_bonos","boxes",$bonos);
            break;
        
       
        
            case 'hoteles':
                $provincia=$filtro['provincia'];
                $experiencia = $filtro['experiencia'];                
                $hoteles = $this->getHoteles($provincia,$experiencia);                 
                $contenido = GestionTemplates::getTmplInclude("tmpl_hoteles","boxes",$hoteles);
            break;
        
            case 'experiencias':                
                $experiencias = $this->getExpericencias();
                $contenido =  GestionTemplates::getTmplInclude("tmpl_experiencias","boxes",$experiencias);
            break;
        
            case 'ofertas':
                $ofertas = $this->getOfertas();              
                $contenido = GestionTemplates::getTmplInclude("tmpl_ofertas","boxes",$ofertas);
            break;
                
        }
        
        return $contenido;
    }
    
   
    
    
  
    
    /*public function getVideos($id_hotel) {
        $query = "SELECT * FROM videos WHERE product_id=" . $id_hotel . " ORDER BY orden ASC";
        $videos = $this->db_list($query);
        return $videos;
    }*/
    
    /*public function getComentarios($id_hotel) {
        
        $query = "SELECT * FROM comments WHERE product_id=" . $id_hotel . " ORDER BY page";
        $comentarios = $this->db_list($query);
        return $comentarios;
        
    }*/
    
    /*public function getSecciones($id_hotel) {
        
        $query = "SELECT * FROM seccion WHERE id_hotel = " . $id_hotel . " ORDER BY orden";
        
        $seciones = $this->db_list($query);
        return $seciones;

    }*/
    
    /*public function getBarraLateral($id_hotel) {
        
        $query = "SELECT bl.* FROM banner_lateral AS bl LEFT JOIN products AS p ON bl.id_hotel = p.shortName LEFT JOIN seccion AS s ON bl.id_seccion = s.id_seccion WHERE (bl.id_hotel IS NULL OR bl.id_hotel = " . $id_hotel . ") AND (bl.id_seccion IS NULL) ORDER BY bl.orden";
        $barra = $this->db_list($query);
        return $barra;

        
    }*/
            
    /**
     * @param string $link
     * @return string
     */
    public function getHotelByLink($link,$params=[]) {
        
      
        //consultamos por $shortName
        $query = "SELECT * FROM products where activo=1 AND link=:link";
        $parametros = array("link"=>$link);
        $hotel = $this->db_row($query,$parametros);
        
        //¿Qué información tenemos de cada hotel?
        //
        // 1. Imágenes
        $pictures = $this->getImageHotel($hotel['shortName']);
        $hotel['pictures'] =$pictures;
        
        // 2. Ofertas
        $hotel['ofertas'] = $this->getOfertas($hotel['shortName']);
       
        
        // 3. Secciones
        //$hotel['secciones'] = $this->getSecciones($hotel['shortName']);
        
        // 4. Hightlights
        //$hotel['hightlights'] = $this->getHightLights($hotel['shortName']);
        
        
        // 5. Parte de nieve (solo hotel 4117)
     /*   if ($hotel['shortName']==4117) {
            $hotel['partenieve'] = $this->getParteNieve($hotel['shortName']);
        }*/
        
        // 6. Perfil contratante
       // $hotel['perfilcontratante'] = $this->getPerfilContratante($hotel['shortName']);
        
        // 7. Campeonatos
        
        $fecha_inicio_torneos="";
        if ($params['fecha_inicio_torneos']!='') {
            $originalDate = $params['fecha_inicio_torneos'];
            $fecha_inicio_torneos = date("Y-m-d", strtotime(str_replace('/', '-', $originalDate)));
        }
        $fecha_fin_torneos="";
        if ($params['fecha_fin_torneos']!='') {
            $originalDatefin = $params['fecha_fin_torneos'];
            $fecha_fin_torneos = date("Y-m-d", strtotime(str_replace('/', '-', $originalDatefin)));
        }
        
        $hotel['torneos_golf'] = $this->getTorneos($hotel['shortName'],$fecha_inicio_torneos,$fecha_fin_torneos);
        

        $link = "hoteles" . "/" . GestionTemplates::slugify($hotel['country']) . "/"  . GestionTemplates::slugify($hotel['province']) . "/" . GestionTemplates::slugify($hotel['city']) . "/oca-" . $hotel['link'] . "/";
        $hotel['link_parse'] = $link;
      
        return $hotel;
        
    }
    /**
     * 
     * 
     * @param type $hotel
     * @param type $fecha_desde
     * @param string $fecha_hasta
     * @return type
     */
    public function getTorneos($hotel,$fecha_desde="",$fecha_hasta="") {
        
        $sql_torneos = "";
        
        if(!isset($fecha_hasta) || $fecha_hasta=="") {
		$fecha_hasta='3000-12-01';
        }
	if(!isset($fecha_desde) || $fecha_desde=="") {
		$fecha_desde=date("Y-m-d");
	}

        //cuidado! No estamos filtrando por hotel

	$sql_torneos = "SELECT *,"
                . "DATE_FORMAT(FECHAINI, '%d/%m/%Y') as FECHAINI_format,"
                . "DATE_FORMAT(FECHAFIN, '%d/%m/%Y') as FECHAFIN_format"
                . " FROM golf_competiciones WHERE  (FECHAINI BETWEEN :fecha_desde1 AND :fecha_hasta1 OR FECHAFIN BETWEEN :fecha_desde2 AND :fecha_hasta2) ORDER BY FECHAINI";
	
        $parametros['fecha_desde1']=$fecha_desde; $parametros['fecha_desde2']=$fecha_desde;
        $parametros['fecha_hasta1']=$fecha_hasta; $parametros['fecha_hasta2']=$fecha_hasta;
     //    $sql_torneos = "SELECT *, DATE_FORMAT(fecha_inicio, '%d/%m/%Y') as fecha_inicio_format, DATE_FORMAT(fecha_fin, '%d/%m/%Y') as fecha_fin_format FROM torneos_golf where activo=1 AND fkidhotel=" . $hotel;
       
        $torneos = $this->db_list($sql_torneos,$parametros);
        
      
        return $torneos;
        
    }
    
    public function getHotelTemplate($link) {
        //comprueba si el hotel tiene un template, si no existe devuelve uno pordefecto
        $fichero = GestionTemplates::getTmpl($link,"hoteles/" . $link);
       
        if (file_exists($fichero)) {
            return $link;
        } else {
            return "tmpl_default";
        }
        
    }

    /**
     * @param type $id_hotel
     * @return type
     */
    public function getOfertas($id_hotel="") {
        
        //si viene informado el id hotel mostrar solo las del hotel, si no viene informado, devolver todas las ofertas
        $filtros = "";
        
        if ($id_hotel!="") {
            $filtros = " AND o.id_hotel = :id_hotel ";
            $parametros['id_hotel']=$id_hotel;
        }
        
        $query = "SELECT o.*,"
            . "p.shortName as idHotel,"
            . "p.longNameTemp as hotel, p.quality as estrellas, p.city as city, p.link as link_hotel, p.country, p.province "
            . "FROM oca_ofertas as o "
            . " LEFT JOIN products as p ON o.id_hotel = p.shortName "
            . " WHERE o.fecha_fin > NOW() AND o.fecha_inicio < NOW() "
            . " AND p.activo=1 " .  $filtros . " ORDER BY o.fecha_fin ASC, o.id_oferta DESC ";
        
           
        $ofertas = $this->db_list($query,$parametros);
       
        return $ofertas;
    }
    
    
    public function getOfertasOld($id_hotel="") {
        
        //si viene informado el id hotel mostrar solo las del hotel, si no viene informado, devolver todas las ofertas
        $filtros = "";
        
        if ($id_hotel!="") {
            $filtros = " AND o.codhotel=" . $id_hotel;
        }
        
        $query = "SELECT o.*,"
            . " t.titulo,"
            . "t.multiplicador,"
            . "t.izquierda,"
            . "t.derecha,"
            . "t.pdf, p.shortName as idHotel,"
            . "p.longNameTemp as hotel, p.quality as estrellas, p.city as city, p.link as link_hotel, p.country, p.province "
            . "FROM oferta as o LEFT JOIN textos as t ON t.id_oferta = o.id_oferta "
            . " LEFT JOIN products as p ON o.codhotel = p.shortName "
            . " WHERE o.f_caducidad > NOW() AND o.f_inicio < NOW() "
            . " AND p.activo=1 " .  $filtros . " ORDER BY o.id_oferta DESC";
        
           
        $ofertas = $this->db_list($query);
       
        
        return $ofertas;
    }
    
    /**
     * 
     * @param type $id_oferta
     * @return type
     */
    public function getOferta($id_oferta) {
        
        $query = "SELECT o.*, p.shortName as idHotel,p.longNameTemp as hotel, "
                . "p.city as city, p.neobookingid as neobookingid, p.link,"
                . " p.quality as estrellas FROM oca_ofertas as o "
                . " LEFT JOIN products as "
                . " p ON o.id_hotel = p.shortName WHERE o.id_oferta = :id_oferta";
        
        $parametros['id_oferta']=$id_oferta;

        $oferta = $this->db_row($query,$parametros);

        return $oferta;
        
    }
    
    
    public function getOfertaOld($id_oferta) {
   
        /*$query = "SELECT o.*,"
            . " t.titulo,"
            . "t.multiplicador,"
            . "t.pdf, p.shortName as idHotel, p.neobookingid as neo, p.link as link, "
            . "p.longName as hotel, p.quality as estrellas, p.city as city "
            . "FROM oferta as o LEFT JOIN textos as t ON t.id_oferta = o.id_oferta "
            . " LEFT JOIN products as p ON o.codhotel = p.shortName "
            . " WHERE o.f_caducidad > NOW() AND o.f_inicio < NOW() "
            . " AND p.activo=1 AND o.id_oferta=" . $id_oferta;*/
        
        $query = "SELECT o.*,t.*, p.shortName as idHotel,p.longName as hotel, p.city as city, p.neobookingid as neobookingid, p.link,"
                . " p.quality as estrellas FROM oferta as o LEFT JOIN textos as t ON t.id_oferta = o.id_oferta LEFT JOIN products as p ON o.codhotel = p.shortName WHERE o.id_oferta = " . $id_oferta;
        
        
       
        $oferta = $this->db_row($query);
       
     
        return $oferta;
        
    }
    
    public function getUrlOferta($id,$nombre,$hotel) {
        
    }
    
    public function getHeaderTemplate($hotel, $seccion_hotel, $datos) {
        
        
        if (!isset($seccion_hotel) || $seccion_hotel=="") { 

            //header por defecto
            GestionTemplates::getTmplInclude("default","hoteles/" . $hotel . "/headers",$datos);

        } else {

            $fichero = GestionTemplates::getTmpl($seccion_hotel,"hoteles/" . $hotel . "/headers");

            if (file_exists($fichero)) {

                GestionTemplates::getTmplInclude($seccion_hotel, "hoteles/" . $hotel . "/headers",$datos);
            } else {
                //header por defecto

                GestionTemplates::getTmplInclude("default","hoteles/" . $hotel . "/headers",$datos);
            }
            
        }
    }
    
    public function getMenuTemplate($hotel, $seccion_hotel) {
  
        $datos = [];
        $datos['hotel'] = $hotel;
        $datos['seccion'] = $seccion_hotel;
        
        $fichero = GestionTemplates::getTmpl("menu","hoteles");

        if (file_exists($fichero)) {

            GestionTemplates::getTmplInclude("menu", "hoteles", $datos);
        } 
        
    }
    
    public function getFooterTemplate($hotel, $seccion_hotel, $datos) {
  
        if (!isset($seccion_hotel) || $seccion_hotel=="") { 

            //footer por defecto
            GestionTemplates::getTmplInclude("default","hoteles/" . $hotel . "/footers",$datos);

        } else {

            $fichero = GestionTemplates::getTmpl($seccion_hotel,"hoteles/" . $hotel . "/footers");

            if (file_exists($fichero)) {

                GestionTemplates::getTmplInclude($seccion_hotel, "hoteles/" . $hotel . "/footers");
            } else {
                //header por defecto

                GestionTemplates::getTmplInclude("default","hoteles/" . $hotel . "/footers",$datos);
            }



        }
        
    }
    
    /**
     * 
     * 
     * @global type $ROOT
     * @global type $ROOT_LANG
     * @return string
     */
    public function getDestinos() {
       
        global $ROOT;
        global $ROOT_LANG;
        
        //hacemos una consulta para sacar los destinos
        $sql_destinos = "SELECT products.province FROM products where activo=1 GROUP BY province";
         
        $destinos = $this->db_list($sql_destinos);
     
        $destinos_total = [];
        //asginar imagenes a los destinos. Se buscará una imagen correspondiente al nombre de la ciudad en la carpeta de imagenes /images/destinos/<nombre de la ciudad>.jpg
        foreach($destinos as $destino) {
            $slug = GestionTemplates::slugify($destino['province']);
            $ruta_imagen = $ROOT . "images/destinos/" . $slug . ".jpg";
            $destino['imagen'] = $ruta_imagen;
            
            //diferenciar si tenemos que realizar un filtro más o ir al landing del hotel
            $sql_numero = "SELECT COUNT(products.province) as numero FROM products where activo=1 AND province = :destino GROUP BY province";
            $parametros['destino']=$destino['province'];
          
            $numero_de_hoteles = $this->db_row($sql_numero,$parametros);
            
            if($numero_de_hoteles['numero']>1) {
                //más de un hotel en la misma pronvicia
                
               //filtro por provincia
               $destino['link'] = "#";
               $destino['class'] = "filtro-destino";
               $destino['data-province'] = $destino['province'];
                
            } else {
                //solo un hotel. enlace directamente al hotel
                
                $sql_link_hotel = "SELECT link,country,province, city FROM products where activo=1 AND province = :destino";
                $parametros['destino']=$destino['province'];
                $link = $this->db_row($sql_link_hotel,$parametros);
                
                $link_url = "hoteles" . "/" . GestionTemplates::slugify($link['country']) . "/"  . GestionTemplates::slugify($link['province']) . "/" . GestionTemplates::slugify($link['city']) . "/oca-" . $link['link'] . "/";
                
                $destino['link'] = $ROOT. $ROOT_LANG. $link_url;
                $destino['class'] = "";
                $destino['data-province'] = "";
            }
            
            $destinos_total [] = $destino;
        }
        
        
        return $destinos_total;
 
    }
    
    public function getExpericencias() {
       
        global $ROOT;
        global $ROOT_LANG;

        $experiencias = [];
        $camino = [];
        
        
        //hoteles en el camino de santiago
        
        $camino['nombre'] ="Camino de Santiago";
        $camino['nombre_en'] ="Camino de Santiago";
        $camino['link'] = $ROOT . "#";
        $camino['slug'] ="";
        $camino['data-experiencia'] = "camino";
        $camino['class'] = "filtro-experiencia";
        $ruta_imagen = $ROOT . "images/experiencias/camino-de-santiago.jpg";
        $camino['imagen'] = $ruta_imagen;
        
        //hoteles de bike
        $bikepark['nombre'] ="Bike Park";
        $bikepark['nombre_en'] ="Bike Park";
         
        $bikepark['link'] = $ROOT . $ROOT_LANG . "hoteles/espana/ourense/pobra-de-trives/oca-manzaneda/";
        $bikepark['class'] = "";
        $bikepark['slug'] ="bike-park";
        $bikepark['data-experiencia'] = "";    
        $ruta_imagen = $ROOT . "images/experiencias/bike-park.jpg";
        $bikepark['imagen'] = $ruta_imagen;
         
         //hoteles de ski
        $ski['nombre'] ="Esquí";
         $ski['nombre_en'] ="Ski";
               
        $ski['link'] = $ROOT . $ROOT_LANG . "hoteles/espana/ourense/pobra-de-trives/oca-manzaneda/";
        $ski['class'] = "";
        $ski['slug'] ="ski";
        $ski['data-experiencia'] = "";    
        $ruta_imagen = $ROOT . "images/experiencias/ski.jpg";
        $ski['imagen'] = $ruta_imagen;
        
          //hoteles PLAYA
        $playa['nombre'] ="Playa";
        $playa['nombre_en'] ="Beach";
        $playa['link'] = $ROOT . "#";
        $playa['data-experiencia'] = "playa";
        $playa['slug'] ="playa";
        $playa['class'] = "filtro-experiencia";
        $ruta_imagen = $ROOT . "images/experiencias/playa.jpg";
        $playa['imagen'] = $ruta_imagen;
        
        //hoteles de bodas
        $bodas['nombre'] ="Bodas";
        $bodas['nombre_en'] ="Weddings";
        $bodas['link'] = $ROOT . "#";
        $bodas['data-experiencia'] = "bodas";
        $bodas['slug'] ="bodas";       
        $bodas['class'] = "filtro-experiencia";
        $ruta_imagen = $ROOT . "images/experiencias/bodas.jpg";
        $bodas['imagen'] = $ruta_imagen;
        
        //hoteles de golf
        $golf['nombre'] ="Golf";
          $golf['nombre_en'] ="Golf";
        $bodas['link'] = $ROOT . "#";
        $golf['data-experiencia'] = "golf";
        $golf['slug'] ="golf";
        $golf['class'] = "filtro-experiencia";
        $ruta_imagen = $ROOT . "images/experiencias/golf.jpg";
        $golf['imagen'] = $ruta_imagen;
        
        
        //hoteles salud
        $salud['nombre'] ="Salud y Balnearios";
        $salud['nombre_en'] ="Health and SPA";
        $salud['link'] = $ROOT . "#";
        $salud['data-experiencia'] = "salud";
        $salud['slug'] ="salud-balnearios";
        $salud['class'] = "filtro-experiencia";
        $ruta_imagen = $ROOT . "images/experiencias/salud.jpg";
        $salud['imagen'] = $ruta_imagen;
        
        //hoteles gatronomía
        $gastronomia['nombre'] ="Gastronomía";
        $gastronomia['nombre_en'] ="Gastronomy";
        $gastronomia['link'] = $ROOT . $ROOT_LANG ."hoteles/espana/a-coruna/santiago-de-compostela/oca-puerta-del-camino/";
        $gastronomia['data-experiencia'] = "";
        $gastronomia['slug'] ="gastronomia";
        $gastronomia['class'] = "";
        $ruta_imagen = $ROOT . "images/experiencias/gastronomia.jpg";
        $gastronomia['imagen'] = $ruta_imagen;
        
        //hoteles turismo rural
        $turismo['nombre'] ="Turismo rural";
        $turismo['nombre_en'] ="Rural Tourism";
        $turismo['link'] = $ROOT . "#";
        $turismo['data-experiencia'] = "turismo";
        $turismo['slug'] ="turismo-rural";
        $turismo['class'] = "filtro-experiencia";
        $ruta_imagen = $ROOT . "images/experiencias/turismo-rural.jpg";
        $turismo['imagen'] = $ruta_imagen;
        
       
        
        $experiencias[] = $camino;
        $experiencias[] = $salud;
        $experiencias[] = $golf;
          $experiencias[] = $bodas;
        $experiencias[] = $playa;
             $experiencias[] = $gastronomia;
        $experiencias[] = $turismo;
        $experiencias[] = $ski;
          //$experiencias[] = $bikepark;
      
     
        
   
       
        
        return $experiencias;
       
 
    }
    
    /**
     * 
     * 
     * @param type $id
     * @return type
     */
    public function getIdNeoBookings($id) {
        
        $sql_link_hotel = "SELECT neobookingid FROM products where activo=1 AND shortName = :id";
        $parametros['id'] = $id;
        $id_neobooking = $this->db_row($sql_link_hotel,$parametros);
        return $id_neobooking;
    }
    
    public function getPrecioMinimo($id) {
        
        //consultamos id neobookings del hotel
        
        $id_neobooking = $this->getIdNeoBookings($id);
        $internal_neobooking = '';
        
        
        if ($id_neobooking!='') {
            //realizamos una llamada para saber el id interno del hotel en neogbooking
            $params_consulta_hoteles = <<<XML1
<GetHotelsRQ xmlns="http://webservices.neobookings.com" 
xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" language="es" 
xsi:schemaLocation="http://webservices.neobookings.com/schemas/NEO_GetHotelsRQ.xsd"><credentials><login>ocapews</login><password>ywqU6wUFSg8g</password></credentials></GetHotelsRQ>
XML1;
            
             $url = "https://webservices.neobookings.com/GetHotelsRQ";//// 
            //URL para obtener los hoteles de la cuenta
            $ch = curl_init();//
            curl_setopt($ch, CURLOPT_URL, $url);//
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params_consulta_hoteles);//
            curl_setopt($ch, CURLOPT_SSLVERSION, 3);
            curl_setopt($ch, CURLOPT_TIMEOUT, 0); //Wait forever
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
            

            $data = curl_exec($ch); // XML respuesta con hoteles de la cuenta//
            curl_close($ch);

           
            $xml = simplexml_load_string($data);
            //print_r($xml);
           //print_r( $id_neobooking['neobookingid']);
           for ($i=0;$i<count($xml->hotels->hotel);$i++) {
               if ($xml->hotels->hotel[$i]['id']==$id_neobooking['neobookingid']) {
                 
                   $internal_neobooking = $xml->hotels->hotel[$i]['internalid'];
                   break;
               }
           }

           //realizamos llamada para conocer el precio mínimo con el id interno de neobooking
           if($internal_neobooking!='') {
               
               //25 dìas de margen para consultar lel precio
               $fecha_desde = date("Y-m-d");
               
               $fecha = date_create($fecha_desde);
               date_add($fecha, date_interval_create_from_date_string('23 days'));
               $fecha_desde_trans = date_format($fecha, 'Y-m-d');
               date_add($fecha, date_interval_create_from_date_string('1 days'));
               $fecha_hasta_trans = date_format($fecha, 'Y-m-d');
               
       
               $params2 = <<<XML2
                                <SearchHotelsRQ xmlns="http://webservices.neobookings.com" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" language="es" xsi:schemaLocation="http://webservices.neobookings.com/schemas/NEO_SearchHotelsRQ.xsd">
                                <credentials>
                                    <login>ocapews</login>
                                   <password>ywqU6wUFSg8g</password>
                                </credentials>
                                <query>
                                <search>
                                <order>price</order>
                                <hotels>
                                <id>$internal_neobooking</id>
                                </hotels>
                                <arrival>$fecha_desde_trans</arrival>
                                <departure>$fecha_hasta_trans</departure>
                                <adults>2</adults>
                                </search>
                                </query>
                                </SearchHotelsRQ>
XML2;
               
                $url = "https://webservices.neobookings.com/SearchHotelsRQ";//// 
              
                $ch = curl_init();//
                curl_setopt($ch, CURLOPT_URL, $url);//
                curl_setopt($ch, CURLOPT_POSTFIELDS, $params2);//
                curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
                $data = curl_exec($ch); // XML respuesta con hoteles de la cuenta//
                curl_close($ch);


                $xml = simplexml_load_string($data);
                $precio = (string)$xml->hotels->hotel->minTotalPrice;
                
               
           } else {
               $precio = "";
           }
           
        
        } else {
            $precio = "";
        }
        
        return $precio;
        
    }
    
}
?>
