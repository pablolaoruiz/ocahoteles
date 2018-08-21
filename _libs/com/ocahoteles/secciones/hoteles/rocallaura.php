<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Spa Oca Rocallaura en Lleida. Hotel apto para mascotas.",
                    "meta_descripcion" => "Un hotel para relajarse, ideal para unas vacaciones en familia, rodeado de la naturaleza en un edificio histórico. Hotel apto para mascotas.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.php')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Spa Oca Rocallaura in Lleida. Pet Friendly Hotel.",
                    "meta_descripcion" => "A hotel to relax, ideal for a family holiday, surrounded by nature in a historic building. Pet friendly Hotel.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.php')
                    
                ],
                
                  "home_ca" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Spa Oca Rocallaura a Lleida.
",
                    "meta_descripcion" => "Un hotel per relaxar-se, ideal per a unes vacances en família, envoltat de la natura en un edifici històric. Hotel apte per a mascotes.
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "ca",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_ca.php')
                    
                ],
                
                  "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en Oca Rocallaura SPA",
                        "meta_descripcion" => "Ofertas en Oca Rocallaura SPA en Lleida",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Ofertas en Oca Rocallaura SPA",
                        "meta_descripcion" => "Ofertas en Oca Rocallaura SPA en Lleida",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                    "ofertes" => [
                    
                        "titulo" => "Ofertes",
                        "meta_titulo" => "Ofertas en Oca Rocallaura SPA",
                        "meta_descripcion" => "Ofertes en Oca Rocallaura SPA a Lleida",
                        "seccion_titulo" => "Ofertes",
                        "seccion_descripcion" => "",
                        "lang" => "ca",
                        "slug" => "ofertes",
                        "origen" => "ofertas"
                    
                ],
                
                  "bonos" => [
                    
                        "titulo" => "Bonos Regalo",
                        "meta_titulo" => "Oca Rocallaura Bonos de Regalo",
                        "meta_descripcion" => "Compra Bonos Regalo para experiencias y estancias en el Hotel Oca Rocallaura en Lleida",
                        "seccion_titulo" => "Bonos Regalo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bonos-regalo",
                     "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_es.html')
                    ],
            
                "vouchers" => [
                    
                        "titulo" => "Gift Vouchers",
                        "meta_titulo" => "Gift Vouchers Oca Rocallaura Hotel",
                        "meta_descripcion" => "Buy Gift Vouchers for experiences and hotel nights at Oca Rocallaura in Lleida",
                        "seccion_titulo" => "Vouchers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "gift-vouchers",
                        "origen" => "bonos-regalo",
                      "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_en.html')                  
                    ],
                
                      "xesc_regal" => [                    
                        "titulo" => "Xesc Regal",
                        "meta_titulo" => "Oca Rocallaura Bons de Regal",
                        "meta_descripcion" => "Compra Bons Regal per experiències i estades a l'Hotel Oca Rocallaura a Lleida",
                        "seccion_titulo" => "Xesc Regal",
                        "seccion_descripcion" => "",
                        "lang" => "ca",
                        "slug" => "xesc-regal",
                        "origen" => "bonos-regalo",
                      "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_ca.html')                  
                    ],
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel en Rocallaura, Lleida.",
                        "meta_descripcion" => "En la Comarca del Urgel, en pleno entorno natural y con multitud de rutas, actividades y visitas disponibles a pocos kilómetros.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel in Rocallaura, Lleida.
",
                        "meta_descripcion" => "In the region of Urgel, in full natural environment and with many routes, activities and visits available a few kilometers.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                   "entorn" => [
                    
                        "titulo" => "Entorn",
                        "meta_titulo" => "Hotel a Rocallaura, Lleida
",
                        "meta_descripcion" => "A la Comarca de l'Urgell, en ple entorn natural i amb multitud de rutes, activitats i visites disponibles a pocs quilòmetres.",
                        "seccion_titulo" => "Entorn",
                        "seccion_descripcion" => "",
                        "lang" => "ca",
                        "slug" => "entorn",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_ca.html')
                    
                ],
                
                  "relax" => [
                    
                        "titulo" => "RELAX",
                        "meta_titulo" => "Relax en el Hotel Oca Rocallaura en Lleida.",
                        "meta_descripcion" => "Oca Rocallaura permite disfrutar del descanso y bienestar en sus instalaciones, como su piscina interior, disponible todo el año, y piscina exterior, perfecta para los calurosos meses estivales. ",
                        "seccion_titulo" => "RELAX",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "relax",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/spa_texto1_es.html')
                    ],
            
                "relax_en" => [
                    
                        "titulo" => "RELAX",
                        "meta_titulo" => "Relax at the Hotel Oca Rocallaura in Lleida.

",
                        "meta_descripcion" => "The Oca Rocallaura hotel allows you to enjoy rest and well-being in its facilities, such as its indoor pool, available all year round, and outdoor pool, perfect for the hot summer months.",
                        "seccion_titulo" => "RELAX",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "relax",
                        "origen" => "relax",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/spa_texto1_en.html')
                    
                ],
                
                "relax_ca" => [
                    
                        "titulo" => "RELAX",
                        "meta_titulo" => "Relax a l'Hotel Oca Rocallaura a Lleida.",
                        "meta_descripcion" => "L'spa de Oca Rocallaura permet gaudir del descans i benestar en les seves instal·lacions, com la seva piscina interior, disponible tot l'any, i piscina exterior, perfecta per als calorosos mesos estivals.",
                        "seccion_titulo" => "RELAX",
                        "seccion_descripcion" => "",
                        "lang" => "ca",
                        "slug" => "relax",
                        "origen" => "relax",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/spa_texto1_ca.html')
                    
                ],
                
                             "eventos" => [
                    
                        "titulo" => "Eventos",
                        "meta_titulo" => "Eventos en Hotel Oca Rocallaura en Lleida.",
                        "meta_descripcion" => "El spa de Oca Rocallaura permite disfrutar del descanso y bienestar en sus instalaciones, como su piscina interior, disponible todo el año, y piscina exterior, perfecta para los calurosos meses estivales. ",
                        "seccion_titulo" => "Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_es.html')
                    ],
            
                "events" => [
                    
                        "titulo" => "Events",
                        "meta_titulo" => "Events at the Hotel Oca Rocallaura in Lleida.

",
                        "meta_descripcion" => "The Oca Rocallaura spa allows you to enjoy rest and well-being in its facilities, such as its indoor pool, available all year round, and outdoor pool, perfect for the hot summer months.",
                        "seccion_titulo" => "Events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "events",
                        "origen" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_en.html')
                    
                ],
                
                            "events" => [
                    
                        "titulo" => "Esdeveniments",
                        "meta_titulo" => "Esdeveniments a Hotel Oca Rocallaura a Lleida.",
                        "meta_descripcion" => "L'spa de Oca Rocallaura permet gaudir del descans i benestar en les seves instal·lacions, com la seva piscina interior, disponible tot l'any, i piscina exterior, perfecta per als calorosos mesos estivals.",
                        "seccion_titulo" => "Esdeveniments",
                        "seccion_descripcion" => "",
                        "lang" => "ca",
                        "slug" => "esdeveniments",
                        "origen" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_ca.html')
                    
                ],
                
                

              
                
               
             
                
               
     
            ]
            
        ];
?>
