<?php
// (A) LOGIN FORM SENDS TO THIS SCRIPT
$_POST = [
  "username" => "john@doe.com",
  //"email" => "jane@doe.com",
  "password" => "123456"
];

// (B) FETCH USER FROM DATABASE & VERIFY THE PASSWORD
require "core.php";
$user = $DB->fetch(
  "SELECT * FROM `users` JOIN `roles` USING (`role_id`) WHERE `user_username`=?",
  [$_POST["email"]]
);
$pass = is_array($user);
if ($pass) { $pass = $user["user_password"] == $_POST["password"]; }
if (!$pass) { exit("Invalid user/password"); }

// (C) IF VERIFIED - REGISTER USER INTO SESSION
$_SESSION["user"] = $user;
$_SESSION["user"]["permissions"] = [];
unset($_SESSION["user"]["user_password"]);
 
// (D) REGISTER PERMISSIONS
$perm = $DB->fetchAll(
  "SELECT * FROM `roles_permissions` WHERE `role_id`=?",
  [$user["role_id"]]
);
foreach ($perm as $p) { $_SESSION["user"]["permissions"][] = $p["perm_id"]; }
 
// (E) DONE!
print_r($_SESSION);