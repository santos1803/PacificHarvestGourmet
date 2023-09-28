<?php

//Utilizando la libreria de PHP Mailer, la personalizamos para poder enviar nuestros correos

use PHPMailer\PHPMailer\{PHPMailer, SMTP, Exception};


require '../phpmailer/src/PHPMailer.php';
require '../phpmailer/src/SMTP.php';
require '../phpmailer/src/Exception.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;  //SMTP::DEBUG_OFF                  
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp-mail.outlook.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'santosmartinez3@hotmail.com';                     //SMTP username
    $mail->Password   =  's-a-n-t-o-s';             //'ezuirdvddecogaza';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;            //Enable implicit TLS encryption 
    $mail->Port       = 587;                                    //TCP port to connect to; use 587    if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    // $mail->SMTPDebug =  SMTP::DEBUG_OFF;  //  SMTP::DEBUG_SERVER               
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'servidor.hostgator.com';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    // $mail->Username   = 'mail.pacificharvestgourmet.com';                     //SMTP username
    // $mail->Password   =  'Arciniegas19';             //'ezuirdvddecogaza';                               //SMTP password
    // $mail->SMTPSecure =  PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption 
    // $mail->Port       = 465;                                    //TCP port to connect to; use 587    if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`




    //Recipients
    $mail->setFrom('santosmartinez3@hotmail.com', 'Geomar C.A');
    $mail->addAddress('santosodontologia24@gmail.com', 'Joe User');     //Add a recipient            //Name is optional



    //Attachments
   // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Detalle de su compra';
    $cuerpo = '<h4> Gracias por su compra <h4>';
    $cuerpo .= '<p>El ID de su compra es <b>' . $id_transaccion . '</b> </p>';
    $mail->Body    = $cuerpo;
    $mail->AltBody = 'Le enviamos los detalles de su compra .';

    
    $mail->setLanguage('es', '../phpmailer/language/phpmailer.lang-es.php');

    $mail->send();
   
} catch (Exception $e) {
    echo "Error al enviar el correo: {$mail->ErrorInfo}";
    exit;
}



