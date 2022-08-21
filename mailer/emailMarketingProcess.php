<?php
include_once "../config/config.php";
require "PHPMailer/PHPMailerAutoload.php";
session_start();

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
    $mail->From = "hello@lavizadevelops.com";
    $mail->FromName = $from_name;
    $mail->Sender = $from;
    $mail->AddReplyTo($from, $from_name);
    $mail->Subject = $subject;
    $mail->Body = $body;
    $mail->AddAddress($to);
    if (!$mail->Send()) {
        header("Location: ../pages/mails.php?error=Mails couldnt be sent. Please try again later...");
        exit();
    } else {
        //continue executing the loop
    }
}

if (isset($_POST['clear-email'])) {
    header("Location: mails.php");
    exit();
}

if (isset($_POST['send-email'])) {
    $uid = $_SESSION['id'];
    $query = "SELECT email FROM marketing_emails where uid = '$uid'";
    $result = mysqli_query($con, $query);
    if ($result->num_rows > 0) {
        while ($array = mysqli_fetch_row($result)) {
            if (isset($_POST['message']) && isset($_POST['subject'])) {
                $email = $array[0];
                $to   = $email;
                $from = 'hello@lavizadevelops.com';
                $from_name = 'Devicks';
                $subj = $_POST['subject'];
                $msg = $_POST['message'];
                $msg .= "<br><br><hr><p><strong>If you received this email without consent or have not registered for Devicks, please dont click on the provided link as the malicious user may get access to your account unintentionally. Please discard this email immediately.</strong><p>";

                $error = smtpmailer($to, $from, $from_name, $subj, $msg);
                if ($error) {
                    header("Location: ../pages/mails.php?error='.$error.'");
                    exit();
                }
            } else {
                echo "no credentials";
            }
        }
    } else {
        header("Location: ../pages/mails.php?error=Your Emails list is empty. Please add some emails first...");
        exit();
    }
    header("Location: ../pages/mails.php?msg=Mails Sent...");
    exit();
}
