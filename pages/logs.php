<?php
<<<<<<< HEAD
session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "Home";
  include 'top.php';

  error_reporting(0);
  include "../includes/main.class.php";
  $asfun = new Main();
  
  if(isset($_GET["pid"])){
    $pid = $_GET["pid"];
    
    if(isset($_GET["status"]) && isset($_GET["id"])){
     $asfun->taskStatusUpdate($_GET["id"],$_GET["status"]);
    }
  
  
  }else{
    $pid=null;
  }
?>

<div class="content-wrapper" style="min-height: 2646.44px; padding:10px;">

=======
    include "../includes/auth.php";
    $pageInfo = [
        'title' => 'Logs'
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
>>>>>>> ff7f1cdba149274fbe5d7e9ca562fec68a456562
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
<<<<<<< HEAD

  $st = array("", "ToDo", "Doing", "Done");
=======
>>>>>>> ff7f1cdba149274fbe5d7e9ca562fec68a456562
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
       <!--
         <ol class="breadcrumb float-sm-right">
           <li class="breadcrumb-item"><a href="#">Home</a></li>
           <li class="breadcrumb-item active">Starter Page</li>
         </ol>
-->
       </div><!-- /.col -->


     </div><!-- /.row -->
   </div><!-- /.container-fluid -->
 </div>
 <!-- /.content-header -->







 <!-- Main content -->
 <div class="content">
   <div class="container-fluid">
     <d class="row">
       <!-- /.col-md-6 -->
      

       <div class="col-sm-12">
         <div class="card">
           <div class="card-header">
             <h5 class="m-0 float-left">Tasks</h5>
             <a href="task.php?pid=<?php echo $pid ?>" class="float-right btn btn-xs btn-danger"><i class="fas fa-plus"></i></a>
           </div>
           <div class="card-body">

             <table class="table">
               <thead>
                <tr>
                  <th>Name</th>
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
                         <td><?php echo $row["title"]; ?></td>
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
         </div>
     </div>




     <div class="col-sm-4" style="display:none;">
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




     <div class="col-sm-4" style="display:none;">
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



     </div>
         </div>
<<<<<<< HEAD


     </div>
 
  <?php include 'bottom.php'; ?>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
=======
     </div>












































<?php
include "../layout/footer.php"
?>
  </div>

  </body>
  </html>
>>>>>>> ff7f1cdba149274fbe5d7e9ca562fec68a456562