<?php

require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Host = 'smtpout.secureserver.net';
    $mail->Port = 465;
    $mail->Username = 'hello@lavizadevelops.com';
    $mail->Password = 'Hello12eF';

    //   $path = 'reseller.pdf';
    //   $mail->AddAttachment($path);

    $mail->IsHTML(true);
    $mail->From = "hello@lavizadevelops.com";
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if (!$mail->Send()) {
        header("Location: ../pages/signup.php?msg=Please try Later, Error Occured while Processing...");
        exit();
    } else {
        header("Location: ../pages/signup.php?msg=Verification email has been shared to your account. Please check your inbox.");
        exit();
    }
}

if (isset($_GET['email'])) {
    
    $email = $_GET['email'];

    $to   = $email;
    $from = 'hello@lavizadevelops.com';
    $name = 'Devicks';
    $subj = 'Assign Task';
    $msg = "<h3>You Have to Assign a New Task please Check</h3>";
    
    $error = smtpmailer($to, $from, $name, $subj, $msg);
} else {
    echo "no credentials";
}
