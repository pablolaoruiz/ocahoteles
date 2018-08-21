
<head  lang="es">
        <?php 
        $ROOT = '/'?>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="puraenvidia.com">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Language" content="<?php echo $lang?>"/>
        <meta name="title" content="administración golf Oca Hotels">
   
       
        <link rel="apple-touch-icon" sizes="57x57" href="<?php echo $ROOT?>images/favicon/apple-icon-57x57.png">
        <link rel="apple-touch-icon" sizes="60x60" href="<?php echo $ROOT?>images/favicon/apple-icon-60x60.png">
        <link rel="apple-touch-icon" sizes="72x72" href="<?php echo $ROOT?>images/favicon/apple-icon-72x72.png">
        <link rel="apple-touch-icon" sizes="76x76" href="<?php echo $ROOT?>images/favicon/apple-icon-76x76.png">
        <link rel="apple-touch-icon" sizes="114x114" href="<?php echo $ROOT?>images/favicon/apple-icon-114x114.png">
        <link rel="apple-touch-icon" sizes="120x120" href="<?php echo $ROOT?>images/favicon/apple-icon-120x120.png">
        <link rel="apple-touch-icon" sizes="144x144" href="<?php echo $ROOT?>images/favicon/apple-icon-144x144.png">
        <link rel="apple-touch-icon" sizes="152x152" href="<?php echo $ROOT?>images/favicon/apple-icon-152x152.png">
        <link rel="apple-touch-icon" sizes="180x180" href="<?php echo $ROOT?>images/favicon/apple-icon-180x180.png">
        <link rel="icon" type="image/png" sizes="192x192"  href="<?php echo $ROOT?>images/favicon/android-icon-192x192.png">
        <link rel="icon" type="image/png" sizes="32x32" href="<?php echo $ROOT?>images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="96x96" href="<?php echo $ROOT?>images/favicon/favicon-96x96.png">
        <link rel="icon" type="image/png" sizes="16x16" href="<?php echo $ROOT?>images/favicon/favicon-16x16.png">
        <link rel="manifest" href="<?php echo $ROOT?>images/favicon/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="<?php echo $ROOT?>images/favicon/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
        
        <script>
            var root = "<?php echo $ROOT?>";
        </script>
        
        <link href="<?php echo $ROOT?>css/bootstrap.min.css" rel="stylesheet" media="screen">
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <script src="<?php echo $ROOT?>js/jquery-1.11.3.min.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900" rel="stylesheet">
        <link href="<?php echo $ROOT . 'css/ocahoteles.css' ?>" rel="stylesheet" type="text/css" media="screen">
        <link href="<?php echo $ROOT?>css/least.min.css" rel="stylesheet" />
        <script src="<?php echo $ROOT?>js/bootstrap.min.js" type="text/javascript"></script>
       
        
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="<?php echo $ROOT?>js/typeahead.bundle.min.js"></script>
        

       


    </head>
    <body>
      
        <?php

ini_set('error_reporting', E_ALL);


//conectamos con la base de datos

$servername = "galeriaoouoca.mysql.db";
$username = "galeriaoouoca";
$password = "P17Envidia";
$nombreDb = "galeriaoouoca";




// Create connection
$conn = new mysqli($servername, $username, $password, $nombreDb);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else{
    echo 'conectado ';
}



/* cambiar el conjunto de caracteres a utf8 */
if (!$conn->set_charset("utf8")) {

    exit();
} else {
   ($conn->character_set_name());
};

$date = new DateTime();
$today = print $date->format('d-m-Y');
$plusDate= $date->modify('-30 days');



?>
<section class="pd-t-50 pd-b-50 bck-color-gris">
    <div class="col-xs-12 text-center" style="background-color: #1d1e1e"><img src="http://ocahotels.com/images/logo-ocahotels.png" class="img-responsive" style="margin: 0 auto; display: block; padding: 50px 0">
        <div class="col-xs-12  text-center" style="margin-bottom: 40px;"><h4 style="color: #FFF">ADMINISTRACIÓN DOCUMENTOS TORNEOS DE GOLF</h4></div>
    </div>
   
    <div class="container content-interior">
        <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-6 col-md-push-3" style="margin-top: 50px;">
            
            <?php
error_reporting(E_ALL);
ini_set('display_errors', '1');


?>



<?php  $ftp_server = "ftp.cluster003.hosting.ovh.net";
$ftp_user_name = "galeriaoou-puraenv";
$ftp_user_pass = "20Pura0ca17";
$remote_dir = "/docs/augas-santas/torneos-golf";

// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = @ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

//default values
$file_url = "";

if($login_result) {
//set passive mode enabled
ftp_pasv($conn_id, true);

//check if directory exists and if not then create it
if(!@ftp_chdir($conn_id, $remote_dir)) {
//create diectory
ftp_mkdir($conn_id, $remote_dir);
//change directory
ftp_chdir($conn_id, $remote_dir);
}

// split the contents of $_POST['data'] on a hyphen, returning at most two items
list($torneoId, $torneoName) = explode("-", $_POST['torneo'], 2);

$tipoDoc = $_POST['tipoDoc'];

 
$file = $_FILES["file"]["tmp_name"];
$remote_file = $_FILES["file"]["name"];

$ret = ftp_nb_put($conn_id, $remote_file, $file, FTP_BINARY, FTP_AUTORESUME);
while(FTP_MOREDATA == $ret) {
$ret = ftp_nb_continue($conn_id);
}

if($ret == FTP_FINISHED) {
echo "<h4>EL ARCHIVO '" . $remote_file . "' <br>ha sido añadido con éxito al<br> TORNEO".$torneoName." <br>como ".$tipoDoc. "</h4>";
} else {
echo "<h4>EL ARCHIVO " . $remote_file . " NO HA PODIDO AÑADIRSE, POR FAVOR <a href='javascript: window.history.go(-1)'>VUELVA A INTENTARLO</a>.";
}
} else {
echo "NO SE PUDO ESTABLECER CONEXIÓN CON " . $ftp_server;
}


$actualizarBD ="UPDATE `galeriaoouoca`.`golf_competiciones` SET `$tipoDoc` = '$remote_file' WHERE `golf_competiciones`.`ID` = $torneoId;";
if ($conn->query($actualizarBD) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>

            
            
</div>
    </div>
</section>
    </body>
</html>