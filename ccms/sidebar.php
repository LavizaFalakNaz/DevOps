
 <style>
     .link{text-decoration:none; color:#222;
   }
   .link.active{color:#1B8AF9}
    .menu > p{ border-bottom:1px solid lightgray; padding-bottom:1rem; text-align:left}

 </style>
        <br> 
        <div class="container mt-5 pt-5">
            <div class="row">
                <div class="col-md-3 bg-light border text-center">
                    <img src="assets/img/avataaars.svg" class="w-25 my-3 " alt="" srcset="">
                    <h6>Hi, <?=$_SESSION['user']['name']?></h6> <br>
                    <div class="menu">
                    <p><a href="dashboard.php" class="link <?=($active=='dashboard')?'active':''?>"><i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a></p>
                    <!-- <p><a href="dashboard.php" class="link <?=($active=='subjects')?'active':''?>"><i class="fas fa-bullseye"></i>&nbsp; Subjects</a></p>  -->
                    <p><a href="complaints.php" class="link <?=($active=='complaints')?'active':''?>"><i class="fas fa-file-alt"></i>&nbsp; Complaints</a></p>
                    <p><a href="profile.php" class="link <?=($active=='profile')?'active':''?>"><i class="fas fa-user"></i>&nbsp; Profile</a></p>
                    <p><a href="change-password.php" class="link <?=($active=='change-pass')?'active':''?>"><i class="fas fa-key"></i>&nbsp; Change Password</a></p>
                    <p><a href="logout.php" class="link"><i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a></p>
                    </div>
                </div>