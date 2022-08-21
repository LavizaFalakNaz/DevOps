<?php
session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "Team View";
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
            <h1>Team Members</h1>
            <button onclick="sf();" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Add New Member
</button>
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
   
  

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
     
    <iframe id="mf"  src="addmember.php" frameborder=0 name="myframe" style="width:100%; height:500px; display:inline;"></iframe>

      
    </div>
  </div>
</div>

    <div class="card">
        <div class="card-header">
          <h3 class="card-title">Team Members</h3>

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
              
             <tbody>

             <?php
             $i=1;
               $uid = $_SESSION["id"];
               $q = $asfun->dbcon->query("select * from registrations");
               while($row=mysqli_fetch_assoc($q)){
                   ?>
                   
                   <tr>
                      <td>
                      <img style="width:50px;" src="../resources/images/0.jpg" class="img-circle elevation-2" alt="User Image">
                      </td>
                      <td>
                          <a href="#">
                              <?php echo $row["name"] ?>
                          </a>
                          <br>
                          <small>
                               <a href="mailto:<?php echo $row["email"] ?>"><?php echo $row["email"] ?></a>
                          </small>
                      </td>
                     
                      <!--
                      <td class="project-actions text-right">
                          <a class="btn btn-primary btn-sm" href="projectdetail.php?pid=<?php echo $row['id'] ?>">
                              <i class="fas fa-folder">
                              </i>
                              View
                          </a>
                          <a class="btn btn-info btn-sm" href="projectnew.php?pid=<?php echo $row['id'] ?>">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit
                          </a>
               -->
                          <!--
                          <a class="btn btn-danger btn-sm" href="projectdelete.php?pid=<?php echo $row['id'] ?>">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                             -->
                      
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

?>


<script>
    fs = 0
function sf(){

if(fs==0){
    document.getElementById("mf").style.display="inline";
fs=1;
}else{
    document.getElementById("mf").style.display="none";
    fs=0
}


}
</script>