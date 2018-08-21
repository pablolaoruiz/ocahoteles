<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Villas",
                    "meta_titulo" => "Villas de vacaciones en Sanxenxo.",
                    "meta_descripcion" => "Oca Sanxenxo Residences te ofrece villas independientes en el corazón de las Rías Baixas, con baños, cocina completa, salón, terrazas...",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Villas",
                    "meta_titulo" => "Holiday villas in Sanxenxo
",
                    "meta_descripcion" => "Oca Sanxenxo Residences offers you independent villas in the heart of the Rías Baixas, with bathrooms, full kitchen, living room, terraces ...
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
                
                
                             "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en villas de vacaciones en Sanxenxo",
                        "meta_descripcion" => "Ofertas en villas vacacionales en las Rías Baixas",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers in holiday villas in Sanxenxo
",
                        "meta_descripcion" => "Offers in holiday villas in the Rías Baixas
",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Disfruta de tus vacaciones en las Rías Baixas, Sanxenxo, Portonovo, O Grove...",
                        "meta_descripcion" => "Rodeado de playas, parques naturales y la mejor oferta cultural y de ocio de Galicia, Oca Sanxenxo Residences es perfecto para el turismo en familia.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Enjoy your holidays in the Rías Baixas, Sanxenxo, Portonovo, O Grove ...
",
                        "meta_descripcion" => "Surrounded by beaches, natural parks and the best cultural and leisure offer in Galicia, Oca Sanxenxo Residences is perfect for family tourism.
",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_en.html')
                    
                ],
                
               
               
                
   
                
               
             
                
               
     
            ]
            
        ];
?>
