<?php

require('../startPage.inc');



//obtenemos la operain a ejecutar.
$operacion = $_REQUEST['operacion'];

//seleccion de hoteles con el nombre de la provincia y ciudad

$hoteles = $ctrlHoteles->getHotelesBuscador();
$resultado =[];
foreach($hoteles as $hotel){
    $hotel_res['nombre'] = $hotel['nombre'];
    $hotel_res['id'] = $hotel['neobookingid'];
    $resultado[] = $hotel_res;
}
echo json_encode($resultado);
die();
        

/*
$resultado = [];

$resultado['hoteles']  = '[{ "team": "New Jersey Devils" },'
        . '{ "team": "New York Islanders" },{ "team": "New York Rangers" },'
        . '{ "team": "Philadelphia Flyers" },{ "team": "Pittsburgh Penguins" },'
        . '{ "team": "Chicago Blackhawks" },{ "team": "Columbus Blue Jackets" },'
        . '{ "team": "Detroit Red Wings" },{ "team": "Nashville Predators" },'
        . '{ "team": "St. Louis Blues" },{ "team": "Boston Bruins" },'
        . '{ "team": "Buffalo Sabres" },{ "team": "Montreal Canadiens" },'
        . '{ "team": "Ottawa Senators" },{ "team": "Toronto Maple Leafs" },'
        . '{ "team": "Calgary Flames" },{ "team": "Colorado Avalanche" },{ "team": "Edmonton Oilers" },'
        . '{ "team": "Minnesota Wild" },{ "team": "Vancouver Canucks" },{ "team": "Carolina Hurricanes" },'
        . '{ "team": "Florida Panthers" },{ "team": "Tampa Bay Lightning" },{ "team": "Washington Capitals" },'
        . '{ "team": "Winnipeg Jets" },{ "team": "Anaheim Ducks" },{ "team": "Dallas Stars" },{ "team": "Los Angeles Kings" },'
        . '{ "team": "Phoenix Coyotes" },{ "team": "San Jose Sharks" }]';

$resultado['ciudades']  = '[{ "team": "Boston Celtics" },'
        . '{ "team": "Dallas Mavericks" },'
        . '{ "team": "Brooklyn Nets" },'
        . '{ "team": "Houston Rockets" },'
        . '{ "team": "New York Knicks" },'
        . '{ "team": "Memphis Grizzlies" },'
        . '{ "team": "Philadelphia 76ers" },'
        . '{ "team": "New Orleans Hornets" },'
        . '{ "team": "Toronto Raptors" },'
        . '{ "team": "San Antonio Spurs" },'
        . '{ "team": "Chicago Bulls" },{ "team": "Denver Nuggets" },'
        . '{ "team": "Cleveland Cavaliers" },{ "team": "Minnesota Timberwolves" },'
        . '{ "team": "Detroit Pistons" },{ "team": "Portland Trail Blazers" },'
        . '{ "team": "Indiana Pacers" },{ "team": "Oklahoma City Thunder" },{ "team": "Milwaukee Bucks" },{ "team": "Utah Jazz" },{ "team": "Atlanta Hawks" },{ "team": "Golden State Warriors" },{ "team": "Charlotte Bobcats" },{ "team": "Los Angeles Clippers" },{ "team": "Miami Heat" },{ "team": "Los Angeles Lakers" },{ "team": "Orlando Magic" },{ "team": "Phoenix Suns" },{ "team": "Washington Wizards" },{ "team": "Sacramento Kings" }]';
        
*/
    
/*
echo '[{ "team": "New Jersey Devils" },'
        . '{ "team": "New York Islanders" },{ "team": "New York Rangers" },'
        . '{ "team": "Philadelphia Flyers" },{ "team": "Pittsburgh Penguins" },'
        . '{ "team": "Chicago Blackhawks" },{ "team": "Columbus Blue Jackets" },'
        . '{ "team": "Detroit Red Wings" },{ "team": "Nashville Predators" },'
        . '{ "team": "St. Louis Blues" },{ "team": "Boston Bruins" },'
        . '{ "team": "Buffalo Sabres" },{ "team": "Montreal Canadiens" },'
        . '{ "team": "Ottawa Senators" },{ "team": "Toronto Maple Leafs" },'
        . '{ "team": "Calgary Flames" },{ "team": "Colorado Avalanche" },{ "team": "Edmonton Oilers" },'
        . '{ "team": "Minnesota Wild" },{ "team": "Vancouver Canucks" },{ "team": "Carolina Hurricanes" },'
        . '{ "team": "Florida Panthers" },{ "team": "Tampa Bay Lightning" },{ "team": "Washington Capitals" },'
        . '{ "team": "Winnipeg Jets" },{ "team": "Anaheim Ducks" },{ "team": "Dallas Stars" },{ "team": "Los Angeles Kings" },'
        . '{ "team": "Phoenix Coyotes" },{ "team": "San Jose Sharks" }]';*/
 

/*echo '[{ "hotel": "Grand Oca Maragogi Resort" },{ "hotel": "Chalets Rurales Aldeaduero" }]';*/

?>
