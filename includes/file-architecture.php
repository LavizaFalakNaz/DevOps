<?php
include "../config/config.php";

$pid = $_SESSION['ActiveFile']['pid'];

$get_files = "SELECT * FROM attachment_files WHERE pid = '$pid'";
$file_results = mysqli_query($con, $get_files);
?>
<!--SECTION 2-->
<div class="collapse show" id="Sec2">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">File Architecture</h3>
            <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec2" role="button" aria-expanded="true" aria-controls="Sec2">
                <i class="fas fa-times">
                </i>
            </a>
        </div>
        <div class="card-body">
            <?php
            if (!empty($file_results)) {
                //FILES ARE AVAILABLE SO NOW YOU CAN DEVELOP AN ARCHITECTURE 
            ?>
            we have data
            <?php
            } else {
            ?>
            we dont have data
            <?php
            }
            ?>
        </div>
        <div class="card-footer"></div>
    </div>
</div>