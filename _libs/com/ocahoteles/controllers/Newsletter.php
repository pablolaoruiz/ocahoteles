<?php

/**
 * Description of Hoteles
 *
 * @author Juan
 */
class Newsletter extends BBDD_PDO {
    
    function __construct($link_bbdd) {
       parent::__construct($link_bbdd);
      
    }
    
    function altaNewsletter($email) {
        
        $query = 'INSERT INTO `users`(`email`, `alta`) VALUES (:email, :alta)';

        $parametros = array(
                        "email"=>$email,
                        "alta"=>date("Y-m-d")
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
