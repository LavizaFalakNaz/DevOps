<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Scripter";
    include 'top.php';
    $pic = $_SESSION['display-photo-path'];
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

            <?php if (isset($_GET['success'])) {
            ?>
                <!-- POP UP FOR SUCCESS ALERTS -->
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Success!</h5>
                                <?php echo $_GET['success']; ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- END OF ALERT -->
            <?php } ?>

            <?php if (isset($_GET['error'])) {
            ?>
                <!-- POP UP FOR FAILURE ERRORS -->
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Error!</h5>
                                <?php echo $_GET['error']; ?>
                            </div>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
                <!-- END OF ALERT -->
            <?php } ?>

            <div class="content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Scripter Options</h3>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>
                                        <a class="btn btn-success btn-sm" href="../includes/delete-process.php?id=<?php echo $array[0]; ?>">
                                            <i class="fas fa-trash">
                                            </i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a class="btn btn-dark btn-sm">
                                    <i class="fas fa-times">
                                    </i>
                                    Collapse All
                                </a>
                            </div>
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