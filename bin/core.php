<?php
// (A) DATABASE CLASS
class DB {
  // (A1) CONSTRUCTOR - CONNECT TO THE DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error;
  function __construct () {
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER, DB_PASSWORD, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
      ]);
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }
 
  // (A2) DESTRUCTOR - CLOSE DATABSE CONNECTION
  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }
 
  // (A3) EXECUTE SQL QUERY
  function exec ($sql, $data=null) {
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($data);
      return true;
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
  }
 
  // (A4) FETCH (SINGLE ROW)
  function fetch ($sql, $data=null) {
    if ($this->exec($sql, $data) === false) { return false; }
    return $this->stmt->fetch();
  }
 
  // (A5) FETCH ALL (MULTIPLE ROWS)
  function fetchAll ($sql, $data=null) {
    if ($this->exec($sql, $data) === false) { return false; }
    return $this->stmt->fetchAll();
  }
}
 
// (B) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "us-cdbr-east-05.cleardb.net ");
define("DB_NAME", "heroku_7fce67cb249adf3");
define("DB_CHARSET", "utf8");
define("DB_USER", "bcc77e1841a73a");
define("DB_PASSWORD", "dd32e024");
 
// (C) START!
$DB = new DB();
session_start();

/*
    * (A1 & A2) The constructor connects to the database when $DB = new DB() is created, the destructor closes the connection. 
    * (A3) exec() Runs an SQL query.
    * (A4) fetch() Runs a SELECT SQL query, returns a single row.
    * (A5) fetchAll() Runs a SELECT SQL query, returns multiple rows.
*/