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
            $get_files = "SELECT * FROM attachment_files WHERE pid = '$pid'";
            $file_results = mysqli_query($con, $get_files);
            ?>
            <?php if ($file_results->num_rows > 0) {
                while ($r = mysqli_fetch_row($file_results)) {
                    $fid = $r[0];
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
    </div>
</div>