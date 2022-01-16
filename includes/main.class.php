<?php

class Main
{
  private $servername = "us-cdbr-east-05.cleardb.net";
  private $username = "bcc77e1841a73a";
  private $password = "dd32e024";
  private $database = "heroku_7fce67cb249adf3";
  public $dbcon;
  public function __construct()
  {
    $this->dbcon = new mysqli($this->servername, $this->username, $this->password, $this->database);
  }
  public function auth()
  {
    if (!(isset($_SESSION['email']) && isset($_SESSION['id']))) {
      header("Location: login.php?error=Please login to your account first.");
    }
  }
  public function getUsername($email)
  {
    $res = $this->dbcon->query("select * from registrations where email='$email'");
    $row = $res->fetch_array();
    return $row["name"];
  }
  public function getProjectName($id)
  {
    $res = $this->dbcon->query("select * from projects where id='$id'");
    $row = $res->fetch_array();
    return $row["name"];
  }
}
