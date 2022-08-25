<?php
session_start();
$uid = $_SESSION['id'];

// Creates my error function which prints message
//to user
function myerror($error_no, $error_msg, $err_file, $err_line)
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

    $error_msg = str_replace('"', "\'", $error_msg);
    $error_msg = str_replace('*', "\*", $error_msg);
    $error_msg = str_replace("'", "\'", $error_msg);

    /*$msg = $error_msg. " <br> ".$err_file. "<br> " . $err_line;*/

    $e = "<b>My ERROR</b> [$error_no] $error_msg <br />\An error on line $err_line in file $err_file";

    $insert = "INSERT INTO validation_logs (descp, fid) VALUES ('$e','$fid')";
    if (!mysqli_query($con, $insert)) {
        header("Location: ../pages/viewcode.php?file=" . $file . "&error=Validator Error: " . mysqli_error($con));
        exit();
    }
    // When error occurred script has to be stopped
    // now save the logs for every user.
    $q = "SELECT id FROM validation_logs ORDER BY id DESC LIMIT 1";
    $all_logs = mysqli_query($con, $q);
    while ($ids = mysqli_fetch_assoc($all_logs)) {
        $log_id = $ids['id'];
        $uid = $_SESSION['id'];
    }
    $insert = "INSERT INTO user_logs (error_log_number,uid,fid) VALUES ('$log_id' , '$uid', '$fid')";
    if (!mysqli_query($con, $insert)) {
        header("Location: ../pages/viewcode.php?error=Something is wrong: " . mysqli_error($con));
        exit();
    }
    header("Location: ../pages/viewcode.php?file=" . $file . "&success=Validation complete.");
    exit();
}

// Setting set_error_handler
set_error_handler("myerror");
set_exception_handler("myerror");

// now we run the code
if (isset($_GET['file'])) {
    $file = $_GET['file'];

    //here the error would be thrown
    include $file;

    header("Location: ../pages/viewcode.php?file=" . $file . "&success=validation complete.");
    exit();
}

header("Location: ../pages/scriptor.php?id=194");
exit();
