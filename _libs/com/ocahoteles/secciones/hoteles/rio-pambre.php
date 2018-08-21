<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Río Pambre Balneario en Lugo",
                    "meta_descripcion" => "Un ambiente íntimo y relajado en habitaciones tradicionales de piedra, con todas las comodidades de un hotel moderno",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Rio Pambre Spa in Lugo",
                    "meta_descripcion" => "An intimate and relaxed atmosphere in traditional stone rooms, with all the comforts of a modern hotel",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                        "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas del Hotel Balneario Oca Río Pambre",
                        "meta_descripcion" => "Ofertas del Hotel Balneario Oca Río Pambre",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers Hotel Balneario Oca Río Pambre",
                        "meta_descripcion" => "Offers Hotel Balneario Oca Río Pambre",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                         "bonos" => [
                    
                        "titulo" => "Bonos Regalo",
                        "meta_titulo" => "Hotel Oca Río Pambre Bonos de Regalo",
                        "meta_descripcion" => "Compra Bonos Regalo para experiencias y estancias en el Hotel Oca Río Pambre en Lugo",
                        "seccion_titulo" => "Bonos Regalo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bonos-regalo",
                     "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_es.html')
                    ],
            
                "vouchers" => [
                    
                        "titulo" => "Gift Vouchers",
                        "meta_titulo" => "Gift Vouchers Hotel Oca Rio Pambre",
                        "meta_descripcion" => "Buy Gift Vouchers for experiences and hotel nights at Oca Río Pambre in Lugo",
                        "seccion_titulo" => "Vouchers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "gift-vouchers",
                        "origen" => "bonos-regalo",
                      "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_en.html')                  
                    ],
                
               
                "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel en plena naturaleza en el Camino de Santiago.",
                        "meta_descripcion" => "En Palas de Rei, Lugo. En el centro del Camino de Santiago entre verdes pazos, a la orilla del Río Pambre y rodeados de la flora y fauna de la comarca de Ulloa.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel surrounded by nature on the Camino de Santiago.",
                        "meta_descripcion" => "In Palas de Rei, Lugo. In the center of the Camino de Santiago between green pazos, on the banks of the Pambre River and surrounded by the flora and fauna of the Ulloa region.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                 "balneario" => [
                    
                        "titulo" => "Balneario",
                        "meta_titulo" => "Balneario del Hotel Oca Rio Pambre en Palas de Rei",
                        "meta_descripcion" => "Balneario de aguas naturales en plena naturaleza de Galicia. Amplia oferta de tratamientos, masajes, envolturas en un ambiente excepcional.",
                        "seccion_titulo" => "Balneario",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "balneario",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/balneario_texto1_es.html')
                    ],
            
                "balneario_en" => [
                    
                        "titulo" => "Spa",
                        "meta_titulo" => "Spa of the Hotel Oca Rio Pambre in Palas de Rei",
                        "meta_descripcion" => "Spa of natural waters in full nature of Galicia. Wide range of treatments, massages, wraps in an exceptional environment.",
                        "seccion_titulo" => "Balneario",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "spa",
                        "origen" => "balneario",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/balneario_texto1_en.html')
                    
                ],
                
                "camino" => [
                    
                        "titulo" => "Camino de Santiago",
                        "meta_titulo" => "Camino de Santigo en el Hotel Oca Río Pambre",
                        "meta_descripcion" => "Los peregrinos del Camino de Santiago gozan de ventajas extra a su paso por nuestro hotel.",
                        "seccion_titulo" => "Camino de Santigo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "camino-de-santiago",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/camino_texto1_es.html')
                    ],
            
                "camino_en" => [
                    
                        "titulo" => "Camino de Santiago",
                        "meta_titulo" => "Camino de Santigo Pambre | Oca Hotels",
                        "meta_descripcion" => "The pilgrims of the Camino de Santiago enjoy extra benefits as they pass through our hotel",
                        "seccion_titulo" => "Camino de Santigo Pambre",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "camino-de-santiago-en",
                        "origen" => "camino-de-santiago",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/camino_texto1_en.html')
                    
                ],
                
               
                
        

                
     
            ]
            
        ];
?>
