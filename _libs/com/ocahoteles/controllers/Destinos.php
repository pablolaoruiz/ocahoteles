<?php

/**
 * Description of Destinos
 *
 * @author Juan
 */
class Destinos  extends BBDD_PDO {
    
    function __construct($link_bbdd) {
        
       parent::__construct($link_bbdd);
      
    }
    
    
    public static function getDestinos() {
       
        //hacemos una consulta para sacar los destinos
        $sql_destinos = "SELECT products.city FROM products where activo=1 GROUP BY city";
         
        $destinos = $this->db_list($sql_destinos);
        
        return $destinos;
 
    }
                        
    
}
?>
