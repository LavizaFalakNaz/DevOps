<?php
session_start();
  
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
  
  $title = "Projects Kanban";
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



<div class="content-header">
   <div class="container-fluid">
     <div class="row mb-2">
       <div class="col-sm-6">
       <h1 class="m-0"> 
            <div class="dropdown" style="display:none;">
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
      <?php
         $qs = $asfun->dbcon->query("select * from projects where uid='$uid'");
         while($row=mysqli_fetch_assoc($qs)){
             $pid=$row["id"];
      ?>

       <div class="col-sm-3">
         <div class="card">
           <div class="card-header">
             <h5 class="m-0 float-left"><a href="kanban.php?pid=<?php echo $pid; ?>"><?php echo $row["name"] ?></a></h5>
             <a href="task.php?pid=<?php echo $pid ?>" class="float-right btn btn-xs btn-primary"><i class="fas fa-plus"></i></a>
           </div>
           <div class="card-body">
             
           <?php
           $q=$asfun->dbcon->query("select * from task where pid='$pid' order by sdate asc");
           while($row=mysqli_fetch_assoc($q)){
                   $asfun->taskCardg($asfun->todo, $row);
           }
           ?>

           </div>
         </div>
     </div>


<?php } ?>

<!--
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

        -->

     </div>
         </div>
     </div>
 
  <?php include 'bottom.php'; ?>

<?php } else {
  header("Location: login.php?error=Please enter your email and password to start.");
  exit();
}
