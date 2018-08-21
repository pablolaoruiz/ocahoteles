<?php
//session_start();
/** Configuración **/
 $appConfig = parse_ini_file(dirname(__FILE__) . '/_config/config_ini.inc');

/** Debug **/
 if($appConfig['SHOW_NOTICES']) {
    error_reporting(E_ALL);
 } else {	
    error_reporting(E_ALL ^ E_NOTICE);
 }

$ROOT = $appConfig['ROOT'];
$TEMPLATE = $appConfig['TEMPLATE'];
$css_template = $TEMPLATE . ".css";

/** Librerías **/
//require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/gettext/gettext.inc');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/redsys/apiRedsys.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/Swift/swift_required.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/podio/PodioAPI.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/comun/GestionMail.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/comun/GestionTemplates.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/comun/Urls.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/BBDD.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/BBDD_PDO.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/Hoteles.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/HotelesDisplay.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/Colectivos.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/Torneos.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/Promociones.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/Forfait.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/controllers/Newsletter.php');
require_once($_SERVER['DOCUMENT_ROOT']. $ROOT . '_libs/com/ocahoteles/secciones/Secciones.php');

//conectamos con la base de datos
//$enlace = mysqli_connect($appConfig['HOST'], $appConfig['USER'],  $appConfig['PASSWORD']);
$enlace = new PDO($appConfig['CONNECTION_STRING'], $appConfig['USER'], $appConfig['PASSWORD'], array(
	    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'",
	    PDO::ATTR_EMULATE_PREPARES => false,
	    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	));

if (!$enlace) {
    die('No pudo conectarse: ' . mysql_error());
}
   

// inicializar idioma
$language = '';
if(isset($_REQUEST['lang'])) {
  $language =  $_REQUEST['lang'];
}

if($language=='') {
   $lang = 'es_ES'; 
   $ROOT_LANG = '';
} else {
   $lang = 'en_GB';
   $ROOT_LANG = 'en/';
   
}
global $ROOT_LANG;

$directory = realpath('./') . '/locale';
$directory = $_SERVER['DOCUMENT_ROOT'] . $ROOT . "locale";
//echo $directory;
$locale= $lang . ".UTF-8";
//echo $locale;
setlocale(LC_MESSAGES,  $locale);
setlocale(LC_TIME, $locale);
$domain = 'messages';
bindtextdomain($domain, $directory);
textdomain($domain);
bind_textdomain_codeset($domain, 'UTF-8');
 //texto internacionalizacion
$codeset = "UTF-8";

$url_b = $_SERVER['SERVER_NAME'];
$url_f = $_SERVER['REQUEST_URI'];
$url_page = "http://".$url_b.$url_f;

//inicializamos controladores
$ctrlHoteles = new Hoteles($enlace,$language);
$ctrlColectivos = new Colectivos($enlace);
$ctrlTorneos = new Torneos($enlace);
$ctrlPromociones = new Promociones($enlace);
$ctrlNewsletter = new Newsletter($enlace);

//------------------------------------------------------
function getTmpl($template,$seccion='') {
  global $TEMPLATE;
  global $ROOT;
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

?>
