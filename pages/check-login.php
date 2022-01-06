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
                    header("Location: home.php");
                } else {
                    header("Location: login.php?error=Account not verified. Please check your email");
                }
            } else {
                header("Location: login.php?error=Password");
            }
        } else {
            header("Location: login.php?error=Incorrect credentials");
        }
    }
} else {
    header("Location: login.php?error=Please enter your email and password to start.");
    exit();
}
