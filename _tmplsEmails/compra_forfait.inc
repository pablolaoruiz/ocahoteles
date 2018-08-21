<?php

$nombre = $datos['nombre'];
$root = $datos['root'];
$url_b = $_SERVER['SERVER_NAME'];
$url_b = "http://" . $url_b . $root;
return <<<FFF

<table style="width:100%; background: #b4b4b4;" cellpadding="0" cellspacing="0" border="0">
   <tr>
        <td style="padding:30px 0px">
            <table style="width:90%;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="width:100%;text-align:center;background-color:#b4b4b9 ;padding:30px;20px;box-shadow: 1px 1px 14px #ddd;" valign="center" align="center">
                        <img src="{$url_b}images/logo-oca-manzaneda.png" width="115px"  height="auto" alt="Oca Hotels">
                        <h2 style="color:#FFF;font-size:2.4em;font-weignt:300;margin-top:10px;margin-bottom:5px;padding:0 0">Manzaneda</h2>
                        <h3 style="color:#FFF;font-size:1,8em;font-weignt:300;margin-top:5px;margin-bottom:5px;padding:0 0">Estación de Montaña</h2>
                    </td>
                </tr>
            </table>
            <table style="background:#f3f3f3;width:90%;" align="center" cellpadding="0" cellspacing="0" border="0">
                <tr>
                    <td style="padding:50px 30px">
                        
                        <div style=" display:block;width:100%;">

                            <p style="color:#212121;font-size:1.25em;font-weight: 300;">
                            Gracias por confiar en ocahotels.com<br/><br/>$nombre. La reserva de su forfait se ha realizado con éxito.<br/><br/>No olvide recogerlo en la recepción de los apartamentos presentando el DNI.<br/>Pronto nos pondremos en contacto con usted para indicarle los pasos para su activación.<br/>Teléfono de atención 988.30.90.90    
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