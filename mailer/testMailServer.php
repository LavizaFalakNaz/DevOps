<?php
echo $_GET['email'];
require "PHPMailer/PHPMailerAutoload.php";

function smtpmailer($to, $from, $from_name, $subject, $body)
{
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;

    $mail->SMTPSecure = 'ssl';
    $mail->Host = $_POST['mail-host'];
    $mail->Port = $_POST['mail-port'];
    $mail->Username = $_POST['mail-email'];
    $mail->Password = $_POST['mail-password'];

    //   $path = 'reseller.pdf';
    //   $mail->AddAttachment($path);

    $mail->IsHTML(true);
    $mail->From = $from;
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if (!$mail->Send()) {
        header("Location: ../pages/mails.php?msg=Please try Later, Error Occured while Processing...");
        exit();
    } else {
        header("Location: ../pages/mails.php?msg=Mail Server has been established.");
        exit();
    }
}

if (isset($_POST['mail-email']) && isset($_POST['mail-password']) && isset($_POST['mail-host']) && isset($_POST['mail-port'])) {

    $to   = 'lavizaniazi2001@gmail.com';
    $from = $_POST['mail-email'];
    $name = 'Devicks';
    $subj = 'Mail Server Test Email | From Devicks';
    $msg = "<h3>Test Email</h3>";
    $msg .= "<p>Please Ignore this email</p>";

    $error = smtpmailer($to, $from, $name, $subj, $msg);
} else {
    header("Location: ../pages/mails.php?msg=No Credentials.");
        exit();
}
