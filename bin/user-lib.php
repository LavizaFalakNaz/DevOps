<?php
class Users {
  // (A) CONSTRUCTOR - CONNECT TO DATABASE
  private $pdo = null;
  private $stmt = null;
  public $error = null;
  function __construct () {
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  // (B) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct () {
    if ($this->stmt !== null) { $this->stmt = null; }
    if ($this->pdo !== null) { $this->pdo = null; }
  }

  // (C) GET USER BY ID OR EMAIL
  function get ($id) {
    $sql = sprintf("SELECT * FROM `users` WHERE `user_%s`=?",
      is_numeric($id) ? "id" : "email"
    );
    $this->stmt = $this->pdo->prepare($sql);
    $this->stmt->execute([$id]);
    return $this->stmt->fetch();
  }

  // (D) VERIFY EMAIL PASSWORD - SESSION MUST BE STARTED!
  function login ($email, $password) {
    // (D1) ALREADY SIGNED IN
    if (isset($_SESSION["user"])) { return true; }
    
    // (D2) GET USER
    $user = $this->get($email);
    if (!is_array($user)) { return false; }

    // (D3) VERIFY PASSWORD + REGISTER SESSION
    if (password_verify($password, $user["user_password"])) {
      $_SESSION["user"] = [];
      foreach ($user as $k=>$v) {
        if ($k!="user_password") { $_SESSION["user"][$k] = $v; }
      }
      return true;
    }
    return false;
  }
  
  // (E) SAVE USER
  function save ($name, $email, $pass, $id=null) {
    if ($id===null) {
      $sql = "INSERT INTO `users` (`user_name`, `user_email`, `user_password`) VALUES (?,?,?)";
      $data = [$name, $email, password_hash($pass, PASSWORD_DEFAULT)];
    } else {
      $sql = "UPDATE `users` SET `user_name`=?, `user_email`=?, `user_password`=? WHERE `user_id`=?";
      $data = [$name, $email, password_hash($pass, PASSWORD_DEFAULT), $id];
    }
    try {
      $this->stmt = $this->pdo->prepare($sql);
      $this->stmt->execute($data);
      return true;
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
  }
}

// (F) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "us-cdbr-east-05.cleardb.net ");
define("DB_NAME", "heroku_7fce67cb249adf3");
define("DB_CHARSET", "utf8");
define("DB_USER", "bcc77e1841a73a");
define("DB_PASSWORD", "dd32e024");

// (G) CREATE USER OBJECT
$USR = new Users();

/*
    * (A & B) When $USR = new Users() is created, the constructor will connect to the database. The destructor closes the connection.
    * (C To E) There are only 3 user functions!
    * get() Self-explanatory. Get the user with the given email address or user ID.
    * login() Process login, do checks and stuff.
    * save() To add or update a user. For example, $USR->save("Jane Doe", "jane@doe.com", "123456");
    * (F & G) Database settings and the users object. Doh.
*/