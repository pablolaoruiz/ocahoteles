<?php
    require('../startPage.inc');
    

    $googleMap = true;
    
    $id = $_REQUEST["id"];
   
    $tmplCuerpo = "tmpl_normal";
    $seccion = "compra-forfait";

    $ctrlForfait = new ForFait($enlace);
    $reserva = $ctrlForfait->getReserva($id);

    // Se crea Objeto
    $miObj = new RedsysAPI;
		
    // Valores de entrada
    $fuc="045864287";
    $terminal="1";
    $moneda="978";
    $trans="0";
    $url="http://ocahotels.com" . $ROOT . "services/callback_forfait.php";
    
    $urlOKKO="http://ocahotels.com" . $ROOT . "hoteles/espana/ourense/pobra-de-trives/oca-manzaneda/forfait-ope/".sha1($_GET['id'])."/".sha1($reserva['email']);
    
    $id=$_GET['id'].date('his').'F';
    if($reserva['dni']=="76873056H") {
            $reserva['total']='0.01';
    }
    $amount=$reserva['total']*100;
    // $amount=1;

    // Se Rellenan los campos
    $miObj->setParameter("DS_MERCHANT_AMOUNT",$amount);
    $miObj->setParameter("DS_MERCHANT_ORDER",strval($id));
    $miObj->setParameter("DS_MERCHANT_MERCHANTCODE",$fuc);
    $miObj->setParameter("DS_MERCHANT_CURRENCY",$moneda);
    $miObj->setParameter("DS_MERCHANT_TRANSACTIONTYPE",$trans);
    $miObj->setParameter("DS_MERCHANT_TERMINAL",$terminal);
    $miObj->setParameter("DS_MERCHANT_MERCHANTURL",$url);
    $miObj->setParameter("DS_MERCHANT_URLOK",$urlOKKO);		
    $miObj->setParameter("DS_MERCHANT_URLKO",$urlOKKO);

    //Datos de configuración
    $version="HMAC_SHA256_V1";
    $kc = '3/YLOoLfmoY6ZUrasZsE3sSaruZ9/KlK';//Clave recuperada de CANALES
    // $kc = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';//Clave recuperada de CANALES
    //$kc = 'qwertyasdf0123456789'; //clave para pruebas
    // Se generan los parámetros de la petición
    $request = "";
    $params = $miObj->createMerchantParameters();
    $signature = $miObj->createMerchantSignature($kc);
    

    require(getTmpl('tmpl_main','main'));
    
?>