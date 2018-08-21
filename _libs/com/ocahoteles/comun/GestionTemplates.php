<?php

/**
 * Description of GestionTemplates
 *
 * @author jose
 */
class GestionTemplates {
    //put your code here
   /* public static function getTmpl($tmpl) {

      global $baseDirectorio;
      if($tmpl[0] == '/') {
        if ($LANG=="") {
           return $baseDirectorio.$tmpl.'.inc';
        }
        else {
            return $baseDirectorio.$tmpl.'.inc';
        }
      }
      else {
        if ($LANG=="") {
           return $tmpl.'.inc';
        } else {
            return $tmpl.'.inc';
        }
      }
    }*/
    
    //------------------------------------------------------
    public static function getTmpl($template,$seccion='') {
        global $TEMPLATE;
        global $ROOT;
        global $appConfig;
        if ($TEMPLATE !='') {
          $template = $ROOT . 'templates/' . $TEMPLATE . "/" . $seccion . "/" . $template; 
        }

        if($template[0] == '/') {
           return $_SERVER['DOCUMENT_ROOT'].$template.'.inc';
        }
        else {
           return $template.'.inc';
        }
    }
    
    public static function getTmplInclude($template,$seccion='',$datos='',$titulo='',$descripcion='',$content='') {
        
        global $TEMPLATE;
        global $ROOT;
        global $appConfig;
        $inc = '';
        if ($TEMPLATE !='') {
          $template = $ROOT . 'templates/' . $TEMPLATE . "/" . $seccion . "/" . $template; 
        }

        if($template[0] == '/') {
           $inc =  $_SERVER['DOCUMENT_ROOT'].$template.'.inc';
        }
        else {
           $inc =  $template.'.inc';
        }
      
        
        if (file_exists($inc)) {
            include($inc);

        } 
    }

    public static function getTmplMail($template,$in) {
      return  $template.'.inc';
    }
    
    static public function slugify($text)  {
        
        $text = self::sanear_string($text);
          
        // replace non letter or digits by -
        $text = preg_replace('~[^\pL\d]+~u', '-', $text);
       

      //  echo 'IGNORE   : ', iconv("UTF-8", "ISO-8859-1//IGNORE", $text), PHP_EOL;
        // transliterate
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);

        // remove unwanted characters
        $text = preg_replace('~[^-\w]+~', '', $text);

        // trim
        $text = trim($text, '-');

        // remove duplicate -
        $text = preg_replace('~-+~', '-', $text);

        // lowercase
        $text = strtolower($text);

        if (empty($text)) {
          return 'n-a';
        }

        return $text;
    }
    

        
    static function sanear_string($string) {
 
        $string = trim($string);

        $string = str_replace(
            array('á', 'à', 'ä', 'â', 'ª', 'Á', 'À', 'Â', 'Ä'),
            array('a', 'a', 'a', 'a', 'a', 'A', 'A', 'A', 'A'),
            $string
        );

        $string = str_replace(
            array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
            array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
            $string
        );

        $string = str_replace(
            array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
            array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
            $string
        );

        $string = str_replace(
            array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô'),
            array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O'),
            $string
        );

        $string = str_replace(
            array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
            array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
            $string
        );

        $string = str_replace(
            array('ñ', 'Ñ', 'ç', 'Ç'),
            array('n', 'N', 'c', 'C',),
            $string
        );

        return $string;
    }
    
    static function requireToVar($file){
        
      
        if (file_exists($file)) {
            ob_start();
            require($file);
            return ob_get_clean();
        } else {
            return "";
        }
        
    }
}
?>
