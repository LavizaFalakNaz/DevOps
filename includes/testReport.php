<!--SECTION 5 TEST REPORTS-->
<div class="collapse show" id="Sec5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Testing Logs</h3>
            <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec5" role="button" aria-expanded="true" aria-controls="Sec5">
                <i class="fas fa-times">
                </i>
            </a>
            <a class="btn btn-warning btn-sm float-right" style="margin-right:10px;" href="#"><i class="fas fa-download" style="margin-right:10px;">
                </i>Generate PDF Report</a>
        </div>
        <div class="card-body">
            <?php

            require_once('../tcpdf/tcpdf.php');

            $query = "SELECT * FROM attachment_files where pid = '$pid'";
            $result = mysqli_query($con, $query);
            if (!empty($result)) {
                while ($array = mysqli_fetch_row($result)) {
                    $fid = $array[0];
                    $que1 = "SELECT * FROM test_cases where file_id = '$fid'";
                    $res1 = mysqli_query($con, $que1);
                    $total_files = 0;
                    $total_cases = 0;
                    $successful_cases = 0;
                    $pending_cases = 0;
                    if (!empty($res1)) {
                        //if the code reaches here that means the project has file.
                        $total_files = $total_files + 1;
            ?>
                        <div class="card-header">
                            <h3 class='card-title'>
                                <a href="viewcode.php?file=<?php echo $cases; ?>"><?php echo "File: " . basename($array[3]); ?></a>
                            </h3>
                        </div><?php
                                while ($cases = mysqli_fetch_row($res1)) {
                                    //if the code reaches here that means the file has test cases.
                                    $total_cases = $total_cases + 1;
                                ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <?php echo $cases[1]; ?>
                                </div>
                                <div class="col">
                                    <?php echo $cases[2]; ?>
                                </div>
                                <div class="col-sm-2">
                                    <?php
                                    // NOW ACCORDING TO THE STATUS, ADD BADGES
                                    if ($cases[5] == '0') {
                                        //if the code reaches here that means the file has pending test cases
                                        $pending_cases = $pending_cases + 1;
                                    ?>
                                        <p class="badge badge-danger">Pending</p>
                                    <?php
                                    } else if ($cases[5] == '1') {
                                        //if the code reaches here that means the file has successful
                                        $successful_cases = $successful_cases + 1;
                                    ?>
                                        <p class="badge badge-success">Success</p>
                                    <?php
                                    }

                                    ?>
                                </div>
                            </div>
                    <?php
                                }
                            }
                    ?>
                <?php }
            } else {
                ?>
                <p> Oops, you dont have any files or test cases. </p>
            <?php
            }
            ?>
        </div>
        <div class="card-body">
            <!-- DONUT CHART -->
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Testing Analysis</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col"><canvas id="files" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas></div>
                        <div class="col"><canvas id="cases" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas></div>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->

            <script>
                $(function() {
                    //- DONUT CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var donutChartCanvas = $('#files').get(0).getContext('2d')
                    var donutData = {
                        labels: [
                            'Pending',
                            'Successful',
                            'Total',
                        ],
                        datasets: [{
                            data: [<?php echo $pending_cases; ?>, <?php echo $successful_cases; ?>, <?php echo $total_cases; ?>],
                            backgroundColor: ['#f56954', '#00a65a', '#f39c12'],
                        }]
                    }
                    var donutOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                    }
                    //Create pie or douhnut chart
                    // You can switch between pie and douhnut using the method below.
                    new Chart(donutChartCanvas, {
                        type: 'doughnut',
                        data: donutData,
                        options: donutOptions
                    })

                    //- DONUT CHART -
                    //-------------
                    // Get context with jQuery - using jQuery's .get() method.
                    var donutChartCanvas = $('#cases').get(0).getContext('2d')
                    var donutData = {
                        labels: [
                            'Files',
                            'Cases',
                        ],
                        datasets: [{
                            data: [<?php echo $total_files; ?>, <?php echo $total_cases; ?>],
                            backgroundColor: ['#00c0ef', '#3c8dbc'],
                        }]
                    }
                    var donutOptions = {
                        maintainAspectRatio: false,
                        responsive: true,
                    }
                    //Create pie or douhnut chart
                    // You can switch between pie and douhnut using the method below.
                    new Chart(donutChartCanvas, {
                        type: 'doughnut',
                        data: donutData,
                        options: donutOptions
                    })

                })
            </script>
        </div>
        <div class="card-footer">
            footer
        </div>
    </div>
</div>