<?php 

    require('../startPage.inc');
    
    $ctrlForfait = new ForFait($enlace);

    $operacion = $_REQUEST['operacion'];
    
    switch ($operacion) {
        
        case 'add_reserva':
            
            $datos=[];
            $datos['fecha'] = $_POST['fecha'];
            $datos['dias'] = $_POST['dias'];
            $datos['adultos'] = $_POST['adultos'];
            $datos['ninos'] = $_POST['ninos'];
            $datos['preinfantil'] = $_POST['preinfantil'];
            $datos['dni'] = $_POST['dni'];
            $datos['nombre'] = $_POST['nombre'];
            $datos['apellidos'] = $_POST['apellidos'];
            $datos['email'] = $_POST['email'];
            $datos['telefono'] = $_POST['telefono'];
            
            //realizamos la reserva
            $id_reserva = $ctrlForfait->addReserva($datos);

            echo $id_reserva;
            
        break;
        
        case 'calcular_forfait':
            
            $fecha = $_POST['fecha'];
            $dias = $_POST['dias'];
            $adultos=$_POST['adultos']; //adultos
            $ninos=$_POST['ninos']; //ninos
            $preinfantil=$_POST['preinfantil'];

            $totales = $ctrlForfait->calcularTotales($fecha,$dias,$adultos,$ninos,$preinfantil);
            
            echo GestionTemplates::getTmplInclude("form_reserva_forfait","hoteles/manzaneda/content",$totales);
            
        break;
    }
    
    
      

	

    
?>