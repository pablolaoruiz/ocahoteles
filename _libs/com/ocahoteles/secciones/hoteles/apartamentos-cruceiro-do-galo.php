<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Apartamentos",
                    "meta_titulo" => "Apartamentos Cruceiro do Galo en Santiago de Compostela",
                    "meta_descripcion" => "Apartamentos en el casco antiguo de Santiago de Compostela, junto a la Catedral.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Apartments",
                    "meta_titulo" => "Cruceiro do Galo Apartments in Santiago de Compostela",
                    "meta_descripcion" => "Apartments in the old town of Santiago de Compostela, next to the Cathedral.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                         
                "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en los Apartamentos Cruceiro do Galo",
                        "meta_descripcion" => "Descubre las últimas ofertas de los Apartamentos Cruceiro do Galo",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "Ofertas en los Apartamentos Cruceiro do Galo",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Cruceiro do Galo Apartments Offers",
                        "meta_descripcion" => "Discover the latest offers of the Cruceiro do Galo Apartments",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                  "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Apartamentos Cruceiro do Galo Entorno",
                        "meta_descripcion" => "Alojamiento a solo 5 minutos de la Plaza del Obradoiro y la Catedral de Santiago de Compostela",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Cruceiro do Galo Apartments Environment",
                        "meta_descripcion" => "Accommodation only 5 minutes from the Plaza del Obradoiro and the Cathedral of Santiago de Compostela",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
       

              
     
            ]
            
        ];
?>
