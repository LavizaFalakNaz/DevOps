<?php

require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    //IMPORT THE SMTP DETAILS HERE
    include "mailConfig.php";

    //   $path = 'reseller.pdf';
    //   $mail->AddAttachment($path);

    $mail->IsHTML(true);
    $mail->From = "no-reply@devicks.com";
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
    $title = $_GET['name'];


    $to   = $email;
    $from = 'no-reply@devicks.com';
    $name = 'Devicks';
    $subj = 'Assign Task';
    $msg = "<h2>You Have to Assign a New Task please Check</h2>";
    $msg .= "<h3>Task Name: ".$title."</h3>";
    
    
    $error = smtpmailer($to, $from, $name, $subj, $msg);
} else {
    echo "no credentials";
}
