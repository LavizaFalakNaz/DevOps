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
    <!-- Content Header (Page header) -->
    <div class="content-header">
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
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

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
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
</div>
<?php
    include_once "../layout/footer.php";
?>
</body>
</html>