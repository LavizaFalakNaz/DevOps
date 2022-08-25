<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id']) && isset($_GET['file'])) {
?>
    <?php
    $title = "Query Mode";
    include 'top.php';
    $pic = $_SESSION['display-photo-path'];
    $file = $_GET['file'];
    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1 class="m-0"><?php echo $title; ?></h1>
                    </div><!-- /.col -->
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <!--    make sure page title is set in line number 8 -->
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">

            <div class="row">
                <div class="col">
                    <div class="card card-success">
                        <div class="card-header">
                            <h3 class="card-title">Model Run: <?php echo basename($file); ?></h3>
                        </div>
                        <div class="card-body">
                            <?php include $file; ?>
                        </div>
                        <div class="card-footer">
                            <a class="btn btn-danger float-right" style="margin-left:10px; width:200px;" href="viewcode.php?file=<?php echo $file; ?>">End Query Mode</a>
                        </div>
                    </div>
                </div>
            </div>

        </section>

    </div>
    <!-- /.content-wrapper -->
    <?php include 'bottom.php'; ?>

<?php
} else {
    header("Location: login.php?error=Please enter your email and password to start.");
    exit();
}
?>