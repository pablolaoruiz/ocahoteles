<?php

require('../startPage.inc');

//obtenemos la operain a ejecutar.
$operacion = $_REQUEST['operacion'];

switch ($operacion) {
    
    case 'validar_codigo':
      
        
        $promo = $_REQUEST['promo'];
        $hotel = $_REQUEST['id'];
        $llegada = $_REQUEST['arrival'];
        $salida = $_REQUEST['departure'];
        
        $resultado = $ctrlPromociones->validarCodigo($promo,$hotel,$llegada,$salida);
        echo $resultado;

        die();
        
    break;

    case 'comprobar_colectivo':
        
        $dni = $_REQUEST['dni'];
        $resultado = $ctrlPromociones->comprobarColectivo($dni);
        echo $resultado;

    break;
    
 }
?>
