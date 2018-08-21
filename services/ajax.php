<?php

require('../startPage.inc');



//obtenemos la operain a ejecutar.
$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    
    case 'experiencias':
      
        $contenido = $ctrlHoteles->getPestana('experiencias');
        if ($contenido!='') {
             include($contenido);
        }
    
        die();
        
    break;
    
    case 'destinos':
       
        $contenido = $ctrlHoteles->getPestana('destinos');
        if ($contenido!='') {
             include($contenido);
        }
    
        die();
        
    break;
    
    case 'bonos':
       
        $contenido = $ctrlHoteles->getPestana('bonos');
        if ($contenido!='') {
             include($contenido);
             }
    die();        
    break;  
            
    case 'hoteles':
      
        $province = $_REQUEST['province'];
        $experiencia = $_REQUEST['experiencia'];
    
        
        
        $filtro=[];
        $filtro['provincia'] = $province;
        $filtro['experiencia'] = $experiencia;
   
        
        $contenido = $ctrlHoteles->getPestana('hoteles',$filtro);

        if ($contenido!='') {
             include($contenido);
        }
    
        die();
        
    break;
    
    case 'ofertas':
        
        $contenido = $ctrlHoteles->getPestana('ofertas');
        if ($contenido!='') {
             include($contenido);
        }
    
        die();
        
    break;
    
    case 'registro_newsletter':
        $email = $_REQUEST['email_newsletter'];
        //validamos que venga el nombre y el email
        $exito = false;
        if ($email !='') {
            $exito = $ctrlNewsletter->altaNewsletter($email);
        }
        
        header('Content-type: application/json; charset=UTF-8');
        
        $resultado['exito'] = $exito;
        
        //se envió el mensaje con éxito
        If ($exito) {
            $resultado['mensaje']  = "<p class='txt-a-c-md pd-r-20 pd-l-20 mg-t-40 mg-b-40'>" . _("Gracias por registrarte. Sólo te escribiremos para ofrecerte nuestras mejores ofertas y que no te pierdas ninguna.") ."</p>";
        } else {
            $resultado['mensaje']  = "<p class='txt-a-c-md pd-r-20 pd-l-20 mg-t-40 mg-b-40'>" . _("Opss!! Error, prueba más tarde") ."</p>";
        }
        echo json_encode($resultado);
        
    
        die();
        
        break;
        
    case 'buscador':
      
        header('Content-type: application/json; charset=UTF-8');
        
        $filtro = $_REQUEST['term'];
        $resultado = $ctrlHoteles->buscarHotel($filtro);
        echo json_encode($resultado);

        die();
        
    break;

    case 'precio_minimo':
      
        header('Content-type: text/html; charset=UTF-8');
        
        $id = $_REQUEST['id'];
        $resultado = $ctrlHoteles->getPrecioMinimo($id);
        
        if ($resultado!="" && $resultado!="0" && $resultado!="0,00 €") {
             echo "<p style='line-height: 1.1em'><span class='txt-200 pd-b-10'>$resultado</span><br>Habitación doble</p>";
        } else {
            echo "<p style='line-height: 1.1em'><span class='txt-160 pd-b-10'>Consultar</span><br>&nbsp;</p>";
        }
        die();
        
    break;
 }
?>
