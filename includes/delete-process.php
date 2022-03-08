<?php
include_once '../config/config.php';
$sql = "DELETE FROM marketing_emails WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($con, $sql)) {
    header("Location: ../pages/mails.php?msg=Email Deleted");
    exit();
} else {
    header("Location: ../pages/mails.php?error=Email Deleted");
    exit();
}
mysqli_close($con);
?>