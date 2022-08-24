<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Code View";
    include 'top.php';
    $pic = $_SESSION['display-photo-path'];

    if (isset($_GET['file'])) {
        $f_id = $_GET["file"];
        $get_files = "SELECT * FROM attachment_files WHERE id = '$f_id'";
        $file_results = mysqli_query($con, $get_files);
        while ($row = mysqli_fetch_assoc($file_results)) {

            $_SESSION['ActiveFile']['fid'] = $row["id"];
            $_SESSION['ActiveFile']['path'] = $row["file_path_address"];
            $_SESSION['ActiveFile']['pid'] = $row["pid"];
            $_SESSION['ActiveFile']['tid'] = $row["tid"];
            $pid = $_SESSION["project_id"];
        }
    }

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

            <div class="row">
                <?php
                error_reporting(0);
                if (isset($_POST["fcode"])) {
                    $fcode = $_POST["fcode"];
                    $filep = $_POST["file"];

                    $myfile = fopen($filep, "w") or die("Unable to open file!");
                    fwrite($myfile, $fcode);
                    fclose($myfile);
                }

                $file = $_SESSION['ActiveFile']['path'];
                $myfile = fopen($file, "r") or die("Unable to open file!");
                $s = fread($myfile, filesize($file));

                $fid = $_SESSION['ActiveFile']['fid'];
                ?>

                <div class="col-lg-8">
                    <div class="card">
                        <!-- /.card-header -->
                        <div class="card-header">
                            <h3 class="card-title">Edit Code <?php echo basename($file) ?></h3>
                        </div>
                        <!-- /.card-header -->

                        <!-- card body -->

                        <form class="form-horizontal" method="post" action="?file=<?php echo $file; ?>">
                            <div class="card-body">
                                <input type="hidden" value="<?php echo $file ?>" name="file" />
                                <textarea name="fcode" style="width:100%; height:500px;font-family:Consolas"><?php echo $s; ?></textarea>
                                <!-- card body -->
                            </div>

                            <!-- /.card-footer -->
                            <div class="card-footer">
                                <input type="submit" style="margin-left:10px; width:100px;" name="save" value="Save" class="btn btn-warning" />
                                <a class="btn btn-primary" style="margin-left:10px; width:100px;" href="../includes/validator.php?fid=<?php echo $fid; ?>&file=<?php echo $file; ?>">Validate</a>

                                <a class="btn btn-info float-right" style="margin-left:10px; width:100px;" href="query.php?file=<?php echo $file; ?>">Run</a>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                        <!--form end-->

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="card card-warning">
                        <div class="card-header" onclick="location.href='scripter.php?id=<?php echo $pid; ?>';" style="cursor:pointer;">
                            <h3 class="card-title">Launch Scripter</h3>
                            <i class="fas fa-pencil-alt float-right">
                            </i>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Test Cases</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <!--GET TEST CASES-->
                                <?php
                                $fid = $_SESSION['ActiveFile']['fid'];
                                $query = "SELECT * FROM test_cases where file_id = '$fid'";
                                $result = mysqli_query($con, $query);
                                ?>
                                <div class="row">
                                    <table class="table">
                                        <tbody>
                                            <?php if ($result->num_rows > 0) {
                                                while ($array = mysqli_fetch_row($result)) {
                                            ?>
                                                    <tr>
                                                        <td><?php echo $array[1]; ?></td>
                                                        <td colspan="1.5"><?php echo $array[2]; ?></td>
                                                        <td>
                                                            <?php if ($array[5] == 0) {
                                                            ?>
                                                                <a class="btn btn-warning btn-sm" href="../includes/test-case-operations.php?id=<?php echo $array[0]; ?>&perf=update&status=false">
                                                                    <i class="fas fa-times">
                                                                    </i>
                                                                </a>
                                                            <?php } else if ($array[5] == 1) {
                                                            ?>
                                                                <a class="btn btn-success btn-sm" href="../includes/test-case-operations.php?id=<?php echo $array[0]; ?>&perf=update&status=true">
                                                                    <i class="fas fa-check">
                                                                    </i>
                                                                </a>
                                                            <?php } ?>
                                                        </td>
                                                        <td>
                                                            <a class="btn btn-danger btn-sm" href="../includes/test-case-operations.php?id=<?php echo $array[0]; ?>&perf=del">
                                                                <i class="fas fa-trash">
                                                                </i>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                <?php }
                                                //once the loop is complete, make it empty
                                                mysqli_free_result($result);
                                            } else {
                                                ?>
                                                <tr>
                                                    <td colspan="1" rowspan="1" headers="">No Data Found</td>
                                                </tr>
                                            <?php
                                            }
                                            ?>
                                        </tbody>
                                    </table>

                                    <!-- Modal -->
                                    <div id="myModal" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                            <!-- Modal content-->
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Add a New Test Case</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <form class="form-horizontal" method="POST" action="../includes/test-case-operations.php">
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="test_name" placeholder="Test Case Name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <div class="col-sm-12">
                                                                <input type="text" class="form-control" name="desc" placeholder="Enter Case Description here">
                                                            </div>
                                                        </div>
                                                        <input type="hidden" name="fid" value="<?php echo $fid; ?>">
                                                </div>
                                                <div class="modal-footer">
                                                    <input type="submit" name="new-case" class="btn btn-success" value="Add Case">
                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-footer">
                            <input type="submit" style="width:160px;" value="Add New" data-toggle="modal" data-target="#myModal" class="btn btn-success" />
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Error Logs</h3>
                            <form method="POST" action="">
                                <input type="submit" name="get_log" style="width:160px;" value="Get Logs" class="btn btn-sm btn-warning float-right" />
                            </form>
                        </div>
                        <div class="card-body">
                            <?php

                            if (isset($_POST['get_log'])) {
                                $timer = 0;
                                $prev = "";
                                $fid = $_SESSION['ActiveFile']['fid'];
                                $uid = $_SESSION['id'];
                                $q = "SELECT * FROM user_logs WHERE uid = '$uid' AND fid = '$fid'";
                                $all_logs = mysqli_query($con, $q);
                                if ($all_logs->num_rows > 0) {
                                    while ($a_id = mysqli_fetch_assoc($all_logs)) {
                                        $n_id = $a_id['error_log_number'];
                                        $msgs = "SELECT DISTINCT descp FROM validation_logs WHERE id = '$n_id' AND fid = '$fid' AND status = '0'";
                                        $error_logs = mysqli_query($con, $msgs);
                                        if ($error_logs->num_rows > 0) {
                            ?>
                                            <table class="table">
                                                <tbody>
                                                    <?php
                                                    while ($err = mysqli_fetch_row($error_logs)) {
                                                        // condition for the first run
                                                        if ($timer == 0 && $prev == "") {
                                                    ?>
                                                            <tr>
                                                                <td style="width:70%;"><?php echo $err[0]; ?></td>
                                                                <td style="width:30%;">
                                                                    <a class="btn btn-success btn-sm" style="width:150px;" href="../includes/test-case-operations.php?id=<?php echo $n_id; ?>&perf=log">
                                                                        <i class="fas fa-exchange-alt">
                                                                        </i> Generate Test Case
                                                                    </a><br>
                                                                    <a class="btn btn-danger btn-sm" style="width:150px; margin-top:5px;" href="../includes/test-case-operations.php?id=<?php echo $n_id; ?>&perf=discard">
                                                                        <i class="fas fa-trash">
                                                                        </i> Discard
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php
                                                            $timer = $timer + 1;
                                                            $prev = $err[0];
                                                        } else {
                                                            if ($err[0] == $prev) {
                                                                continue;
                                                            } else {
                                                            ?>
                                                                <tr>
                                                                    <td style="width:70%;"><?php echo $err[0]; ?></td>
                                                                    <td style="width:30%;">
                                                                        <a class="btn btn-success btn-sm" style="width:150px;" href="../includes/test-case-operations.php?id=<?php echo $n_id; ?>&perf=log">
                                                                            <i class="fas fa-exchange-alt">
                                                                            </i> Generate Test Case
                                                                        </a><br>
                                                                        <a class="btn btn-danger btn-sm" style="width:150px; margin-top:5px;" href="../includes/test-case-operations.php?id=<?php echo $n_id; ?>&perf=discard">
                                                                            <i class="fas fa-trash">
                                                                            </i> Discard
                                                                        </a>
                                                                    </td>
                                                                </tr>
                                                            <?php
                                                            }
                                                            ?>

                                                    <?php
                                                        }
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                            <?php
                                        } else {
                                            $log_message = "There are no logs maintained in validation.";
                                            //echo $log_message;
                                        }
                                    }
                                } else {
                                    $log_message = "There are no logs maintained in users.";
                                    //echo $log_message;
                                }
                            }

                            ?>
                        </div>
                        <div class="card-footer">

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