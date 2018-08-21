<?php

require('../startPage.inc');

// Client
$client_id = 'partenievemanzaneda-7ia1nf';
$client_secret = 'JokraE6tvQOQ0Ow1gDxEwGB34aaRKvj9RqyKu5p5IN3s1FfZvJeExhBFqeiBsGWG';

// App
$app_id = 19127765;
$app_token = '6f19ecabd7ec40d8ac67dd48e4f48638';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token); 

// Items
$collection = PodioItem::filter($app_id, ['sort_by' => 'created_on', 'sort_desc' => true, 'limit' => 1]);


$datos = [];

foreach ($collection as $item) {
	
    $datos['id']= $item->id;
    $datos['prevision']= $item->fields[0]->values;
    $datos['fecha'] = $item->fields[1]->values;
    $datos['remontes'] = $item->fields[2]->values;
    $datos['accesos'] = $item->fields[3]->values;
    $datos['telesqui'] = $item->fields[4]->values;
    $datos['pistas'] = $item->fields[5]->values;
    $datos['totalPistasAbiertas'] = $item->fields[6]->values;
    $datos['kmEsquiables'] = $item->fields[7]->values;
    $datos['tipoDeNieve'] = $item->fields[8]->values;
    $datos['espesorMax'] = $item->fields[9]->values;
    $datos['espesorMin'] = $item->fields[10]->values;
    $datos['tempMax'] = $item->fields[11]->values;
    $datos['tempMin'] = $item->fields[12]->values;
    $datos['clima'] = $item->fields[13]->values;
    $datos['instalacionesAbiertas'] = $item->fields[14]->values;
    $datos['visibilidad'] = $item->fields[15]->values;
    $datos['notas'] = $item->fields[17]->values;

}

header('Content-type: text/html; charset=UTF-8');

GestionTemplates::getTmplInclude("widget_nieve","hoteles/manzaneda/content",$datos);

?>
