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
            $fileiterator = 0;
            $file_dir = [];

            $get_files = "SELECT * FROM attachment_files WHERE pid = '$pid'";
            $file_results = mysqli_query($con, $get_files);

            if ($file_results->num_rows > 0) {
                while ($r = mysqli_fetch_row($file_results)) {
                    $fid = $r[0];
                    array_push($file_dir, $r[3]);
            ?>
                    <table class="table">
                        <tbody>
                            <tr>
                                <td>
                                    <a href="viewcode.php?file=<?php echo $fid ?>" class="btn-link text-secondary">
                                        <i class="far fa-fw fa-file-code"></i>
                                        <?php echo basename($r[3]) ?>
                                    </a>
                                    <form method="POST" action="../includes/dlt-files.php">
                                        <input type="hidden" name="fid" value="<?php echo $fid; ?>">
                                        <input type="hidden" name="pid" value="<?php echo $pid; ?>">
                                        <button type="submit" name="dlt-file" class="btn btn-danger btn-sm float-right">
                                            <i class="fas fa-trash">
                                            </i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                <?php
                $fileiterator++;
            } else {
                ?>
                    <div class="card card-danger text-center" style="width:300px;">
                        <div class="card-header">
                            <h3 class="card-title float-center">Oops! looks you dont have any files yet!</h3>
                        </div>
                        <div class="card-body"><a class="btn btn-danger btn-sm text-center" style="width:150px;" href="projectlist.php?id=<?php echo $pid ?>">
                                <i class="fas fa-upload">
                                </i>
                                Upload a file
                            </a></div>
                    </div>
                <?php
            }
                ?>

        </div>
        <div class="card-footer">
            <form class="form-horizontal" action="" method="POST">
                <button type="submit" name="zip" class="btn btn-warning btn-mb float-right" style="margin-right:10px;">
                    <i class="fas fa-download" style="margin-right:10px;">
                    </i>Create Zip</button>
            </form>
        </div>
    </div>
</div>

<?php
if (isset($_POST['zip'])) {
    $uid = $_SESSION['id'];

    $zip = new ZipArchive;
    $base_path = "C:\\Users\\DELL\\Desktop\\";
    $zip_name = $base_path . 'deployment-v1_' . $uid . '.zip';

    if ($zip->open($zip_name, ZipArchive::CREATE) === TRUE) {
        // Add files to the zip file
        foreach ($file_dir as $f) {
            $file_path = $f;
            $zip->addFile($file_path, basename($file_path));
        }

        // Add a file new.txt file to zip using the text specified
        $zip->addFromString('README.txt', 'This is the depployed version');

        // All files are added, so close the zip file.
        $zip->close();
        $zip_msg = "Zip created on Desktip.";
    }
}
