<?php

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


// https://sis-t.redsys.es:25443/sis/realizarPago Pruebas
// https://sis.redsys.es/sis/realizarPago Real


?>

<div id="loading" style="position: fixed;display: block;height: 100vh;padding-top:20%">
    <img src="<?php echo $ROOT?>images/loading.gif"  alt="Loading...">
</div>

<form name="frm" action="https://sis.redsys.es/sis/realizarPago" method="POST" style="display: none">
Ds_Merchant_SignatureVersion <input type="text" name="Ds_SignatureVersion" value="<?php echo $version; ?>"/></br>
Ds_Merchant_MerchantParameters <input type="text" name="Ds_MerchantParameters" value="<?php echo $params; ?>"/></br>
Ds_Merchant_Signature <input type="text" name="Ds_Signature" value="<?php echo $signature; ?>"/></br>
    <input type="submit" value="Enviar" >
</form>

<script type="text/javascript">
    setTimeout(function(){ document.frm.submit();}, 2500);
</script>