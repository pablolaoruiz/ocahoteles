<?php
// Podio API
include_once 'http://www.ocahotels.com/_libs/podio/PodioAPI.php';

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

?>
<!doctype html>
<html lang="ES">
<head>
<meta charset="UTF-8">
<title>Parte de Nieve Oca Hotels. Estación de Montaña Oca Nova Manzaneda</title>

<meta name="description" content="Consulta el parte de nieve para la Estación de Montaña Oca Nova Manzaneda.">
<meta name="keywords" content="parte, nieve, ski, esquí">

<!-- Social: Facebook -->

<meta property="og:url" content="">
<meta property="og:type" content="website">
<meta property="og:title" content="Parte de Nieve Oca Hotels. Estación de Montaña Oca Nova Manzaneda">
<meta property="og:image" content=""/>
<meta property="og:description" content="Consulta el parte de nieve para la Estación de Montaña Oca Nova Manzaneda.">
<meta property="og:site_name" content="Estación de Montaña Oca Nova Manzaneda">
<meta property="article:author" content="https://www.facebook.com/ocahotels/">
<meta property="article:publisher" content="https://www.facebook.com/ocahotels/">

<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Pragati+Narrow:400,700" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<link rel="stylesheet" href="custom/oca.css">
<link rel="stylesheet" href="custom/bootstraphacks.css">

<script src="https://use.fontawesome.com/f2c72dda87.js"></script>
</head>

<body>
<!-- LOGO -->
<div class="col-xs-8 col-xs-push-2 col-sm-6 col-sm-push-3 col-md-8 col-md-push-2 col-lg-4 col-lg-push-4 text-center" id="logo">
<img src="http://ocahotels.com/css/img/logos/4117.png" class="img-responsive"></div>
<!-- logo END -->
<div class="col-xs-12"></div>
<!-- CONTENT -->
<div class="col-xs-12 col-sm-8 col-sm-push-2 col-md-8 col-md-push-2 col-lg-6 col-lg-push-3  whiteBg" id="mainContent">
<!-- title -->

<div class="col-xs-6"><h1><?php echo $prevision['0']['text']?></h1><h4 style="font-size:30px"><?php echo $fecha['start']->format('<\b\>d-m-Y<\/b\> \&\n\b\s\p\;  H:i') ?> Hs.</h4>

<div class="col-xs-12 noPadding"><?php print_r($notas,false);?></div></div>
<!--climatología-->
<div class="col-xs-6 text-right">
<div class="col-xs-12 col-sm-6 text-right text-center-xs">
<img src="img/clima_<?php echo $clima['0']['id'] ?>.png" class="climaImg"></div>

<div class="col-xs-12 col-sm-6 temp text-center">
<i class="icon-thermometer-full max" aria-hidden="true"></i> <b style="color:#B20002"><?php echo $tempMax?>º</b> &nbsp; <i class="icon-thermometer-empty min" aria-hidden="true"></i> <b style="color:#3BB7FF"><?php echo $tempMin ?>º</b><br>
<div class="col-xs-12"><p style="font-size:13px; text-transform:uppercase">visibilidad: <b><?php echo $visibilidad['0']['text'] ?></b></p></div></div>

</div>
<div class="col-xs-6 text-right"></div>

<div class="col-xs-12"><hr></div>
<!-- accesos -->
<div class="col-xs-12 infoCol">

<div class="col-xs-12 col-sm-3 text-left-sm text-center-xs"><h4>Accesos:</h4></div>
<div class="col-xs-12 col-sm-9 text-left-sm text-center-xs">
<?php
foreach ($accesos as $acceso){
	?>
<span class="acceso" style="background-color:#<?php echo $acceso['color'] ?>"><?php echo $acceso['text'] ?></span> <?php }?>
</div>

<div class="col-xs-12"><br>
</div>
<!-- remontes -->
<div class="col-xs-12 col-sm-3 text-left-sm text-center-xs"><h4>Telesilla:</h4></div>
<div class="col-xs-12 col-sm-9 text-left-sm text-center-xs">
<?php
foreach ($remontes as $remonte){
	?>
<span class="acceso" style="background-color:#<?php echo $remonte['color'] ?>"><?php echo $remonte['text'] ?></span> <?php }?>
</div>

<div class="col-xs-12"><br>
</div>
<!-- telesquí -->
<div class="col-xs-12 col-sm-3 text-left-sm text-center-xs"><h4>Telesquí:</h4></div>
<div class="col-xs-12 col-sm-9 text-left-sm text-center-xs">
<?php
foreach ($telesqui as $tele){
	?>
<span class="tele" style="background-color:#<?php echo $tele['color'] ?>"><?php echo $tele['text'] ?></span> <?php }?>
</div>

<div class="col-xs-12"><br>
</div>
<!-- pistas -->
<div class="col-xs-12 col-sm-6 text-left-sm text-center-xs"><h4>Pistas abiertas: <span class="numbers"><?php echo $totalPistasAbiertas ?></span></h4></div>
<!--kms -->
<div class="col-xs-12 col-sm-6 text-left-sm text-center-xs"><h4>Kms. esquiables: <span class="kms"><?php echo $kmEsquiables ?></span></h4></div>
<div class="col-xs-12 text-left-sm text-center-xs">
<?php
foreach ($pistas as $pista){ ?>
<span class="tele" style="color:#49aba3; "><?php echo $pista['text']?></span>

<?php }
?></div>

<div class="col-xs-12"><br>
</div>

<!--calidad -->
<div class="col-xs-12  text-left-sm text-center-xs"><h4>Tipo de nieve:</h4>
<div class="row visible-xs"></div>
<?php foreach ($tipoDeNieve as $tipo){?> 
<span class="nieve"><img src="img/<?php echo $tipo['id'] ?>.png" class="nieveImg"> <?php echo $tipo['text'];?> </span>
<?php }?></div>

<div class="col-xs-12"><br>
</div>
<!-- grosor -->
<div class="col-xs-12 col-sm-2 col-md-1 text-left-sm text-center-xs"><h4>Espesor:</h4></div><div class="col-xs-12 col-sm-10 col-md-8 text-center-xs"><h4> Máximo <b><?php echo $espesorMax ?></b>cm · Mínimo <b><?php echo $espesorMin?></b>cm</h4></div>
<div class="col-xs-12"></div>

<!-- pistas -->
<div class="col-xs-12 text-left-sm text-center-xs"><h4>Instalaciones abiertas: </h4></div>
<div class="col-xs-12 text-left-sm text-center-xs">
<?php
foreach ($instalacionesAbiertas as $instalaciones){ ?>
<span class="acceso" style="color: #4B4B4B; background-color:#DCEBD8 "><?php echo $instalaciones['text']?></span>

<?php }
?></div>
<div class="col-xs-12"><br>
<br>
</div>
</div>
</div>
</body>
</html>
