<?php
require('tripadvisor.php');


$ta = new tripadvisor('df87a091ea2941e6a7f6c850c574659d');
//$data =$ta->getQuery('map','36.544493,31.987939');

//$data = $ta->getQuery('location','573511','','hotels');
//$data = $ta->getQuery('map','36.544493,31.987939');
//$data = $ta->getQuery('location_mapper','37.857257,27.247885',['q'=>'otel Carina']);
$data = $ta->getHotels('42.40609743987167,-8.852786606607083','');


setlocale(LC_TIME, "es_ES.utf8",'spanish');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<meta http-equiv="imagetoolbar" content="no">
<meta name="robots" content="noindex, follow">
<meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=no"/>
<title>TripAdvisor</title>

<link rel="stylesheet" type="text/css" media="screen" href="https://static.tacdn.com/css2/widget/cdswidget-property-v23716473622b.css">
</head>
<body id="WIDGET" style="margin:0;padding:0;">
<div id="CDSPOP" class="cdsPropDetail2014 cdsBx">
<div class="cdsData" style="">

<div class="cdsComponent">
<div class="cdsSummary">


<div class="cdsWrap">
<div class="cdsInformation">
<div class="cdsWrap">
<div class="taRating">
<img src="<?=$data['rating_image_url']?>" alt="<?=$data['rating']?>/5 estrellas" class="rsImg"/>
</div>
<div class="numReviews"> <?=$data['num_reviews']?> <?= _("opiniones")?> </div>
<div class="cdsClear"></div>
  
<div class="cdsBadges">
<?php if (isset($data['awards'])):
	foreach($data['awards'] as $cdsBadge):
?>
 <div class="cdsBadge">
     <div class="cdsBadgeImage"><img src="<?=$cdsBadge['images']['small']?>"></div>
     <div class="cdsBadgeContents cdsBadgeContentsSingleLine">
        <div class="cdsBadgeTitle"><?=$cdsBadge['display_name']?></div>
     </div> 
 </div>
<?php
   endforeach;
 endif;?>
</div>
</div>
</div>
</div><!--/ cdsInformation-->
</div><!--/ cdsWrap-->
<div class="cdsClear"></div>
</div><!--/ cdsSummary-->

</body><!--/ WIDGET-->
<!-- st: 23 dc: 0 sc: 5 -->
<!-- uid: VuP-kAoQH3IAAQ@ra8YAAAAx -->
</html>