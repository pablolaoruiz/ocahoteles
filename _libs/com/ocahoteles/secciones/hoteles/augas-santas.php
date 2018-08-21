<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Augas Santas Balneario y Golf",
                    "meta_descripcion" => "El Hotel Augas Santas está en la Ribeira Sacra, a pocos minutos de Ourense.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Augas Santas Spa and Golf",
                    "meta_descripcion" => "The Hotel Augas Santas is located in the Ribeira Sacra, a few minutes from Ourense",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                       "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en Augas Santas",
                        "meta_descripcion" => "Ofertas de hotel, golf y SPA en Augas Santas",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Augas Santas Offers",
                        "meta_descripcion" => "Offers of hotel, golf and SPA in Augas Santas
",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                      "bonos" => [
                    
                        "titulo" => "Bonos Regalo",
                        "meta_titulo" => "Augas Santas Bonos de Regalo",
                        "meta_descripcion" => "Compra Bonos Regalo para experiencias y estancias en el Hotel Oca Augas Santas en Lugo",
                        "seccion_titulo" => "Bonos Regalo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bonos-regalo",
                     "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_es.html')
                    ],
            
                "vouchers" => [
                    
                        "titulo" => "Gift Vouchers",
                        "meta_titulo" => "Gift Vouchers Villa de Allariz Hotel",
                        "meta_descripcion" => "Buy Gift Vouchers for experiences and hotel nights at Oca Augas Santas in Lugo",
                        "seccion_titulo" => "Vouchers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "gift-vouchers",
                        "origen" => "bonos-regalo",
                      "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_en.html')
                    
                    
                ],
                
                
                
                  "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel Balneario y Spa en el corazón de la Ribeira Sacra",
                        "meta_descripcion" => "Situado en Pantón, Lugo. Un lugar único para disfrutar de la gastronomía gallega y la Ruta de los Embalses.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel Spa and Spa in the heart of the Ribeira Sacra",
                        "meta_descripcion" => "Located in Pantón, Lugo. A unique place to enjoy Galician gastronomy and the Route of the Reservoirs.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                 "termal" => [
                    
                        "titulo" => "Termal",
                        "meta_titulo" => "Augas Santas. Balneario Termal en Pantón, Lugo.",
                        "meta_descripcion" => "Balneario Termal con tratamientos terapéuticos, hidroterapia, masajes, tratamientos de salud y estéticos.",
                        "seccion_titulo" => "Termal",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "termal",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/termal_texto1_es.html')
                    ],
            
                "termal_en" => [
                    
                        "titulo" => "Thermal",
                        "meta_titulo" => "Augas Santas. Thermal Spa in Pantón, Lugo.",
                        "meta_descripcion" => "Thermal Spa with therapeutic treatments, hydrotherapy, massages, health and aesthetic treatments.",
                        "seccion_titulo" => "Thermal",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "thermal",
                        "origen" => "termal",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/termal_texto1_en.html')
                ],

                
                
                 "golf" => [
                    
                        "titulo" => "Golf",
                        "meta_titulo" => "Campo de Golf de Augas Santas en Lugo.",
                        "meta_descripcion" => "El Club de Golf de Augas Santas ofrece 18 hoyos únicos en Lugo. Con cancha de prácticas, putting green, escuela deportiva...",
                        "seccion_titulo" => "Golf",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "golf",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/golf_texto1_es.html')
                    ],
            
                "golf_en" => [
                    
                        "titulo" => "Golf",
                        "meta_titulo" => "Augas Santas Golf Course in Lugo.
",
                        "meta_descripcion" => "The Augas Santas Golf Club offers 18 unique holes in Lugo. With practice court, putting green, sports school ...
",
                        "seccion_titulo" => "Golf",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "golf",
                        "origen" => "golf",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/golf_texto1_en.html')
                ],
                
                "torneos-golf" => [
                    
                        "titulo" => "Torneos de Golf",
                        "meta_titulo" => "Torneos de Golf en el Club Augas Santas",
                        "meta_descripcion" => "Toda la información sobre los torneos celebrados en el Club de Golf Augas Santas de Lugo",
                        "seccion_titulo" => "Golf",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "torneos-golf",
                        "content" =>  ""
                    ],
            
               /* "torneos-golf_en" => [
                    
                        "titulo" => "Golf Tournaments",
                        "meta_titulo" => "Golf Tournaments at the Club Augas Santas",
                        "meta_descripcion" => "All information about the tournaments held at the Augas Santas Golf Club of Lugo",
                        "seccion_titulo" => "Golf Tournaments",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "torneos-golf",
                        "origen" => "torneos-golf",
                        "content" =>  ""
                ],*/
                
               
                
                "eventos" => [
                    
                        "titulo" => "Bodas y Eventos",
                        "meta_titulo" => "Bodas y Eventos en el Hotel Oca Augas Santas",
                        "meta_descripcion" => "Un entorno natural y exclusivo para bodas, comuniones y todo tipo de celebraciones en la Ribeira Sacra.",
                        "seccion_titulo" => "Bodas y Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_es.html')
                    ],
            
                "events" => [
                    
                        "titulo" => "Events and Weddings",
                        "meta_titulo" => "Weddings and Events at the Oca Augas Santas Hotel
",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "Events",
                        "seccion_descripcion" => "A natural and exclusive environment for weddings, communions and all kinds of celebrations in the Ribeira Sacra.
",
                        "lang" => "en",
                        "slug" => "events",
                        "origen" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_en.html')
                    
                ],
                
                
                // AUNAMOS EVENTOS Y BODAS 
               /* "bodas-y-celebraciones" => [
                    
                        "titulo" => "Bodas y celebraciones",
                        "meta_titulo" => "Bodas y celebraciones",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "Bodas y celebraciones",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bodas-y-celebraciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_es.html')
                    ],
            
                "weddings-and-celebrations" => [
                    
                        "titulo" => "Weddings and Celebrations",
                        "meta_titulo" => "eddings and Celebrations",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "Weddings and Celebrations",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "weddings-and-celebrations",
                        "origen" => "bodas-y-celebraciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_en.html')
                    
                ],*/
                
              
         
     
            ]
            
        ];
?>
