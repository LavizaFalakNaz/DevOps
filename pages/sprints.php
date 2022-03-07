<?php
    include "../includes/auth.php";
    $pageInfo = [
        'title' => 'Taskboard'
    ];
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

    if(isset($_GET["pid"])){
      $pid = $_GET["pid"];
      
      if(isset($_GET["status"]) && isset($_GET["id"])){
       $asfun->taskStatusUpdate($_GET["id"],$_GET["status"]);
      }
    
    
    }else{
      $pid=null;
    }




?>



<div class="content-wrapper">
  <?php
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  include "../includes/auth.php";
  session_start();
  $title = "SET_THE_TITLE_HERE";
  include 'top.php';
?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"> 
            <div class="dropdown">
            <?php echo $pageInfo["title"]; ?>
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
  <?php echo ucwords($asfun->getProjectName($pid)) ?>
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
  <?php
        $uid = $_SESSION["id"];
        $q = $asfun->dbcon->query("select * from projects where uid='$uid'");
        while($row=mysqli_fetch_assoc($q)){
          ?>
    <a class="dropdown-item" href="?pid=<?php echo $row["id"] ?>"><?php echo ucwords($row["name"]) ?></a>
          
          <?php
        }
        ?>
   
  </div>
</div>
          </h1>
            
          </div><!-- /.col -->
            <h1>Sprint Board</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Projects</a></li>
              <li class="breadcrumb-item active">Sprint Board</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0 float-left">ToDo</h5>
                <a href="task.php?pid=<?php echo $pid ?>" class="float-right btn btn-xs btn-danger"><i class="fas fa-plus"></i></a>
              </div>
              <div class="card-body">
                
              <?php
              $q=$asfun->dbcon->query("select * from task where pid='$pid' and status=1");
              while($row=mysqli_fetch_assoc($q)){
                      $asfun->taskCard($asfun->todo, $row);
              }
              ?>

              </div>
            </div>
        </div>




        <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0 float-left">Doing</h5>
                <a href="task.php?pid=<?php echo $pid ?>" class="float-right btn btn-xs btn-warning"><i class="fas fa-plus"></i></a>
          
              </div>
              <div class="card-body">
              
              <?php
              $q=$asfun->dbcon->query("select * from task where pid='$pid' and status=2");
              while($row=mysqli_fetch_assoc($q)){
                      $asfun->taskCard($asfun->doing, $row);
              }
              ?>


              </div>
            </div>
        </div>




        <div class="col-sm-4">
            <div class="card">
              <div class="card-header">
                <h5 class="m-0 float-left">Done</h5>
                <a href="task.php?pid=<?php echo $pid ?>" class="float-right btn btn-xs btn-success"><i class="fas fa-plus"></i></a>
          
              </div>
              <div class="card-body">
              

              <?php
              $q=$asfun->dbcon->query("select * from task where pid='$pid' and status=3");
              while($row=mysqli_fetch_assoc($q)){
                      $asfun->taskCard($asfun->done, $row);
              }
              ?>


              </div>
            </div>
        </div>

       
          <!-- /.col-md-6 -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Title</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          Start creating your amazing application!
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include 'bottom.php'; ?>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
