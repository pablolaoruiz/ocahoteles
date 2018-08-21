<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Apartamentos",
                      "meta_titulo" => "Apartamentos Duerming Portonovo Pico en  Sanxenxo.",
                    "meta_descripcion" => "A escasos metros de la playa Baltar, apartamentos con cocina, baños, televisión...Todas las comodidades para disfrutar en familia de los encantos de Pontevedra.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Apartments",
                    "meta_titulo" => "Apartments Duerming Portonovo Pico in Sanxenxo.",
                    "meta_descripcion" => "A few meters from Baltar beach, apartments with kitchen, bathrooms, television ... All the amenities to enjoy with family the charms of Pontevedra.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                      "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en apartamentos turísticos en Portonovo",
                        "meta_descripcion" => "Ofertas en apartamentos turísticos junto a la playa en Sanxenxo",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers in tourist apartments in Portonovo
",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "Offers in tourist apartments next to the beach in Sanxenxo
",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                
                "entorno" => [
                    
                        "titulo" => "Entorno",
                      "meta_titulo" => "Un paraíso junto al mar en Portonovo.",
                        "meta_descripcion" => "Relax y tranquilidad junto a playas de arena blanca y aguas turquesas. La mejor gastronomía gallega con productos frescos en el corazón turístico de las Rías Baixas.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "A paradise by the sea in Portonovo.",
                        "meta_descripcion" => "Relaxation and tranquility next to white sandy beaches and turquoise waters. The best Galician gastronomy with fresh products in the tourist heart of the Rías Baixas.",
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
