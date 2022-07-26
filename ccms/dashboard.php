
 <?php
 include "db-conn.php";
  include "header.php";
  $active='dashboard';
  include "sidebar.php";
    $sql=mysqli_query($conn,"SELECT * from complaints ORDER BY id Desc LIMIT 3");
    $compliants=mysqli_fetch_all($sql,MYSQLI_ASSOC);
 ?>

                <div class="col-md-8 p-2 mx-3 border bg-light" style="min-height:600px">
                    <h4>Welcome, <?=$_SESSION['user']['name']?></h4> <hr>
                    <div class="box p-3">
                        <h6>Latest Complaints</h6>
                        <ul>
                            <?php foreach($compliants as $compliant){?>
                            <li class="bg-white border p-3"> <b>#<?=$compliant['tracking_id']?></b> <br>
                                Subject: <?=$compliant['subject']?> <br>
                               <?=$compliant['message']?><br>
                                By: <?=$compliant['name']?> ( <?=$compliant['email']?>)
                            </li> <?php }?>
                        </ul>
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