<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>

    <?php
    $title = "Mails";
    include 'top.php';

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

        <!-- Main content -->
        <section class="content">
            <!-- Main row -->
            <div class="row">
                <!-- Left col -->
                <section class="col-lg-6 connectedSortable">
                    <!-- Horizontal Form -->
                    <div class="card card-danger">
                        <div class="card-header">
                            <h3 class="card-title">Your Mail Server is not setp yet. Please Provide the details below.</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form class="form-horizontal" method="post" action="../mailer/testMailServer.php">
                            <div class="card-body">
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="email" class="form-control" name="mail-email" placeholder="Email" readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12">
                                        <input type="password" class="form-control" name="mail-password" placeholder="Password" readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <input type="text" class="form-control" name="mail-host" placeholder="Host Link" readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <input type="number" class="form-control" name="mail-port" placeholder="Port" readonly onfocus="this.removeAttribute('readonly');">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-danger">Register</button>
                                <button type="submit" class="btn btn-default float-right">Cancel</button>
                            </div>
                            <!-- /.card-footer -->
                        </form>
                    </div>
                    <!-- /.card -->
                    <!-- /.card -->
                </section>
                <!-- /.Left col -->
                <!-- right col (We are only adding the ID to make the widgets sortable)-->
                <section class="col-lg-5 connectedSortable">


                </section>
                <!-- right col -->
            </div>
            <!-- /.row (main row) -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <?php
    }

    else if (isset($_SESSION['mail-server']))
    {

    ?>

    <?php include 'bottom.php'; ?>

<?php
} else {
    header("Location: login.php?error=Please enter your email and password to start.");
    exit();
}
