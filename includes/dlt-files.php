<?php
session_start();
include_once '../config/config.php';

if (isset($_POST['dlt-file'])) {
    $fid = $_POST["fid"];
    $pid = $_POST["pid"];

    $sql = "DELETE FROM attachment_files WHERE id='$fid'";
    if (mysqli_query($con, $sql)) {
        header("Location: ../pages/scripter.php?pid=$pid&success=File Deleted");
        exit();
    } else {
        echo $fid."<br>";
        echo $pid;
        /*header("Location: ../pages/scripter.php?error=File could not be deleted");
        exit();*/
    }
}
