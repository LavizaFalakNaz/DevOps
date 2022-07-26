<?php
include "db-conn.php";
include "header.php";
error_reporting(1);
session_start();
$msg=null;
$error='d-none';
//PHP Code to register user
if(isset($_POST['register'])){
try {
    $auth = new \Delight\Auth\Auth($db);
    $userId = $auth->register($_POST['email'], $_POST['password'], $_POST['username'], function ($selector, $token,$throttling=false) {
        echo "<script>alert('Registration Successfull');window.location='login.php';</script>";  

    });

}
catch (\Delight\Auth\InvalidEmailException $e) {
    echo "<script>alert('Invalid Email address');window.location='register.php';</script>";  
}
catch (\Delight\Auth\InvalidPasswordException $e) {
    echo "<script>alert('Invalid Password');window.location='register.php';</script>";  
}
catch (\Delight\Auth\UserAlreadyExistsException $e) {
    echo "<script>alert('User already exists');window.location='register.php';</script>";  
}
catch (\Delight\Auth\TooManyRequestsException $e) {
    echo "<script>alert('Too many requests'');window.location='register.php';</script>";  
   
}
}
?>

<body>
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
    <div class="bg-light mt-5">
    <div class="container py-5">
        <div class="row my-5 w-75 mx-auto  bg-white cover shadow rounded"> 
            <div class="col-md-7 ">
            <h2 class="form-title text-center m-5 pt-4">Sign up</h2>
                <div class="signup-form">
              
                    <form method="POST"  class="container" id="register-form">
                    <div class="form-input">
                        <i class="icon fas fa-user mt-2"></i>
                    <input  type="text" name="username" class="input-txt " placeholder="Username" required>
                </div>
                <div class="form-input">
                    <i class="icon fas fa-envelope mt-2"></i>
                    <input  autocomplete="off" type="email" name="email" class="input-txt" placeholder="Your Email" required>
                </div>
                    <div class="form-input" id="show_hide_password">
                        <i class="icon fas fa-unlock mt-2"></i> 
                    <input  autocomplete="off" type="password" name="password" class="input-txt pwd" pattern=".{6,}" title="Password must contain 6 or more characters" placeholder="Password" required>
                    </div>
                <div class="form-input" id="show_hide_password">
                    <i class="icon fas fa-unlock-alt mt-2"></i>
                    <input  autocomplete="off" type="password" name="re_password" class="input-txt pwd"  pattern=".{6,}" placeholder="Retype Password" required>
                    </div>
                 <div class="form-input">
                    <input  type="checkbox" name="agree"  class="check_box " placeholder="Retype Password"> <span>I agree all statements in <a href="">Terms of service </a>  </span>  
                    </div>
                <div class="form-input  pb-4 pt-4">
                    <input  type="submit" name="register" class=" btn btn-outline-primary px-4" value="Register">
                    </div>
            </form>
            </div>
        </div>
            <div class="col-md-5 align-self-center">
                <img src="assets/img/signup-image.jpg" class="singup_img img-responsive" alt="sign up img">
               <p class="text-center mt-5"><a href="login.php">I am already member</a></p> 
            </div>
        </div>
        
    </div>
</div>
</body>
</html>
<script>
//Javascript for show/Hide Eye for Password 
$(".reveal").on('click',function() {
  var $pwd = $(".pwd");
  if ($pwd.attr('type') === 'password') {
      $pwd.attr('type', 'text');
      $('#show_hide_password i').addClass( "fa-eye-slash" );
       $('#show_hide_password i').removeClass( "fa-eye" );
  } else {
      $pwd.attr('type', 'password');
      $('#show_hide_password i').addClass( "fa-eye" );
       $('#show_hide_password i').removeClass( "fa-eye-slash" );
  }
});
</script>