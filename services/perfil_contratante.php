<?php

require('../startPage.inc');

// Client
$client_id = 'perfilcontratante';
$client_secret = 'wEWPdNpiN92zsW33GvVKmCKYnf92dyZTWQnSTjz71tHaQyVmbkvLUjR6OAalt5jU';

// App
$app_id = 18744234;
$app_token = '15c5e2e468a94e65875f5628ccfab376';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token); 

// Items
$collection = PodioItem::filter($app_id, ['sort_by' => 'created_on', 'sort_desc' => true, ]);


$datos = [];

foreach ($collection as $item) {
	
    $datos['id']= $item->id;
    $datos['proyecto']= $item->fields[0]->values;
    $datos['titulo'] = $item->fields[1]->values;
    $datos['fecha-2'] = $item->fields[2]->values;
    $datos['accesos'] = $item->fields[3]->values;


}

header('Content-type: text/html; charset=UTF-8');

GestionTemplates::getTmplInclude("perfil_contratante","hoteles/manzaneda/content",$datos);

?>
