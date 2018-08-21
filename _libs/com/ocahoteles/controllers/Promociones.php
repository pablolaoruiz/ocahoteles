<?php

/**
 * Description of Promociones
 *
 * @author
 */

class Promociones extends BBDD_PDO {
    
    function __construct($link_bbdd) {
       parent::__construct($link_bbdd);
      
   }
   
   public function comprobarColectivo($dni) {
       
      
	$query = "SELECT colectivos_users.*,colectivos.dto FROM colectivos_users LEFT JOIN colectivos ON colectivos_users.colectivo=colectivos.colectivo WHERE lower(dni)= :dni AND dni<>'' ORDER BY colectivos.dto DESC";
        $parametros['dni'] = $dni;
        $colectivos = $this->db_list($query,$parametros);
        if (count($colectivos)==0) {
            return "NO";
        } else {
            return 'Bienvenid@ '.$colectivos[0]["nombre"].' '.$colectivos[0]["apellidos"];
        }
    
       
   }
   
   public function validarCodigo($codigo,$hotel,$llegada,$salida) {
    
        if (isset($codigo)&& $codigo !="") {
 
            $query = "SELECT * FROM colectivos WHERE codigo= :codigo";
            $parametros['codigo'] = $codigo;
            $codigos = $this->db_list($query,$parametros);
            if (count($codigos)>0) {
                $llegada = $this->dame_fecha($llegada);
                $salida = $this->dame_fecha($salida);
                
                $parametros = [];
                $query_cierres = "SELECT * FROM cierres WHERE shortName IN (SELECT shortName FROM products where neobookingid= :hotel) AND fecha BETWEEN :llegada AND :salida";
                $parametros['hotel'] = $hotel;
                $parametros['llegada'] = $llegada;
                $parametros['salida'] = $salida;
                $promos = $this->db_list($query_cierres,$parametros);
                
                if (count($promos)==0) {
                    if (isset($codigo) && 
                            (strtolower($codigo) == 'liveoca'                      
                            || strtolower($codigo) == 'pastaebasta'
                            || strtolower($codigo) == 'pawteam'
                            || strtolower($codigo) == 'veranoca'
                            || strtolower($codigo) == 'cambrils'
                            || strtolower($codigo) == 'gencat'
                                || strtolower($codigo) == 'dgp'
                                || strtolower($codigo) == 'classic'
                                || strtolower($codigo) == 'ofeap'
                                || strtolower($codigo) == 'soyobra'
                                || strtolower($codigo) == 'pms2018' 
                                || strtolower($codigo) == 'ocadescuento')) {
                        return "1";
                    }
                    return "colectivo";
                } else {
                    return "Las fechas no son válidas para el código introducido";
                }
              
            }else {
                return "El código no es válido";
            }
            
        } else {
            return "1";
        }
       
   }
   
    private function dame_fecha($fecha) {
        $temp=explode("/",$fecha);
        return $temp[2].'-'.$temp[1].'-'.$temp[0];
    }
          
    
}

?>
