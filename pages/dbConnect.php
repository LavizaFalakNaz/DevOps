<?php  
// Connect with the database  
$db = new mysqli('us-cdbr-east-05.cleardb.net', 'bcc77e1841a73a', 'dd32e024', 'heroku_7fce67cb249adf3');  
  
// Display error if failed to connect  
if ($db->connect_errno) { 
    return 1; 
    printf("Connect failed: %s\n", $db->connect_error);  
    exit();  
}
 //return $db;