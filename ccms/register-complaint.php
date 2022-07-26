
 <?php
 include "db-conn.php";
  include "header.php";
 
 ?>
 <style>
 </style>
        <br> 
        <div class="container mt-5 pt-5" style="min-height:620px">
            <div class="row">
            <div class="card mb-4 p-0">
                <div class="card-header">
                    <i class="fas fa-file-alt me-1"></i>
                    Register Your Complaint
                </div>
                <div class="card-body bg-light">
                   <form action="functions.php" method="post" enctype="multipart/form-data">
                       <div class="row">
                           <div class="col-md-6">
                           <label for="">Your Name:</label>
                            <input type="text" name="name" class="form-control" required placeholder="Enter Your Name" required> <br>
                           </div>
                           <div class="col-md-6">
                           <label for="">Your Email:</label>
                            <input type="email" name="email" class="form-control" required placeholder="Enter Your Email" required> <br>
                           </div>
                           <div class="col-md-12">
                           <label for="">Select Subject:</label>
                           <select name="subject" id="" class="form-control" required>
                               <option value="">Select Subject</option>
                               <option value="subject 1">Subject 1</option>
                               <option value="subject 2">Subject 2</option>
                               <option value="subject 3">Subject 3</option>
                           </select>
                           </div> 
                           <div class="col-md-12"><br>
                           <label for="">Message:</label>
                           <textarea id="" cols="30" name="message" class="form-control" rows="3" required placeholder="Write Your Issue in Detail..."></textarea> <br>
                           </div>
                           <div class="col-md-12"><br>
                            <input type="submit"  name="register-com" value="Register Complaint" class="btn btn-primary form-control" > 
                           </div>
                       </div>
                      
                   </form>
                </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

        <?php include "footer.php"?>