<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Duerming San Vicente en O Grove, Pontevedra.",
                    "meta_descripcion" => "Un hotel para relajarse, rodeado de la naturaleza, a los pies de la playa y con todas las comodidades cono wi-fi, parking o piscina.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Duerming San Vicente in O Grove, Pontevedra.
",
                    "meta_descripcion" => "A hotel to relax, surrounded by nature, at the foot of the beach and with all amenities wi-fi, parking or pool.
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
                
                          "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en Duerming San Vicente en Pontevedra",
                        "meta_descripcion" => "Ofertas en Duerming San Vicente en Pontevedra",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers Hotel Duerming San Vicente in Pontevedra",
                        "meta_descripcion" => "Offers in Hotel Duerming San Vicente in Pontevedra",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel en la península de O Grove, perfecto para visitar las Rías Baixas",
                        "meta_descripcion" => "Playas preciosas y calas escondidas rodean el Hotel Duerming San Vicente. Con fácil acceso a museos, el acuario, miradores, la Isla de la Toja.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel on the O Grove peninsula, perfect for visiting the Rías Baixas
",
                        "meta_descripcion" => "Beautiful beaches and hidden coves surround the Hotel Duerming San Vicente. With easy access to museums, the aquarium, viewpoints, the Isla de la Toja.
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
