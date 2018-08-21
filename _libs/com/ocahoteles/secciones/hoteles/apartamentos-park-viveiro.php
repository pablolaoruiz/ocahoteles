<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Apartamentos",
                    "meta_titulo" => "Apartamentos en la villa de Viveiro Duerming Park Viveiro",
                    "meta_descripcion" => "Apartamentos en la playa de Covas en Viveiro, Lugo.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Apartments",
                    "meta_titulo" => "Apartments in the villa of Viveiro Sea View Duerming",
                    "meta_descripcion" => "Apartments on the beachfront in Viveiro, Lugo.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_en.html')
                    
                ],
                
                            "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas Apartamentos Sea View Viveiro",
                        "meta_descripcion" => "Las mejores ofertas para alojarse en Viveiro",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Apartments Sea View Viveiro Offers",
                        "meta_descripcion" => "Apartments Sea View Viveiro Offers",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno  de los apartamenots Duerming Park Viveiro",
                        "meta_descripcion" => "En una de las zonas más exclusivas Viveiro, loacalidad perfecta para descansar, relajarse y disfrutar de sus playas.",
                        "seccion_titulo" => "Entorno privilegiado",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Surroundings Viveiro Duerming Park Apartments",
                        "meta_descripcion" => "In one of the most exclusive zones of Viveiro, a perfect place to rest, relax and enjoy its beaches.",
                        "seccion_titulo" => "Privileged Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_en.html')
                    
                ],
                
               
               
                
    
                
               
             
                
               
     
            ]
            
        ];
?>
