<?php
include "../config/config.php";
session_start();
?>
<form method="POST" action="delete.php">
<input type="email" name="email" />
<button type="submit" name="submit">Delete this account</button>
</form>
<?php
if(isset($_POST['submit']))
{
    $email = $_POST['email'];
    $insert = "DELETE FROM registrations where email = '$email'";

    if (!mysqli_query($con, $insert)) {
        die('Error: ' . mysqli_error($con));
    } 
    else{
        echo "Account Deleted with email";
    }
}
?>