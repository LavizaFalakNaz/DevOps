<?php
session_start();
include "../config/config.php";

function get_goal_name($num)
{
    if ($num == '4') {
        return 'SMTP Emails';
    } else if ($num == '14') {
        return 'Financials';
    } else if ($num == '24') {
        return 'CMS handling';
    } else if ($num == '34') {
        return 'AI algorithms';
    } else if ($num == '44') {
        return 'Hybrid Stack';
    } else if ($num == '54') {
        return 'Data Science';
    } else if ($num == '64') {
        return 'ERP Hosting';
    } else if ($num == '74') {
        return 'Heavy Traffic';
    } else if ($num == '84') {
        return 'Graphics';
    } else if ($num == '94') {
        return 'APIs';
    } else {
        return 0;
    }
}

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Scripter";
    include 'top.php';
    $pid = $_SESSION["project_id"];
    $pic = $_SESSION['display-photo-path'];

    if (isset($_GET['id'])) {
        $pid = $_GET['id'];
    } else if (isset($_GET['pid'])) {
        $pid = $_GET['pid'];
    } else if (isset($_SESSION['ActiveFile']['pid'])) {
        $pid = $_SESSION['ActiveFile']['pid'];
    }

    $pid = $_SESSION['project_id'];

    $q = "SELECT * FROM project_resources WHERE pid = '$pid'";
    $q1 = "SELECT * FROM project_goals WHERE pid = '$pid' ORDER BY id";

    $re = mysqli_query($con, $q);
    $re1 = mysqli_query($con, $q1);
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
                    <!--SCRRIPTER PANEL-->
                    <?php include "../includes/scripterPanel.php"; ?>
                    <div class="col-lg-9">
                        <?php if ($re->num_rows > 0 && $re1->num_rows > 0) {
                        ?>
                            <!--INFORMATION PANEL-->
                            <?php include "../includes/information.php"; ?>
                        <?php
                        } else {
                        ?>
                            <!--SETTINGS PANEL-->
                            <?php include "../includes/settings.php"; ?>
                        <?php
                        }
                        ?>
                        <!--SECTION 1 CODE ANALYSIS-->
                        <?php include "../includes/codeAnalysis.php"; ?>

                        <!--SECTION 2 FILE ARCHITECTURE-->
                        <?php include "../includes/architecture.php"; ?>

                        <!--SECTION 3 DEPLOYMENT AND SERVERS-->
                        <?php include "../includes/deployment.php"; ?>

                        <!--SECTION 4 GENERAL REPORTS-->
                        <?php include "../includes/report.php"; ?>

                        <!--SECTION 5 TEST REPORTS-->
                        <?php include "../includes/testReport.php"; ?>

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