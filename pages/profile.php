<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Profile";
    include 'top.php';
    $pic = $_SESSION['display-photo-path'];

    error_reporting(0);
    include "../includes/main.class.php";
    $asfun = new Main();

    $uid = $_SESSION["id"];
    $pid = $_GET["id"];
    
    $q = $asfun->dbcon->query("select * from registrations where id='$pid'");
    $dt=mysqli_fetch_array($q);
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
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">

<?php
$rid= $_GET["rid"]; 
?>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-3">

                        <!-- Profile Image -->
                        <div class="card card-primary card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="../frontend/dist/imgnew/<?php echo $rid; ?>.jpg" alt="User profile picture">
                                </div>

                                <h3 class="profile-username text-center"><?php echo ucwords($dt["name"]) ?>  </h3>

                                <p class="text-muted text-left">
                                    <i class="fa fa-envelope"></i> <?php echo $dt["email"] ?><br/>
                                    <i class="fa fa-phone"></i> 0123-4567893</br>
                                    <i class="fa fa-list"></i><a href="http://www.linkedin.com"> www.linkedin.com</a></br>
                                    <i class="fa fa-list"></i><a href="http://www.github.com"> www.github.com</a> </br>
                                    
                                    
                                                                                            
                            </p>

                               
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->

                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Education</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            

                                <p class="text-muted">
                                    <span class="tag tag-danger">Bachelor of Software Engineering at</span>
                                    <span class="tag tag-success">NED University of</span>
                                    <span class="tag tag-info">Karachi, Pakistan</span>
                                    <span class="tag tag-warning">October 2018 - September 2022</span>
                                </p>

                            
                            </div>
                            <!-- /.card-body -->
                        </div>


<!-- About Me Box -->
<div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Skills</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            

                                <p class="text-muted">
                                    <span class="tag tag-danger">HTML5/CSS</span>
                                    <span class="tag tag-success">PHP</span>
                                    <span class="tag tag-info">Javascrit(NodeJS, ReactJS, jQuery)<br></span>
                                    <span class="tag tag-warning">SQL(MySQL, NoSQL, PostgreSQL)<br></span>
                                </p>

                            
                            </div>
                            <!-- /.card-body -->
                        </div>


                        <!-- About Me Box -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Working Experience</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                            

                                <p class="text-muted">
                                    <span class="tag tag-danger">Junior Software Engineer<br></span>
                                    <span class="tag tag-success">Healthmade Solution(2018 - 2019)<br></span>
                                    <span class="tag tag-info">Direct software design<br></span>
                                    <span class="tag tag-warning">Evaluate interface between hardware and Software<br></span>
                                    <span class="tag tag-primary">Web Developer(Design & Establish user friendly website)</span>
                                </p>

                            
                            </div>
                            <!-- /.card-body -->
                        </div>



                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-9">
                        <div class="card">
                            <div class="card-header p-2">
                                <ul class="nav nav-pills">
                                    <li class="nav-item"><a class="nav-link active" href="#timeline" data-toggle="tab">Timeline</a></li>
                                </ul>
                            </div><!-- /.card-header -->
                            <div class="card-body">
                                <div class="tab-content">
                                    <!-- /.tab-pane -->
                                    <div class="active tab-pane" id="timeline">
                                        <!-- The timeline -->
                                        <div class="timeline timeline-inverse">
                                            <!-- timeline time label 
                                            
                                            <div class="time-label">
                                                <span class="bg-primary">

                                                </span>
                                            </div>
                                            <!-- /.timeline-label -->
                                            <!-- timeline item -->
                                            
                                            <?php
                                             
                                             $q = $asfun->dbcon->query("select * from task where uid='$uid' and asg='$pid' ");
                                             while($row=mysqli_fetch_assoc($q)){
                                            
                                            
                                            ?>
                                            <div>
                                                <i class="fas fa-list bg-primary"></i>

                                                <div class="timeline-item">
                                                    <h3 class="timeline-header">Project Name: <b><?php  echo ucwords($asfun->getProjectName($row["pid"])); ?></b> | <?php echo $row["datetime"] ?> </h3>

                                                    <div class="timeline-body">
                                                       <b><?php echo $row["title"] ?></b> task has been assign to <b><?php echo ucwords($asfun->getUser($row["asg"])["name"]); ?></b> 
                                                    </div>
                                                  
                                                </div>
                                            </div>

                                            <?php } ?>

                                                <?php
                                               
                                               $ar = array();
                                               $ar[0] = "Project has been created!";
                                               $ar[1] = "Task has been created!";
                                               $ar[2] = "Task has been assigend!";
                                               $ar[3] = "Removed form task!";
                                               $ar[4] = "Task has been delete!";
                                               $ar[5] = "A new mamber has been add!";
                                               $ar[6] = "Task successfully completed!";
                                               $ar[7] = "Password has been changed!";
                                               $ar[8] = "email has been changed!";
                                               $ar[9] = "task file has been upload!";
                                               
                                               
                                               
                                               
                                               
                                               
                                               


                                            for($i=0; $i<count($ar); $i++){
                                            
                                            
                                            ?>
                                            <div>
                                                <i class="fas fa-list bg-primary"></i>

                                                <div class="timeline-item">
                                                    <h3 class="timeline-header"><?php echo rand(59863254, 7896554265) ?>  </h3>

                                                    <div class="timeline-body">
                                                       <b><?php echo $ar[rand(0,9)] ?></b> 
                                                       
                                                    </div>
                                                  
                                                </div>
                                            </div>

<!--
                                            <div>
                                                <i class="fas fa-list bg-primary"></i>

                                                <div class="timeline-item">
                                                    <h3 class="timeline-header"><?php echo rand(59863254, 7896554265) ?>  </h3>

                                                    <div class="timeline-body">
                                                       <b><?php echo $ar[rand(0,9)] ?></b> 
                                                       
                                                    </div>
                                                  
                                                </div>
                                            </div>
                                            -->

                                            <?php } ?>
                                            
                                        </div>
                                    </div>
                                   
                                   
                                </div>
                                <!-- /.tab-content -->
                            </div><!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->

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