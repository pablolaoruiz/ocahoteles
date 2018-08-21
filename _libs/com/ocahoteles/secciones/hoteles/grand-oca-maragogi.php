<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "O Hotel",
                    "meta_titulo" => "Hotel Grand Oca Maragogi Beach & Leisure Resort",
                    "meta_descripcion" => "216 unidades localizado em uma vasta área de jardim, cercado por coqueiros, com grandes janelas e varandas com vista para as piscinas que convidam para o descanso e lazer. ",
              
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "The Hotel",
                    "meta_titulo" => "The Hotel",
                    "meta_descripcion" => "The Hotel",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                 "home" => [
                    
                    "titulo" => "The Hotel",
                    "meta_titulo" => "The Hotel",
                    "meta_descripcion" => "The Hotel",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "pt",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_pt.html')
                    
                ],
                
                 "entorno" => [
                    
                        "titulo" => "A Região",
                        "meta_titulo" => "A Região Hotel Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Maragogi,Algoas, Brasil. Belas praias cheias de coqueiros, um mar azul esmeralda e suas famosas piscinas naturais com corais.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Environment",
                        "meta_descripcion" => "Environment",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_en.html')
                    
                ],
                
                   "bodas-y-eventos" => [
                    
                        "titulo" => "Eventos",
                        "meta_titulo" => "Eventos Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Toda a magia do Brasil aos seus pés para fazer sua lua de mel inesquecível.",
                        "seccion_titulo" => "Bodas y eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bodas-y-eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_es.html')
                    ],
            
                "weddings-and-events" => [
                    
                        "titulo" => "Weddings and Events",
                        "meta_titulo" => "Weddings and Events",
                        "meta_descripcion" => "Weddings and Events",
                        "seccion_titulo" => "Weddings and Events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "weddings-and-events",
                        "origen" => "bodas-y-celebraciones",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_en.html')
                    
                ],
                
                "restauracion" => [
                    
                        "titulo" => "Alimentos e Bebidas",
                        "meta_titulo" => "Alimentos e Bebidas Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Uma grande seleção gastronômica que vá desde a cozinha tradicional brasileira à cozinha internacional. Menus exclusivos, serviço Bar Premium, coquetéis...",
                        "seccion_titulo" => "Restauración",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_es.html')
                    ],
            
                "restauracion_en" => [
                    
                        "titulo" => "Restauracion",
                        "meta_titulo" => "Restauracion",
                        "meta_descripcion" => "Restauracion",
                        "seccion_titulo" => "Restauracion",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "estauracion-en",
                        "origen" => "restauracion",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/restauracion_en.html')
                    
                ],
               
                "entretenimiento" => [
                    
                        "titulo" => "Entretenimiento",
                        "meta_titulo" => "Entretenimiento Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Se divertir e curtir com a excelente programação diurna e noturna que nosso hotel oferece. ",
                        "seccion_titulo" => "Entretenimiento",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entretenimiento",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entretenimiento_es.html')
                    ],
            
                "entretenimiento_en" => [
                    
                        "titulo" => "Entretenimiento",
                        "meta_titulo" => "Entretenimiento Grand Oca Maragogi Beach & Leisure Resort",
                        "meta_descripcion" => "Se divertir e curtir com a excelente programação diurna e noturna que nosso hotel oferece. ",
                        "seccion_titulo" => "Entretenimiento",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "entretenimiento-en",
                        "origen" => "entretenimiento",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entretenimiento_en.html')
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
                        "meta_titulo" => "Offers",
                        "meta_descripcion" => "Offers",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
              
                
                
     
            ]
            
        ];
?>