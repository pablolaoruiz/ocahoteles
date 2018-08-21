<?php

$idTorneo = (int )$_GET["id"];
echo $idTorneo;


//Podio API
error_reporting(E_ALL);
ini_set('display_errors', 1);

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);


include_once '../_libs/podio/PodioAPI.php';

// Client
//$client_id = 'devtorneos';
//$client_secret = 'LHc9wsYbqq9FpmqHXwhyV4NqWbEQY7fGqlyKMdXAKSu4AHgiCGc6tObyKkBVKX2F';

$client_id = 'torneosgolf';
$client_secret = 'fcsyccCtuSuyQdTFDeEUzxrgEg6pJz0MUoVo5mISxoa43eAqjjTQS9JCEhZm6leX';

// App
//$app_id = 19067829;
//$app_token = '37406bb5be884b51bc536c47e6b5e2b7';

$app_id = 19001849;
$app_token = '11ef004d338f4c9a8a3450f42491af26';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token);

$uploadPath= '../devGolf/';
echo $uploadPath;

$date = new DateTime();
$today = print $date->format('d-m-Y');
$plusDate= $date->modify('-10 days');

// Items
$collection = PodioItem::filter($app_id, array(
  'filters' => array('item_id'=> $idTorneo), 
));


foreach ($collection as $item) {
    $id = $item->id;
if ($id == '653049493'){
    $torneoTitles = $item->fields['titulo'];
    $obj = PodioItem::get($id);
    $obj_file = $obj->files[0];
    //$file = PodioFile::get($obj_file->file_id);
    $torneoTitle = $item->fields['titulo']->humanized_value();
    $torneoClase = $item->fields['clase']->humanized_value();
    $torneoModalidad = $item->fields['modalidad']->humanized_value();
    $torneoCartel = $item->fields['imagen']->values;
    foreach ($torneoCartel as $torneoCartels){
    $torneoCartelId = $torneoCartels->id;
    $torneoCartelLink = $torneoCartels->link;
    $objPreCartel = PodioFile::get($torneoCartelId);
    $objCartel = $objPreCartel->get_raw();

    if (file_exists($uploadPath.'/'.$torneoCartelId.'.jpg')){}
    else{
    file_put_contents($uploadPath.$torneoCartelId.'.jpg', $objCartel );}

    };
    $torneoIniRaw = $item->fields['fecha-torneo']->humanized_value();
    $torneoIni = date('d-m-Y',  strtotime($torneoIniRaw));
    $torneoFinRaw = $item->fields['fecha-fin']->humanized_value();
    $torneoFin = date('d-m-Y',  strtotime($torneoFinRaw));
    $torneoInfo = $item->fields['contenido']->values;



?>






    <?php echo '<hr>' ?>

    <?php
    ?>
    <div class="col-xs-12">
        <div class="col-xs-6">ID</div>
        <div class="col-xs-6"><?php echo $id;
         ?></div>
           <div class="col-xs-6">NOMBRE TORNEO</div>
        <div class="col-xs-6"><?php echo $torneoTitle ?></div>
         <div class="col-xs-6">CLASE TORNEO</div>
        <div class="col-xs-6"><?php echo $torneoClase ?></div>
         <div class="col-xs-6">MODALIDAD TORNEO</div>
        <div class="col-xs-6"><?php echo $torneoModalidad ?></div>


         <div class="col-xs-6">CARTEL TORNEO IMG</div>
         <div class="col-xs-6"><div class="col-xs-3"><img src="../devGolf/<?php echo $torneoCartelId ?>.jpg" alt="<?php echo $torneoTitle; ?>" class="img-responsive"></div></div>

         <div class="col-xs-6">FECHA INICIO</div>
        <div class="col-xs-6"><?php echo $torneoIni ?></div>
         <div class="col-xs-6">FECHA FIN</div>
        <div class="col-xs-6"><?php echo $torneoFin?></div>

         <div class="col-xs-6">INFO</div>
        <div class="col-xs-6"><?php echo $torneoInfo ?></div>

        <?php
        $torneoDocs = PodioFile::get_for_app( $app_id, $attributes = array('attached_to'=> 'item')); ?>

         <div class="col-xs-6">DOCS</div>
         <div class="col-xs-6">
             <?php




             foreach ($torneoDocs as $documentos){


                 if (($documentos->context['id'] == $id)){
                  //echo $documentos->context['id'];
                  //echo '-/-';
                 //echo $documentos->context['title'];
                  //echo '-/-';
                 echo '<a href="../devGolf/'.$documentos->name.'.pdf" target="_blank">'.$documentos->name.'</a><br>';
                 //echo '-/-';
                 //echo $documentos->file_id;
                 //echo '<br>';
             }

               $objPreDocs = PodioFile::get($documentos->file_id);
    $objDocs = $objPreDocs->get_raw();

    if (file_exists($uploadPath.'/'.$documentos->name.'.pdf')){}
    else{
    file_put_contents($uploadPath.$documentos->name.'.pdf', $objDocs );}
                 }

         ?><br>




         </div>



    </div>
<?php
echo 'SIGUIENTE TORNEO _________________________________';
}
else {};
  
             };




?>

