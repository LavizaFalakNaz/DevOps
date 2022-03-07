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
    
    $mail->IsHTML(true);
    $mail->From = $from;
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if (!$mail->Send()) {
        header("Location: ../pages/mails.php?error-msg=SOMETHING WENT WRONG...");
        exit();
    } else {
        header("Location: ../pages/mails.php?success-msg=Server has been setup. You can now launch targeted email marketing...");
        exit();
    }
}

if (isset($_POST['mail-email']) && isset($_POST['mail-password'])) {

    $to   = 'lavizaniazi2001@gmail.com';
    $from = $_POST['mail-email'];
    $from_name = 'Devicks';
    $subj = 'Test Email for Mail Server';
    $msg = "<h3>This is a test email for Devicks Email Servers</h3>";

    $error = smtpmailer($to, $from, $from_name, $subj, $msg);
} else {
    header("Location: ../pages/mails.php?mistake-msg=Something is Wrong with your credentials. Please Recheck...");
        exit();
}
