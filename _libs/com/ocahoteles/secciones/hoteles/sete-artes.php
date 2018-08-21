<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Duerming Boutique Oca Sete Artes en Santiago de Compostela",
                    "meta_descripcion" => "Un hotel muy acogedor en pleno centro de Santiago de Compostela, perfecto para el turismo en la ciudad con todas las comodidades para el viajero.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Duerming Boutique Oca Sete Artes in Santiago de Compostela
",
                    "meta_descripcion" => "A very cozy hotel in the heart of Santiago de Compostela, perfect for tourism in the city with all the amenities for the traveler.
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
                
                             "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en el Hotel Boutique Oca Sete Artes en Santiago de Compostela",
                        "meta_descripcion" => "Ofertas",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers at the Boutique Hotel Oca Sete Artes in Santiago de Compostela
",
                        "meta_descripcion" => "Offers at the Boutique Hotel Oca Sete Artes in Santiago de Compostela
",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel en pleno centro de Santiago de Compostela",
                        "meta_descripcion" => "A tan solo un minuto a pie de la Plaza del Obradoiro, en pleno centro de Santiago de Compostela, con todas las atraciones turísticas a tu alcance.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel in the center of Santiago de Compostela
",
                        "meta_descripcion" => "Just one minute walk from the Plaza del Obradoiro, in the heart of Santiago de Compostela, with all the tourist attractions at your fingertips.
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
