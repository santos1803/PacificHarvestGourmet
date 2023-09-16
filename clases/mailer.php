<?php

//Libreria de PHP que se usa para enviar email

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Mailer {

    function enviarEmail($email, $asunto, $cuerpo) {
    require_once __DIR__ . '/../php/config.php';    
    require __DIR__ . '/../phpmailer/src/PHPMailer.php';
    require __DIR__ . '/../phpmailer/src/SMTP.php';
    require __DIR__ . '/../phpmailer/src/Exception.php';

    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                  
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = MAIL_HOST;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = MAIL_USER;                     //SMTP username
        $mail->Password   =  MAIL_PASS;             //'ezuirdvddecogaza';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption 
        $mail->Port       = MAIL_PORT;                                    //TCP port to connect to; use 587    if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    
        //Recipients
        $mail->setFrom(MAIL_USER, 'Geomar C.A');
        $mail->addAddress($email);     //Add a recipient            //Name is optional
    
    
    
        //Attachments
       // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
        //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name
    
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $asunto;

        $mail->Body = utf8_encode($cuerpo);
    
        
        $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');
    
       if($mail->send()){
            return true;
       } else {
        return false;
       }
       
    } catch (Exception $e) {
        echo "Error al enviar el correo: {$mail->ErrorInfo}";
        return false;
    }
    



    }

}