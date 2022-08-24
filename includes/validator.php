<?php
session_start();
$uid = $_SESSION['id'];

// Creates my error function which prints message
//to user
function myerror($error_no, $error_msg)
{
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "bcc77e1841a73a";
    $password = "dd32e024";
    $database = "heroku_7fce67cb249adf3";

    $con = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    //this will only when file exists already
    $file = $_GET['file'];
    $fid = $_GET['fid'];

    //echo "Error: [$error_no] $error_msg ";

    $e = $error_msg;

    $insert = "INSERT INTO validation_logs (descp, fid) VALUES (" . $error_msg . " ," . $fid . ")";
    if (!mysqli_query($con, $insert)) {
        header("Location: ../pages/viewcode.php?file=" . $file . "&error=Validator Error: " . mysqli_error($con));
        exit();
    }
    // When error occurred script has to be stopped
    header("Location: ../pages/viewcode.php?file=" . $file . "&success=validation complete.");
    exit();
}

// Setting set_error_handler
set_error_handler("myerror");

// now we run the code
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    //here the error would be thrown
    include $file;
}
