<?php
/*if (isset($_SESSION['email']) && isset($_SESSION['id'])) {*/
    session_start();
    $title = "Server Setup";
    include 'top.php';

   /* if ($_SESSION['mail-server'] === 'setup1_completedNicely') {
        //shift to mailbox
        header("Location: fetchMailServer.php");
        exit();
    } else {
        //continue with this page */
?>

        <body class="sidebar-mini layout-fixed" style="height:auto">
            <div class="wrapper">
                <div class="content-wrapper">
                    <!-- Content Header (Page header) -->
                    <div class="content-header">
                        <div class="container-fluid">
                            <div class="row mb-2">
                                <div class="col-sm-6">
                                    <h1 class="m-0">Mail <?php echo $title ?></h1>
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
                                <div class="col-lg-4">
                                    <div class="card">
                                        <form method="post" action="serverSetup.php">
                                            <div class="card-header">
                                                <h5 class="m-0">Server Credentials</h5>
                                            </div>
                                            <div class="card-body">
                                                <div class="form-group"><label>Email</label>
                                                    <input class="form-control" type="email" placeholder="Enter Email" name="email" required>
                                                </div>
                                                <div class="form-group"><label>Password</label>
                                                    <input class="form-control" type="password" placeholder="Enter Password" name="password" required>
                                                </div>
                                                <div class="form-group"><label>Server</label>
                                                    <input class="form-control" type="text" placeholder="Enter Host Server" name="server" required>
                                                </div>
                                                <div class="form-group"><label>Port</label>
                                                    <input class="form-control" type="number" placeholder="Enter Port Number (Default: 465)" name="port" required>
                                                </div>
                                            </div>
                                            <div class="card-footer">
                                                <div class="row">
                                                    <div class="col-sm-4">
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </div>
                                                    <div class="col-sm-8">
                                                        <!--<?php //echo $msg; 
                                                            ?>-->
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                                    </form>
                                    <!-- /.col-md-6 -->
                                </div>
                            </div>
                            <!-- /.row -->
                        </div><!-- /.container-fluid -->
                    </div>
                    <!-- /.content -->
                </div>

            </div>
            <?php include 'bottom.php'; /*?>
    <?php } //for the inner else loop
} //for the if loop 
else {
    header("Location: login.php?error=Please enter your email and password to start.");
    exit();
} */
