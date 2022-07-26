<?php
include "db-conn.php";
include "header.php";
error_reporting(0);
session_start();
($_SESSION['user'])?  header("location:index.php"): '';


?>
 <style>
        .input-txt {
    width: 100%;
    display: inline;
    border: none;
    border-bottom: 1px solid #999;
    font-family: Poppins;
    padding: 6px 30px;
    outline: none;
    }
    .icon{position:absolute}
    .form-input{margin-top:2rem}
 </style>
<body class="bg-light mt-5">
    <div class="">
    <div class="container py-5">
        <div class="row bg-white cover w-75 mx-auto shadow my-5 pb-5 rounded"> 
          <!--Column 1.(Image) -->
            <div class="col-md-5 align-self-center">
                <img src="assets/img/signin-image.jpg" class="singup_img img-responsive mx-auto d-block " alt="sign up img"><br>
                <a href="register.php" class='ml-5 text-center'>Don't have an account?</a>
               
            </div>
                <!--Column 2.(Form) -->
            <div class="col-md-7">
                <h2 class="form-title text-center m-5 pt-4">Admin Sign in</h2>
                    <div class="signin-form">
                  
                 <form method="POST" action="functions.php" class="container" id="register-form">
                        
                    <div class="form-input">
                        <i class="icon fas fa-envelope mt-2"></i>
                        <input type="email" name="email" class="input-txt" placeholder="Your Email" required>
                    </div>
                        <div class="form-input " id="show_hide_password">
                            <i class="icon fas fa-unlock mt-2"></i> 
                      <input type="password" name="password" class="input-txt pwd" placeholder="Password" required>
                        </div>
                    <div class="form-input">
                        <input type="checkbox" name="agree"  class=" check_box " > &nbsp;
                        <span>Remember Me  </span>  
                        </div>
                  
                    <div class="form-input   pt-4">
                        <input type="submit"  name="login" class=" btn btn-outline-primary px-4" value="Login">
                        </div>
                      
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
<script src="js/scripts.js"></script>
</body>
