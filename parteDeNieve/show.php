<?php

$ch = curl_init();
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
// Podio API
require_once 'podio/PodioAPI.php';


// Client
$client_id = 'partenieve';
$client_secret = 'wEWPdNpiN92zsW33GvVKmCKYnf92dyZTWQnSTjz71tHaQyVmbkvLUjR6OAalt5jU';

// App
$app_id = 17507806;
$app_token = '5709fc0cc85d45108da696b312533f41';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token); 

// Items
$collection = PodioItem::filter($app_id, ['sort_by' => 'created_on', 'sort_desc' => true, 'limit' => 1]);

foreach ($collection as $item) {
	
	
    $id = $item->id;
	
    $prevision = $item->fields[0]->values;	
    $fecha = $item->fields[1]->values;
    $remontes = $item->fields[2]->values;
    $accesos = $item->fields[3]->values;
	$telesqui = $item->fields[4]->values;
    $pistas = $item->fields[5]->values;
    $totalPistasAbiertas = $item->fields[6]->values;
	$kmEsquiables = $item->fields[7]->values;
	$tipoDeNieve = $item->fields[8]->values;
    $espesorMax = $item->fields[9]->values;
	$espesorMin = $item->fields[10]->values;
	$tempMax = $item->fields[11]->values;
	$tempMin = $item->fields[12]->values;
	$clima = $item->fields[13]->values;
	$instalacionesAbiertas = $item->fields[14]->values;
	$visibilidad = $item->fields[15]->values;
	$notas = $item->fields[17]->values;
	
	
}

print_r ($id);
print("<pre> prevision ".print_r($prevision,true)."</pre>");

print("<pre> fecha ".print_r($fecha,true)."</pre>");

print("<pre> remontes ".print_r($remontes,true)."</pre>");

print("<pre> accesos ".print_r($accesos,true)."</pre>");

print("<pre> telesqui ".print_r($telesqui,true)."</pre>");

print("<pre> pistas ".print_r($pistas,true)."</pre>");

print("<pre> total pistas abiertas ".print_r($totalPistasAbiertas,true)."</pre>");

print("<pre> total km esquiables ".print_r($kmEsquiables,true)."</pre>");

print("<pre> total km esquiables ".print_r($kmEsquiables,true)."</pre>");

print("<pre> tipo de nieve ".print_r($tipoDeNieve,true)."</pre>");

print("<pre> espesor Máx ".print_r($espesorMax,true)."</pre>");

print("<pre> espesor Min ".print_r($espesorMin,true)."</pre>");

print("<pre> temp Máx ".print_r($tempMax,true)."</pre>");

print("<pre> temp Min ".print_r($tempMin,true)."</pre>");

print("<pre> Climatología ".print_r($clima,true)."</pre>");

print("<pre> Instalaciones Abiertas ".print_r($instalacionesAbiertas,true)."</pre>");

print("<pre> Instalaciones Abiertas ".print_r($visibilidad,true)."</pre>");

print("<pre> Instalaciones Abiertas ".print_r($notas,true)."</pre>");








?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>show results</title>
</head>

<body>



</body>
</html>
