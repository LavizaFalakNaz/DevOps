<?php
include "../config/config.php";

if (isset($_POST['new-case'])) {
    $fid = $_SESSION['ActiveFile']['fid'];
    $name = $_POST['test_name'];
    $desc = $_POST['desc'];

    $tz = 'Asia/Dubai';
    $timestamp = time();
    $dt = new DateTime("now", new DateTimeZone($tz)); //first argument "must" be a string
    $dt->setTimestamp($timestamp); //adjust the object to correct timestamp
    $date = $dt->format('d.m.Y, H:i:s');

    $insert = "INSERT INTO test_cases (name, description, file_id) VALUES ('$name' , '$desc', '$fid')";
    if (!mysqli_query($con, $insert)) {
        header("Location: ../pages/viewcode.php?error=Something is wrong: " . mysqli_error($con));
        exit();
    } else {
        header("Location: ../pages/viewcode.php?success=Test Case Saved Successfully.");
        exit();
    }
}
