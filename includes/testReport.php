<!--SECTION 5 TEST REPORTS-->
<div class="collapse show" id="Sec5">
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Testing Logs</h3>
            <a class="btn btn-secondary btn-sm float-right" data-toggle="collapse" href="#Sec5" role="button" aria-expanded="true" aria-controls="Sec5">
                <i class="fas fa-times">
                </i>
            </a>
        </div>
        <div class="card-body">
            <?php

            $query = "SELECT * FROM attachment_files where pid = '$pid'";
            $result = mysqli_query($con, $query);
            if (!empty($result)) {
                while ($array = mysqli_fetch_row($result)) {
                    $fid = $array[0];
                    $que1 = "SELECT * FROM test_cases where file_id = '$fid'";
                    $res1 = mysqli_query($con, $que1);
                    if (!empty($res1)) {
            ?>
                        <div class="card-header">
                            <h3 class='card-title'>
                                <?php echo "File: " . basename($array[3]); ?>
                            </h3>
                        </div><?php
                                while ($cases = mysqli_fetch_row($res1)) {
                                ?>
                            <div class="row">
                                <div class="col-sm-3">
                                    <?php echo $cases[1]; ?>
                                </div>
                                <div class="col">
                                    <?php echo $cases[2]; ?>
                                </div>
                                <div class="col-sm-2">
                                    <?php

                                    if($cases[5] == '-'){
                                        
                                    }

                                    ?>
                                </div>
                            </div>
                    <?php
                                }
                            }
                    ?>

                <?php }
            } else {
                ?>
                no loop
            <?php
            }
            ?>
        </div>
        <div class="card-footer"></div>
    </div>
</div>