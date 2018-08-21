<?php


include_once 'http://www.ocahotels.com/_libs/podio/PodioAPI.php'; 


// Client
$client_id = 'canaldenunciaok';
$client_secret = 'LV4KHwmLOWFJp5YAkl5A7t33W7qaCN3mlU4w0W81F2hAhIfOyIpvIdJQlgREJmOb';

// App
$app_id = 20063430;
$app_token = '9d89b2e192e54138a6820b3a0575a063';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token);

// Make sure errors are output to the screen
ini_set('display_errors', '1');


// Items
$collection = PodioItem::filter($app_id, ['sort_by' => 'created_on', 'sort_desc' => true, 'limit' => 1]);

foreach ($collection as $item) {
    $id = $item->id;
    $dep = $item->fields[0]->values;
    $nombre = $item->fields[1]->values;
    $hot = $item->fields[2]->values;
    $rel = $item->fields[3]->values;
    $email = $item->fields[4]->values;
    $telefono = $item->fields[5]->values; 
    $mensaje = $item->fields[6]->values;
    
};

$departamento = $dep['0']['text'];
$hotel = $hot['0']['text'];
$relacion = $rel['0']['text'];



 require_once ($_SERVER['DOCUMENT_ROOT']. $ROOT . 'phpmailer/PHPMailerAutoload.php');
  $mail = new PHPMailer();
  
  
   $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
 // From
    $mail->SetFrom('marketing@ocahotels.es','CANAL DENUNCIA Oca Hotels');

    // To
    $mail->AddAddress('media@ocahotels.es', 'Oca Hotels Canal Denuncia');
    $mail->AddAddress('vcabal@cuatropi.com', 'Oca Hotels Canal Denuncia');

    // Reply
    $mail->AddReplyTo($email, $nombre);

    // Subject
    $mail->Subject = 'Nuevo mensaje en Canal Denuncia Oca Hotels';

    
    // Body
    $mail->Body = <<<EOD
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>MENSAJE canal denuncia OCA HOTELS</title>
</head>

<body>
            <table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="width:600px !important; min-width:600px !important; border:2px solid #797e7c; padding:5px 10px">
  <tbody>
    <tr>
      <td width="18">&nbsp;</td>
      <td width="391">&nbsp;</td>
      <td width="168">&nbsp;</td>
      <td width="19">&nbsp;</td>
    </tr> 
    <tr>
      <td colspan="4" align="center" style="padding:10px; background-color:#A6A6A6"><img src="http://ocahotels.com/images/logo-ocahotels.png" style="height:120px; width:auto;"></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#ccc">
        <span style=" font-size:20px; color:#7C7C7C">Nuevo mensaje en CANAL DENUNCIA</font></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><img src="http://ocahotels.com/images/mails/bar.jpg"></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">NOMBRE: <b style="color:#333; ">{$nombre}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">EMAIL: <b style="color:#333; ">{$email}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">TELÉFONO: <b style="color:#333; ">{$telefono}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">NOMBRE: <b style="color:#333; ">{$nombre}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">RELACIÓN CON LA CADENA: <b style="color:#333; ">{$relacion}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">HOTEL: <b style="color:#333; ">{$hotel}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">DEPARTAMENTO: <b style="color:#333; ">{$departamento}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">MENSAJE:<br> <span style="color:#333; ">{$mensaje}</span></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" align="center">&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" align="center">
  
</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" align="center" style="padding-top:16px">
      <a href="https://www.facebook.com/ocahotels/" style="margin: 10px 5px 0 0"><img src="http://ocahotels.com/images/mails/fb.png" width="20" height="auto"></a>
      
       <a href="https://twitter.com/ocahotels" style="margin: 10px 5px 0 5px"><img src="http://ocahotels.com/images/mails/tw.png" width="20" height="auto"></a>
       
        <a href="https://www.instagram.com/ocahotels/" style="margin: 10px 0 0 5px"><img src="http://ocahotels.com/images/mails/ig.png" width="20" height="auto"></a>
      
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </tbody>
</table>
            
            </body>
</html>
EOD;
 // Send
    if ($mail->Send()) {
        $sent = 'ok';
    } else {
        $sent = 'wrong';
    }
?>














<section class="pd-t-50 pd-b-50 bck-color-gris">
    <div class="container content-interior">
        <div class="row">
            <div class="col-xs-12">
                <h3><?php echo _("Canal denuncia")?></h3>
                
           <?php if ($sent == 'ok'){ ?>
                <p>
                    Gracias por enviar su mensaje a  <strong>OCA HOTELS</strong>, nos pondremos en contacto con usted a la mayor brevedad.
                </p><?php } else { ?>
                
                  <p>
                      Ocurrió un error al mandar el email, por favor, vuelva a intentar <a href="javascript:history.back()">enviar su mensaje</a>. 
                </p>
                
                <?php };  ?>
                
                
            
        </div>
    </div>
    
</section>