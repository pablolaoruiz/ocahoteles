<?php


include_once 'http://www.ocahotels.com/_libs/podio/PodioAPI.php';



// Client
$client_id = 'liveocadireccion';
$client_secret = '0Ytlo6xrfR3xGfjHYpFSTY6ZzH28KVU7vJrIGADslnAuNqlMGfHy5IStlc2mrFk2';

// App
$app_id = 19127686;
$app_token = '2fa9c06bdd0a45869b3b819a1ad96eb0';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token);

// Make sure errors are output to the screen
ini_set('display_errors', '1');

// Items
$collection = PodioItem::filter($app_id, ['sort_by' => 'created_on', 'sort_desc' => true, 'limit' => 1]);

foreach ($collection as $item) {
    $id = $item->id;
    $nombre = $item->fields[0]->values;
    $apellidos = $item->fields[1]->values;
    $email = $item->fields[2]->values;
    $movil= $item->fields[3]->values;
    $cp = $item->fields[4]->values;
    $sex = $item->fields[5]->values; 
    
};

   
  require_once ($_SERVER['DOCUMENT_ROOT']. $ROOT . 'phpmailer/PHPMailerAutoload.php');
  $mail = new PHPMailer();
   


  $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
 // From
    $mail->SetFrom('marketing@ocahotels.es','LIVEOCA');

    // To
    $mail->AddAddress($email, $nombre);

    // Reply
    $mail->AddReplyTo('marketing@ocahotels.es','LIVEOCA');

    // Subject
    $mail->Subject = 'BIENVENID@ A LIVEOCA';
    
        // Body
    $mail->Body = <<<EOD
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>BIENVENID@ A LIVEOCA</title>
</head>

<body>
<table width="600" border="0" cellspacing="0" cellpadding="0" align="center" style="width:600px !important; min-width:600px !important; border:2px solid #797e7c; padding:5px 10px">
  <tbody>
    <tr>
      <td width="19">&nbsp;</td>
      <td width="339">&nbsp;</td>
      <td width="224">&nbsp;</td>
      <td width="18">&nbsp;</td>
    </tr>
    <tr>
      <td colspan="4"><img src="http://ocahotels.com/images/mails/mail_live_oca_header.jpg"></td>
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
        <span style=" font-size:20px; color:#7C7C7C">Hola <span style="text-transform:uppercase; color:#333 ">{$nombre}</span>;</span></font></td>
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
      <td colspan="2"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">¡Muchas gracias por unirte a la familia <span style="color:#333">OCA Hotels</span>!<br>
Sigue los siguientes pasos para beneficiarte del <span style="color:#333">8% de descuento</span></font></td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" align="center"><img src="http://ocahotels.com/images/mails/entra-en-ocahotels.png"></td>
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
      <font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#797e7c">
          
   <!-- <span style="color:#797e7c; font-size:22px">PERDERSE PARA ENCONTRAR TU CAMINO<br></span>
      <a href="https://www.youtube.com/embed/OQOeTIyOikQ" style="font-size:32px; font-weight:600; color:#797e7c; text-decoration:none;">
#REINVENTEMOSELVERANO</a><br><br> -->
        <font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">Recuerda que esta promoción es válida solo en los hoteles Oca de España.</font><br><br>
<a href="http://www.ocahotels.com" style="color:#797e7c; text-decoration:none; font-size:20px">www.ocahotels.com</a><br>
<span style="font-size:18px">+34 (981) 107 005</span><br>
</font>
</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="2" align="center" style="padding-top:14px">
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







  
<div class="col-xs-12" style=" background-color: rgba(179,252,223,0.5); padding: 20px;">
                <h3>ENHORABUENA</h3>
                <?php if ($sent == 'ok'){ ?>
                <p>
                    Gracias por suscribirte a <strong>LIVEOCA</strong>, pronto recibirás un email con el código promocional para disfrutar de un <strong>descuento especial del 8%</strong> y los sencillos pasos a seguir para activarlo durante tu reserva.
                </p><?php } else { ?>
                
                  <p>
                      Ocurrió un error al mandar el email, por favor, vuelva a intentar suscribirse a <a href="http://www.ocahotels.com/liveoca">LIVEOCA</a>
                </p>
                
                <?php };  ?>
                
                
                
        </div>

    





