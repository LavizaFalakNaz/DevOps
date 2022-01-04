<?php
    $servername = "us-cdbr-east-05.cleardb.net";
    $username = "bcc77e1841a73a";
    $password = "dd32e024";
    $database = "heroku_7fce67cb249adf3";

    /*
     * fetch CONFIG VAR VALUES from heroku server and get the config values
     * url obtained is:
     * mysql://bcc77e1841a73a:dd32e024@us-cdbr-east-05.cleardb.net/heroku_7fce67cb249adf3?reconnect=true
     * Everything:
     * * after the @ symbol until the / is the DB_HOST, us-cdbr-east-05.cleardb.net 
     * * Everything after / until ? is DB_DATABASE, heroku_7fce67cb249adf3
     * * The string after the // until : is the DB_USERNAME, bcc77e1841a73a
     * * The string between : and @ is the DB_PASSWORD, dd32e024
     */

    // Create connection
    $con = new mysqli($servername, $username, $password, $database);

    // Check connection
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
    }
