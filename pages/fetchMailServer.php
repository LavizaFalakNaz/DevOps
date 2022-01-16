<?php

/*include "../config/config.php";
$uid = $_SESSION['id'];
$sql = "SELECT * FROM mail_server WHERE user_id='$uid' LIMIT 1";

$result = mysqli_query($con, $sql);
if ($result)
//username must be unique 
{
    $row = mysqli_fetch_assoc($result);
    if ($row['status'] == '1') {
        $_SESSION['mail-email'] = $row['email'];
        $_SESSION['mail-password'] = $row['password'];
        $_SESSION['mail-host'] = $row['server'];
        $_SESSION['mail-port'] = $row['port'];
        header("Location: inbox.php");
    } else {
        header("Location: mail-server.php");
    }
} else {
    header("Location: mail-server.php");
}
*/