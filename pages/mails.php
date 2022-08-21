<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>

    <?php
    if (isset($_POST['email-save'])) {
        $uid = $_SESSION['id'];
        $new_email = $_POST['new_email'];
        $insert = "INSERT INTO marketing_emails (email, uid) VALUES ('$new_email' , '$uid')";
        if (!mysqli_query($con, $insert)) {
            die('Error: ' . mysqli_error($con));
        }
    }
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

        <?php
        if (!isset($_SESSION['mail-server-id'])) { //reach this loop when server is set
        ?>
            <!-- Main content -->
            <section class="content">
                <!-- Main row -->
                <div class="row">
                    <!-- Left col -->
                    <section class="col-lg-6 connectedSortable">
                        <!-- Horizontal Form -->
                        <div class="card card-danger">
                            <div class="card-header">
                                <h3 class="card-title">Your Mail Server is not setup yet. Please Provide the details below.</h3>
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
    </div>
    <!-- /.container-fluid -->
    </section>

<?php } else if (isset($_SESSION['mail-server-id'])) {
            //reach this loop when server is set
?>
    <?php if (isset($_GET['msg'])) {
    ?>
        <!-- POP UP FOR MESSAGE ALERTS -->
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <div class="alert alert-success alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Success!</h5>
                        <?php echo $_GET['msg']; ?>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- END OF ALERT -->
    <?php } ?>

    <?php if (isset($_GET['error'])) {
    ?>
        <!-- POP UP FOR MESSAGE ERRORS -->
        <div class="row">
            <div class="col">
                <div class="card-body">
                    <div class="alert alert-danger alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                        <h5><i class="icon fas fa-check"></i> Error</h5>
                        <?php echo $_GET['error']; ?>
                    </div>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
        <!-- END OF ALERT -->
    <?php } ?>

    <!-- START OF EMAIL INPUT SECTION -->

    <div class="row card-body">
        <div class="col">
            <!-- general form elements -->
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Target Emails</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form action="mails.php" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" name="new_email" placeholder="Enter email">
                        </div>
                    </div>
                    <!-- /.card-body -->
                    <div class="card-footer">
                        <button type="submit" name="email-save" class="btn btn-primary">Add</button>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <h5>Existing Emails List</h5>
                            <?php
                            $uid = $_SESSION['id'];
                            $query = "SELECT id,email FROM marketing_emails where uid = '$uid'";
                            $result = mysqli_query($con, $query);
                            ?>
                            <table class="table">
                                <tbody>
                                    <?php if ($result->num_rows > 0) {
                                        while ($array = mysqli_fetch_row($result)) {
                                    ?>
                                            <tr>
                                                <td scope="row"><?php echo $array[1]; ?></th>
                                                <td>
                                                    <a class="btn btn-danger btn-sm" href="../includes/delete-process.php?id=<?php echo $array[0]; ?>">
                                                        <i class="fas fa-trash">
                                                        </i>
                                                    </a>
                                                </td>
                                            </tr>
                                        <?php }
                                        //once the loop is complete, make it empty
                                        mysqli_free_result($result);
                                    } else {
                                        ?>
                                        <tr>
                                            <td colspan="1" rowspan="1" headers="">No Data Found</td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </form>
            </div>
            <!-- /.card -->
            <!-- END OF INPUT SECTION -->
        </div>

        <!--START OF EMAIL EDIT SECTION -->
        <div class="col">
            <!-- general form elements disabled -->
            <div class="card card-warning">
                <div class="card-header">
                    <h3 class="card-title">Email Contents</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <form action="../mailer/emailMarketingProcess.php" method="POST">
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- text input -->
                                <div class="form-group">
                                    <label>Subject</label>
                                    <input type="text" class="form-control" name="subject" placeholder="Enter Your Subject ...">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <!-- textarea -->
                                <div class="form-group">
                                    <label>Message Content</label>
                                    <textarea rows="7" style="height:100%;" class="form-control" rows="3" name="message" placeholder="Enter Your Email Content..."></textarea>
                                </div>
                            </div>
                        </div>
                </div>
                <div class="card-footer">
                    <button type="submit" name="send-email" class="btn btn-warning">Send</button>
                    <button type="submit" name="clear-email" class="btn btn-default float-right">Cancel</button>
                </div>
                </form>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
            <!-- general form elements disabled -->
        </div>
    </div>

<?php
        }
?>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include 'bottom.php'; ?>

<?php
} else {
    header("Location: login.php?error=Please enter your email and password to start.");
    exit();
}
?>