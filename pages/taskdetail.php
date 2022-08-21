<?php
session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "Task Details";
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


if(isset($_GET["tid"])){
    $tid = $_GET["tid"];
    $_SESSION['Activetid'] = $tid;
    $res = $asfun->dbcon->query("select * from task where id='$tid'");
    $rec = $res->fetch_array();
    $pid = $rec["pid"];
    $_SESSION['Activepid'] = $pid;
    $st = array("", "ToDo", "Doing", "Done");
}

?>

<div class="content-wrapper" style="min-height: 2646.44px; padding:10px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Task</h1>
          </div>
          <div class="col-sm-6">
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form method="post" >
    <!-- Main content -->
    <section class="content">
   

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Task Detail</h3>

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
          
        <div class="row">
          
        <div class="col-12 col-md-12 col-lg-8 order-2 order-md-1">
            
        <div class="row">
                
              </div>
              <div class="row">
                <div class="col-12">
                    
         <div class="card">
           <div class="card-header">
             <h5 class="m-0 float-left">Activity Feed</h5>
            </div>
           <div class="card-body">

             <table class="table">
               <thead>
                <tr>
                  <th>Task</th>
                  <th>Assign to</th>
                  <th>Status</th>
                  <th>Date</th>
                </tr>
              </thead>

              <tbody>
              <?php
              
              $q=$asfun->dbcon->query("select * from task where pid='$pid'");
               while($row=mysqli_fetch_assoc($q)){
                       ?>
                       <tr>
                         <td><a href="taskdetail.php?tid=<?php echo $row["id"] ?>"><?php echo $row["title"]; ?></a></td>
                         <td><?php echo  $asfun->getUser($row["asg"])['name']; ?></td>
                         <td><?php echo $st[$row["status"]]; ?></td>
                         <td><?php echo $row["sdate"]; ?></td>
                         
                       </tr>
                       <?php
               }
              ?>
              
              </tbody>
      </table> 

              </div>
             
      

                  <!--

<hr/>
                      <div class="user-block">
                        <img class="img-circle img-bordered-sm" src="../frontend/dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                        </span>
                        <span class="description">Shared publicly - 7:45 PM today</span>
                      </div>
                     
                      <p>
                        Lorem ipsum represents a long-held tradition for designers,
                        typographers and the like. Some people hate it and argue for
                        its demise, but others ignore.
                      </p>
-->
                    
                    </div>

                 
                </div>
              </div>
            </div>
            
            <div class="col-12 col-md-12 col-lg-4 order-1 order-md-2">
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> <?php echo $rec["title"]; ?></h3>
              <p class="text-muted">
              <?php echo $rec["desc"]; ?>
              </p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Assign To
                  <b class="d-block"><?php echo  $asfun->getUser($rec["asg"])['name']; ?></b>
                </p>
            
                <p class="text-sm">Start Date
                  <b class="d-block"><?php echo $rec["sdate"]; ?></b>
                </p>
            
                <p class="text-sm">End Date
                  <b class="d-block"><?php echo $rec["edate"]; ?></b>
                </p>
            
            </div>
              

              <h5 class="mt-5 text-muted">Task files</h5>
              <ul class="list-unstyled">
              <?php
              
              $q=$asfun->dbcon->query("select * from attachment_files where tid='$tid'");
               while($row=mysqli_fetch_assoc($q)){
                   ?>
                <li>
                <!--STORE FILE DATA AS A SESSION VARIABLE-->
                <?php
                    $_SESSION['ActiveFile']['fid'] = $row["id"];
                    $_SESSION['ActiveFile']['path'] = $row["file_path_address"];
                    $_SESSION['ActiveFile']['pid'] = $row["pid"];
                    $_SESSION['ActiveFile']['tid'] = $row["tid"];
                  ?>  
                <a href="viewcode.php" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> 
                  <?php echo basename($row["file_path_address"]) ?></a>
                </li>
                   
                   <?php
               }
                   ?>


            </ul>
              <hr/>
              <div class="text-center mt-5 mb-3">
            </form>
             <form method="post" enctype="multipart/form-data" action="upload.php" target="up" >
            <input type="file" name="fileToUpload" accept=".php,.css*" required />
            <button class="btn btn-sm btn-primary">Upload </button>
            <input type="hidden" name="pid" value="<?php echo $rec["pid"]; ?>" >
            <input type="hidden" name="tid" value="<?php echo $rec["id"]; ?>" >
            
            </form>
              <iframe name="up" style="display:none;"></iframe>
            </div>

            </div>
          </div>
        </div>
        <!-- /.card-body -->
      </div>
      
    


    </section>

    <!-- /.content -->
  </div>
 
  <?php include 'bottom.php'; ?>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
