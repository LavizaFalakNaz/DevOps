<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function send_mail($user_mail, $subject, $body)
{
    
require_once "vendor/autoload.php";

$mail = new PHPMailer(true);

//Enable SMTP debugging.
$mail->SMTPDebug = 1;                               
//Set PHPMailer to use SMTP.
$mail->isSMTP();            
//Set SMTP host name                          
$mail->Host = "smtp.gmail.com";
//Set this to true if SMTP host requires authentication to send email
$mail->SMTPAuth = TRUE;                          
//Provide username and password     
$mail->Username = "imbilalshafiq5@gmail.com";
$mail->Password = "sahiwal123";                         
//If SMTP requires TLS encryption then set it
$mail->SMTPSecure = "tls";   //ssl                        
//Set TCP port to connect to
$mail->Port = 587;    //465                               

$mail->From = "mbilalshafiq13@gmail.com";
$mail->FromName = "CCMS";

$mail->addAddress($user_mail, "Recepient Name");

$mail->isHTML(true);

$mail->Subject = $subject;
$mail->Body = $body;
$mail->AltBody = "This is the plain text version of the email content";

try {
    $mail->send();
    header("Location:index.php");
} catch (Exception $e) {
    echo "Mailer Error: " . $mail->ErrorInfo;
}
}
?>