
 <?php
 include "db-conn.php";
  include "header.php";
  $active='change-pass';
  include "sidebar.php";
    $sql=mysqli_query($conn,"SELECT * from complaints ORDER BY id Desc LIMIT 3");
    $compliants=mysqli_fetch_all($sql,MYSQLI_ASSOC);
 ?>

                <div class="col-md-8 p-2 mx-3 border bg-light">
                    <h4>Welcome, Admin</h4> <hr>
                    <div class="box p-3">
                        <h6>Change Your Password</h6>
                        <form action="functions.php" method="post">
                            <label for="">Old Password</label>
                            <input type="password" class="form-control mb-3" name="old_pass" id="" placeholder="Old Password" required>
                            <label for="">New Password</label>
                            <input type="password" class="form-control mb-3" name="new_pass" id="" placeholder="New Password" required>
                            <label for="">Confirm New Password</label>
                            <input type="password" class="form-control mb-3" name="confirm_pass" id="" placeholder="Confirm Password" required>
                            <input type="submit" name="change_pass" class="btn btn-warning mb-3" name="confirm_pass" id="" value="Update Password">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
     <script>
         function Gettab(){

         }
     </script>
        <?php include "footer.php"?>