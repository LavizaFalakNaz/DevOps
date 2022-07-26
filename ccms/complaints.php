
 <?php
 include "db-conn.php";
  include "header.php";
  $active='complaints';
  include "sidebar.php";
    $sql=mysqli_query($conn,"SELECT * from complaints ORDER BY id Desc LIMIT 3");
    $compliants=mysqli_fetch_all($sql,MYSQLI_ASSOC);
 ?>
 
                <div class="col-md-8 p-2 mx-3 border bg-light" style="height:600px; overflow:auto">
                    <h4>Complaints</h4> <hr>
                    <div class="table-responsive">
                    <table class="table bg-white border">
                       <tr>
                           <th>Tracking ID</th>
                           <th>Complaint</th>
                           <th>Submit By</th>
                           <th>Your Remarks</th>
                           <th>Status</th>
                           <th>Complaint at</th>
                       </tr>
                       <?php if(isset($compliants))
                       foreach($compliants as $data)
                       { {?>
                       <tr>
                           <td><?=$data['tracking_id']?></td>
                           <td>Subject: <?=$data['subject']?> <br> <?=$data['message']?></td>
                           <td><?=$data['name']?> <br> (<?=$data['email']?>)</td>
                           <td><?=$data['admin_remarks']?>
                            <a type="button" href="#"onclick="GetCom(<?=$data['id']?>,'<?=$data['admin_remarks']?>')"  data-bs-toggle="modal" data-bs-target="#remarksModal">Add Remarks</a></td>
                           <td><?=$data['status']?> <br>
                           <a type="button" href="#" onclick="GetStatus(<?=$data['id']?>,'<?=$data['status']?>')"   data-bs-toggle="modal" data-bs-target="#statusModal">Change Status</a></td>
                           <td><?=date('d M, Y',strtotime($data['created_at']))?></td>
                           
                       </tr>
                      <?php } } else{ echo "<tr><td><h6 class='text-danger'>No Complaint Found</h6></td></tr>";}?>
                   </table>
                   </div>
                </div>
            </div>
        </div>
     
  <!--Remarks Modal -->
<div class="modal fade" id="remarksModal" tabindex="-1" aria-labelledby="remarksModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="remarksModalLabel">Add Your Remarks</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="functions.php" method="post">
          <label for="">Add Your Remarks</label>
          <input type="hidden" name="cid" id="cid">
        <input type="text" name="admin_remarks" class="form-control" id="admin_remarks" required placeholder="Add Your remarks">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="remarks" class="btn btn-primary">Save changes</button></form>
      </div>
    </div>
  </div>
</div>
  <!--Status Modal -->
  <div class="modal fade" id="statusModal" tabindex="-1" aria-labelledby="statusModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="statusModalLabel">Update Complaint Status</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <form action="functions.php" method="post">
          <label for="">Update Status</label>
          <input type="hidden" name="cid" id="cid2">
        <select name="status" id="status" class="form-control">
          <option value="open">Open</option>
          <option value="pocessing">Pocessing</option>
          <option value="solved">Solved</option>
          <option value="closed">Closed</option>
        </select>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" name="up_status" class="btn btn-primary">Save changes</button></form>
      </div>
    </div>
  </div>
</div>

<script>
    function GetCom(cid,remarks){
      document.getElementById('cid').value=cid;
      document.getElementById('admin_remarks').value=remarks;
    }
    function GetStatus(cid,status){
      document.getElementById('cid2').value=cid;
      document.getElementById('status').value=status;
    }
</script>
  <?php include "footer.php"?>