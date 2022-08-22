<?php
include "../config/config.php";
session_start();
?>
<form method="POST" action="add_goals.php">
    <button type="submit" name="submit">Save Goals</button>
</form>
<?php
if (isset($_POST['submit'])) {
    $insert = "INSERT INTO goals (description) 
    VALUES ('SMTP Emails'), ('Financials'), ('CMS handling'), ('AI algorithms'), ('Hybrid Stack'), ('Data Science'), ('ERP Hosting'), ('Heavy Traffic'), ('Graphics'), ('APIs')";
    if (!mysqli_query($con, $insert)) {
        echo "something went wrong";
    } else {
        echo "everything went well!";
    }
}
?>
