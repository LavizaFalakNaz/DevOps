<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
    //we close php here so that whatever happens after it is in loop
?>

<?php echo $_SESSION['email']; ?>

<?php } else {
    header("Location: login.php/?error=Please login to your account first.");
}
?>