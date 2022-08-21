<?php
session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "Create New Project";
  include 'top.php';

  //error_reporting(0);
  include "../includes/main.class.php";
  $asfun = new Main();
  $lbl="Project Add";
  if(isset($_GET["pid"])){
    $pid = $_GET["pid"];
    $res = $asfun->dbcon->query("select * from projects where id='$pid'");
    $rec = $res->fetch_array();
    $lbl="Project Edit";
  }else{

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
  $rec["cdate"] = date("Y-m-d");
  
  }


  if(isset($_POST["name"])){
    
    $id = $_POST["id"];
    $name = $_POST["name"];
    $desc = $_POST["desc"];
    $uid = $_SESSION["id"];
    $status = $_POST["status"];
    $clientc = $_POST["clientc"];
    $projectl = $_POST["projectl"];
    $totalamt = $_POST["totalamt"];
    $projected = $_POST["projected"];
    $bugete = $_POST["bugete"];
    $cdate = $_POST["cdate"];
    


      if($id>0){
         
        $asfun->dbcon->query("update projects set `name`='$name', `desc`='$desc', `status`='$status', `clientc`='$clientc', `projectl`='$projectl', `bugete`='$bugete', 
        `totalamt`='$totalamt', `projected`='$projected', `uid`='$uid', `cdate`='$cdate' where id='$id'");
        $msg = "Project has been updated!";

      }else{
    $asfun->dbcon->query("insert into projects(`uid`, `name`, `desc`, `status`, `clientc`, `projectl`, `totalamt`, `bugete`, `projected`, `cdate`) 
    values('$uid', '$name', '$desc', '$status', '$clientc', '$projectl', '$totalamt', '$bugete', '$projected', '$cdate')") or die("Error");
    $msg = "Project has been created!";

      }
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
            <h1><?php echo $lbl; ?></h1>
          </div>
          <div class="col-sm-6">
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form method="post" >
    <input type="hidden" id="inputName" name="id" value="<?php echo $rec["id"] ?>" class="form-control" >
      
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-6">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body" style="display: block;">
              <div class="form-group">
                <label for="inputName">Project Name</label>
                <input type="text" id="inputName" name="name" value="<?php echo $rec["name"] ?>" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputDescription">Project Description</label>
                <textarea id="inputDescription" name="desc" class="form-control" rows="4" required><?php echo $rec["desc"] ?></textarea>
              </div>
              <div class="form-group">
                <label for="inputStatus">Status</label>
                <select id="status" name="status"  class="form-control custom-select" required> 
                  <option value="" >Select one</option>
                  <option value="on hold">On Hold</option>
                  <option value="canceled">Canceled</option>
                  <option value="success">Success</option>
                </select>
              </div>
              <div class="form-group">
                <label for="inputClientCompany">Client Company</label>
                <input type="text" name="clientc" id="inputClientCompany" class="form-control" value="<?php echo $rec["clientc"] ?>" required>
              </div>
              <div class="form-group">
                <label for="inputProjectLeader">Project Leader</label>
                <input type="text" name="projectl" id="inputProjectLeader" value="<?php echo $rec["projectl"] ?>" class="form-control" required>
              </div>


              <div class="form-group">
                <label for="inputEstimatedDuration">Created at</label>
                <input required type="date" name="cdate" id="inputEstimatedDuration" class="form-control" value="<?php echo $rec["cdate"] ?>" required >
              </div>



            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        <div class="col-md-6">
          <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Budget</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEstimatedBudget">Estimated budget</label>
                <input required type="number" name="bugete" id="inputEstimatedBudget" class="form-control" value="<?php echo $rec["bugete"] ?>">
              </div>
              <div class="form-group">
                <label for="inputSpentBudget">Total amount spent</label>
                <input required type="number" name="totalamt" id="inputSpentBudget" class="form-control" value="<?php echo $rec["totalamt"] ?>">
              </div>
              <div class="form-group">
                <label for="inputEstimatedDuration">Estimated project duration</label>
                <input required type="number" name="projected" id="inputEstimatedDuration" class="form-control" value="<?php echo $rec["projected"] ?>">
              </div>


          
            </div>
            <!-- /.card-body -->
          </div>

        <?php
        if(isset($_GET["pid"])){
        ?>

          <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Files</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body p-0">
              <table class="table">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>File Size</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>

                <ul class="list-unstyled">
              <?php

              if(isset($_GET["fid"])){
               
                $fid =$_GET["fid"];
               $ad =$_GET["ad"];
               $asfun->dbcon->query("delete from attachment_files where id='$fid'");
                unlink($ad);
?>
<script>
alert("File has been delete!");
</script>
<?php


              }



              
              $q=$asfun->dbcon->query("select * from attachment_files where pid='$pid'");
               while($row=mysqli_fetch_assoc($q)){
                $filesize = filesize($row["file_path_address"]); // bytes
                $filesize = round($filesize / 1024, 2);
                   ?>
             

                <tr>
                    <td> <?php echo basename($row["file_path_address"]) ?></td>
                    <td><?php echo $filesize; ?> kb</td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="<?php echo $row["file_path_address"] ?>" target="_blank" class="btn btn-info"><i class="fas fa-eye"></i></a>
                        <a href="projectnew.php?pid=<?php echo $pid ?>&fid=<?php echo $row["id"] ?>&ad=<?php echo $row["file_path_address"] ?>" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                      </div>
                    </td>
                  </tr>
                   
                   <?php
               }
                   ?>
              </ul>


               </tbody>
              </table>
            </div>
            <?php } ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Submit" class="btn btn-success float-right">
        </div>
      </div>
    </section>
</form>
    <!-- /.content -->
  </div>
 
  <?php include 'bottom.php'; ?>


<script>
  $("#status").val("<?php echo $rec["status"] ?>");
  </script>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
