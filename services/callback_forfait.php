<?php

    require('../startPage.inc');
    $ctrlForfait = new ForFait($enlace);

    // Se crea Objeto
    $miObj = new RedsysAPI;
    if (!empty( $_POST )) {//URL DE RESP. ONLINE

        $version = $_POST["Ds_SignatureVersion"];
        $datos = $_POST["Ds_MerchantParameters"];
        $signatureRecibida = $_POST["Ds_Signature"];

        $decodec = json_decode($miObj->decodeMerchantParameters($datos));	
        $kc = '3/YLOoLfmoY6ZUrasZsE3sSaruZ9/KlK'; //Clave recuperada de CANALES
        // $kc = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';//Clave recuperada de CANALES
        $firma = $miObj->createMerchantSignatureNotif($kc,$datos);	

        if ($firma === $signatureRecibida && (int)$decodec->Ds_Response<100) {
            
            $id=substr($decodec->Ds_Order, 0,-7);
            $resultado = $ctrlForfait->confirmarReserva($id);

            $result="FIRMA OK";

        } else {
            
            $result="FIRMA KO";
            
        }
    }
   
?> 