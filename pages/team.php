<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Teams and Contacts";
    include 'top.php';
    $pic = $_SESSION['display-photo-path'];

    error_reporting(0);
  include "../includes/main.class.php";
  $asfun = new Main();
  
  
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

            <!-- Default box -->
            <div class="card card-solid">
                <div class="card-body pb-0">
                    <div class="row">
                        
                    <?php
        if(isset($_GET["act"])){
                    $pid = $_GET["id"];
                    $q = $asfun->dbcon->query("delete from registrations where id='$pid'");
                    ?>
                    <script>
                        alert("Mamber has been delete!");
                    </script>
                    <?php
                    

        }





             $i=1;
               $uid = $_SESSION["id"];
               $q = $asfun->dbcon->query("select * from registrations");
               while($row=mysqli_fetch_assoc($q)){
                $rid = rand(1,15); 
                   ?>
            
                    <div class="col-12 col-sm-6 col-md-4 d-flex align-items-stretch flex-column">
                            <div class="card bg-light d-flex flex-fill">
                                
                                <div class="card-body pt-0">
                                    <div class="row">
                                        <div class="col-7">
                                                              
                                            <ul class="ml-4 mb-0 fa-ul text-muted">
                                    <br><br><br>
                                            <h2 class="lead"><b><?php echo ucwords($row["name"]) ?></b></h2>
                                         
                                            </ul>
                                        </div>
                                        <div class="col-5 text-center">
                                            <img src="../frontend/dist/imgnew/<?php echo $rid; ?>.jpg" alt="user-avatar" class="img-circle img-fluid">
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <div class="text-right">
                                        
                                        <a href="profile.php?id=<?php echo $row["id"] ?>&rid=<?php echo $rid; ?>" class="btn btn-sm btn-primary">
                                            <i class="fas fa-user"></i> View Profile
                                        </a>


                                        <a href="team.php?id=<?php echo $row["id"] ?>&act=dp" class="btn btn-sm btn-danger">
                                            <i class="fas fa-trash"></i> Delete
                                        </a>

                                        
                                        


                                    </div>
                                </div>
                            </div>
                            
                            
                        </div>
                        <?php } ?>

            </div>

            
            <!-- /.card -->

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