<?php

//

 require('../startPage.inc');
 
//seleccionar las ofertas actuales
$torneos = $ctrlHoteles->getTorneos("", "2015-01-01");
$bbdd = new BBDD($enlace);

$path = realpath('../images/torneos-golf/');
$carpeta_hotel = $path . '/' . "augas-santas"; 

if (!file_exists($carpeta_hotel)) {
   //crear carpeta de hotel
   mkdir($path. '/' . "augas-santas", 0755);
   
}

//recorrer los torneos de golf y añadir las imagenes a la carpeta
 foreach($torneos as $torneo) {

    //id de toreno
    $last_id = $torneo['ID'];

    $path_o = realpath('../images/torneos-golf/' . "augas-santas" . "/");

    $carpeta_hotel_torneo =  $path_o . "/" . $last_id; 
    
    //copiar las imagens de las ofertas a carpeta actual
    $imagen_1_torneo = realpath( "../../fotos/products/2997/golf_competiciones/" .  $torneo['IMAGEN']);
    if ($torneo['IMAGEN']!='') {
        $imagen_nuevo_1_torneo = $carpeta_hotel  . '/' . "torneo-" . $last_id . ".jpg";
        if (!copy($imagen_1_torneo, $imagen_nuevo_1_torneo)) {
            echo "Error al copiar $imagen_1_torneo...\n";
        }
    }
    
    //copiar documentos a doc/augas-santas/torneos-golf
    //$path_d = realpath('../docs/augas-santas/torneos-golf/');
    
    //upload/golf_competiciones
    
    
 }
 
 
