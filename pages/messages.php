<?php
session_start();
include "../config/config.php";

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Messages";
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
                            <li class="breadcrumb-item"><a href="home.php">Home</a></li>
                            <li class="breadcrumb-item active"><?php echo $title; ?></li>
                        </ol>
                    </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->
        <section class="content">
            <div class="row">
                <div class="col-lg-4">
                    <!--START OF TABLE FOR MESSAGES LIST -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col">
                                    <h3 class="card-title">Inbox</h3>
                                    <img src="<?php echo $pic; ?>" />
                                </div>
                                <div class="col-xs">
                                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal-default">
                                        +
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="modal fade" id="modal-default">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Send a Message</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>One fine body</p>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                        <button type="button" class="btn btn-success">Send</button>
                                    </div>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <div class="card-body p-0">
                            <?php
                            $uid = $_SESSION['id'];
                            $query = "SELECT DISTINCT sender_id, timing, is_read FROM messages where receiver_id = '$uid'";
                            $result = mysqli_query($con, $query);
                            ?>
                            <table class="table">
                                <tbody>
                                    <?php if ($result->num_rows > 0) {
                                        while ($array = mysqli_fetch_row($result)) {
                                            $query1 = "SELECT name FROM registrations where id = '$array[0]' LIMIT 1";
                                            $result1 = mysqli_query($con, $query1);
                                            $name = mysqli_fetch_row($result1);
                                    ?>
                                            <tr>
                                                <td scope="row">
                                            <tr>
                                                <?php // echo $array[1]; ?>
                                            </tr>
                                            <tr>
                                                <?php echo $name[0]; ?>
                                                <?php echo $array[2]; ?>
                                            </tr>
                                            </td>
                                            <td><a class="btn btn-danger btn-md" href=#>X</a></td>
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
                        <!-- /.card-body -->
                    </div>
                    <!-- END OF TABLE -->
                </div>
                <div class="col-lg-8">

                </div>
            </div>
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