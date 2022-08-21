<?php
require "PHPMailer/PHPMailerAutoload.php";
require "../config/config.php";

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
        header("Location: ../pages/mails.php?msg=Please try Later, Error Occured while Processing...");
        exit();
    } else {
        //you reach here when has been sent successfully 

        $servername = "us-cdbr-east-05.cleardb.net";
        $username = "bcc77e1841a73a";
        $password = "dd32e024";
        $database = "heroku_7fce67cb249adf3";
        $con = new MySQLi($servername, $username, $password, $database);

        $port = $_POST['mail-port'];
        $em = $_POST['mail-email'];
        $pwd = $_POST['mail-password'];
        $hst = $_POST['mail-host'];
        $sql = "INSERT INTO mail_server(email,pass,host,port,activity_status) VALUES ('$em', '$pwd', '$hst', '$port', 'active')";
        if (!mysqli_query($con, $sql)) {
            die('Error: ' . mysqli_error($con));
        } else {
            $query = "SELECT id  FROM mail_server WHERE email = '$em' AND password = '$pwd' AND host = '$hst' AND port = '$port'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $new_id = $row['id'];
                $_SESSION['mail-server-id'] = $row[0];
            }
            $uid = $_SESSION['id'];
            $sql = "UPDATE registrations SET mail_server_id='$new_id' WHERE id='$uid'";
            $results = mysqli_query($con, $sql);
        }
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
