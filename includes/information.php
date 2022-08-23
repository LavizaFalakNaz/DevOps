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