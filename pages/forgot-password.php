<?php
session_start();
include "../config/config.php";

if (!isset($_SESSION['email']) && !isset($_SESSION['id'])) {
  //we close php here so that whatever happens after it is in loop
  $titleText = "You forgot your password? Here you can easily retrieve a new password.";
  if (isset($_GET['error'])) {
    $titleText = $_GET['error'];
  } else if (isset($_GET['msg'])) {
    $titleText = $_GET['msg'];
  }
?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Devicks | Forgot Password</title>
    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../frontend/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="../frontend/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="../frontend/dist/css/adminlte.min.css">
  </head>

  <body class="hold-transition login-page">
    <div class="login-box">
      <div class="login-logo">
        <a href="../index.php"><b>Devicks </b>&copy;</a>
      </div>
      <!-- /.login-logo -->
      <div class="card">
        <div class="card-body login-card-body">
          <p class="login-box-msg"><?php echo $titleText; ?></p>
          <form action="../bin/password-recover-logic.php" method="post">
            <div class="input-group mb-3">
              <input type="email" class="form-control" placeholder="Email" name='email' required>
              <div class="input-group-append">
                <div class="input-group-text">
                  <span class="fas fa-envelope"></span>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <button type="submit" class="btn btn-primary btn-block" name="reset-password">Request new password</button>
              </div>
              <!-- /.col -->
            </div>
          </form>

          <p class="mt-3 mb-1">
            <a href="login.php">Login</a>
          </p>
          <p class="mb-0">
            <a href="signup.php" class="text-center">Register a new membership</a>
          </p>
        </div>
        <!-- /.login-card-body -->
      </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="../frontend/plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../frontend/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- AdminLTE App -->
    <script src="../frontend/dist/js/adminlte.min.js"></script>
  </body>

  </html>

<?php
} else {
  header("Location: home.php");
}
?>