<?php
include "../config/config.php";

if (isset($_POST['new-case'])) {
    $fid = $_POST['fid'];
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

//UPDATE STATUS OF THE TEST CASE
if ($_GET['perf'] == "update") {
    $id = $_GET['id'];
    if ($_GET['status'] == "true"){
        $sql = "UPDATE test_cases SET status='0' WHERE test_id='$id'";
        $results = mysqli_query($con, $sql);
        header("Location: ../pages/viewcode.php?success=Status Changed Successfully.");
        exit();
    }
    else if ($_GET['status'] == "false"){
        $sql = "UPDATE test_cases SET status='1' WHERE test_id='$id'";
        $results = mysqli_query($con, $sql);
        header("Location: ../pages/viewcode.php?success=Status Changed Successfully.");
        exit();
    }
}

//DELETE TEST CASES
if ($_GET['perf'] == "del") {
    $sql = "DELETE FROM test_cases WHERE test_id='" . $_GET['id'] . "'";
    if (mysqli_query($con, $sql)) {
        header("Location: ../pages/viewcode.php?success=Test Case has been deleted");
        exit();
    } else {
        header("Location: ../pages/viewcode.php?error=Test Case couldn't be deleted");
        exit();
    }
}
