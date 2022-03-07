<?php
session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "Home";
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


if(isset($_GET["pid"])){
    $pid = $_GET["pid"];
    $res = $asfun->dbcon->query("select * from projects where id='$pid'");
    $rec = $res->fetch_array();
    
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
           
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <form method="post" >
    <!-- Main content -->
    <section class="content">
   

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects Detail</h3>

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
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated budget</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $rec["bugete"]; ?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Total amount spent</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $rec["totalamt"]; ?></span>
                    </div>
                  </div>
                </div>
                <div class="col-12 col-sm-4">
                  <div class="info-box bg-light">
                    <div class="info-box-content">
                      <span class="info-box-text text-center text-muted">Estimated project duration</span>
                      <span class="info-box-number text-center text-muted mb-0"><?php echo $rec["projected"]; ?></span>
                    </div>
                  </div>
                </div>
              </div>



              <div class="row">
                <div class="col-12">
                  
                
                <h4>Recent Activity</h4>
                   
                  <div class="post">
                    
                  <!--
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
              <h3 class="text-primary"><i class="fas fa-paint-brush"></i> <?php echo $rec["name"]; ?></h3>
              <p class="text-muted">
              <?php echo $rec["desc"]; ?>
              </p>
              <br>
              <div class="text-muted">
                <p class="text-sm">Client Company
                  <b class="d-block"><?php echo $rec["clientc"]; ?></b>
                </p>
                <p class="text-sm">Project Leader
                  <b class="d-block"><?php echo $rec["projectl"]; ?></b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Project files</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Functional-requirements.docx</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> UAT.pdf</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Email-from-flatbal.mln</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Logo.png</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Contract-10_12_2014.docx</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>

            </div>
          </div>
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
