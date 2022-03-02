<?php
    include "../includes/auth.php";
    $pageInfo = [
        'title' => 'Projects'
    ];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <?php
    include_once "../layout/head.php";
    ?>
</head>
<body class="sidebar-mini layout-fixed" style="height:auto">
<div class="wrapper">


<?php
      $rec["id"] = null;
      $rec["name"] = "";
      $rec["desc"] = "";
      $rec["uid"] = $_SESSION["id"];
      $ftitle = "Create Project";
      $msg = "";
      if (isset($_GET["id"]) && isset($_GET["act"])) {
        $id = $_GET["id"];
        $act = $_GET["act"];
        if ($act == "edit") {
          $res = $asfun->dbcon->query("select * from projects where id='$id'");
          $rec = $res->fetch_array();
          $ftitle = "Edit Project";
        } elseif ($act == "delete") {
          //for delete code
        }
      }
      if (isset($_POST["name"])) {
        $name = $_POST["name"];
        $desc = $_POST["desc"];
        $id = $_POST["id"];
        $uid = $_POST["uid"];

        if ($id > 0) {
          $asfun->dbcon->query("update projects set `name`='$name', `desc`='$desc' where id='$id'");
          $msg = "Project has been updated!";
        } else {
          $asfun->dbcon->query("insert into projects(`uid`, `name`, `desc`) values('$uid', '$name', '$desc')") or die("Error");
          $msg = "Project has been created!";
        }
      }
      ?>

<?php
    include_once "../layout/navbar.php";
    include_once "../layout/sidebar.php";
    ?>


<div class="content-wrapper">


   <!-- Content Header (Page header) -->
   <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0"><?php echo $pageInfo["title"] ?></h1>
              </div><!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                </ol>
              </div><!-- /.col -->
            </div><!-- /.row -->
          </div><!-- /.container-fluid -->
        </div>
        <!-- /.content-header -->


        <div class="content">
          <div class="container-fluid">
            <div class="row">
              
            <div class="col-lg-4">
                <div class="card">
                  <form method="post">
                    <input type="hidden" name="id" value="<?php echo $rec["id"] ?>">
                    <input type="hidden" name="uid" value="<?php echo $rec["uid"] ?>">
                    <div class="card-header">
                      <h5 class="m-0"><?php echo $ftitle; ?></h5>
                    </div>
                    <div class="card-body">
                      <div class="form-group"><label>Name</label>
                        <input class="form-control" type="text" placeholder="Enter Name" value="<?php echo $rec["name"] ?>" name="name" required>
                      </div>
                      <div class="form-group"><label>Description</label>
                        <textarea class="form-control" placeholder="Enter Description" name="desc"><?php echo $rec["desc"] ?></textarea>
                      </div>
                    </div>
                    <div class="card-footer">
                      <div class="row">
                        <div class="col-sm-4">
                          <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                        <div class="col-sm-8">
                          <!--v-if-->
                          <?php echo $msg; ?>
                        </div>
                      </div>
                    </div>
                </div>
                </form>
                <!-- /.col-md-6 -->
              </div>
         


              <div class="col-lg-8">
                <div class="card">
                  <div class="card-header">
                    <h5 class="m-0">Project Record</h5>
                  </div>
                  <div class="card-body">
            <table class="table">
            <thead>    
            <tr>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Options</th>
                 </tr>
                </thead>

    <tbody>
        <?php
        $uid = $_SESSION["id"];
        $q = $asfun->dbcon->query("select * from projects where uid='$uid'");
        while($row=mysqli_fetch_assoc($q)){
               ?>
               <tr>
                   <td><a href="sprints.php?pid=<?php echo $row["id"] ?>"><b><?php echo ucwords($row["name"]); ?></b></a></td>
                   <td><?php echo $row["desc"]; ?></td>
                   <td>
                   <a href="?act=edit&id=<?php echo $row["id"] ?>" class="link">Edit</a> |
                   <a href="?act=delete&id=<?php echo $row["id"] ?>" class="link">Delete</a>
                       
                </td>
                   
               </tr>
               <?php 
        }
        ?>
    </tbody>


            </table>

                    <table class="table">
                      <thead>
                        <tr>
                          <th>Name</th>
                          <th>Description</th>
                          <th>Options</th>
                        </tr>
                      </thead>

                      <tbody>
                        <?php
                        $uid = $_SESSION["id"];
                        $q = $asfun->dbcon->query("select * from projects where uid='$uid'");
                        while ($row = mysqli_fetch_assoc($q)) {
                        ?>
                          <tr>
                            <td><b><?php echo ucwords($row["name"]); ?></b></td>
                            <td><?php echo $row["desc"]; ?></td>
                            <td>
                              <a href="?act=edit&id=<?php echo $row["id"] ?>" class="link">Edit</a> |
                              <a href="?act=delete&id=<?php echo $row["id"] ?>" class="link">Delete</a>

                            </td>

                          </tr>
                        <?php
                        }
                        ?>
                      </tbody>
                    </table>

                  </div>
                </div>
              </div>
            




         
         
          </div>
  </div>
</div>





</div>



<?php
    include_once "../layout/footer.php";

?>
    </div>


    </body>
    </html>