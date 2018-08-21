<?php
	

    require('../startPage.inc');

    $ctrlForfait = new ForFait($enlace);
    $reserva = $ctrlForfait->getReserva($datos);

    // Se crea Objeto
    $miObj = new RedsysAPI;
		
    // Valores de entrada
    $fuc="045864287";
    $terminal="1";
    $moneda="978";
    $trans="0";
    $url="http://ocahotels.com/" . $ROOT . "services/callback_forfait.php";
    $urlOKKO="http://ocahotels.com/" . $ROOT . "hoteles/espana/ourense/pobra-de-trives/oca-manzaneda/forfait-ope/".sha1($_GET['id'])."/".sha1($reserva['email']);
    
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
 //   $kc = 'qwertyasdf0123456789'; //clave para pruebas
    //
    //
    //
    // $kc = 'sq7HjrUOBfKmC576ILgskD5srU870gJ7';//Clave recuperada de CANALES
    // Se generan los parámetros de la petición
    $request = "";
    $params = $miObj->createMerchantParameters();
    $signature = $miObj->createMerchantSignature($kc);
    
    
    /**
     * 
     *  Realizar al menos una operación Autorizada. Utilice esta tarjeta de prueba:
        Número de tarjeta: 4548812049400004 
        Caducidad: 12/20 
        Código CVV2: 123 
        Código CIP: 123456 
        Realizar al menos una operación Denegada. Utilice esta tarjeta de prueba:
        Número de tarjeta: 1111111111111117 
        Caducidad: 12/20 
     */

//  https://sis-t.redsys.es:25443/sis/realizarPago Pruebas
// https://sis.redsys.es/sis/realizarPago Real
?>
<html lang="es">
<head>
</head>
<body>
<form name="frm" action="https://sis-t.redsys.es:25443/sis/realizarPago" method="POST" style="display:none;">
Ds_Merchant_SignatureVersion <input type="text" name="Ds_SignatureVersion" value="<?php echo $version; ?>"/></br>
Ds_Merchant_MerchantParameters <input type="text" name="Ds_MerchantParameters" value="<?php echo $params; ?>"/></br>
Ds_Merchant_Signature <input type="text" name="Ds_Signature" value="<?php echo $signature; ?>"/></br>
<input type="submit" value="Enviar" >
</form>

<script type="text/javascript">
	document.frm.submit();
</script>
</body>
</html>
