<?php
    require "../config/config.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sign up Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../frontend/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../frontend/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../frontend/index2.html"><b>Devicks</b> &copy;</a>
  </div>
<?php
    if(isset($_POST['submit']) && $password === $cpassword){

        //done like this to avoid SQL injection
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
        $cpassword = mysqli_real_escape_string($con, $_POST['cpassword']);

        // encryption of password using hash
        $pass = password_hash($password, PASSWORD_BCRYPT);
        $cpass = password_hash($cpassword, PASSWORD_BCRYPT);

        //verify email
        $emailquery = "select * from registrations where email = '$email'";
        $query = mysqli_query($con, $emailquery);
        $emailcount = mysqli_num_rows($query);
        if($emailcount>0){
            //email account exists
            ?>
                        <script>
                            alert('Account with this email exists');
                        </script>
                    <?php
        }
        //email doesnt clash with an existing account
        else{
                $insertquery = "insert into registrations (name, email, password, cpassword) values('$name', '$email', '$pass', '$cpass')";
                $iquery = mysqli_query($con, $iquery);
                if($iquery){
                    ?>
                        <script>
                            alert('Account Added');
                        </script>
                    <?php
                }
                else{
                    ?>
                        <script>
                            alert('An Error occured');
                        </script>
                    <?php
                }
        }
    }
    else{
        //passwords doesnt match
        ?>
        <script>
            alert('Password does not match');
        </script>
    <?php
    }
?>
  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="home.php" method="POST">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Full name" name="name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Retype password" name="cpassword" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="agreeTerms" name="terms" value="agree" name="check" required>
              <label for="agreeTerms">
               I agree to the <a href="#">terms</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <div class="social-auth-links text-center">
        <p>- OR -</p>
        <a href="#" class="btn btn-block btn-primary">
          <i class="fab fa-facebook mr-2"></i>
          Sign up using Facebook
        </a>
        <a href="#" class="btn btn-block btn-danger">
          <i class="fab fa-google-plus mr-2"></i>
          Sign up using Google+
        </a>
      </div>
      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="../frontend/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../frontend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../frontend/dist/js/adminlte.min.js"></script>
</body>
</html>
