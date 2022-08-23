<?php
include_once '../config/config.php';

$uid = $_SESSION['id'];
$total_projects = 0;
$total_tasks = 0;
$pending_tasks = 0;
?>
<!--SECTION 4 GENERAL REPORTS-->
<div class="collapse show" id="Sec4">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Report Logs</h3>
            <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec4" role="button" aria-expanded="true" aria-controls="Sec4">
                <i class="fas fa-times">
                </i>
            </a>
        </div>
        <div class="card-body">
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-lg-3 col-6">
                    <?php
                    $q1 = "SELECT * FROM projects where uid = '$uid' ";
                    $r1 = mysqli_query($con, $q1);
                    if ($r1->num_rows > 0) {
                        while ($a1 = mysqli_fetch_row($r1)) {
                            $total_projects = $total_projects + 1;
                            $new_pid = $a1[0];
                            $q2 = "SELECT * FROM task where pid = '$new_pid' ";
                            $r2 = mysqli_query($con, $q2);
                            if ($r2->num_rows > 0) {
                                while ($a2 = mysqli_fetch_row($r2)) {
                                    $total_tasks = $total_tasks + 1;
                                    if ($a2[7] != '3') {
                                        $pending_tasks = $pending_tasks + 1;
                                    }
                                }
                            }
                        }
                    }
                    ?>
                    <!-- small box -->
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3><?php echo $total_projects; ?></h3>

                            <p>Total Projects</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-bag"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3><?php echo $total_tasks; ?></h3>

                            <p>Total Tasks</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3><?php echo $pending_tasks; ?></h3>

                            <p>Pending Tasks</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-6">
                    <!-- small box -->
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>1</h3>

                            <p>Deployed Projects</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                    </div>
                </div>
                <!-- ./col -->
            </div>
            <!-- /.row -->
            <!-- Main row -->
        </div>
        <div class="card-footer">
            <form class="form-horizontal" action="../includes/generate-report.php" method="POST">

                <!--SENDING ALL DATA AS POST TO TESTING REPORT -->

                <input type="hidden" name="total_projects" value=<?php echo $total_projects; ?>>
                <input type="hidden" name="total_tasks" value=<?php echo $total_tasks; ?>>
                <input type="hidden" name="pending_tasks" value=<?php echo $pending_tasks; ?>>
                <input type="hidden" name="deployed_projects" value=1>

                <button type="submit" class="btn btn-warning btn-sm float-right" style="margin-right:10px;"><i class="fas fa-download" style="margin-right:10px;">
                    </i>Generate PDF Report</button>
            </form>
        </div>
    </div>
</div>