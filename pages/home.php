<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
    //we close php here so that whatever happens after it is in loop
?>

<!--
    <?php echo $_SESSION['email']; ?>
    <button onclick="location.href='logout.php'">Logout</button>
-->
<?php } else {
    header("Location: login.php?error=Please login to your account first.");
}


$title = "Home Page";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once "../layout/head.php";
    ?>
</head>
<body class="sidebar-mini layout-fixed" style="height:auto">
<div class="wrapper">



<?php
    include_once "../layout/navbar.php";
    include_once "../layout/sidebar.php";

?>




</div>



<?php
    include_once "../layout/footer.php";
?>
</body>
</html>