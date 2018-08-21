<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Aldeaduero",
                    "meta_descripcion" => "Hotel a la orilla de río Duero, con la amplitud, comodidades y calidad de un cuatro estrellas",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Hotel",
                    "meta_titulo" => "Hotel Oca Aldeaduero",
                    "meta_descripcion" => "Hotel on the banks of the Duero River, with the spaciousness, comforts and quality of a four-star hotel
",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                      "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas Hotel Oca Aldeaduero",
                        "meta_descripcion" => "Ofertas de hotel en el Parque Natural de Arribes del Duero.",
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
                
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno Hotel Oca Aldeaduero",
                        "meta_descripcion" => "En el Parque Natural de Arribes del Duero, de excepcional riqueza ornitológica.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Environment Hotel Oca Aldeaduero",
                        "meta_descripcion" => "In the Natural Park of Arribes del Duero, of exceptional ornithological richness.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                "bodas-y-eventos" => [
                    
                        "titulo" => "Bodas y Eventos",
                        "meta_titulo" => "Bodas y eventos en el Hotel Oca Aldeaduero",
                        "meta_descripcion" => "Bodas y eventos en un entorno rural y encantador, rodeado de naturaleza y tranquilidad.",
                        "seccion_titulo" => "Bodas y eventos",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "bodas-y-eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_es.html')
                    ],
            
                "weddings-and-events" => [
                    
                        "titulo" => "Weddings and Events",
                        "meta_titulo" => "Weddings and Events Hotel Oca Aldeaduero",
                        "meta_descripcion" => "Weddings and events in a rural and charming environment, surrounded by nature and tranquility.",
                        "seccion_titulo" => "Weddings and Events",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "weddings-and-events",
                        "origen" => "bodas-y-eventos",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/bodas_texto1_en.html')
                    
                ],
                
               /* "actividades" => [
                    
                        "titulo" => "Actividades y Entorno",
                        "meta_titulo" => "Actividades y entorno",
                        "meta_descripcion" => "Actividades y Entorno",
                        "seccion_titulo" => "Actividades y Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "actividades-entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_es.html')
                    ],
            
                "activities" => [
                    
                        "titulo" => "Activities and Environment",
                        "meta_titulo" => "Activities and environment",
                        "meta_descripcion" => "Activities and environment",
                        "seccion_titulo" => "Activities and environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "activities-environment",
                        "origen" => "actividades-entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/actividades_texto1_en.html')
                    
                ],*/
                
          
               
     
            ]
            
        ];
?>
