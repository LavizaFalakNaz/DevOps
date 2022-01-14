<?php
    include "../includes/auth.php";
    $pageInfo = [
        'title' => 'Tasks'
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
    include_once "../layout/navbar.php";
    include_once "../layout/sidebar.php";
    
    $rec["id"] = null;
    $rec["pid"] = "";
    $rec["title"] = "";
    $rec["sdate"] = "";
    $rec["edate"] = "";
    $rec["uid"] = $_SESSION["id"];
    $ftitle = "Create Task";
    $msg = "";
    
    if(isset($_GET["id"]) && isset($_GET["act"])){
        $id=$_GET["id"];
        $act=$_GET["act"];

        if($act=="edit"){
            $res=$asfun->dbcon->query("select * from task where id='$id'"); 
            $rec =$res->fetch_array();
            $ftitle = "Edit Task";
            
        }elseif($act=="delete"){
     }
    }


    if(isset($_POST["title"])){
        $title = $_POST["title"];
        $pid = $_POST["pid"];
        $edate = $_POST["edate"];
        $sdate = $_POST["sdate"];
        $uid = $_POST["uid"];
        $id = $_POST["id"];
        

if($id>0){
    $asfun->dbcon->query("update task set `title`='$title', `sdate`='$sdate', `edate`='$edate', `pid`='$pid' where id='$id'");
    $msg = "Task has been updated!"; 
}else{
    $asfun->dbcon->query("insert into task(`uid`, `title`, `pid`, `sdate`, `edate`) values('$uid', '$title', '$pid', '$sdate', '$edate')") or die("Error"); 
    $msg = "Task has been created!";
}

        
        
        
    }


?>



<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $pageInfo["title"]; ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-4">
          


          
            <div class="card">
          <form method="post">
              <input type="hidden" name="id" value="<?php echo $rec["id"] ?>" > 
              <input type="hidden" name="uid" value="<?php echo $rec["uid"] ?>" > 
                  
            <div class="card-header">
                    <h5 class="m-0"><?php echo $ftitle; ?></h5></div>
                    <div class="card-body">
                    
                    <div class="form-group"><label>Project</label>
                        <select class="form-control"   name="pid" id="pid" required>
                            <option value="">Select Project</option>
                        <?php
        $uid = $_SESSION["id"];
        $q = $asfun->dbcon->query("select * from projects where uid='$uid'");
        while($row=mysqli_fetch_assoc($q)){
            ?>
            <option value="<?php echo $row["id"] ?>"><?php echo ucwords($row["name"]) ?></option>
            <?php
        }
        ?>

                    </select>

                        </div>
                    

                    
                    <div class="form-group"><label>Title</label>
                        <input class="form-control" type="text" placeholder="Enter Title" value="<?php echo $rec["title"] ?>" name="title" required></div>
                        
                   
                        
                        <div class="form-group"><label>Start Date</label>
                        <input class="form-control" type="date"  value="<?php echo $rec["sdate"] ?>" name="sdate" required></div>

                   
                        <div class="form-group"><label>End Date</label>
                        <input class="form-control" type="date"  value="<?php echo $rec["edate"] ?>" name="edate" required></div>
                        
                        
                </div>
                
                <div class="card-footer">
                        <div class="row">
                            <div class="col-sm-4">
                                <button type="submit" class="btn btn-primary">Submit</button></div>
                                <div class="col-sm-8"><!--v-if-->
                                <?php echo $msg; ?>
                            </div></div></div>
                        </div>


           
                        </form>


       
          <!-- /.col-md-6 -->
        </div>


        <div class="col-lg-8">
          

          <div class="card">
             
          <div class="card-header">
                  <h5 class="m-0">Task Record</h5></div>

                  <div class="card-body">
            <table class="table">
            <thead>    
            <tr>
                    <th>Title</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Options</th>
                    
                 </tr>
                </thead>

    <tbody>
        <?php
        $uid = $_SESSION["id"];
        $q = $asfun->dbcon->query("select * from task where uid='$uid'");
        while($row=mysqli_fetch_assoc($q)){
               ?>
               <tr>
                   <td><?php echo $row["title"]; ?> | <b><?php echo ucwords($asfun->getProjectName($row["pid"])); ?></b></td>
                   <td><?php echo $row["sdate"]; ?></td>
                   <td><?php echo $row["edate"]; ?></td>
                   
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

</div></div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>




</div>

<?php
    include_once "../layout/footer.php";
?>


<script>

    $("#pid").val(<?php echo $rec["pid"] ?>);
</script>

</body>
</html>