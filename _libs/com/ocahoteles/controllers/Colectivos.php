<?php

/**
 * Description of Hoteles
 *
 * @author Juan
 */
class Colectivos extends BBDD_PDO {
    
    function __construct($link_bbdd) {
       parent::__construct($link_bbdd);
      
    }
    
    function getColectivo($codigo) {
        //consultamos por $shortName
        $query = "SELECT * FROM colectivos where colectivo=:codigo";
        $parametros = array("codigo"=>$codigo);
        $colectivo = $this->db_row($query,$parametros);
        return $colectivo;
        
    }
    
    function altaPersona($datos) {
        
        //datos contiene: id_colectivo, dni, apellidos, telefono, email, colecctivo, ¿dni_empleado?
        
        $query = "INSERT INTO colectivos_users (dni, nombre,apellidos,telefono,email,colectivo)"
                . " VALUES"
                . " (:dni,:nombre,:apellidos,:telefono,:email,:colectivo)";
        
        $parametros = array(
                        "dni"=>$datos['dni'],
                        "nombre"=>$datos['nombre'],
                        "apellidos"=>$datos['apellidos'],
                        "telefono"=>$datos['telefono'],
                        "email"=>$datos['email'],
                        "colectivo"=>$datos['colectivo'],
            );
       
    
        return $this->db_query($query,$parametros);
    }
    
    function enviarEmailAlta($datos) {
        
        global $appConfig;
        
        //enviamos el email de alta
        $asunto = "Bienvendido a ocahotels.com";
        $to_email = $datos['email'];
        $to_name = $datos['nombre'].' '.$datos['apellidos'];
        $plantilla = $appConfig['EMAILS'] . "alta-persona-colectivo";
        $datos['root'] = $appConfig['ROOT'];
        echo $plantilla;
        $resultado = GestionMail::enviarEmail(
                $asunto, 
                $to_email,                 
                $to_name, 
                $copy_email, 
                 $copy_name,
                  $cCopy_email,
                  $cCopy_name,
                $plantilla, 
                $datos);
        
        return $resultado;
        
    }

    
}
?>
