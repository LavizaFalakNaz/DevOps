<?php
echo $_GET['email'];
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
        header("Location: ../pages/forgot-password.php?msg=Please try Later, Error Occured while Processing...");
        exit();
    } else {
        header("Location: ../pages/forgot-password.php?msg=Verification email has been shared to your account. Please check your inbox.");
        exit();
    }
}

if (isset($_GET['email']) && isset($_GET['vkey'])) {
    $vkey = $_GET['vkey'];
    $email = $_GET['email'];

    $to   = $email;
    $from = 'hello@lavizadevelops.com';
    $name = 'Devicks';
    $subj = 'Email Verification from Devicks';
    $msg = "<h3>Let's help you recover your password for Devicks</h3>";
    $msg .= "<p>We received a password recovery request from your email account.</p>";
    $msg .= "<p>If this was you, please click on the given link to proceed.</p>";
    /*UPDATE URL WHEN PUSHING THE CODE TO THE REPO*/
    $msg .= "<a href='https://devops-fyp.herokuapp.com/pages/recover-password.php?vkey=$vkey'>";
    $msg .= "Click here to Reset your Account ";
    $msg .= "</a>";
    $msg .= "<hr>";
    $msg .= "<p>Please ignore this email if you didn't request a password recovery.</p>";
    $msg .= "<p><strong>If you received this email without consent or have not registered for Devicks, please dont click on the provided link as the malicious user may get access to your account unintentionally.</p>";
    $msg .= "<p>Please discard this email immediately.</strong><p>";

    $error = smtpmailer($to, $from, $name, $subj, $msg);
} else {
    echo "no credentials";
}
