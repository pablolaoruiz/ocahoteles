<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Vila de Allariz - Hotel y Spa en Ourense apto para mascotas",
                    "meta_descripcion" => "Precioso hotel en el pueblo gallego de Allariz, con centro termal y disponible para organizar bodas y eventos. Hotel apto para mascotas.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Vila de Allariz - Spa",
                    "meta_descripcion" => "Beautiful hotel in the Galician village of Allariz, with thermal center and available to organize weddings and events.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                
                    
                  "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Vila de Allariz Ofertas",
                        "meta_descripcion" => "Descubre las últimas ofertas del Hotel Oca Vila de Allariz en Ourense",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Vila de Allariz Offers",
                        "meta_descripcion" => "Discover the latest offers of the Hotel Oca Vila de Allariz in Ourense",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                "bonos" => [
                    
                        "titulo" => "Bonos Regalo",
                        "meta_titulo" => "Vila de Allariz Bonos de Regalo",
                        "meta_descripcion" => "Compra Bonos Regalo para experiencias y estancias en el Hotel Oca Villa de Allariz en Ourense",
                        "seccion_titulo" => "Bonos Regalo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bonos-regalo",
                     "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_es.html')
                    ],
            
                "vouchers" => [
                    
                        "titulo" => "Gift Vouchers",
                        "meta_titulo" => "Gift Vouchers Villa de Allariz Hotel",
                        "meta_descripcion" => "Buy Gift Vouchers for experiences and hotel nights at Oca Villa de Allariz in Ourense",
                        "seccion_titulo" => "Vouchers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "gift-vouchers",
                        "origen" => "bonos-regalo",
                      "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_en.html')
                    
                    
                ],
                
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Vila de Allariz Entorno",
                        "meta_descripcion" => "El Hotel Vila de Allariz está ubicado en la ribera del Río Arnoia y su parque etnográfico.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Vila de Allariz Environment",
                        "meta_descripcion" => "The Hotel Vila de Allariz is located on the banks of the Arnoia River and its ethnographic park.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                    "actividades" => [
                    
                        "titulo" => "Actividades",
                        "meta_titulo" => "Vila de Allariz Entorno",
                        "meta_descripcion" => "El Hotel Vila de Allariz está ubicado en la ribera del Río Arnoia y su parque etnográfico.",
                        "seccion_titulo" => "Actividades",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_es.html')
                    ],
            
                "activities" => [
                    
                        "titulo" => "Activities",
                        "meta_titulo" => "Vila de Allariz Environment",
                        "meta_descripcion" => "The Hotel Vila de Allariz is located on the banks of the Arnoia River and its ethnographic park.",
                        "seccion_titulo" => "Activities",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "activities",
                        "origen" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_en.html')
                    
                ],
                
               
                "spa" => [
                    
                        "titulo" => "Spa",
                        "meta_titulo" => "Vila de Allariz Spa",
                        "meta_descripcion" => "Tratamientos termales, cabinas de masajes. hidromasaje... y todo a orillas del río Arnoia en el Hotel Oca Vila de Allariz.",
                        "seccion_titulo" => "Spa",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "spa",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/spa_texto1_es.html')
                    ],
            
                "spa_en" => [
                    
                        "titulo" => "Spa",
                        "meta_titulo" => "Vila de Allariz Spa",
                        "meta_descripcion" => "Thermal treatments, massage cabins. hydromassage ... and all on the banks of the Arnoia River in the Hotel Oca Vila de Allariz.",
                        "seccion_titulo" => "Spa",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "spa",
                        "origen" => "spa",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/spa_texto1_en.html')
                ],
                
              
                
                "eventos" => [
                    
                        "titulo" => "Bodas y Eventos",
                        "meta_titulo" => "Vila de Allariz Bodas y Celebraciones",
                        "meta_descripcion" => "Celebra tu Boda o Evento en Oca Vila de Allariz. Amplios salones, menús personalizados y asesoramiento continuo.",
                        "seccion_titulo" => "Bodas y Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_es.html')
                    ],
            
                "events" => [
                    
                        "titulo" => "Events and Weddings",
                        "meta_titulo" => "Vila de Allariz Events and Weddings",
                        "meta_descripcion" => "Celebrate your wedding or event in Oca Vila de Allariz. Large rooms, personalized menus and continuous advice.",
                        "seccion_titulo" => "Events and Weddings",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "events",
                        "origen" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_texto1_en.html')
                    
                ],
                
                // SE AUNAN LAS PESTAÑAS DE EVENTOS Y BODAS
                
               /* "bodas-y-celebraciones" => [
                    
                        "titulo" => "Bodas y celebraciones",
                        "meta_titulo" => "Bodas y celebraciones",
                        "meta_descripcion" => "Bodas y celebraciones",
                        "seccion_titulo" => "Bodas y celebraciones",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bodas-y-celebraciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_es.html')
                    ],
            
                "weddings-and-celebrations" => [
                    
                        "titulo" => "Weddings and Celebrations",
                        "meta_titulo" => "Weddings and Celebrations",
                        "meta_descripcion" => "Weddings and Celebrations",
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
