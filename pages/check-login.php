<?php

session_start();
include "../config/config.php";

if (isset($_POST['email']) && isset($_POST['password'])) {

    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    if (empty($username)) {
        header("Location: login.php?error=Email is Required");
        exit();
    } else if (empty($password)) {
        header("Location: login.php?error=Password is Required");
        exit();
    } else {
        //hashing the password
        $pass = md5($password);

        $sql = "SELECT * FROM registrations WHERE email='$email'
                         AND password='$pass' LIMIT 1";

        $result = mysqli_query($con, $sql);

        if ($result)
        //username must be unique 
        {
            $row = mysqli_fetch_assoc($result);
            if ($row['password'] === $pass) {
                if ($row['status'] == '1') {
                    $_SESSION['name'] = $row['name'];
                    $_SESSION['email'] = $row['email'];
                    $_SESSION['id'] = $row['id'];
                    $_SESSION["project_id"] = 194;
                    $_SESSION["project_id"] = 194;

                    //also save this to the database
                    $_SESSION['display-photo-path'] = '../resources/images/0.jpg';
                    if ($row['mail-server-id'] != '0') {
                        $_SESSION['mail-server-id'] = $row['mail_server_id'];
                    }

                    $uid = $row['id'];
                    $sql1 = "SELECT photo_file_path FROM display_photos WHERE uid = '$uid' LIMIT 1";
                    $result1 = mysqli_query($con, $sql1);
                    if ($result1->num_rows > 0) {
                        $row1 = mysqli_fetch_assoc($result1);
                        $_SESSION['display-photo-path'] = $row1['photo_file_path'];
                    }
                    /*
                     * 
                     * check if session variable 'from-subscribe' has true;
                     * redirect to subscribe page again
                     * dont go to homepage
                     * if else loop will work.
                     * once redirected,set from-subscribe to false again.
                     * 
                     */
                    header("Location: home.php");
                } else {
                    header("Location: login.php?error=Account not verified. Please check your email");
                }
            } else {
                header("Location: login.php?error=Incorrect Password");
            }
        } else {
            header("Location: login.php?error=Incorrect credentials");
        }
    }
} else {
    header("Location: login.php?error=Please enter your email and password to start.");
    exit();
}
