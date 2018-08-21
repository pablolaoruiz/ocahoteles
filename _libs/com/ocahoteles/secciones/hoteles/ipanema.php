<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Ipanema en Vigo, Pontevedra.",
                    "meta_descripcion" => "Hotel contemporáneo en Vigo perfecto para su viaje de negocios o vacaciones, con parking, cafetería, salas de reuniones y banquetes... ",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Ipanema in Vigo, Pontevedra.",
                    "meta_descripcion" => "Contemporary hotel in Vigo perfect for your business trip or vacation, with parking, cafeteria, meeting rooms and banquets ...",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],         
                
                          "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en el hotel Oca Ipanema en Vigo",
                        "meta_descripcion" => "Ofertas en el hotel Oca Ipanema en Vigo",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Oca Ipanema in Vigo Offers",
                        "meta_descripcion" => "Offers ca Ipanema in Vigo",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                         "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Turismo de vacaciones y congresos en Vigo.",
                        "meta_descripcion" => "Vigo es una ciudad perfecta para sus vacaciones o congresos profesionales. El hotel Oca Ipanema está junto a la estación del AVE, conectado a todos las atracciones turísticas y de negocios de las Rías Baixas.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Tourism of vacations and congresses in Vigo.",
                        "meta_descripcion" => "Vigo is a perfect city for your holidays or professional congresses. The Oca Ipanema hotel is next to the AVE station, connected to all the tourist and business attractions of the Rías Baixas.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_en.html')
                    
                ],
                
                
                  
                "restauracion" => [
                    
                        "titulo" => "Restauración",
                        "meta_titulo" => "Restaurante y cafetería en Oca Ipanema, Vigo",
                        "meta_descripcion" => "El Restaurante de Oca Ipanema en Vigo ofrece comida gallega tradicional y fresca, con menús diarios y para empresas.",
                        "seccion_titulo" => "Restaurante y cafetería",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_es.html')
                    ],
            
                "restauracion_en" => [
                    
                        "titulo" => "Restoration",
                        "meta_titulo" => "Restaurant and cafeteria in Oca Ipanema, Vigo",
                        "meta_descripcion" => "The Restaurant of Oca Ipanema in Vigo offers traditional and fresh Galician food, with daily and business menus.
",
                        "seccion_titulo" => "Restaurant and cafeteria
",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "restoration",
                        "origen" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_en.html')
                    
                ],
               
               
                
                "eventos" => [
                    
                        "titulo" => "Eventos",
                        "meta_titulo" => "Salones para eventos en Vigo Oca Ipanema.",
                        "meta_descripcion" => "Salones para reuniones de empresa, celebraciones y congresos en Vigo. Con todo el equipamiento necesario, como proyector, pantalla, etc.",
                        "seccion_titulo" => "Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_es.html')
                    ],
            
                "events" => [
                    
                        "titulo" => "Events",
                        "meta_titulo" => "Meeting rooms for events in Vigo Oca Ipanema.",
                        "meta_descripcion" => "Meeting rooms for business meetings, celebrations and congresses in Vigo. With all the necessary equipment, such as projector, screen, etc.",
                        "seccion_titulo" => "Events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "events",
                        "origen" => "eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/eventos_en.html')
                    
                ],
                
       
                
      
              
                
                
     
            ]
            
        ];
?>