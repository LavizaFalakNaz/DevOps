<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {

?>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
