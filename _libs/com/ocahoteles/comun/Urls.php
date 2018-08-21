<?php

/**
 * Description of Urls
 *
 * @author juan
 */
class Urls {
    
    public static $lang = '';
    

    public static function getUrl($pagina) {
    
        if (self::$lang=='') {
            $url = self::$lang;
        } else {
            $url = self::$lang . '/';
        }
        
        switch ($pagina) {
            case 'home':
            //home - /
                
                break;
         
            //salones-de-juego
            case 'salones-de-juego':
                $url = $url . _("salones-de-juegos-iocus") . "/";
                break;
        
            //alquiler
            case 'alquiler':
                 $url = $url . _("instalacion-maquinas-de-juego"). "/";
                break;
        
            //museos por zona - museos/zonas/
            case 'apuestas-deportivas':
                $url = $url . _("apuestas-deportivas"). "/";
                break;
            
             case 'contacto':
                  $url = $url . _("contacto"). "/";
                 break;
        
            //maquinas de juego
            case 'maquinas-de-juego':
                $url = $url . _("maquinas-de-juego"). "/";
                break;
        
            //ruletas
            case 'ruletas':
                $url = $url . _("ruletas"). "/";
                break;
        
            //unete a iocus
            case 'unete-a-iocus':
                $url = $url . _("unete-a-iocus"). "/";
                break;
            
        }
        return $url;
        
    }
    
    public static function getPaginasIdiomas($pagina='',$idioma='',$otrasUrls=array()) {
        
        
        global $ROOT;
        
        $lang_anterior = self::$lang;
        self::$lang = '';
      
       
        //página actual:
        
        //Calcular los dos idiomas que falta de la página actual

        //paginas de enlaces en el array
        if (count($otrasUrls)!=0 && $pagina=='') {
            
            //calculamos la url de la página 
            foreach($otrasUrls as $key => $value) {
                if ($key=='es_ES') {
                    $urls[$key] =$value;
                } else if($key=='eu_ES') {
                    $urls[$key] =$value;
                } else if($key=='fr_FR') {
                    $urls[$key] =$value;
                }
            }
            
        } else { //calcular página según patron
        //
            if ($pagina!='') {
                
                $calculo_1 = '';
                $calculo_2 = '';
                $original ='';
                $pre_url_1 = '';
                $pre_url_2 = '';
                        
                //español calcular euskera y frances
                if ($idioma=='es_ES') {
                   
                    $calculo_1='eu_ES';
                    $calculo_2='fr_FR';
                    $original = "es_ES";
                    $pre_url_1 = $ROOT .  'eu/';
                    $pre_url_2 = $ROOT . 'fr/';
                }
                
                //euskera calcular español y frances
                if ($idioma=='eu_ES') {
                    $calculo_1='es_ES';
                    $calculo_2='fr_FR';
                    $original = "eu_ES";
                    $pre_url_1 = $ROOT;
                    $pre_url_2 = $ROOT .  'fr/';
                }
                
                //frances calcular español e  ingles
                if ($idioma=='fr_FR') {
                    $calculo_1='es_ES';
                    $calculo_2='eu_ES';
                    $original = "fr_FR";
   
                    $pre_url_1 = $ROOT;
                    $pre_url_2 = $ROOT . 'eu/';
                }

                
                //cambiamos
                $directory = $_SERVER['DOCUMENT_ROOT'] . $ROOT.'locale';
                $domain = 'messages';
                $locale = $calculo_1 . ".utf8";
                setlocale(LC_MESSAGES, $locale);
                setlocale(LC_TIME, $locale);
                bindtextdomain($domain, $directory);
                textdomain($domain);
                bind_textdomain_codeset($domain, 'UTF-8');
 
                $urls[$calculo_1] =  $pre_url_1 . Urls::getUrl($pagina);
                if (count($otrasUrls)!=0) {
                    $urls[$calculo_1] = $urls[$calculo_1] . $otrasUrls[$calculo_1];
                }
               
                //cambiamos -- Comentamos hasta que esté habilitado el francés
                $directory = $_SERVER['DOCUMENT_ROOT'] . $ROOT.'locale';
                $domain = 'messages';
                $locale = $calculo_2 . ".utf8";
                setlocale(LC_MESSAGES, $locale);
                setlocale(LC_TIME, $locale);
                bindtextdomain($domain, $directory);
                textdomain($domain);
                bind_textdomain_codeset($domain, 'UTF-8');
                
                $urls[$calculo_2] =  $pre_url_2 . Urls::getUrl($pagina);
                if (count($otrasUrls)!=0) {
                    $urls[$calculo_2] = $urls[$calculo_2] . $otrasUrls[$calculo_2];
                }

                //cambiamos al original
               
                $directory = $_SERVER['DOCUMENT_ROOT'] . $ROOT.'locale';
                $locale= $original . ".UTF-8";
                setlocale(LC_MESSAGES,  $locale);
                setlocale(LC_TIME, $locale);
                $domain = 'messages';
                bindtextdomain($domain, $directory);
                textdomain($domain);
                bind_textdomain_codeset($domain, 'UTF-8');
            }
        }
        self::$lang = $lang_anterior;
        return $urls;
    }
}
?>