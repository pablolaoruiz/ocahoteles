<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel de 4 estrellas en Santiago de Compostela. Este hotel admite mascotas. Oca Puerta del Camino.",
                    "meta_descripcion" => "Un hotel espacioso y luminoso, con 160 habitaciones, suites y alojamiento adaptado para personas con movilidad reducida y para mascotas",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "4 star hotel in Santiago de Compostela. Pet Friendly Hotel. Oca Puerta del Camino.",
                    "meta_descripcion" => "A spacious and bright hotel, with 160 rooms, suites and accommodation adapted for people with reduced mobility and for pets",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
             
                       "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas Hotel Oca Puerta del Camino en Santiago de Compostela",
                        "meta_descripcion" => "Ofertas Hotel Oca Puerta del Camino en Santiago de Compostela",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers Hotel Oca Puerta del Camino in Santiago de Compostela",
                        "meta_descripcion" => "Offers Hotel Oca Puerta del Camino in Santiago de Compostela",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                  "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel Oca Puerta del Camino en Santiago de Compostela.",
                        "meta_descripcion" => "Hotel en Galicia, cerca de Santiago de Compostela, las Rías Baixas, Vigo, Ourense, la Ribeira Sacra...",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel Oca Puerta del Camino in Santiago de Compostela.
",
                        "meta_descripcion" => "Hotel in Galicia, near Santiago de Compostela, the Rías Baixas, Vigo, Ourense, the Ribeira Sacra ...
",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_en.html')
                    
                ],
                
                 "actividades" => [
                    
                        "titulo" => "Actividades",
                        "meta_titulo" => "Qué hacer en Santiago de Compostela. Hotel Oca Puerta del Camino",
                        "meta_descripcion" => "Disfruta de los Museos de Santiago de Compostela y de la gastronomía gallega en el Hotel Oca Puerta del Camino",
                        "seccion_titulo" => "Actividades",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_es.html')
                    ],
            
                "activities" => [
                    
                        "titulo" => "Activities",
                        "meta_titulo" => "What to do in Santiago de Compostela. Hotel Oca Puerta del Camino",
                        "meta_descripcion" => "Enjoy the Museums of Santiago de Compostela and the Galician gastronomy at the Hotel Oca Puerta del Camino",
                        "seccion_titulo" => "Activities",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "activities",
                        "origen" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_en.html')
                    
                ],
                
                  "bodas" => [
                    
                        "titulo" => "Bodas y Eventos",
                        "meta_titulo" => "Bodas y Eventos en San Lázaro, Santiago de Compostela.",
                        "meta_descripcion" => "Muy accesible, con amplias zonas verdes, salones de banquetes, jardín inglés, cocina de alta gama...El lugar perfecto para su celebración o congreso en Santiago de Compostela.",
                        "seccion_titulo" => "Bodas y Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bodas",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_es.html')
                    ],
            
                "weddings" => [
                    
                        "titulo" => "Weddings and Events",
                        "meta_titulo" => "Weddings and Events in San Lázaro, Santiago de Compostela.
",
                        "meta_descripcion" => "Very accessible, with large green areas, banquet halls, English garden, high-end cuisine ... The perfect place for your celebration or congress in Santiago de Compostela.
",
                        "seccion_titulo" => "Weddings and Events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "weddings",
                        "origen" => "bodas",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_en.html')
                    
                ],
                
               
                "restauracion" => [
                    
                        "titulo" => "Restauración",
                        "meta_titulo" => "Gastronomía gallega en el Restaurante Berenguela y Gastobar Golden Goose.",
                        "meta_descripcion" => "Pablo Vila y Daniel Rey se encargan de la oferta gastrnómica de Oca Puerta del Camino. El restaurante y el Gastrobar ofrecen productos con Denominación de Origen de Galicia.",
                        "seccion_titulo" => "Restauración",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_es.html')
                    ],
            
                "restauracion_en" => [
                    
                        "titulo" => "Restoration",
                        "meta_titulo" => "Galician gastronomy at the Berenguela and Gastobar Golden Goose Restaurant.",
                        "meta_descripcion" => "Pablo Vila and Daniel Rey are in charge of the gastronomic offer of Oca Puerta del Camino. The restaurant and Gastrobar offer products with Denomination of Origin of Galicia.",
                        "seccion_titulo" => "Restoration",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "restoration",
                        "origen" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_en.html')
                ],
                
               
                
               /* "congresos" => [
                    
                        "titulo" => "Congresos y Convenciones",
                        "meta_titulo" => "Congresos y Convenciones",
                        "meta_descripcion" => "Congresos y Convenciones",
                        "seccion_titulo" => "Congresos y Convenciones",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "congresos-convenciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/congresos_es.html')
                    ],
            
                "congress" => [
                    
                        "titulo" => "Congresos y Convenciones",
                        "meta_titulo" => "Congresos y Convenciones",
                        "meta_descripcion" => "Congresos y Convenciones",
                        "seccion_titulo" => "Congresos y Convenciones",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "congresos-convenciones-en",
                        "origen" => "congresos-convenciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/congresos_en.html')
                    
                ],*/
                
              
                
              
          
     
            ]
            
        ];
?>
