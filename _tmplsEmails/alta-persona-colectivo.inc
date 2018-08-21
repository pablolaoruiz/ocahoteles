<?php


$root = $datos['root'];
$url_b = $_SERVER['SERVER_NAME'];
$url_b = "http://" . $url_b . $root;

$mensaje="Gracias por confiar en ocahotels.com<br/><br/> El código promocional para su colectivo es el siguiente: <b>".$datos['codigo']."</b>";
$live="";
if($datos['colectivo'] == "LIVE") {
     $live="LIVE OCA";
     $mensaje="<p>Estimado cliente/amigo:</p>
        <p>&nbsp;</p>
        <p>Según los datos que nos ha proporcionado le hemos dado de alta en nuestro programa de fidelización <b>LIVE OCA</b>. A partir de ahora mismo podrá disfrutar de un descuento del ".$datos['dto']."% en la reservas o compras online realizadas a través de www.ocahotels.com en todos nuestros Hoteles hasta el 31/12/2018.</p>
        <p>&nbsp;</p>
         El código promocional que debe introducir en nuestra web para obtener los descuentos es el siguiente:<b> ".$datos['codigo']."</b>
        <p>&nbsp;</p>
        Muchas gracias por su confianza en Oca Hotels.
        <p>&nbsp;</p><p>&nbsp;</p>

        <p>EL EQUIPO DE PROGRAMAS DE FIDELIZACION</p>
        <p>OCA HOTELS</p>
        <p>www.ocahotels.com</p>";
}


return <<<FFF

<table style="width:100%; background: #FFFFFF;" cellpadding="0" cellspacing="0" border="0">
   <tr>
        <td style="padding:30px 0px">
            <table style="width:90%;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="width:100%;text-align:center;background-color:#b4b4b9 ;padding:30px;20px;box-shadow: 1px 1px 14px #ddd;" valign="center" align="center">
                        <img src="{$url_b}images/logo-ocahotels.png" width="115px" alt="Oca Hotels">
                    </td>
                </tr>
            </table>
            <table style="background:#f3f3f3;width:90%;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="padding:50px 30px">
                        
                        <div style=" display:block;width:100%;">

                            <p style="color:#212121;font-size:1.25em;font-weight: 300;">
                            $mensaje
                            </p>

        
                        </div>
              
                    </td>
                </tr>
                
            </table>
           
             <table style="background: #FFF;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="width:100%;padding:20px 12px;height:30px;font-size:0.96em" valign="center" align="left">
        
                        <div style="display:block;width:100%;text-align:center;padding-top:4%;">
                             info@ocahotels.com
                        </div>
                        <div style="display:block;width:100%;text-align:center;padding-top:4%;">
                             Copyright © Oca Hotels, 2018 
                        </div>
                     
                    </td>
                 
                </tr>
            </table>
        </td>
   </tr>
</table>
FFF;
?>