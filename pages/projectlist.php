<?php
session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "All Projects";
  include 'top.php';

  error_reporting(0);
  include "../includes/main.class.php";
  $asfun = new Main();
  

  $rec["id"] = null;
  $rec["name"] = "";
  $rec["desc"] = "";
  $rec["uid"] = $_SESSION["id"];
  $rec["status"] = "";
  $rec["clientc"] = "";
  $rec["projectl"] = "";
  $rec["bugete"] = "";
  $rec["totalamt"] = "";
  $rec["projected"] = "";
  


  if(isset($_POST["name"])){
    
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $uid = $_POST["uid"];
    $status = $_POST["status"];
    $clientc = $_POST["clientc"];
    $projectl = $_POST["projectl"];
    $totalamt = $_POST["totalamt"];
    $projected = $_POST["projected"];
    $bugete = $_POST["bugete"];


    $asfun->dbcon->query("insert into projects(`uid`, `name`, `desc`, `status`, `clientc`, `projectl`, `totalamt`, `bugete`, `projected`) 
    values('$uid', '$name', '$desc', '$status', '$clientc', '$projectl', '$totalamt', '$bugete', '$projected')") or die("Error");
    $msg = "Project has been created!";

?>
<script>
    alert("<?php echo $msg; ?>")
</script>
<?php


  }


?>

<div class="content-wrapper" style="min-height: 2646.44px; padding:10px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form method="post" >
    <!-- Main content -->
    <section class="content">
   

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          SN#
                      </th>
                      <th style="width: 20%">
                          Project Name
                      </th>
                      <th style="width: 30%">
                          Team Members
                      </th>
                      <th>
                          Project Progress
                      </th>
                      <th style="width: 8%" class="text-center">
                          Status
                      </th>
                      <th style="width: 20%">
                      </th>
                  </tr>
              </thead>
             <tbody>

             <?php

if(isset($_GET["act"])){
  
  $pid = $_GET["pid"];
  $asfun->dbcon->query("delete from projects where id='$pid'");
  ?>
  <script>
alert("Project has been delete!");

  </script>
  <?php

}




             $i=1;
               $uid = $_SESSION["id"];
               $q = $asfun->dbcon->query("select * from projects where uid='$uid'");
               while($row=mysqli_fetch_assoc($q)){
                   ?>
                   
                   <tr>
                      <td>
                          <?php echo $i++; ?>
                      </td>
                      <td>
                          <a href="kanban.php?pid=<?php echo $row["id"] ?>">
                              <?php echo $row["name"] ?>
                          </a>
                          <br>
                          <small>
                              Created at: <?php echo $row["cdate"] ?>
                          </small>
                      </td>
                      <td>
                          <ul class="list-inline">
                              <li class="list-inline-item">
                                  <img alt="Avatar" class="table-avatar" src="../frontend/dist/imgnew/<?php echo rand(1,15); ?>.jpg">

                              </li>
                              <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="../frontend/dist/imgnew/<?php echo rand(1,15); ?>.jpg">
                                  
                                </li>
                              <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="../frontend/dist/imgnew/<?php echo rand(1,15); ?>.jpg">
                                  
                                </li>
                              <li class="list-inline-item">
                              <img alt="Avatar" class="table-avatar" src="../frontend/dist/imgnew/<?php echo rand(1,15); ?>.jpg">
                                  
                                </li>
                          </ul>
                      </td>
                      <td class="project_progress">

                    <?php 
                    $prog= $asfun->progress($row["id"]);
                    ?>

                          <div class="progress progress-sm">
                              <div class="progress-bar bg-green" role="progressbar" aria-valuenow="57" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $prog; ?>%">
                              </div>
                          </div>
                          <small>
                             <?php if($prog==-1){
                                 echo "No Task Found!";
                             }else{ ?> 
                              <?php echo $prog; ?>% Complete
                               <?php } ?> 
                        </small>
                      </td>
                      <td class="project-state">
                          <span class="badge badge-success"><?php echo $row["status"]; ?></span>
                      </td>
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="projectdetail.php?pid=<?php echo $row['id'] ?>">
                              <i class="fas fa-eye">
                              </i>
                              
                          </a>
                          <a class="btn btn-info btn-sm" href="projectnew.php?pid=<?php echo $row['id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              
                          </a>

                          <a class="btn btn-danger btn-sm" href="projectlist.php?pid=<?php echo $row['id'] ?>&act=dp">
                              <i class="fas fa-trash">
                              </i>
                              
                          </a>

                          
                          <!--
                          <a class="btn btn-danger btn-sm" href="projectdelete.php?pid=<?php echo $row['id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                             -->
                      </td>
                  </tr>
                   
                   <?php
               }
             ?>
           
             </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>


    </section>
</form>
    <!-- /.content -->
  </div>
 
  <?php include 'bottom.php'; ?>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
