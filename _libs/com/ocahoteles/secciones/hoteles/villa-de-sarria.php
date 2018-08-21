<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Duerming Villa de Sarria en Lugo",
                    "meta_descripcion" => "Duerming Villa de Sarria es un hotel en Lugo totalmente renovado perfecto para los peregrinos del Camino de Santiago Francés",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                    
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Duerming Villa de Sarria in Lugo
",
                    "meta_descripcion" => "Duerming Villa de Sarria is a hotel in Lugo completely renovated perfect for pilgrims of the Camino de Santiago Francés
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                     "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "",
                        "meta_descripcion" => "",
                        "seccion_titulo" => "",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Hotel en Villa de Sarria a 5 minutos del centro de la ciudad.",
                        "meta_descripcion" => "Duerming Villa de Sarria es ideal para hacer el Camino de Santiago Francés en sus últimas etapas, con servicio especial para peregrinos y muy bien conectado con resto de ciudades gallegas. ",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Hotel in Villa de Sarria 5 minutes from the city center.",
                        "meta_descripcion" => "Duerming Villa de Sarria is ideal to make the Camino de Santiago Francés in its last stages, with special service for pilgrims and very well connected with other Galician cities.",
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
