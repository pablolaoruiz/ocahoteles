<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Vermar, Sanxenxo | Oca Hotels",
                    "meta_descripcion" => "Ubicado en Sanxenxo, el Hotel Oca Vermar está a escasos minutos de los principales núcleos turísticos de las Rías Baixas y excelentemente comunicado con las principales ciudades gallegas",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Vermar, Sanxenxo | Oca Hotels",
                    "meta_descripcion" => "Located in Sanxenxo, the Hotel Oca Vermar is a few minutes from the main tourist centers of the Rías Baixas and excellently connected to the main Galician cities
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                           "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas de hotel en Sanxenxo",
                        "meta_descripcion" => "Ofertas en el hotel Oca Vermar en Sanxenxo, Rías Baixas.",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Hotel offers in Sanxenxo
",
                        "meta_descripcion" => "Offers at the Oca Vermar hotel in Sanxenxo, Rías Baixas.
",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel en Sanxenxo, capital turística de Galicia.",
                        "meta_descripcion" => "Disfruta en Sanxenxo, principal núcleo turístico de las Rías Baixas, de tus vacaciones en familia o con amigos. Su paseo marítimo, terrazas, restaurantes de excelente gastronomía gallega, playas, animadas noches de diversión... ",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel in Sanxenxo, tourist capital of Galicia.
",
                        "meta_descripcion" => "Enjoy Sanxenxo, the main tourist center of the Rías Baixas, for your holidays with family or friends. Its promenade, terraces, restaurants of excellent Galician gastronomy, beaches, lively nights of fun ...
",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                
     
            ]
            
        ];
?>
