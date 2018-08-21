<?php


include_once 'http://www.ocahotels.com/_libs/podio/PodioAPI.php'; 


// Client
$client_id = 'formulariogrupos';
$client_secret = 'iW9GkRtWb4bqY4lWKAmPjxeeRczsXtJI0nMZrylDsDWsX5mTccfAiIyx9rmvG0lt';

// App
$app_id = 19599041;
$app_token = '418bca1a6f3e409e9a4edf1a491e1985';

// Authentication
Podio::setup($client_id, $client_secret);
Podio::authenticate_with_app($app_id, $app_token);

// Make sure errors are output to the screen
ini_set('display_errors', '1');


// Items
$collection = PodioItem::filter($app_id, ['sort_by' => 'created_on', 'sort_desc' => true, 'limit' => 1]);

foreach ($collection as $item) {
    $id = $item->id;
    $centro = $item->fields[0]->values;
    $direccion = $item->fields[1]->values;
    $tel  = $item->fields[2]->values;
    $email = $item->fields[3]->values;

    $responsable = $item->fields[4]->values; 
    $entradaraw = $item->fields[5]->humanized_value();
    $salidaraw = $item->fields[6]->humanized_value();
    $nninosraw = $item->fields[7]->values;
    $nadultosraw = $item->fields[8]->values;
    $nninos = round($nninosraw);
    $nadultos = round($nadultosraw);
    
      
       $entrada = date('d-m-Y',  strtotime($entradaraw));
       $salida = date('d-m-Y',  strtotime($salidaraw));
};




 require_once ($_SERVER['DOCUMENT_ROOT']. $ROOT . 'phpmailer/PHPMailerAutoload.php');
  $mail = new PHPMailer();
  
  
   $mail->CharSet = 'UTF-8';
    $mail->IsHTML(true);
 // From
    $mail->SetFrom('marketing@ocahotels.es','Formulario Grupos Oca MANZANEDA');

    // To
    $mail->AddAddress('direccion@manzaneda.com', 'Formulario Grupos Oca MANZANEDA');
      // To
    $mail->AddAddress('administracion@manzaneda.com', 'Formulario Grupos Oca MANZANEDA');

    // Reply
    $mail->AddReplyTo($email, $nombre);

    // Subject
    $mail->Subject = 'Nuevo mensaje en FORMULARIO DE GRUPOS OCA MANZANEDA';

    
    // Body
    $mail->Body = <<<EOD
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Nuevo mensaje en FORMULARIO DE GRUPOS OCA MANZANEDA</title>
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
        <span style=" font-size:20px; color:#7C7C7C">Nuevo mensaje en FORMULARIO DE GRUPOS OCA MANZANEDA</font></td>
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
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">CENTRO: <b style="color:#333; ">{$centro}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
      
       <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">DIRECCIÓN: <b style="color:#333; ">{$direccion}</b></font>
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
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">TELÉFONO: <b style="color:#333; ">{$tel}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">NOMBRE del RESPONSABLE: <b style="color:#333; ">{$responsable}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">FECHA de ENTRADA: <b style="color:#333; ">{$entrada}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">FECHA de SALIDA: <b style="color:#333; ">{$salida}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">NÚMERO APROX. NIÑ@S: <b style="color:#333; ">{$nninos}</b></font>
      </td>
      
      <td>&nbsp;</td>
    </tr>
    
     <tr>
      <td>&nbsp;</td>
      <td colspan="2" style="padding:6px 0"><font face="Gill Sans, Gill Sans MT, Myriad Pro, DejaVu Sans Condensed, Helvetica, Arial, sans-serif" color="#888">NÚMERO APROX. ADULT@S:  <b style="color:#333; ">{$nadultos}</b></font>
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
                <h3><?php echo _("Formulario para GRUPOS OCA MANZANEDA")?></h3>
                
           <?php if ($sent == 'ok'){ ?>
                <p>
                    Gracias por enviar su mensaje a  <strong>OCA MANZANEDA</strong>, nos pondremos en contacto con usted a la mayor brevedad.
                </p><?php } else { ?>
                
                  <p>
                      Ocurrió un error al mandar el email, por favor, vuelva a intentar <a href="javascript:history.back()">enviar su mensaje</a>. 
                </p>
                
                <?php };  ?>
                
                
            
        </div>
    </div>
    
</section>