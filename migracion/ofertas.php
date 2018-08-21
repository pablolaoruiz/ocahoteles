<?php

 require('../startPage.inc');
 
 //seleccionar las ofertas actuales
 $ofertas = $ctrlHoteles->getOfertasOld();
 $bbdd = new BBDD_PDO($enlace);
 //recorrer las ofertas y añadirlas a la nueva tabla oca_ofertas
 foreach($ofertas as $oferta) {
     
     $titulo = $oferta['titulo'];
     $precio = $oferta['precio_oca'];
     $multiplicador = $oferta['multiplicador'];
     $descripcion = $oferta['derecha'];
     $condiciones = $oferta['izquierda'];
     $fecha_inicio = $oferta['f_inicio'];
     $fecha_fin = $oferta['f_caducidad'];
    // $fecha_alta = $oferta['descripcion'];
     $fecha_activacion = $oferta['descripcion'];
     $id_hotel = $oferta['codhotel'];
     $neobooking_id = $oferta['neobooking_id'];
     $activo = "1";
     
     $sql = "INSERT INTO `galeriaoouoca`.`oca_ofertas`
            (
            `idioma`,
            `titulo`,
            `precio`,
            `multiplicador`,
            `descripcion`,
            `condiciones`,
            `fecha_inicio`,
            `fecha_fin`,
            `fecha_alta`,
            `fecha_activacion`,
            `id_hotel`,
            `neobooking_id`,
            `activo`)
            VALUES
            (
            'es',
            '$titulo',
            '$precio',
            '$multiplicador',
            '$descripcion',
            '$condiciones',
            '$fecha_inicio',
            '$fecha_fin',
             NOW(),
            '$fecha_activacion',
            $id_hotel,
            '$neobooking_id',
            $activo);
            ";
     
    //ejecutar sql
     

   
     $bbdd->db_query($sql);
     
     //ultimo id
     $last_id = $bbdd->db_get_last_id();

     //crear carpeta para imagenes
     // /images/ofertas/<slug-hotel>/<id-oferta>/
     
     //si no existe las del hotel crear
     $path = realpath('../images/ofertas/');
     $carpeta_hotel = $path . '/' . $oferta['link_hotel']; 
   
    if (!file_exists($carpeta_hotel)) {
        //crear carpeta de hotel
        mkdir($path . "/" . $oferta['link_hotel'], 0755);

    }
    
    $path_o = realpath('../images/ofertas/' . $oferta['link_hotel'] . "/");
 
    $carpeta_hotel_oferta =  $path_o . "/" . $last_id; 
   
    if (!file_exists($carpeta_hotel_oferta)) {
        //crear carpeta de hotel
        mkdir($path_o .  "/" . $last_id, 0755);
    }
    
    //copiar las imagens de las ofertas a carpeta actual
    $imagen_1_oferta = realpath( "../../fotos/ofertas/" .  $oferta['id_oferta'] . "/" . $oferta['img_principal']);

   
    $imagen_2_oferta = realpath( "../../fotos/ofertas/" .  $oferta['id_oferta'] . "/" . $oferta['img_secundaria1']);
    $imagen_3_oferta = realpath( "../../fotos/ofertas/" .  $oferta['id_oferta'] . "/" . $oferta['img_secundaria2']);
    $imagen_4_oferta = realpath( "../../fotos/ofertas/" .  $oferta['id_oferta'] . "/" . $oferta['img_secundaria3']);
    $imagen_5_oferta = realpath( "../../fotos/ofertas/" .  $oferta['id_oferta'] . "/" . $oferta['miniatura']);

    $imagen_nuevo_1_oferta = $carpeta_hotel_oferta  . '/' . "001-" . $last_id . ".jpg";
    $imagen_nuevo_2_oferta = $carpeta_hotel_oferta  . '/' . "002-" . $last_id . ".jpg";
    $imagen_nuevo_3_oferta = $carpeta_hotel_oferta  . '/' . "003-" . $last_id . ".jpg";
    $imagen_nuevo_4_oferta = $carpeta_hotel_oferta  . '/' . "004-" . $last_id . ".jpg";
    $imagen_nuevo_5_oferta = $carpeta_hotel_oferta  . '/' . "min-" . $last_id . ".jpg";
   
    if (!copy($imagen_1_oferta, $imagen_nuevo_1_oferta)) {
        echo "Error al copiar $imagen_1_oferta...\n";
    }
    
    if (!copy($imagen_2_oferta, $imagen_nuevo_2_oferta)) {
        echo "Error al copiar $imagen_2_oferta...\n";
    }
    
    if (!copy($imagen_3_oferta, $imagen_nuevo_3_oferta)) {
        echo "Error al copiar $imagen_3_oferta...\n";
    }
    
    if (!copy($imagen_4_oferta, $imagen_nuevo_4_oferta)) {
        echo "Error al copiar $imagen_4_oferta...\n";
    }
    
    if (!copy($imagen_5_oferta, $imagen_nuevo_5_oferta)) {
        echo "Error al copiar $imagen_5_oferta...\n";
    }

    
    
    
 }
 
 
