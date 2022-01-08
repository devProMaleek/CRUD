<?php
//Include required phpmailer files
require('PHPMailer/includes/PHPMailer.php');
require('PHPMailer/includes/SMTP.php');
require('PHPMailer/includes/Exception.php');

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'milikiadbay@gmail.com';                     //SMTP username
    $mail->Password   = '*Maleekbaryorsneh007';                               //SMTP password
    $mail->SMTPSecure = 'tls';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above
  
    //Recipients
    $mail->setFrom('milikiadbay@gmail.com', 'Abdulmalik Adebayo');
    $mail->addAddress('milikiadbay@gmail.com', 'Abdulmalik Adebayo');     //Add a recipient

    $body = '<p><strong>Hello,</strong> this is my first email with PHPMAILER';

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'This is a test email';
    $mail->Body    = $body;
    $mail->AltBody = strip_tags($body);

    if ($mail->Send()){
        echo 'Message has been sent';
    }else{
        echo 'Message could not be sent.';
    }
    
    //Closing smtp connection.
    $mail->smtpClose();
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>