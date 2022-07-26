
 <?php
 include "db-conn.php";
  include "header.php";
  if(isset($_GET['tracking_id'])){ echo $tracking_id=$_GET['tracking_id'];
      $sql=mysqli_query($conn,"SELECT * FROM complaints where tracking_id='$tracking_id' LIMIT 1");
      $data=mysqli_fetch_assoc($sql);
  }
 ?>
 <style>
 </style>
        <br> 
        <div class="container mt-5 pt-5" style="min-height:620px">
            <div class="row">
            <div class="card mb-4 p-0">
                <div class="card-header">
                    <i class="fas fa-file-alt me-1"></i>
                    Track Your Complaint
                </div>
                <div class="card-body bg-light">
                   <form action="" method="GET" >
                       <div class="row">
                           <div class="col-md-8">
                           <label for="">Enter Tracking ID:</label>
                            <input type="text" name="tracking_id" class="form-control" value="<?=(isset($_GET['tracking_id']))?$_GET['tracking_id']:''?>" required placeholder="Enter Tracking ID of Complaint" required> <br>
                           </div>
                           <div class="col-md-4"><br>
                            <button type="submit"  class="btn btn-primary form-control" >Track Complaint</button>
                           </div>
                       </div>
                   </form> <br> 
                   <table class="table bg-white border">
                       <tr>
                           <th>Tracking ID</th>
                           <th>Complaint</th>
                           <th>Remarks of Admin</th>
                           <th>Status</th>
                           <th>Complaint at</th>
                           <th>Solved?</th>
                       </tr>
                       <?php if(isset($data)){?>
                       <tr>
                           <td><?=$data['tracking_id']?></td>
                           <td>Subject: <?=$data['subject']?> <br> <?=$data['message']?></td>
                           <td><?=$data['admin_remarks']?></td>
                           <td><?=$data['status']?></td>
                           <td><?=date('d M, Y',strtotime($data['created_at']))?></td>
                           <?php if($data['status']!='solved'){?>
                           <td> <form action="functions.php?cstatus=1" method="post"> <input type="hidden" name="cid" value="<?=$data['id']?>">
                             <input type="checkbox" style="width:20px;height:20px" onchange="this.form.submit()" name="status" value="solved" <?=($data['status']=='solved')?'checked':'';?> id="">
                             </form></td> <b></b>
                            <?php } 
                             else{ echo '<td class="text-success"><b> Solved</b></td>';}?>
                       </tr>
                      <?php } else{ echo "<tr><td><h6 class='text-danger'>No Complaint Found</h6></td></tr>";}?>
                   </table>
                </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
     
        <?php include "footer.php"?>