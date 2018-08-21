<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Palacio de la Llorea Spa y Golf en Gijón. Hotel adaptado para mascotas.",
                    "meta_descripcion" => "Hotel en un palacete reformado a 7 kilómetros de Gijón, en el campo de golf de la Llorea con instalaciones de SPA y habitaciones disponibles para mascotas.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Palacio de la Llorea Spa and Golf in Gijón. Pet Friendly hotel.",
                    "meta_descripcion" => "Hotel in a renovated mansion 7 kilometers from Gijón, on the Llorea golf course with SPA facilities and pet friendly rooms.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
                
                
                          "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en el hotel Palacio de la Llorea SPA y Golf",
                        "meta_descripcion" => "Ofertas en el hotel Palacio de la Llorea SPA y Golf en Gijón",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers Palacio de la Llorea SPA and Golf",
                        "meta_descripcion" => "Offers Offers Palacio de la Llorea SPA and Golf",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                      "bonos" => [
                    
                        "titulo" => "Bonos Regalo",
                        "meta_titulo" => "Palacio de la Llorea Bonos de Regalo",
                        "meta_descripcion" => "Compra Bonos Regalo para experiencias y estancias en el Hotel Oca Palacio de la Llorea en Gijón",
                        "seccion_titulo" => "Bonos Regalo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bonos-regalo",
                     "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_es.html')
                    ],
            
                "vouchers" => [
                    
                        "titulo" => "Gift Vouchers",
                        "meta_titulo" => "Gift Vouchers Villa de Allariz Hotel",
                        "meta_descripcion" => "Buy Gift Vouchers for experiences and hotel nights at Oca Palacio de la Llorea in Gijon",
                        "seccion_titulo" => "Vouchers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "gift-vouchers",
                        "origen" => "bonos-regalo",
                      "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bonos-regalo_en.html')
                    
                    
                ],
                
                
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno del Palacio de la Llorea Spa y Golf en Gijón",
                        "meta_descripcion" => "Muy cerca de Gijón y sus playas, Palacio de la Llorea conserva su ambiente rural y tranquilo, profundamente conectado con la naturaleza.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Surroundings of the Llorea Palace Spa and Golf in Gijón
",
                        "meta_descripcion" => "Very close to Gijón and its beaches, Palacio de la Llorea preserves its rural and peaceful atmosphere, deeply connected with nature.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                
                            "restauracion" => [
                    
                        "titulo" => "Restauración",
                        "meta_titulo" => "Restaurante La Capilla en Palacio de la Llorea Spa y Golf en Gijón",
                        "meta_descripcion" => "Un entorno de lujo muy cerca de Gijón, en el restaurante La Capilla podrás degustar platos de la cocina tradicional asturiana creados con productos de la tierra y con la filosofía del Km cero.",
                        "seccion_titulo" => "Restauración",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_texto1_es.html')
                    ],
            
                "restaurant" => [
                    
                        "titulo" => "Restaurant",
                        "meta_titulo" => "Restaurant La Capilla in Palacio de la Llorea Spa and Golf in Gijón

",
                        "meta_descripcion" => "A luxurious environment very close to Gijón, in the restaurant La Capilla you can taste dishes of traditional Asturian cuisine created with local products and the philosophy of Km zero.",
                        "seccion_titulo" => "Restaurant",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "restaurant",
                        "origen" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_texto1_en.html')
                    
                ],
                
                
                
                          "bodas" => [
                    
                        "titulo" => "Bodas y Eventos",
                        "meta_titulo" => "Bodas y eventos en Palacio de la Llorea Spa y Golf en Gijón",
                        "meta_descripcion" => "Un entorno de lujo muy cerca de Gijón para celebrar bodas, celebraciones y eventos, Palacio de la Llorea combina un edificio histórico con un diseño moderno.",
                        "seccion_titulo" => "Bodas y Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bodas",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_es.html')
                    ],
            
                "weddings" => [
                    
                        "titulo" => "Weddings",
                        "meta_titulo" => "Weddings and events at Llorea Palace Spa and Golf in Gijón
",
                        "meta_descripcion" => "A luxury setting very close to Gijón to celebrate weddings, celebrations and events, Palacio de la Llorea combines a historic building with a modern design.",
                        "seccion_titulo" => "Weddings and events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "weddings",
                        "origen" => "bodas",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_en.html')
                    
                ],
                  "spa" => [
                    
                        "titulo" => "Spa",
                        "meta_titulo" => "Spa en Palacio de la Llorea",
                        "meta_descripcion" => "Mil metros cuadrados de instalaciones, piscina activa, jacuzzi, baño turco, cabina de tratamientos, zona fitness...",
                        "seccion_titulo" => "Spa",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "spa",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/spa_texto1_es.html')
                    ],
            
                "spa_en" => [
                    
                        "titulo" => "Spa",
                        "meta_titulo" => "Spa in Palacio de la Llorea
",
                        "meta_descripcion" => "Thousand square meters of facilities, active pool, jacuzzi, Turkish bath, treatment cabin, fitness area ...",
                        "seccion_titulo" => "Spa",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "spa",
                        "origen" => "spa",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/spa_texto1_en.html')
                ],
                
                
                 "golf" => [
                    
                        "titulo" => "Golf",
                        "meta_titulo" => "Campo de Golf de la Llorea",
                        "meta_descripcion" => "Un campo completo de 18 hoyos cerca del mar al que los clientes del hotel Palacio de la Llorea tienen acceso completo",
                        "seccion_titulo" => "Golf",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "golf",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/golf_texto1_es.html')
                    ],
            
                "golf_en" => [
                    
                        "titulo" => "Golf",
                        "meta_titulo" => "La Llorea Golf Course",
                        "meta_descripcion" => "A full 18-hole course near the sea to which the clients of the Palacio de la Llorea hotel have full access
",
                        "seccion_titulo" => "Golf",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "golf",
                        "origen" => "golf",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/golf_texto1_en.html')
                ],
                
      
                
              
                
                
     
            ]
            
        ];
?>