<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel en primera línea de playa en Sanxenxo. Oca Duerming Justo.",
                    "meta_descripcion" => "Un hotel confortable en Sanxenxo, a la orilla de la playa de Silgar, con todo el encanto de un alojamiento de tradición familiar. ",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel on the beachfront in Sanxenxo. Oca Duerming Justo.",
                    "meta_descripcion" => "A comfortable hotel in Sanxenxo, on the shore of the beach of Silgar, with all the charm of an accommodation of family tradition.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                                "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en hotel Duerming Justo en Sanxenxo",
                        "meta_descripcion" => "Ofertas en hotel Duerming Justo en Sanxenxo",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers hotel Duerming Justo en Sanxenxo",
                        "meta_descripcion" => "Offers hotel Duerming Justo en Sanxenxo",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Sanxenxo es el centro turístico de las Rías Baixas",
                        "meta_descripcion" => "Playas, restaurantes, los mejores vinos, turismo rural, ambiente relajado... Sanxenxo tiene una situación privilegiada en la provincia de Pontevedra para disfrutar de sus encantos y de su entorno.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Sanxenxo is the tourist center of the Rías Baixas",
                        "meta_descripcion" => "Beaches, restaurants, the best wines, rural tourism, relaxed atmosphere ... Sanxenxo has a privileged situation in the province of Pontevedra to enjoy its charms and its surroundings.",
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
