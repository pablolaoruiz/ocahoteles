<?php

require('../startPage.inc');



//obtenemos la operain a ejecutar.
$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    
    case 'registro_newsletter':
        
     
            
            $datos = [];                     
            $datos['email']     = $_REQUEST['email'];           
            $resultado = $ctrlNewsletter->addNewsLetter($datos);         
            //TODO enviar email de notificación
          
      
    break;
}
?>
