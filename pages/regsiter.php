<!-- (A) REGISTRATION FORM -->
<form method="post">
  <input type="email" name="email" placeholder="Email" required value="jon@doe.com"/>
  <input type="password" name="pass" placeholder="Password" required value="12345"/>
  <input type="password" name="cpass" placeholder="Confirm Password" required value="12345"/>
  <input type="submit" value="Go!"/>
</form>
 
<?php
// (B) PROCESS SUBMITTED REGISTRATION FORM
if (isset($_POST["email"])) {
  require "../bin/user-core.php";
  echo $USR->register($_POST["email"], $_POST["pass"], $_POST["cpass"])
    ? "Check your email and click on the activation link"
    : $USR->error ;
}
?>