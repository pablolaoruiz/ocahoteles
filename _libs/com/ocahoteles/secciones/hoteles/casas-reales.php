<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Apartamentos",
                    "meta_titulo" => "Hotel Oca Casas Reales en el centro de Santiago de Compostela",
                    "meta_descripcion" => "Habitaciones y apartamentos junto a la Catedral de Santiago de Compostela",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Apartments",
                    "meta_titulo" => "Hotel Oca Casas Reales in the center of Santiago de Compostela",
                    "meta_descripcion" => "Rooms and apartments next to the Cathedral of Santiago de Compostela",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
                
                
                        "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas Oca Casas Reales",
                        "meta_descripcion" => "Ofertas de hotel en el centro de Santiago de Compostela",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Oca Casas Reales Offers",
                        "meta_descripcion" => "Hotel offers in the center of Santiago de Compostela",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Oca Casas Reales Entorno",
                        "meta_descripcion" => "Disfruta del centro histórico de Santiago de Compostela, su Catedral, la Plaza do Obradoiro, el Pórtico da Gloria... cultura, historia y gastronomía.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "ca Casas Reales Environment",
                        "meta_descripcion" => "Enjoy the historic center of Santiago de Compostela, its Cathedral, the Plaza do Obradoiro, the Portico da Gloria ... culture, history and gastronomy.",
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
