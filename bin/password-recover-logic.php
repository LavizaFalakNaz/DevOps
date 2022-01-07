<?php

session_start();
$errors = [];
$user_id = "";
// connect to database
$servername = "us-cdbr-east-05.cleardb.net";
$username = "bcc77e1841a73a";
$password = "dd32e024";
$database = "heroku_7fce67cb249adf3";
$db = mysqli_connect($servername, $username, $password, $database);

/*
  Accept email of user whose password is to be reset
  Send email to user to reset their password
*/

if (isset($_POST['reset-password'])) {
    $email = $_POST['email'];
    // ensure that the user exists on our system
    $query = "SELECT email FROM registrations WHERE email='$email'";
    $results = mysqli_query($db, $query);

    if (empty($email)) {
        header('Location: ../pages/forgot-password.php?error=Your email is required');
    } else if (mysqli_num_rows($results) <= 0) {
        header('Location: ../pages/forgot-password.php?error=Sorry, no user exists on our system with that email');
    } //loop works only if email is valid and exists in the system
    else {
        //generate a raondom token key
        $vkey = md5(time() . $email);
        $insert = "INSERT INTO passwords_reset (email, token) VALUES ('$email','$vkey')";
        if (!mysqli_query($db, $insert)) {
            die('Error: ' . mysqli_error($db));
        } else {
            $query = "SELECT id FROM passwords_reset WHERE email = '$email' AND status = '$vkey'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                $uid = $row['id'];
            }
            header("Location: ../mailer/passwordResetMail.php?vkey=$vkey&email=$email");
            exit();
        }
    }
}

// ENTER A NEW PASSWORD
if (isset($_POST['new_password'])) {
    $new_pass = mysqli_real_escape_string($db, $_POST['password']);
    $new_pass_c = mysqli_real_escape_string($db, $_POST['cpassword']);

    // Grab to token that came from the email link
    $token = $_POST['new_password'];
    if (empty($new_pass) || empty($new_pass_c)) array_push($errors, "Password is required");
    if ($new_pass !== $new_pass_c) array_push($errors, "Password do not match");
    if (count($errors) == 0) {
        $servername = "us-cdbr-east-05.cleardb.net";
        $username = "bcc77e1841a73a";
        $password = "dd32e024";
        $database = "heroku_7fce67cb249adf3";
        $mysqli = new MySQLi($servername, $username, $password, $database);

        // select email address of user from the password_reset table 
        $sql = "SELECT email FROM passwords_reset WHERE token='$token' and status='0' LIMIT 1";
        $results = mysqli_query($mysqli, $sql);
        $email = mysqli_fetch_assoc($results)['email'];
        if ($email) {
            $new_pass = md5($new_pass);
            $sql = "UPDATE registrations SET password='$new_pass' WHERE email='$email'";
            $results = mysqli_query($mysqli, $sql);
            $update = $mysqli->query("UPDATE passwords_reset SET status = 1 WHERE token = '$token' LIMIT 1");
            header('location: ../pages/login.php?error=Password Updated! you can  now login.');
        }
    }
}
