<html>
<?php
require "../config/config.php";
if (!isset($_SESSION['email']) && !isset($_SESSION['id'])) {
    //we close php here so that whatever happens after it is in loop
?>
    <p>This is home page
        <button onclick="window.location.href = '../index.php';">Logout</button>

</html>
<?php } else {
    header("Location: ../index.php");
}

?>