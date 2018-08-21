<?php

    $basenombre = pathinfo(basename(__FILE__)); 
    $basenombre = $basenombre['filename'];
    $dir_name =  dirname(__FILE__);
   

    return [
            
            $basenombre => [
                
                "inicio" => [
                    
                    "titulo" => "La Casa",
                    "meta_titulo" => "Casa Vilamor. Alojamiento turísitico en la Ribeira Sacra. Lugo.",
                    "meta_descripcion" => "Apartamento turístico rural Duerming Casa Vilamor en la Ribeira Sacra, Lugo, con piscina exterior.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "",
                    "slug" => "",        
                    "content" => GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_es.html')
                 
                ],
                
                "home" => [
                    
                    "titulo" => "The House",
                    "meta_titulo" => "Casa Vilamor. Tourist accommodation in the Ribeira Sacra. Lugo.",
                    "meta_descripcion" => "Rural tourist apartment Duerming Casa Vilamor in the Ribeira Sacra, Lugo, with outdoor pool.",
                    "seccion_titulo" => "",
                    "seccion_descripcion" => "",
                    "lang" => "en",
                    "slug" => "",
                    "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/inicio_texto1_en.html')
                    
                ],
                
            "ofertas" => [
                    
                        "titulo" => "Ofertas",
                        "meta_titulo" => "Ofertas en Duerming Casa Vilamor",
                        "meta_descripcion" => "Ofertas en Duerming Casa Vilamor en Lugo",
                        "seccion_titulo" => "Ofertas",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "ofertas"
                    ],
            
                "offers" => [
                    
                        "titulo" => "Offers",
                        "meta_titulo" => "Offers in Duerming Casa Vilamor",
                        "meta_descripcion" => "Offers in Duerming Casa Vilamor in Lugo",
                        "seccion_titulo" => "Offers",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "offers",
                        "origen" => "ofertas"
                    
                ],
                
                 "entorno" => [
                    
                        "titulo" => "Entorno",
                        "meta_titulo" => "Entorno de Casa Vilamor en la Riberia Sacra.",
                        "meta_descripcion" => "Duerming Casa Vilamor en un entorno idílico en la Riberia Sacra, a las laderas del Río Miño.",
                        "seccion_titulo" => "Entorno",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_es.html')
                    ],
            
                "environment" => [
                    
                        "titulo" => "Environment",
                        "meta_titulo" => "Tourist accommodation in Lugo.",
                        "meta_descripcion" => "Duerming Casa Vilamor in an idyllic setting in the Ribeira Sacra, on the slopes of the Miño River.",
                        "seccion_titulo" => "Environment",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "environment",
                        "origen" => "entorno",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/entorno_texto1_en.html')
                    
                ],
                
                
                 "gastronomia" => [
                    
                        "titulo" => "Gastronomía",
                        "meta_titulo" => "Disfruta de la gastronomía de la Ribiera Sacra.",
                        "meta_descripcion" => "En Duerming Casa Vilamor podrás desgustar productos con Denominación de Origen Ribeira Sacra, destacando sus vinos Albariños.",
                        "seccion_titulo" => "Gastronomía",
                        "seccion_descripcion" => "",
                        "lang" => "",
                        "slug" => "gastronomia",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/gastronomia_texto1_es.html')
                    ],
            
                "gastronomy" => [
                    
                        "titulo" => "Gastronomy",
                        "meta_titulo" => "Enjoy the gastronomy of the Ribeira Sacra.",
                        "meta_descripcion" => "Duerming Casa Vilamor in an idyllic setting in the Ribeira Sacra, on the slopes of the Miño River.",
                        "seccion_titulo" => "Gastronomy",
                        "seccion_descripcion" => "",
                        "lang" => "en",
                        "slug" => "gastronomy",
                        "origen" => "gastronomia",
                        "content" =>  GestionTemplates::requireToVar ($dir_name . "/contenido/" . $basenombre.'/gastronomia_texto1_en.html')
                    
                ],
                
        
                

                
                

       
                

                

            
          
                
          
                
               
             
                
               
     
            ]
            
        ];
?>
