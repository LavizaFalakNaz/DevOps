<?php
include "../config/config.php";
session_start();

if (isset($_GET['file'])){
    echo basename($file);
}