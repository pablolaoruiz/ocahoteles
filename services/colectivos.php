<?php

require('../startPage.inc');



//obtenemos la operain a ejecutar.
$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    
    case 'alta-persona':
        
        //validamos la entrada. Todos los datos son obligatorios y se validan desde el javascript
        //si los datos recibidos no son válidos cortamos la ejecución
        if ($_REQUEST['colectivo']!='' 
                &&  $_REQUEST['dni']!=''
                &&  $_REQUEST['nombre']!=''
                &&  $_REQUEST['apellidos']!=''
                &&  $_REQUEST['telefono']!=''
                &&  ($_REQUEST['email']!='')
                &&  ($_REQUEST['email']==$_REQUEST['reemail'])
            
                ) {
            
            $datos = [];
            
            $datos['colectivo']     = $_REQUEST['colectivo'];
            $datos['codigo']     = $_REQUEST['codigo'];
            $datos['dni']           = $_REQUEST['dni'];
            $datos['nombre']        = $_REQUEST['nombre'];
            $datos['apellidos']     = $_REQUEST['apellidos'];
            $datos['telefono']     = $_REQUEST['telefono'];
            $datos['email']     = $_REQUEST['email'];
            $datos['colectivo_nombre']     = $_REQUEST['colectivo_nombre'];
   
            $resultado = $ctrlColectivos->altaPersona($datos);
            $enviado = $ctrlColectivos->enviarEmailAlta($datos);
            //TODO enviar email de notificación
            if ($enviado) {
               
                
            }
            
        
        } else {
            die();
        }
      
    break;
}
?>
