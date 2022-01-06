<?php
include "../config/config.php";
session_start();

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['email']) && isset($_POST['password']) && $_POST['password'] === $_POST['cpassword']) {
    $name = test_input($_POST['name']);
    $email = test_input($_POST['email']);
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $pass = md5($password);
    $cpass = md5($cpassword);

    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "bcc77e1841a73a";
    $password = "dd32e024";
    $database = "heroku_7fce67cb249adf3";

    $mysqli = new MySQLi($servername, $username, $password, $database);
    $resultSet = $mysqli->query("SELECT email FROM registrations WHERE email = '$email'");
    if ($resultSet->num_rows != 0) {
        header("Location: signup.php?error=An account with the email ID exists already. Please Login instead");
        exit();
    }

    //generate vkey for the verification of the users.
    //the time stamp changes every second and the user may only have one email
    // in this way, this vkey becomes very unique
    $vkey = md5(time() . $email);
    $insert = "INSERT INTO registrations (name, email, password, token) VALUES ('$name','$email','$pass', '$vkey')";

    if (!mysqli_query($con, $insert)) {
        die('Error: ' . mysqli_error($con));
    } else {

        $query = "SELECT id  FROM registrations WHERE email = '$email' AND password = '$password'";
        $result = mysqli_query($con, $query);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            $uid = $row['id'];
        }

        header("Location: ../mailer/verificationMail.php?email=$email&vkey=$vkey");
        exit();

        /*$to = $username;
               $subject = "Email Verification";
               
               $message = "
                         <h3>Thankyou for choosing Smart Fans</h3>
                         <p>We received a registration request from your email and this email is sent to confirm your registration. 
                         <a href='https://smartfan-dashboard.herokuapp.com/dashboard/nav/verify.php?vkey=$vkey'>
                         Click here to Verify your account 
                         </a>
                         <hr>
                         <p>Please ignore this email if you have already verified your account</p>
                         <p><strong>If you received this email without consent or have not registered for SmartFans, please dont click on the provided link as the malicious user may get access to your account unintentionally. Please discard this email immediately.</strong><p>
                    ";
               // Always set content-type when sending HTML email
               $headers = "MIME-Version: 1.0" . "\r\n";
               $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
               // More headers
               $headers .= 'From: hello@lavizadevelops.com' . "\r\n";*/
    }
} else {
    header("Location: signup.php?error=Please Enter your Details, and make sure the passwords match!");
    exit();
}

if (isset($_GET['msg']) && $_GET['msg'] == "Success") {
    header("Location: login.php");
    exit();
} else {
    header("Location: signup.php?error=Something went wrong. Please try again.");
}
