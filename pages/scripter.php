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
                    <div class="col-lg-2">
                        <div class="card card-info">
                            <div class="card-header">
                                <h3 class="card-title">Scripter Options</h3>
                            </div>

                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Settings
                                            <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings">
                                                <i class="fas fa-cog">
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Code Analysis
                                            <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec1" role="button" aria-expanded="false" aria-controls="Sec1">
                                                <i class="fas fa-code">
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>File Architecture
                                            <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec2" role="button" aria-expanded="false" aria-controls="Sec2">
                                                <i class="fas fa-project-diagram">
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Deployment Server
                                            <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec3" role="button" aria-expanded="false" aria-controls="Sec3">
                                                <i class="fas fa-server">
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Report Logs
                                            <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec4" role="button" aria-expanded="false" aria-controls="Sec4">
                                                <i class="fas fa-file">
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <p>Testing Logs
                                            <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec5" role="button" aria-expanded="false" aria-controls="Sec5">
                                                <i class="fas fa-bug">
                                                </i>
                                            </a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer text-center">
                                <a class="btn btn-secondary btn-sm" href="viewcode.php">
                                    <i class="fas fa-angle-left">
                                    </i>
                                    Back to Code Viewer
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8">
                        <!--SETTINGS -->
                        <div class="collapse" id="settings">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Settings</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#settings" role="button" aria-expanded="true" aria-controls="setttings">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card card-success">
                                                <div class="card-header">
                                                    <h3 class="card-title">Choose Framework</h4>
                                                </div>
                                                <div class="card-body"></div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-warning">
                                                <div class="card-header">
                                                    <h3 class="card-title">Allocate Resources</h4>
                                                </div>
                                                <div class="card-body"></div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="card card-info">
                                                <div class="card-header">
                                                    <h3 class="card-title">Set Goals</h4>
                                                </div>
                                                <div class="card-body"></div>
                                                <div class="card-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <!--SECTION 1-->
                        <div class="collapse" id="Sec1">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Code Analysis</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec1" role="button" aria-expanded="true" aria-controls="Sec1">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <!--SECTION 2-->
                        <div class="collapse" id="Sec2">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">File Architecture</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec2" role="button" aria-expanded="true" aria-controls="Sec2">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <!--SECTION 3-->
                        <div class="collapse" id="Sec3">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Deployment & Servers</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec3" role="button" aria-expanded="true" aria-controls="Sec3">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <!--SECTION 4-->
                        <div class="collapse" id="Sec4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Report Logs</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec4" role="button" aria-expanded="true" aria-controls="Sec4">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <!--SECTION 5-->
                        <div class="collapse" id="Sec5">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Testing Logs</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec5" role="button" aria-expanded="true" aria-controls="Sec5">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
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