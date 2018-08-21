<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Apartamentos",
                    "meta_titulo" => "Apartamento - Hotel Duerming Rua Travesa en Santiago de Compostela, A Coruña, Galicia.",
                    "meta_descripcion" => "Apartamentos turísticos en pleno centro histórico de Santiago de Compostela que combinan tradición y modernidad.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Apartments",
                    "meta_titulo" => "Apartment - Hotel Duerming Rua Travesa in Santiago de Compostela, A Coruña, Galicia.
",
                    "meta_descripcion" => "Tourist apartments in the historic center of Santiago de Compostela that combine tradition and modernity.
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
                
                           "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en Duerming Rua Travesa en Santiago de Compostela, A Coruña, Galicia.",
                        "meta_descripcion" => "Ofertas en Duerming Rua Travesa en Santiago de Compostela, A Coruña, Galicia.",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers Hotel Duerming Rua Travesa in Santiago de Compostela, A Coruña, Galicia.",
                        "meta_descripcion" => "Offers Hotel Duerming Rua Travesa in Santiago de Compostela, A Coruña, Galicia.",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Apartamentos en pleno centro de Santiago de Compostela.",
                        "meta_descripcion" => "Estudios turísticos en el centro de Santiago de Compostela, junto a la Catedral y la Plaza de Abastos.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Apartments in the center of Santiago de Compostela.
",
                        "meta_descripcion" => "Tourist studies in the center of Santiago de Compostela, next to the Cathedral and Plaza de Abastos.
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
