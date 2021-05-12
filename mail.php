<?php
;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';


function sendMail($address, $subject, $body)
{
    //Instantiation and passing true enables exceptions
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = 'cykeleliten@gmail.com';                     //SMTP username
        $mail->Password   = 'Sommar21';                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; PHPMailer::ENCRYPTION_SMTPS encouraged
        $mail->Port       = 587;                                    //TCP port to connect to, use 465 for PHPMailer::ENCRYPTION_SMTPS above
        //Recipients
        $mail->setFrom('cykeleliten@gmail.com', 'Cyckeleliten');
        $mail->addAddress($address);               //Name is optional
        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        $mail->AltBody = strip_tags($body);
        $mail->send();
        echo 'Message has been sent';
    } catch (Exception $e) {
        echo "Can't connect to SMTP Server. Mailer Error: {$mail->ErrorInfo}";
    }
}