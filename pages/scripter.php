<?php
session_start();
include "../config/config.php";

function get_goal_name($num)
{
    if ($num == '4') {
        return 'SMTP Emails';
    } else if ($num == '14') {
        return 'Financials';
    } else if ($num == '24') {
        return 'CMS handling';
    } else if ($num == '34') {
        return 'AI algorithms';
    } else if ($num == '44') {
        return 'Hybrid Stack';
    } else if ($num == '54') {
        return 'Data Science';
    } else if ($num == '64') {
        return 'ERP Hosting';
    } else if ($num == '74') {
        return 'Heavy Traffic';
    } else if ($num == '84') {
        return 'Graphics';
    } else if ($num == '94') {
        return 'APIs';
    } else {
        return 0;
    }
}

if (isset($_SESSION['email']) && isset($_SESSION['id'])) {
?>
    <?php
    $title = "Scripter";
    include 'top.php';
    $pic = $_SESSION['display-photo-path'];

    $pid = $_SESSION['ActiveFile']['pid'];
    $q = "SELECT * FROM project_resources WHERE pid = '$pid'";
    $q1 = "SELECT * FROM project_goals WHERE pid = '$pid' ORDER BY id";

    $re = mysqli_query($con, $q);
    $re1 = mysqli_query($con, $q1);
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

            <?php if (isset($_GET['success'])) {
            ?>
                <!-- POP UP FOR SUCCESS ALERTS -->
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="alert alert-success alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Success!</h5>
                                <?php echo $_GET['success']; ?>
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
                <!-- POP UP FOR FAILURE ERRORS -->
                <div class="row">
                    <div class="col">
                        <div class="card-body">
                            <div class="alert alert-danger alert-dismissible">
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <h5><i class="icon fas fa-check"></i> Error!</h5>
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

            <div class="content">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="row">
                            <div class="col">
                                <div class="card card-info">
                                    <div class="card-header">
                                        <h3 class="card-title">Scripter Options</h3>
                                    </div>
                                    <div class="card-body">
                                        <?php if ($re->num_rows > 0 && $re1->num_rows > 0) {
                                        ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Information
                                                        <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#info" role="button" aria-expanded="false" aria-controls="info">
                                                            <i class="fas fa-info">
                                                            </i>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php
                                        } else {
                                        ?>
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <p>Settings
                                                        <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="settings">
                                                            <i class="fas fa-cog">
                                                            </i>
                                                        </a>
                                                    </p>
                                                </div>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Code Analysis
                                                    <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec1" role="button" aria-expanded="false" aria-controls="Sec1">
                                                        <i class="fas fa-code">
                                                        </i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>File Architecture
                                                    <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec2" role="button" aria-expanded="false" aria-controls="Sec2">
                                                        <i class="fas fa-project-diagram">
                                                        </i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Deployment Server
                                                    <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec3" role="button" aria-expanded="false" aria-controls="Sec3">
                                                        <i class="fas fa-server">
                                                        </i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Report Logs
                                                    <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec4" role="button" aria-expanded="false" aria-controls="Sec4">
                                                        <i class="fas fa-file">
                                                        </i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <p>Testing Logs
                                                    <a class="btn btn-success btn-sm float-right" style="width:40px;" data-toggle="collapse" href="#Sec5" role="button" aria-expanded="false" aria-controls="Sec5">
                                                        <i class="fas fa-bug">
                                                        </i>
                                                    </a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a class="btn btn-secondary btn-sm" href="viewcode.php">
                                            <i class="fas fa-angle-left">
                                            </i>
                                            Back to Code Viewer
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="card card-success">
                                    <div class="card-header">
                                        <h3 class="card-title float-left justify-content-center">Help Center</h3>
                                        <a class="btn btn-sm float-right">
                                            <i class="fas fa-info">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div id="accordion">
                                            <div class="card">
                                                <div class="card-header" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" style="color:black;" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Consumer Question 1
                                                        </button>
                                                    </h5>

                                                </div>

                                                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" style="color:black;" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                            Consumer Question 2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card">
                                                <div class="card-header" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" style="color:black;" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                            Consumer Question 3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <a class="btn btn-secondary btn-sm" href="#">
                                            <i class="fas fa-comments">
                                            </i>
                                            See Community
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <?php if ($re->num_rows > 0 && $re1->num_rows > 0) {
                        ?>
                            <!--INFORMATION 1-->
                            <div class="collapse show" id="info">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Project Infomation</h3>
                                        <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#info" role="button" aria-expanded="true" aria-controls="info">
                                            <i class="fas fa-times">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <table class="table">
                                            <tbody>
                                                <?php while ($arr = mysqli_fetch_row($re)) {
                                                ?>
                                                    <tr>
                                                        <td>
                                                            <h5>Stack: </h5><?php echo $arr[2]; ?>
                                                        </td>
                                                        <td>
                                                            <h5>Version: </h5><?php echo $arr[3]; ?>
                                                        </td>
                                                        <td>
                                                            <h5>Cloud: </h5><?php echo $arr[4]; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5>RAM: </h5><?php echo $arr[5]; ?>
                                                        </td>
                                                        <td>
                                                            <h5>Cache: </h5><?php echo $arr[6]; ?>
                                                        </td>
                                                        <td>
                                                            <h5>Storge: </h5><?php echo $arr[7]; ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <h5>Project Goals:
                                                        </td>
                                                    <?php
                                                }
                                                while ($arr1 = mysqli_fetch_row($re1)) {
                                                    ?>
                                                        <td>
                                                            <div class="card-body">
                                                                <p class="alert alert-warning" role="alert"><?php echo get_goal_name($arr1[3]); ?></p>
                                                            </div>
                                                        </td>
                                                    <?php } ?>
                                                    </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        <?php
                            //once the loop is complete, make it empty
                            //mysqli_free_result($result);
                            //mysqli_free_result($result1);
                        } else {
                        ?>
                            <!--SETTINGS -->
                            <div class=" collapse show" id="settings">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">Settings</h3>
                                        <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#settings" role="button" aria-expanded="false" aria-controls="setttings">
                                            <i class="fas fa-times">
                                            </i>
                                        </a>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card card-success">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Choose Framework</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <form class="form-horizontal" action="../includes/scripter.php" method="POST">
                                                            <p>Choose a framework for your file</p>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <button class="btn btn-outline-secondary" type="button">Stack</button>
                                                                            </div>
                                                                            <select class="custom-select" id="inputGroupSelect01" name="stack">
                                                                                <option value="PHP">PHP</option>
                                                                                <option value="JavaScript">JavaScript</option>
                                                                                <option value=".NET">.NET</option>
                                                                                <div role="separator" class="dropdown-divider"></div>
                                                                                <option value="PHP">Use Default</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <button class="btn btn-outline-secondary" type="button">Version</button>
                                                                            </div>
                                                                            <select class="custom-select" id="inputGroupSelect02" name="version">
                                                                                <option value="PHP 3.1.0">PHP 3.1.0</option>
                                                                                <option value="PHP 4.2.6">PHP 4.2.6</option>
                                                                                <option value="PHP 7.5.0">PHP 7.5.0</option>
                                                                                <div role="separator" class="dropdown-divider"></div>
                                                                                <option value="PHP 3.1.0">Use Default</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-sm-12">
                                                                    <div class="input-group">
                                                                        <div class="input-group mb-3">
                                                                            <div class="input-group-prepend">
                                                                                <button class="btn btn-outline-secondary" type="button">Cloud</button>
                                                                            </div>
                                                                            <select class="custom-select" id="inputGroupSelect03" name="cloud">
                                                                                <option value="Microsoft Azure">Microsoft Azure</option>
                                                                                <option value="Amazon Web Services">Amazon Web Services</option>
                                                                                <option value="Google Cloud">Google Cloud</option>
                                                                                <div role="separator" class="dropdown-divider"></div>
                                                                                <option value="Microsoft Azure">Use Default</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card card-warning">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Allocate Resources</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <p>Allocate Cloud Resources for this File</p>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <button class="btn btn-outline-secondary" type="button">RAM</button>
                                                                        </div>
                                                                        <select class="custom-select" id="ram" name="ram">
                                                                            <option value="256 KB">256 KB</option>
                                                                            <option value="512 KB">512 KB</option>
                                                                            <option value="1 MB">1 MB</option>
                                                                            <div role="separator" class="dropdown-divider"></div>
                                                                            <option value="256 KB">Use Default</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <button class="btn btn-outline-secondary" type="button">Cache</button>
                                                                        </div>
                                                                        <select class="custom-select" id="cache" name="cache">
                                                                            <option value="128 KB">128 KB</option>
                                                                            <option value="64 KB">64 KB</option>
                                                                            <option value="32 KB">32 KB</option>
                                                                            <div role="separator" class="dropdown-divider"></div>
                                                                            <option value="32 KB">Use Default</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group">
                                                                    <div class="input-group mb-3">
                                                                        <div class="input-group-prepend">
                                                                            <button class="btn btn-outline-secondary" type="button">Storage</button>
                                                                        </div>
                                                                        <select class="custom-select" id="storage" name="storage">
                                                                            <option value="1 MB">1 MB</option>
                                                                            <option value="2 MB">2 MB</option>
                                                                            <option value="3 MB">3 MB</option>
                                                                            <div role="separator" class="dropdown-divider"></div>
                                                                            <option value="2 MB">Use Default</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card card-info">
                                                    <div class="card-header">
                                                        <h3 class="card-title">Set Goals</h4>
                                                    </div>
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <div class="col-sm-12">
                                                                <div class="input-group mb-3">
                                                                    <p>Select all that apply.</p>
                                                                    <!-- Example split danger button -->
                                                                    <table class="table">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="SMTP Emails" id="emails" name="goals[]">
                                                                                        <label class="form-check-label" for="emails">
                                                                                            SMTP Emails
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="Financials" id="finances" name="goals[]">
                                                                                        <label class="form-check-label" for="finances">
                                                                                            Financials
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="CMS handling" id="cms" name="goals[]">
                                                                                        <label class="form-check-label" for="cms">
                                                                                            CMS handling
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="AI algorithms" id="algorithms" name="goals[]">
                                                                                        <label class="form-check-label" for="algorithms">
                                                                                            AI algorithms
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="Hybrid Stack" id="hybrid" name="goals[]">
                                                                                        <label class="form-check-label" for="hybrid">
                                                                                            Hybrid Stack
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="Data Science" id="data" name="goals[]">
                                                                                        <label class="form-check-label" for="data">
                                                                                            Data Science
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="ERP Hosting" id="erp" name="goals[]">
                                                                                        <label class="form-check-label" for="erp">
                                                                                            ERP Hosting
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="Heavy Traffic" id="traffic" name="goals[]">
                                                                                        <label class="form-check-label" for="traffic">
                                                                                            Heavy Traffic
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="Graphics" id="graphics" name="goals[]">
                                                                                        <label class="form-check-label" for="graphics">
                                                                                            Graphics
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input" type="checkbox" value="APIs" id="apis" name="goals[]">
                                                                                        <label class="form-check-label" for="apis">
                                                                                            APIs
                                                                                        </label>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer">
                                        <input class="btn btn-primary float-right" type="submit" name="submit-settings" value="Submit">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>

                        <!--SECTION 1-->
                        <div class="collapse" id="Sec1">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Code Analysis</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec1" role="button" aria-expanded="true" aria-controls="Sec1">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <?php include "../includes/file-architecture.php"; ?>

                        <!--SECTION 3-->
                        <div class="collapse" id="Sec3">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Deployment & Servers</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec3" role="button" aria-expanded="true" aria-controls="Sec3">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <!--SECTION 4-->
                        <div class="collapse" id="Sec4">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Report Logs</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec4" role="button" aria-expanded="true" aria-controls="Sec4">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>

                        <!--SECTION 5-->
                        <div class="collapse" id="Sec5">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Testing Logs</h3>
                                    <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec5" role="button" aria-expanded="true" aria-controls="Sec5">
                                        <i class="fas fa-times">
                                        </i>
                                    </a>
                                </div>
                                <div class="card-body"></div>
                                <div class="card-footer"></div>
                            </div>
                        </div>
                    </div>
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