<?php
include "db-conn.php";
include "send_mail.php";
session_start();

if(isset($_POST['login'])){
   $password=md5($_POST['password']);
    $sql=mysqli_query($conn,"SELECT * FROM `users` where email='$_POST[email]' and password='$password'");
    if(mysqli_num_rows($sql)>0){
        $data=mysqli_fetch_assoc($sql);
        $_SESSION['user']=$data;
        $_SESSION['alert']['type']='success';
        $_SESSION['alert']['msg']="You Logged in Successfully!";
        header('location:index.php');
    }
    else{
        $_SESSION['alert']['type']='error';
        $_SESSION['alert']['msg']="Email or Password is not matched!";
        header('location:login.php');
    }
}
// Regsiter Complailnt
if(isset($_POST['register-com'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];
    $tracking_id=uniqid();
       $insert =mysqli_query($conn,"INSERT INTO `complaints` (`name`, `email`, `subject`, `message`, `tracking_id`)
       VALUES ('$name','$email','$subject','$message','$tracking_id')");
       if($insert){
       $_SESSION['alert']['type']='success';
       $_SESSION['alert']['msg']="Complain Registered successfully! <br> Check your mail box for tracking id";

        $body='<div style="background-color:#edf2f7; color:#3d4852;padding:5% 10%; font-family: Roboto, Helvetica, Arial, sans-serif">
        <a href="" style="text-style:none;"><h1 style="text-align:center">Complain Management System</h1></a>
        <div style="background-color:white;padding:2% 5%;border:1px solid gray">
        <h2>Hello '.$name.'!</h2>
        <h2>Thank you for registing your complaint!</h2>
        <p style="font-size:18px">We appreciate you for letting us your issue.Our team will check and make sure your complaint will be solved. Here is your Complaint ID: '.$tracking_id.' <a href="http://localhost/CCMS/track-complaint.php">Track Complaint<a/>. Thanks  Have a great day!.</p><br><hr>
        <p style="font-size:18px">Regards,<br>
        CCMS</p>
        </div>';
       send_mail($email,"Complaint Registration",$body);
       header('location:index.php');
        }
}
// Customer Complain Status Update
if(isset($_GET['cstatus'])){
    $status=$_POST['status'];
    $cid=$_POST['cid'];
    $update =mysqli_query($conn,"UPDATE `complaints` SET `status`='$status' WHERE `id`=$cid");
    $_SESSION['alert']['type']='success';
    $_SESSION['alert']['msg']="Complain Status is Updated!";
   if($update){
    header('Location:track-complaint.php');
   }
}


// Add Remarks
if(isset($_POST['admin_remarks'])){
    $admin_remarks=$_POST['admin_remarks'];
    $cid=$_POST['cid'];
    $update =mysqli_query($conn,"UPDATE `complaints` SET `admin_remarks`='$admin_remarks' WHERE `id`=$cid");
    $_SESSION['alert']['type']='success';
    $_SESSION['alert']['msg']="Your Remarks is Added!";
   if($update){
    header('Location:complaints.php');
   }

}
// Add Remarks
if(isset($_POST['up_status'])){
      $status=$_POST['status'];
      $cid=$_POST['cid'];
      $update =mysqli_query($conn,"UPDATE `complaints` SET `status`='$status' WHERE `id`=$cid");
      $_SESSION['alert']['type']='success';
      $_SESSION['alert']['msg']="Complaint Status is Updated!";
     if($update){
      header('Location:complaints.php');
     }
  
  }

  // Update Profil
if(isset($_POST['up_profile'])){
    $uid=$_SESSION['user']['id'];
    $email=$_POST['email'];
    $name=$_POST['name'];
    
    $update =mysqli_query($conn,"UPDATE `users` SET `name`='$name',`email`='$email' WHERE `id`=$uid");
    $_SESSION['alert']['type']='success';
    $_SESSION['alert']['msg']="Profile is Updated!";
   if($update){
    header('Location:complaints.php');
   }

}

// Change Password 
if(isset($_POST['change_pass'])){
     $uid=$_SESSION['user']['id'];
    $old_pass=md5($_POST['old_pass']);
    $new_pass=md5($_POST['new_pass']);
    $get_user=mysqli_query($conn,"SELECT 1 FROM `users` where password='$old_pass' and id='$uid'");
    if(mysqli_num_rows($get_user)<1){
        $_SESSION['alert']['type']='error';
        $_SESSION['alert']['msg']="Old Password is not matched!";
        header('Location:change-password.php');
    }
    else if($_POST['new_pass']!=$_POST['confirm_pass']){
        $_SESSION['alert']['type']='error';
        $_SESSION['alert']['msg']="Old Password is not matched with confirm password!";
        header('Location:change-password.php');
    }
    else{
        $update =mysqli_query($conn,"UPDATE `users` SET `password`='$new_pass' WHERE `id`='$uid'");
        if($update){
            $_SESSION['alert']['type']='success';
            $_SESSION['alert']['msg']="Password is changed!";
            header('Location:change-password.php');
        }
       
    }
}

?>