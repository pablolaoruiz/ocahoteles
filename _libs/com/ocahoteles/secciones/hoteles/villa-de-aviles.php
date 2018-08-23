<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Villa de Avilés en Asturias",
                    "meta_descripcion" => "Oca Villa de Avilés es un hotel en Asturias muy cerca del Centro Cultural Internacional Oscar Niemeyer",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                    
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Villa de Avilés in Asturias
",
                    "meta_descripcion" => "Oca Villa de Avilés is a hotel in Asturias very close to the Oscar Niemeyer International Cultural Center
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                     "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                            "eventos" => [
                    
                        "titulo" => "Eventos",
                        "meta_titulo" => "Eventos en el Hotel Villa de Avilés en Asturias",
                        "meta_descripcion" => "Salones para eventos en Avilés, cerca del Centro Cultural Oscar Niemeyer. Totalmente equipados, amplios y luminosos.",
                        "seccion_titulo" => "Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_es.html')
                    ],
            
                "events" => [
                    
                        "titulo" => "Events",
                        "meta_titulo" => "Events at the Villa de Avilés Hotel in Asturias
",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "Events",
                        "seccion_descripcion" => "Meeting rooms for events in Avilés, near the Oscar Niemeyer Cultural Center. Fully equipped, spacious and bright.
",
                        "lang" => "en",
                        "slug" => "events",
                        "origen" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_en.html')
                    
                ],
                
                
                                 "restauracion" => [
                    
                        "titulo" => "Restauración",
                        "meta_titulo" => "Restaurante El Galeón en Oca Villa de Avilés",
                        "meta_descripcion" => "Conoce Avilés a través del paladar, descubriendo la más rica gastronomía asturiana. En Oca Villa de Avilés podrás probar una amplia selección de platos dentro del restaurante El Galeón. ",
                        "seccion_titulo" => "Restauración",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_texto1_es.html')
                    ],
            
                "restaurant" => [
                    
                        "titulo" => "Restaurant",
                        "meta_titulo" => "El Galeon restaurant in Oca Villa de Avilés

",
                        "meta_descripcion" => "Get to know Avilés through the palate, discovering the richest Asturian gastronomy. In Oca Villa de Avilés you can try a wide selection of dishes inside El Galeón restaurant.",
                        "seccion_titulo" => "Restaurant",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "restaurant",
                        "origen" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_texto1_en.html')
                    
                ],
                
                
                   /*"entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel en Villa de Sarria a 5 minutos del centro de la ciudad.",
                        "meta_descripcion" => "Duerming Villa de Sarria es ideal para hacer el Camino de Santiago Francés en sus últimas etapas, con servicio especial para peregrinos y muy bien conectado con resto de ciudades gallegas. ",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel in Villa de Sarria 5 minutes from the city center.",
                        "meta_descripcion" => "Duerming Villa de Sarria is ideal to make the Camino de Santiago Francés in its last stages, with special service for pilgrims and very well connected with other Galician cities.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],*/
                
           
     
            ]
            
        ];
?>
