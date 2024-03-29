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

if (isset($_GET['email']) && isset($_GET['vkey'])) {
    $vkey = $_GET['vkey'];
    $email = $_GET['email'];

    $to   = $email;
    $from = 'no-reply@devicks.com';
    $name = 'Devicks';
    $subj = 'Email Verification from Devicks';
    $msg = "<h3>Thankyou for choosing Devicks</h3>";
    $msg .= "<p>We received a registration request from your email and this email is sent to confirm your registration.</p>";
    /*UPDATE URL WHEN PUSHING THE CODE TO THE REPO*/
    $msg .= "<a href='https://devops-fyp.herokuapp.com/verify.php?vkey=$vkey'>";
    $msg .= "Click here to Verify your account ";
    $msg .= "</a>";
    $msg .= "<hr>";
    $msg .= "<p>Please ignore this email if you have already verified your account</p>";
    $msg .= "<p><strong>If you received this email without consent or have not registered for Devicks, please dont click on the provided link as the malicious user may get access to your account unintentionally. Please discard this email immediately.</strong><p>";

    $error = smtpmailer($to, $from, $name, $subj, $msg);
} else {
    echo "no credentials";
}
