<?php

    require('../startPage.inc');
    $ctrlForfait = new ForFait($enlace);   
    $fecha=date('Y-m-d', strtotime("+1 day"));
    $ctrlForfait->obtenerForfaits($fecha);
?>
