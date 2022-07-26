<?php

$conn = mysqli_connect("us-cdbr-east-05.cleardb.net","bcc77e1841a73a","dd32e024","heroku_7fce67cb249adf3");

if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
} 


?>