<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {

  $title = "Home";
  include 'top.php';
  $uid = $_SESSION['id'];

  //RETRIEVE ALL PROJECTS 
  $projects_query = "SELECT * FROM projects WHERE uid = '$uid'";
  $all_projects = mysqli_query($con, $projects_query);
  if ($all_projects->num_rows > 0) {

    ################################################################################################
    //TOTAL NUMBER OF PROJECTS
    $num_total_projects = $all_projects->num_rows;
    ################################################################################################

    $num_total_tasks = 0;
    $num_pending_tasks = 0;
    $num_active_tasks = 0;
    $num_complete_tasks = 0;
    $num_total_files = 0;
    $num_total_tests = 0;
    $num_pending_test = 0;
    $num_complete_test = 0;
    $num_total_logs = 0;
    $num_pending_logs = 0;
    $num_complete_logs = 0;
    $test_iterator = 0;
    $log_iterator = 0;
    $file_iterator = 0;
    $no_logs = null;
    $no_tests = null;

    while ($single_project = mysqli_fetch_row($all_projects)) {
      $project_id = $single_project[0];
      $tasks_query = "SELECT * FROM task WHERE pid = '$project_id'";
      $all_tasks = mysqli_query($con, $tasks_query);
      if ($all_tasks->num_rows > 0) {

        ################################################################################################
        //TOTAL NUMBER OF TASKS
        $num_total_tasks = $num_total_tasks + $all_tasks->num_rows;
        ################################################################################################

        while ($single_task = mysqli_fetch_row($all_tasks)) {
          $task_id = $single_task[0];

          if ($single_task[7] == '1') {
            $num_pending_tasks = $num_pending_tasks + 1;
          } else if ($single_task[7] == '2') {
            $num_active_tasks = $num_active_tasks + 1;
          } else if ($single_task[7] == '3') {
            $num_complete_tasks = $num_complete_tasks + 1;
          }

          //RETRIVE ALL FILES ACCORDING TO TASKS
          $files_query = "SELECT * FROM attachment_files WHERE tid = '$task_id'";
          $all_files = mysqli_query($con, $files_query);
          if ($all_files->num_rows > 0) {

            ################################################################################################
            //TOTAL NUMBER OF TASKS
            $num_total_files = $num_total_files + $all_files->num_rows;
            ################################################################################################

            while ($single_file = mysqli_fetch_row($all_files)) {
              //get file id
              $file_id = $single_file[0];
              $dashboard_files[$file_iterator][0] = $single_file[0];
              $dashboard_files[$file_iterator][1] = $single_file[3];
              $dashboard_files[$file_iterator][2] = basename($single_file[3]);

              //RETRIEVE ALL TEST CASES
              $tests_query = "SELECT * FROM test_cases WHERE file_id='$file_id'";
              $all_tests = mysqli_query($con, $tests_query);
              if ($all_tests->num_rows > 0) {
                ################################################################################################
                //TOTAL NUMBER OF TASKS
                $num_total_tests = $num_total_tests + $all_tests->num_rows;
                ################################################################################################                

                while ($single_test = mysqli_fetch_row($all_tests)) {
                  if ($single_test[5] == '0') {
                    $num_pending_test = $num_pending_test + 1;
                    $dashboard_tests[$test_iterator][0] = $single_test[0];
                    $dashboard_tests[$test_iterator][1] = $single_test[1];
                    $dashboard_tests[$test_iterator][2] = substr($single_test[2], 0, 100) . "...";
                    $dashboard_tests[$test_iterator][3] = $single_test[3];
                    $dashboard_tests[$test_iterator][4] = $single_test[4];
                    $dashboard_tests[$test_iterator][5] = $single_test[5];
                  } else if ($single_test[5] == '1') {
                    $num_complete_test = $num_complete_test + 1;
                  }

                  $test_iterator++;
                }
              } else {
                $no_tests = '1';
              }

              //RETRIEVE ALL LOGS
              $logs_query = "SELECT * FROM validation_logs WHERE fid='$file_id'";
              $all_logs = mysqli_query($con, $logs_query);
              if ($all_logs->num_rows > 0) {

                ################################################################################################
                //TOTAL NUMBER OF TASKS
                $num_total_logs = $num_total_logs + $all_logs->num_rows;
                ################################################################################################

                while ($single_log = mysqli_fetch_row($all_logs)) {
                  if ($single_log[2] == '0') {
                    $num_pending_logs = $num_pending_logs + 1;
                    $dashboard_logs[$log_iterator][0] = $single_log[0];
                    $dashboard_logs[$log_iterator][1] = substr($single_log[1], 0, 100) . "...";
                    $dashboard_logs[$log_iterator][2] = $single_log[3];
                  } else if ($single_log[2] == '1') {
                    $num_complete_logs = $num_complete_logs + 1;
                  }
                  $log_iterator++;
                }
              } else {
                //$no_log = '1';
              }
              $file_iterator++;
            }
          }
        }
      } else {
        $no_files = '1';
      }
    }
  } else {
    $num_total_projects = 0;
  }

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">General</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $num_total_projects ?></h3>
                <p>Total Projects</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $num_total_tasks ?></h3>
                <p>Total Tasks</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $num_complete_tasks ?></h3>
                <p>Completed Tasks</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php echo $num_active_tasks ?></h3>
                <p>Active Tasks</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $num_pending_tasks ?></h3>
                <p>Pending Tasks</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <h3><?php echo $num_total_files ?></h3>
                <p>Total Files</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $num_total_tests ?></h3>
                <p>Total Tests</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $num_complete_test ?></h3>
                <p>Complete Tests</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $num_pending_test ?></h3>
                <p>Pending Tests</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php echo $num_total_logs ?></h3>
                <p>Total Logs</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3><?php echo $num_complete_logs; ?></h3>
                <p>Complete Logs</p>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-sm-1 col-8">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3><?php echo $num_pending_logs; ?></h3>
                <p>Pending Logs</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col">
            <!-- AREA CHART -->
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Project Progress</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="areaChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>

          <div class="col">
            <!-- BAR CHART -->
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Employee Performance</h3>
              </div>
              <div class="card-body">
                <div class="chart">
                  <canvas id="barChart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>

        <div class="row">
          <div class="col">
            <!-- DONUT CHART -->
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Testing Analysis</h3>
              </div>
              <div class="card-body">
                <div class="row">
                  <div class="col"><canvas id="files" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas></div>
                  <div class="col"><canvas id="cases" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas></div>
                  <div class="col"><canvas id="logs" style="min-height: 300px; height: 300px; max-height: 300px; max-width: 100%;"></canvas></div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
        </div>

        <div class="row">

          <!-- Left col -->
          <section class="col-lg 4 ">
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Files Overview</h3>
              </div>
              <div class="card-body">
                <?php if (isset($no_files)) {
                ?>
                  <p>You dont have any files!
                    <?php
                  } else {
                    foreach ($dashboard_files as $file) {
                    ?>
                  <div class="row">
                    <div class="col-sm-1">
                      <i class="fas fa-file icon-success"></i>
                    </div>
                    <div class="col">
                      <a href="viewcode.php?file=<?php echo $file[1]; ?>" class="btn-link text-dark">
                        <?php echo $file[2]; ?>
                      </a>
                    </div>
                  </div>
              <?php
                    }
                  }
              ?>
              </div>
            </div>
          </section>

          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-4">
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Pending Tests Overview</h3>
              </div>
              <div class="card-body">
                <?php if (isset($no_tests)) {
                ?>
                  <p>You dont have any test cases!
                    <?php
                  } else {
                    foreach ($dashboard_tests as $test) {
                    ?>
                  <div class="row">
                    <div class="col-sm-3">
                      <b><?php echo $test[1]; ?></b>
                    </div>
                    <div class="col">
                      <?php echo $test[2]; ?>
                    </div>
                    <div class="col-sm-1" style="margin-right:10px;">
                      <?php
                      // NOW ACCORDING TO THE STATUS, ADD BADGES
                      if ($test[5] == '0') {
                      ?>
                        <p class=" badge badge-danger">Pending</p>
                      <?php
                      } else if ($test[5] == '1') {
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
              </div>
            </div>

          </section>
          <section class="col-lg-4">
            <div class="card card-light">
              <div class="card-header">
                <h3 class="card-title">Pending Logs Overview</h3>
              </div>
              <div class="card-body">
                <?php if (isset($no_log)) {
                ?>
                  <p>You dont have any pending logs!
                    <?php
                  } else {
                    foreach ($dashboard_logs as $log) {
                    ?>
                  <div class="row">
                    <div class="col">
                      <?php echo $log[1]; ?>
                    </div>
                    <div class="col-sm-2">
                      <p class="badge badge-danger">Pending</p>
                    </div>
                  </div>
              <?php
                    }
                  }
              ?>
              </div>
            </div>
          </section>
        </div>


        <!-- /.card -->
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <script>
    $(function() {
      //- DONUT CHART -
      //-------------
      // Get context with jQuery - using jQuery's .get() method.
      var donutChartCanvas = $('#files').get(0).getContext('2d')
      var donutData = {
        labels: [
          'Pending Cases',
          'Successful Cases',
          'Total Test Cases',
        ],
        datasets: [{
          data: [<?php echo $num_pending_test; ?>, <?php echo $num_complete_test; ?>, <?php echo $num_total_tests; ?>],
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
          'Total Files',
          'Total Cases',
          'Total Logs',
        ],
        datasets: [{
          data: [<?php echo $num_total_files; ?>, <?php echo $num_total_tests; ?>, <?php echo $num_total_logs; ?>],
          backgroundColor: ['#00c0ef', '#f39c12', '#3c8dbc'],
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
      var donutChartCanvas = $('#logs').get(0).getContext('2d')
      var donutData = {
        labels: [
          'Pending Logs',
          'Addressed Logs',
          'Total Logs',
        ],
        datasets: [{
          data: [<?php echo $num_pending_logs; ?>, <?php echo $num_complete_logs; ?>, <?php echo $num_total_logs; ?>],
          backgroundColor: ['#f56954', '#00c0ef', '#00a65a'],
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

      //--------------
      //- AREA CHART -
      //--------------

      // Get context with jQuery - using jQuery's .get() method.
      var areaChartCanvas = $('#areaChart').get(0).getContext('2d')

      var areaChartData = {
        labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July'],
        datasets: [{
            label: 'Project 1',
            backgroundColor: 'rgba(60,141,188,0.9)',
            borderColor: 'rgba(60,141,188,0.8)',
            pointRadius: false,
            pointColor: '#3b8bba',
            pointStrokeColor: 'rgba(60,141,188,1)',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(60,141,188,1)',
            data: [28, 48, 40, 19, 86, 27, 90]
          },
          {
            label: 'Project 2',
            backgroundColor: 'rgba(210, 214, 222, 1)',
            borderColor: 'rgba(210, 214, 222, 1)',
            pointRadius: false,
            pointColor: 'rgba(210, 214, 222, 1)',
            pointStrokeColor: '#c1c7d1',
            pointHighlightFill: '#fff',
            pointHighlightStroke: 'rgba(220,220,220,1)',
            data: [65, 59, 80, 81, 56, 55, 40]
          },
        ]
      }

      var areaChartOptions = {
        maintainAspectRatio: false,
        responsive: true,
        legend: {
          display: true,
        },
        scales: {
          xAxes: [{
            gridLines: {
              display: false,
            }
          }],
          yAxes: [{
            gridLines: {
              display: false,
            }
          }]
        }
      }

      // This will get the first returned node in the jQuery collection.
      new Chart(areaChartCanvas, {
        type: 'line',
        data: areaChartData,
        options: areaChartOptions
      })

      //-------------
      //- BAR CHART -
      //-------------
      var barChartCanvas = $('#barChart').get(0).getContext('2d')
      var barChartData = $.extend(true, {}, areaChartData)
      var temp0 = areaChartData.datasets[0]
      var temp1 = areaChartData.datasets[1]
      barChartData.datasets[0] = temp0
      barChartData.datasets[1] = temp1

      var barChartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        datasetFill: false
      }

      new Chart(barChartCanvas, {
        type: 'bar',
        data: barChartData,
        options: barChartOptions
      })

    });
  </script>

  <?php include 'bottom.php'; ?>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
