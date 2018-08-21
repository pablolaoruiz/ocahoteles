<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Resort",
                    "meta_titulo" => "Hotel Grand Oca Maragogi Beach & Leisure Resort",
                    "meta_descripcion" => "Grand Oca Maragogi Beach & Leisure Resort en Brasil cuenta con bungalows, suites y habitaciones en un entorno espectacular.",
              
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Resort",
                    "meta_titulo" => "Grand Oca Hotel Maragogi Beach & Leisure Resort
",
                    "meta_descripcion" => "Grand Oca Maragogi Beach & Leisure Resort in Brazil has bungalows, suites and rooms in a spectacular setting.
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                 "start" => [
                    
                    "titulo" => "Resort",
                    "meta_titulo" => "Grand Oca Hotel Maragogi Beach & Leisure Resort",
                    "meta_descripcion" => "O Grand Oca Maragogi Beach & Leisure Resort no Brasil tem bungalows, suites e quartos em um cenário espetacular.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "pt",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_pt.html')
                    
                ],
                
               
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno de playa y coral de Grand Oca Maragogi Beach & Leisure Resort ",
                        "meta_descripcion" => "En Costa dos Corais, el Resort se situa en una zona turística por excelencia de Brasil, rodeada de paradisíacas playas.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Grand Oca beach and coral setting Maragogi Beach & Leisure Resort
",
                        "meta_descripcion" => "In Costa dos Corais, the Resort is located in a tourist area par excellence of Brazil, surrounded by paradisiacal beaches.
",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_en.html')
                    
                ],
                
                 "regiao" => [
                    
                        "titulo" => "A Região",
                        "meta_titulo" => "A Região Hotel Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Maragogi,Algoas, Brasil. Belas praias cheias de coqueiros, um mar azul esmeralda e suas famosas piscinas naturais com corais.",
                        "seccion_titulo" => "A Região",
                        "seccion_descripcion" => "",
                        "lang" => "pt",
                        "slug" => "aregiao",
                     "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_pt.html')
                    ],
                
                   "bodas-y-eventos" => [
                    
                        "titulo" => "Bodas y eventos",
                        "meta_titulo" => "Bodas y eventos en Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "El lugar ideal para una boda mágica, una luna de miel inolvidable o un evento de empresa perfecto",
                        "seccion_titulo" => "Bodas y eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bodas-y-eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_es.html')
                    ],
            
                "weddings-and-events" => [
                    
                        "titulo" => "Weddings and Events",
                        "meta_titulo" => "Weddings and Events at Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "The ideal place for a magical wedding, an unforgettable honeymoon or a perfect company event
",
                        "seccion_titulo" => "Weddings and Events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "weddings-and-events",
                        "origen" => "bodas-y-celebraciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_en.html')
                    
                ],
                
                  "casamentos-e-eventos" => [
                    
                        "titulo" => "Casamentos e Eventos",
                        "meta_titulo" => "Casamentos e eventos no Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "O lugar ideal para um casamento mágico, uma lua de mel inesquecível ou um evento de empresa perfeita",
                        "seccion_titulo" => "Casamentos e Eventos",
                        "seccion_descripcion" => "",
                        "lang" => "pt",
                        "slug" => "casamentos-e-eventos",
                        "origen" => "bodas-y-celebraciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_pt.html')
                    
                ],
                
                
                
                "restauracion" => [
                    
                        "titulo" => "Restauración",
                        "meta_titulo" => "Gran variedad de restaurantes y bares para elegir",
                        "meta_descripcion" => "Grand Oca Maragogi Beach & Leisure Resort ofrece comida tradicional de Brasil e internacional en su amplia variedad de restaurantes y bares",
                        "seccion_titulo" => "Restauración",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_es.html')
                    ],
            
                "restauracion_en" => [
                    
                        "titulo" => "Cuisine",
                        "meta_titulo" => "Wide variety of restaurants and bars to choose from",
                        "meta_descripcion" => "Grand Oca Maragogi Beach & Leisure Resort offers traditional Brazilian and international food in its wide variety of restaurants and bars
",
                        "seccion_titulo" => "Cuisine",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "cuisine",
                        "origen" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_en.html')
                    
                ],
                
                "restauracion_pt" => [
                    
                        "titulo" => "ALIMENTOS E BEBIDAS",
                        "meta_titulo" => "Grande variedade de restaurantes e bares para escolher",
                        "meta_descripcion" => "O Grand Oca Maragogi Beach & Leisure Resort oferece comida tradicional brasileira e internacional na sua grande variedade de restaurantes e bares",
                        "seccion_titulo" => "ALIMENTOS E BEBIDAS",
                        "seccion_descripcion" => "",
                        "lang" => "pt",
                        "slug" => "alimentos-e-bebidas",
                        "origen" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_pt.html')
                    
                ],
               
                "entretenimiento" => [
                    
                        "titulo" => "Entretenimiento",
                        "meta_titulo" => "Entretenimiento, ocio y animación junto al mar",
                        "meta_descripcion" => "Grand Oca Maragogi Beach & Leisure Resort ofrece animación para adultos y niños, deportes de agua y espectáculos por la noche",
                        "seccion_titulo" => "Entretenimiento",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entretenimiento",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entretenimiento_es.html')
                    ],
            
                "entretenimiento_en" => [
                    
                        "titulo" => "Entertainment",
                        "meta_titulo" => "Entertainment, entertainment and animation by the sea
",
                        "meta_descripcion" => "Grand Oca Maragogi Beach & Leisure Resort offers entertainment for adults and children, water sports and shows at night
",
                        "seccion_titulo" => "Entertainment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "entertainment",
                        "origen" => "entretenimiento",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entretenimiento_en.html')
                ],
                
                 "entretenimiento_pt" => [
                    
                     "titulo" => "Entretenimiento",
                        "meta_titulo" => "Entretenimiento Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Se divertir e curtir com a excelente programação diurna e noturna que nosso hotel oferece. ",
                        "seccion_titulo" => "Entretenimiento",
                        "seccion_descripcion" => "",
                        "lang" => "pt",
                        "slug" => "entertainment",
                        "origen" => "entretenimiento",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entretenimiento_pt.html')
                ],
                
             
                
               
                
                "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas",
                        "meta_descripcion" => "Ofertas",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Offers Grand Oca Maragogi Beach & Leisure Resort",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
              
                
                
     
            ]
            
        ];
?>