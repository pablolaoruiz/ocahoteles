<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "Apartamentos",
                    "meta_titulo" => "Apartamentos turísitcos Duerming Aldeaduero",
                    "meta_descripcion" => "Turismo rural con todas las comodidades en un entorno excepcional de Salamanca, Aldeaduero",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "Apartments",
                    "meta_titulo" => "Tourist apartments Duerming Aldeaduero",
                    "meta_descripcion" => "Rural tourism with all the comforts in an exceptional environment of Salamanca, Aldeaduero",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
                           "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas Apartamentos Duerming Aldeaduero",
                        "meta_descripcion" => "Ofertas de turismo rural en Aldeaduero, Salamanca.",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers Apartments Duerming Aldeaduero",
                        "meta_descripcion" => "Offers Apartments Duerming Aldeaduero",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                   "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno Apartamentos Duerming Aldeaduero",
                        "meta_descripcion" => "En el Parque Natural de Arribes del Duero, de excepcional riqueza ornitológica.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Surroundings Apartments Duerming Aldeaduero",
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
