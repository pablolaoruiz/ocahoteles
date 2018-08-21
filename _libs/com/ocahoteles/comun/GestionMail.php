<?php

/**
 * Description of GestionMail
 *
 * @author juan
 */
class GestionMail {
   
   
    /**
     * Enviar un email
     * 
     * @global type $appConfig
     * @param type $asunto
     * @param type $to_email
     * @param type $to_name
     * @param type $plantilla
     * @param type $datos
     * @return type
     */
    public static function enviarEmail(
            $asunto, 
            $to_email, 
            $to_name,
            $copy_email, 
            $copy_name,
            $cCopy_email,
            $cCopy_name,
            $plantilla, 
            $datos) {
        
        global $appConfig;
        
        try {
            
            $smtp=$appConfig['EMAIL_SMTP'];
            $user=$appConfig['EMAIL_USER'];
            $pass=$appConfig['EMAIL_PASSWORD'];
            $from_email=$appConfig['EMAIL_FROM_EMAIL'];
            $from_name=$appConfig['EMAIL_FROM_NAME'];
            $port=$appConfig['EMAIL_PORT'];
            $protocol=$appConfig['EMAIL_PROTOCOL'];
                
           $transport = Swift_SmtpTransport::newInstance($smtp,$port,$protocol)
        ->setUsername($user)
        ->setPassword($pass);

          $mailer = Swift_Mailer::newInstance($transport);

          $message = Swift_Message::newInstance();
          $message->setFrom(array($from_email => $from_name));
          //$message->setFrom(array('noreply@ocahotels.es' => 'Oca hotels'));
          $message->setTo(array($to_email =>$to_name));
          if ($copy_email != ''){
          $message->setCc(array($copy_email=>$copy_name));} else{};
          if ($cCopy_email != ''){
          $message->setBcc(array($cCopy_email=>$cCopy_name));};
          $message->setSubject($asunto);
          $body = include ($_SERVER['DOCUMENT_ROOT']. GestionTemplates::getTmplMail($plantilla, $datos));
          $message->setBody($body, 'text/html');

          $exito = $mailer->send($message);
          
        } catch (Exception $e) {
           echo "<pre>";
           print_r($e);
           echo "</pre>";
            $exito = 0;
        }
        
        return $exito;
        
    }

}
?>
