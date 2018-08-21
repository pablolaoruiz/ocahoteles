<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Insua Costa da Morte",
                    "meta_descripcion" => "Hotel Insua en Cee, el centro de Costa da Morte, recientemente reformado.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Insua Costa da Morte",
                    "meta_descripcion" => "Hotel Insua in Cee, the center of Costa da Morte, recently renovated.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                         "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas Hotel Insua Costa da Morte",
                        "meta_descripcion" => "Ofertas de hotel en Cee, Costa da Morte.",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Hotel Insua Costa da Morte Offers",
                        "meta_descripcion" => "Hotel Insua Costa da Morte Offers",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                
                             "actividades" => [
                    
                        "titulo" => "Actividades",
                        "meta_titulo" => "Actividades en el Hotel Insua Costa da Morte",
                        "meta_descripcion" => "Galicia es perfecta para practicar barranquismo, rappel, actividades náuticas y todo tipo de actividades deportivas.",
                        "seccion_titulo" => "Actividades",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_es.html')
                    ],
            
                "activities" => [
                    
                        "titulo" => "Activities",
                        "meta_titulo" => "Activities at Hotel Insua Costa da Morte
",
                        "meta_descripcion" => "Galicia is perfect for canyoning, abseiling, nautical activities and all kinds of sports activities",
                        "seccion_titulo" => "Activities",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "activities",
                        "origen" => "actividades",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_en.html')
                ],
                
                            "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno Hotel Insua Costa da Morte",
                        "meta_descripcion" => "En el centro de Cee, corazón de Finisterre. Disfuta de su tranquilidad y la belleza de sus paisajes.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel Insua Costa da Morte Environment",
                        "meta_descripcion" => "In the center of Cee, heart of Finisterre. It disguises its tranquility and the beauty of its landscapes.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                  "bikefriendly" => [
                    
                    "titulo" => "BIKE FRIENDLY",
                    "meta_titulo" => "Hotel Bike Friendly, Insua Costa da Morte",
                    "meta_descripcion" => "Hotel Insua en Cee, disfruta de la Costa da Morte con tu bicicleta en nuestras instalaciones acondicionadas bike friendly.",
                    "seccion_titulo" => "Bike Friendly",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "bike-friendly",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bikefriendly_texto1_es.html')
                 
                ],
                
                "bikerfriendly" => [
                    
                    "titulo" => "BIKE FRIENDLY",
                    "meta_titulo" => "Bike Friendly Hotel, Insua Costa da Morte",
                    "meta_descripcion" => "Hotel Insua in Cee, enjoy the Costa da Morte with your bike in our bike friendly conditioned facilities.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "bike-friendly-hotel",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bikefriendly_texto1_en.html')
                    
                ],
                
                
                
       
                        
                "camino-de-santiago" => [
                    
                        "titulo" => "Camino de Santigo",
                        "meta_titulo" => "Camino de Santigo Hotel Insua Costa da Morte",
                        "meta_descripcion" => "Un hotel en Cee, en pleno Camino de Santiago - Finisterre - Muxía. Te damos todas las facilidades para tu peregrinaje. ",
                        "seccion_titulo" => "Camino de Santigo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "camino-de-santiago",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/camino_texto1_es.html')
                    ],
            
                "camino-de-santiago-en" => [
                    
                        "titulo" => "Camino de Santigo",
                        "meta_titulo" => "Camino de Santigo Hotel Insua Costa da Morte",
                        "meta_descripcion" => "A hotel in Cee, in the Camino de Santiago - Finisterre - Muxía. We give you all the facilities for your pilgrimage.",
                        "seccion_titulo" => "Camino de Santigo",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "camino-de-santiago-en",
                        "origen" => "camino-de-santiago",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/camino_texto1_en.html')
                    
                ],
               
                "senderismo" => [
                    
                        "titulo" => "Senderismo",
                        "meta_titulo" => "Senderismo Hotel Insua Costa da Morte",
                        "meta_descripcion" => "Galicia es perfecta para el senderismo, y la Costa da Morte especialmente indicada para este deporte.",
                        "seccion_titulo" => "Senderismo",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "senderismo",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/senderismo_texto1_es.html')
                    ],
            
                "senderismo_en" => [
                    
                        "titulo" => "Trekking",
                        "meta_titulo" => "Trekking Hotel Insua Costa da Morte
",
                        "meta_descripcion" => "Galicia is perfect for trekking, and the Costa da Morte especially indicated for this sport.
",
                        "seccion_titulo" => "Trekking",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "trekking",
                        "origen" => "senderismo",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/senderismo_texto1_en.html')
                ],
                
             
                
                
        
                
       
                
                
                
                
     
            ]
            
        ];
?>
