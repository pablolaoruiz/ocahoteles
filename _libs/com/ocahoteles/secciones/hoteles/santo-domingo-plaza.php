<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Santo Domingo en Oviedo. Hotel apto para mascotas.",
                    "meta_descripcion" => "Un hotel de 4 estrellas de estilo contemporáneo en pleno centro de Oviedo. Hotel apto para mascotas, con business center, gimnasio, sala de conferencias, parking y todas las comodidades necesarias",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Santo Domingo in Oviedo.
",
                    "meta_descripcion" => "A contemporary 4-star hotel right in the center of Oviedo. With business center, gym, conference room, parking and all the necessary amenities
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                         "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas de Hotel en Oca Santo Domingo en el centro de Oviedo",
                        "meta_descripcion" => "Ofertas de Hotel en Oca Santo Domingo en el centro de Oviedo",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Hotel offers in Oca Santo Domingo in the center of Oviedo
",
                        "meta_descripcion" => "Hotel offers in Oca Santo Domingo in the center of Oviedo
",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
               
                "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel moderno en pleno centro de Oviedo.",
                        "meta_descripcion" => "A 5 minutos andando del centro de Oviedo, Oca Santo Domingo es perfecto para visitar el centro histórico de la ciudad.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Modern hotel in the center of Oviedo.
",
                        "meta_descripcion" => "A 5 minute walk from the center of Oviedo, Oca Santo Domingo is perfect for visiting the historic center of the city.
",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                  "eventos" => [
                    
                        "titulo" => "Bodas y Eventos",
                        "meta_titulo" => "Bodas y Celebraciones en Oviedo, Asturias. Oca Santo Domingo.",
                        "meta_descripcion" => "Celebra tu Boda o Evento en Oca Santo Domingo. Amplios salones, menús personalizados y asesoramiento continuo a 5 minutos de la ciudad de Oviedo.",
                        "seccion_titulo" => "Bodas y Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_es.html')
                    ],
            
                "events" => [
                    
                        "titulo" => "Events and weddings",
                        "meta_titulo" => "Weddings and Celebrations in Oviedo, Asturias. Oca Santo Domingo.
",
                        "meta_descripcion" => "Celebrate your Wedding or Event in Oca Santo Domingo. Large rooms, personalized menus and continuous advice 5 minutes from the city of Oviedo.
",
                        "seccion_titulo" => "Events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "events",
                        "origen" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_en.html')
                    
                ],
                
                
                
                "actividades" => [
                    
                        "titulo" => "Actividades",
                        "meta_titulo" => "Oviedo es una ciudad llena de vida y tradiciones para disfrutar",
                        "meta_descripcion" => "El Bulevar de la sidra, el centro histórico, la gastronomía asturiana, Oviedo es una ciudad llena de atractivos turísticos para el viajero ",
                        "seccion_titulo" => "Actividades",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_es.html')
                    ],
            
                "activities" => [
                    
                        "titulo" => "Activities",
                        "meta_titulo" => "Oviedo is a city full of life and traditions to enjoy
",
                        "meta_descripcion" => "The Boulevard of the cider, the historic center, the Asturian gastronomy, Oviedo is a city full of tourist attractions for the traveler
",
                        "seccion_titulo" => "Activities",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "activities",
                        "origen" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_en.html')
                    
                ],
                
       
            ]
            
        ];
?>
