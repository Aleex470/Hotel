<?php

$nom = $_POST["nom"];

$message = $_POST["message"];

$email = $_POST["email"];


define('GMailUSER', 'contact@hotel-lesarchers.fr'); // utilisateur Gmail
define('GMailPWD', ''); // Mot de passe Gmail


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpMailer/Exception.php';
require 'phpMailer/PHPMailer.php';
require 'phpMailer/SMTP.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    // $mail->isSMTP();                                            //Send using SMTP
    // $mail->Host       = 'localhost'; //'smtp.gmail.com';                     //Set the SMTP server to send through
    // $mail->SMTPAuth   = false;                                   //Enable SMTP authentication
    // // $mail->Username   = '';                     //SMTP username
    // // $mail->Password   = '';                               //SMTP password
    // //$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    // $mail->Port       = 1025; //465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username = GMailUSER;
    $mail->Password = GMailPWD;                              //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`


    //Recipients
    $mail->setFrom($email, $nom);
    $mail->addAddress('contact@hotel-lesarchers.fr');     //Add a recipient
    // $mail->addAddress('ellen@example.com');               //Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Attachments
    // $mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
    // $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Contact depuis le site';
    $mail->Body    = $message;
    // $mail->AltBody = $message;

    $mail->send();

    header('Location:index.php');
    exit;
    echo "Message envoyé.";
} catch (Exception $e) {
    header('Location:index.php');
    exit;
    echo "Le message ne s'est pas envoyé. Erreur: {$mail->ErrorInfo}";
}
