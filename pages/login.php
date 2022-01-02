<?php
// (A) PROCESS LOGIN ON SUBMIT
session_start();
if (isset($_POST["email"])) {
  require "../bin/user-lib.php";
  $USR->login($_POST["email"], $_POST["password"]);
}
 
// (B) REDIRECT USER IF SIGNED IN
if (isset($_SESSION["user"])) {
  header("Location: index.php");
  exit();
}
 
// (C) SHOW LOGIN FORM OTHERWISE ?>
<?php
if (isset($_POST["email"])) {
  echo "<div id='notify'>Invalid user/password</div>";
}
?>
<form id="login" method="post">
  <strong>MEMBER LOGIN</strong>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <input type="submit" value="Sign In">
</form>