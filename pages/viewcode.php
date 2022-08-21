<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Code View";
    include 'top.php';
    $pic = $_SESSION['display-photo-path'];
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
                            <!--    make sure page title is set in line number 8 -->
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">

        <?php
error_reporting(0);
if(isset($_POST["fcode"])){
    $fcode = $_POST["fcode"];
    $filep=$_POST["file"];

    $myfile = fopen($filep, "w") or die("Unable to open file!");
    fwrite($myfile,$fcode);
    fclose($myfile);
}


            $file = $_GET["file"];
            $myfile = fopen($file, "r") or die("Unable to open file!");
            $s= fread($myfile,filesize($file));
            ?>

            <form method="post" action="?file=<?php echo $file; ?>">
            <input type="hidden" value="<?php echo $file; ?>" name="file" />
            <textarea name="fcode" style="width:100%; height:400px"><?php echo $s; ?></textarea>
            <input type="submit" value="Save" class="btn btn-primary" />    
        </form>
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