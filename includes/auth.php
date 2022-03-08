<?php
session_start();
include "../includes/main.class.php";
$asfun = new Main();
$asfun->auth();

$st = ['', 'ToDo', 'Doing', 'Done'];
?>

