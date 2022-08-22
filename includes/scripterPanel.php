<div class="col-lg-3">
    <div class="row">
        <div class="col">
            <div class="card card-warning">
                <div class="card-header" onclick="location.href='kanban.php?pid=<?php echo $pid; ?>';" style="cursor:pointer;">
                    <h3 class="card-title">Back to Project</h3>
                    <i class="fas fa-pencil-alt float-right">
                    </i>
                </div>
            </div>
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