<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Villas",
                    "meta_titulo" => "Chalets Rurales Aldeaduero",
                    "meta_descripcion" => "Chalets y apartamentos con parcela propia en Aldeaduero. Disfruta de todas las comodidades en la naturaleza.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Villas",
                    "meta_titulo" => "Aldeaduero Rural Chalets",
                    "meta_descripcion" => "Chalets and apartments with own plot in Aldeaduero. Enjoy all the comforts in nature.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                              "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas Chalets Rurales Aldeaduero",
                        "meta_descripcion" => "Ofertas de apartamentos rurales en Aldeaduero, Chalets Rurales Aldeaduero.",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "ldeaduero Rural Chalets Offers",
                        "meta_descripcion" => "ldeaduero Rural Chalets Offers",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],     
                
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno Chalets Rurales Aldeaduero",
                        "meta_descripcion" => "En el Parque Natural de Arribes del Duero, de excepcional riqueza ornitológica.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Aldeaduero Rural Chalets Environment",
                        "meta_descripcion" => "In the Natural Park of Arribes del Duero, of exceptional ornithological richness.",
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
