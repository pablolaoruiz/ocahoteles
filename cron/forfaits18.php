<?php

    require('http://www.ocahotels.com/startPage.inc');
    $ctrlForfait = new ForFait($enlace);   
    $fecha=date('Y-m-d');
    $ctrlForfait->obtenerForfaits($fecha);
?>
