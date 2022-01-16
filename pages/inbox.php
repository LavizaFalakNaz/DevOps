<?php
if (isset($_SESSION['email']) && isset($_SESSION['id'])) { ?>
    <!--something will come here-->


<?php } else {
    header("Location: login.php?error=Please enter your email and password to start.");
    exit();
}
