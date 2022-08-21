<?php 
    if(isset($_SESSION)){
        header("Location: home.php");
        exit();
    }
    else {
        header("Location: login.php?error=Please enter your email and password to start.");
        exit();
    }