<?php



    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);

    return [
            
            $basenombre => [
                
                     "estacion" => [
                        "titulo" => "La estación",
                        "meta_titulo" => "Estación Oca Manzaneda, Esquí, Bike Park, senderismo y multiaventura.",
                        "meta_descripcion" => "Un enclave perfecto para el deporte con pistas de tenis, fútbol, karting, mountain bike, piscina climatizada, multiaventura...",
                        "seccion_titulo" => "Estación de Montaña",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "estacion-ski",
                        "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/descripcion_es.html')
                    ],
                
                "station" => [
                        "titulo" => "The station",
                        "meta_titulo" => "Oca Manzaneda Station, Ski, Bike Park, hiking and multi-adventure.",
                        "meta_descripcion" => "A perfect enclave for sports with tennis courts, football, karting, mountain bike, heated pool, multi-adventure ...",
                        "seccion_titulo" => "Mountain station",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "ski-station",
                        "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/descripcion_en.html')
                    ],
                
                  "estacion_gl" => [
                        "titulo" => "A estación",
                        "meta_titulo" => "Estación Oca Manzaneda, Esquí, Bike Park, sendeirismo e multi-aventura.",
                        "meta_descripcion" => "Un enclave perfecto para deportes con pistas de tenis, fútbol, karting, bicicleta de montaña, piscina climatizada, multiaventura ...",
                        "seccion_titulo" => "A estación",
                        "seccion_descripcion" => "",
                        "lang" => "gl",
                        "slug" => "a-estacion",
                        "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/descripcion_gl.html')
                    ],
                
                
            
                
                 "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en la Estación de Montaña Oca Manzaneda",
                        "meta_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Oca Manzaneda Station offers",
                        "meta_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
               
               
                "grupos" => [
                    
                        "titulo" => "Grupos",
                        "meta_titulo" => "Ofertas para grupos en Estación Oca Manzaneda",
                        "meta_descripcion" => "Contamos con paquetes especiales diseñados para colectivos de alojamiento y actividades.",
                        "seccion_titulo" => "Grupos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "grupos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/grupos_texto1_es.html')
                    ],
            
                "grupos_en" => [
                    
                        "titulo" => "Groups",
                        "meta_titulo" => "Offers for groups in Estación Oca Manzaneda",
                        "meta_descripcion" => "We have special packages designed for groups of accommodation and activities.",
                        "seccion_titulo" => "Groups",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "groups",
                        "origen" => "grupos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/grupos_texto1_en.html')
                ],
                
                    "grupos_gl" => [
                    
                        "titulo" => "Grupos",
                        "meta_titulo" => "Ofertas para grupos en Estación Oca Manzaneda",
                        "meta_descripcion" => "Temos paquetes especiais destinados a grupos de aloxamento e actividades.",
                        "seccion_titulo" => "Grupos",
                        "seccion_descripcion" => "",
                        "lang" => "gl",
                        "slug" => "grupos",
                        "origen" => "grupos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/grupos_texto1_gl.html')
                ],
                
                
                    "inicio" => [
                    
                        "titulo" => "Resort",
                        "meta_titulo" => "Resort Oca Manzaneda. Estación de esquí, bikepark y multiaventura en Sierra de Queixa. Hotel apto para mascotas.",
                        "meta_descripcion" => "Oca Manzaneda es una estación de esquí y montaña turístico-deportiva en Ourense, ideal para la práctica de los deportes blancos y de montaña. Hotel apto para mascotas.",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "",
                        "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html'),

                    ],
                
                "home" => [
                    
                        "titulo" => "Resort",
                        "meta_titulo" => "Resort Oca Manzaneda. Ski resort, bike park and multi-adventure in Sierra de Queixa. Pet friendly hotel.",
                        "meta_descripcion" => "Oca Manzaneda is a ski resort and tourist-sports mountain in Ourense, ideal for the practice of white and mountain sports.  Pet friendly hotel.",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "",
                        "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html'),

                    ],
                
                  "inicio_gl" => [
                    
                        "titulo" => "Resort",
                        "meta_titulo" => "Resort Oca Manzaneda. Estación de esquí, parque de bicicletas e multiaventura na Sierra de Queixa. Hotel adecuado para animais.",
                        "meta_descripcion" => "Oca Manzaneda é un complexo turístico-deportivo de esquí e montaña en Ourense, ideal para a práctica dos deportes brancos e de montaña. Hotel adecuado para animais.",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "gl",
                        "slug" => "",
                        "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_gl.html'),

                    ],
                
                
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno de la Estación Oca Manzaneda",
                        "meta_descripcion" => "La estación se encuentra en la Sierra de Queixa de Orense, parte de la Red Natura. Un entorno de naturaleza excepcional.",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "entorno_en" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Oca Manzaneda environment",
                        "meta_descripcion" => "The station is located in the Sierra de Queixa de Orense, part of the Natura Network. An environment of exceptional nature.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                ],
                
                   "entorno_gl" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno da Estación Oca Manzaneda",
                        "meta_descripcion" => "A estación está situada na Serra de Queixa de Ourense, parte da Rede Natura. Un ambiente de natureza excepcional.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "gl",
                        "slug" => "entorno",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_gl.html')
                ],
                
           
                
                
              /*   "forfait" => [
                    
                        "titulo" => "Forfait",
                        "meta_titulo" => "Forfait para la Estación Oca Manzaneda",
                        "meta_descripcion" => "Compra aquí forfait para la Estación Oca  Manzaneda",
                        "lang" => "",
                        "slug" => "forfait"
                    ],
            
                "forfait_en" => [
                    
                        "titulo" => "Forfait",
                        "meta_titulo" => "Forfati",
                        "meta_descripcion" => "Descripción forfait",
                        "lang" => "en",
                        "slug" => "forfait",
                        "origen" => "forfait"
                ],*/
                
                  "bikepark" => [
                    
                        "titulo" => "Bikepark",
                        "meta_titulo" => "Bike Park en la estación de montaña Manzaneda",
                        "meta_descripcion" => "Seis pistas que harán las delicias de los aficionados al descenso en bicicleta en pleno bosque.",
                        "seccion_titulo" => "Bikepark",
                        "seccion_descripcion" => "Bike Park en la estación de montaña Manzaneda",
                        "lang" => "",
                        "slug" => "bikepark",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bikepark_texto1_es.html')
                    ],
                
                               "bikepark_en" => [
                    
                        "titulo" => "Bikepark",
                        "meta_titulo" => "Bike Park in the mountain station Manzaneda",
                        "meta_descripcion" => "Six tracks that will delight fans of downhill biking in the woods.",
                        "seccion_titulo" => "Bikepark",
                        "seccion_descripcion" => "Bike Park in the mountain station Manzaneda",
                        "lang" => "en",
                        "slug" => "bikepark-en",
                                     "origen" => "bikepark",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bikepark_texto1_en.html')
                    ],
                
                 "bikepark_gl" => [
                    
                        "titulo" => "Bikepark",
                        "meta_titulo" => "Bike Park na estación montañosa de Manzaneda",
                        "meta_descripcion" => "Seis rutas que farán as delicias dos fanáticos do ciclismo de baixada no bosque.",
                        "seccion_titulo" => "Bikepark",
                        "seccion_descripcion" => "Bike Park na estación montañosa de Manzaneda",
                        "lang" => "gl",
                        "slug" => "bikepark",
                                     "origen" => "bikepark",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bikepark_texto1_gl.html')
                    ],
            
      
                
               "perfil-contratante" => [
                    
                        "titulo" => "Perfil Contratante",
                        "meta_titulo" => "Perfil Contratante",
                        "meta_descripcion" => "Perfil Contratante",
                        "seccion_titulo" => "Perfil Contratante",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "perfil-contratante",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/perfil_contratante_es.php')
                    ],/*
            
                "perfil-contratante_en" => [
                    
                        "titulo" => "Perfil Contratante",
                        "meta_titulo" => "Perfil Contratante",
                        "meta_descripcion" => "Perfil Contratante",
                        "seccion_titulo" => "Perfil Contratante",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "perfil-contratante-en",
                        "origen" => "perfil-contratante",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/perfil_contratante_en.html')
                    
                ],*/
               
             
               
     
            ]
            
        ];
?>
