
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
$plusDate= $date->modify('-10 days');





// Attempt select query execution
$sql = "SELECT * FROM `golf_competiciones` WHERE `FECHAFIN` >= '".$plusDate->format('Y-m-d')."' ORDER BY `FECHAFIN` DESC";
$resultSet = array();
if($result = mysqli_query($conn, $sql)){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $resultSet[] = $row;


        }

        // Free result set
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn);
}

?>
<section class="pd-t-50 pd-b-50 bck-color-gris">
    <div class="col-xs-12 text-center" style="background-color: #1d1e1e"><img src="http://ocahotels.com/images/logo-ocahotels.png" class="img-responsive" style="margin: 0 auto; display: block; padding: 50px 0">
        <div class="col-xs-12  text-center" style="margin-bottom: 40px;"><h4 style="color: #FFF">ADMINISTRACIÓN DOCUMENTOS TORNEOS DE GOLF</h4></div>
    </div>
   
    <div class="container content-interior">
        <div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-6 col-md-push-3" style="margin-top: 50px;">
<form action="golfadminUpload.php" method='post' enctype='multipart/form-data'>

    <div class="col-xs-12 ">
        <label for="torneo">TORNEO:</label>
        <select name="torneo" class="" required>
            <option value="">ELIJA UN TORNEO DEL LISTADO</option>
            <?php
            foreach ($resultSet as $resultado){
               ?>
            <option value="<?php echo $resultado['ID']." - " . $resultado['CAMPEONATO']?>"><?php echo $resultado['CAMPEONATO']?></option>

            <?php
            }?>
        </select>  </div>
    <div class="col-xs-12"><br></div>
    <div class="col-xs-12"> <label for="tipoDoc">TIPO DE DOCUMENTO QUE SE AÑADE:</label>
        <div class="col-xs-10  col-xs-push-1"><label class="radio">
                <input type="radio" name="tipoDoc" id="DOCSALIDAS" value="DOCSALIDAS" required> DOCUMENTO DE SALIDAS
</label>
<label class="radio">
  <input type="radio" name="tipoDoc" id="DOCCLAS" value="DOCCLAS"> DOCUMENTO DE CLASIFICACIÓN
</label></div>
</div>
           <div class="col-xs-12"><br></div>
     <div class="col-xs-12 col-xs-push-0">
        <label >DOCUMENTO para SUBIR:</label>
            <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000000000" />
        <input type="file" name="file" id="file" class=""></div>
     <div class="col-xs-12"><br></div>

   <div class="col-xs-12"><br></div>
     <div class="col-xs-12 col-xs-push-0 ">
         <input type="submit" name="submit" id="submit" value="ENVIAR" class="pdflink" required ></div>
</form></div>
    </div>
</section>
    </body>
</html>

