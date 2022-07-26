
 <?php
 include "db-conn.php";
  include "header.php";
  $active='profile';
  include "sidebar.php";
    $sql=mysqli_query($conn,"SELECT * from complaints ORDER BY id Desc LIMIT 3");
    $compliants=mysqli_fetch_all($sql,MYSQLI_ASSOC);
 ?>

                <div class="col-md-8 p-2 mx-3 border bg-light">
                    <h4>Welcome, Admin</h4> <hr>
                    <div class="box p-3">
                        <h6>Update Profile</h6>
                        <form action="functions.php" method="post">
                            <label for="">Your Name</label>
                            <input type="text" class="form-control mb-3" name="name" id="" value="<?=$_SESSION['user']['name']?>" placeholder="Old Password" required>
                            <label for="">Your Email</label>
                            <input type="text" class="form-control mb-3" name="email" id="" value="<?=$_SESSION['user']['email']?>" placeholder="New Password" required>
                            
                            <input type="submit"class="btn btn-warning mb-3" name="up_profile" id="" value="Update Profile">
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