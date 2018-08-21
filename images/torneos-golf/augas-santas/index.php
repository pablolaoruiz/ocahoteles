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
    <div class="container content-interior">
<form action="golfadminUpload.php" method='post' enctype='multipart/form-data'>

    <div class="col-xs-12 col-xs-push-0 col-sm-6 col-sm-push-3">
        <label for="torneo">TORNEO:</label>
        <select name="torneo" class="" required>
            <option value="">ELIJA UN TORNEO DEL LISTADO</option>
            <?php
            foreach ($resultSet as $resultado){
               ?>
            <option value="<?php echo $resultado['ID']?>"><?php echo $resultado['CAMPEONATO']?></option>

            <?php
            }?>
        </select>  </div>
    <div class="col-xs-12"><br></div>
     <div class="col-xs-12 col-xs-push-0 col-sm-6 col-sm-push-3">
        <label >DOCUMENTO para SUBIR:</label>
            <!-- MAX_FILE_SIZE must precede the file input field -->
    <input type="hidden" name="MAX_FILE_SIZE" value="1000000000000" />
        <input type="file" name="file" id="file" class=""></div>
     <div class="col-xs-12"><br></div>

   <div class="col-xs-12"><br></div>
     <div class="col-xs-12 col-xs-push-0 col-sm-6 col-sm-push-3">
         <input type="submit" name="submit" id="submit" value="ENVIAR"></div>
</form>
    </div>
</section>
