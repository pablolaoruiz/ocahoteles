<?php

/**
 * Description of Hoteles
 *
 * @author Juan
 */
class Torneos extends BBDD_PDO {
    
    function __construct($link_bbdd) {
       parent::__construct($link_bbdd);
      
    }
    
    public function getTorneos($hotel) {
        
        $sql_torneos = "SELECT * FROM torneos_golf where activo=1 AND fkidhotel = :hotel";
        $parametros['hotel'] = $hotel;
        $torneos = $this->db_list($sql_torneos,$parametros);
        return $torneos;
        
    }

    
    public function getTorneoBySlug($slug) {
       
        //sacar la plantilla
        $query = "SELECT * FROM torneos_golf where activo=1  AND slug = :slug";
        $parametros['slug'] = $slug;
        $torneo = $this->db_row($query,$parametros);
        
     
        return $torneo;
        
    }
    
    public function getTorneoById($id) {
       
        //sacar la plantilla
        $query = $sql_torneos = "SELECT * FROM golf_competiciones WHERE  id = :id";
        $parametros['id'] = $id;
        $torneo = $this->db_row($query,$parametros);
       
     
        return $torneo;
        
    }
    
    public function getTorneoTemplate($link) {
        //comprueba si el hotel tiene un template, si no existe devuelve uno pordefecto
        $fichero = GestionTemplates::getTmpl($link,"hotel");
        if (file_exists($fichero)) {
            return 'tmpl_'. $link;
        } else {
            return "tmpl_default";
        }
        
    }
                        
    
}
?>
