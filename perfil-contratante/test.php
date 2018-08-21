



<?php

require_once 'podio/PodioAPI.php';
include_once 'http://www.ocahotels.com/_libs/podio/PodioAPI.php';

// Client
$client_id = 'perfilcontratante';
$client_secret = 'feMXYAhv4uXRpau3Zr8WN5Q9T13DxGN5ZX0TrzVzjf233os3XbRN8rgifGahrA6T';

// App
$app_id = 18744234;
$app_token = '15c5e2e468a94e65875f5628ccfab376';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token);

// Make sure errors are output to the screen
ini_set('display_errors', '1');



// Items
//$collection = PodioItem::filter($app_id, array['sort_by' => 'created_on', 'sort_desc' => false, ]);

$collection = PodioItem::filter(
$app_id, array(
"sort_desc" => TRUE,
"sort_by" => "created_on",
"filters" => array(
"148049504" => 2
)));






//$file = PodioFile::get($app_id);
//$file_content = $file->get_raw();
//echo $file_content;
//file_put_contents($file->name, $file->get_raw());




foreach ($collection as $item) {

    $id = $item->id;
    $proyecto = $item->fields[0]->values;
    $titulo = $item->fields[1]->values;
    $fecha = $item->fields[2]->values;
    $filename = $item->fields[3]->values;

?>
    <p><?php echo $titulo ?> </p>
      <p><a href="http://ocahotels.com/docs/manzaneda/perfil-contratante/<?php echo $filename ?>" target="_blank">DESCARGA: <?php echo $filename ?></a> </p>
        <p><?php print $files ?> </p><br><br><p>
    <?php echo $fecha['start']->format('<\b\>d-m-Y<\/b\> \&\n\b\s\p\; ') ?></p>
    <p>____</p><br><br>
      <?php //print_r ($file) ?>
    <?php //print_r ($infor) ?>
<?php };




 ?>
