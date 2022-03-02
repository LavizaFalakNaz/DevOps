<?php

class Main
{
  private $servername = "us-cdbr-east-05.cleardb.net";
  private $username = "bcc77e1841a73a";
  private $password = "dd32e024";
  private $database = "heroku_7fce67cb249adf3";
  public $dbcon;
  
  public $todo =  [
    'id'=> 1,
    'name' => 'ToDo',
    'class' => 'danger',
    'icon' => 'list'
  ]; 
  public $doing =  [
    'id'=> 2,
    'name' => 'Doing',
    'class' => 'warning',
    'icon' => 'cogs'
  ];
  public $done = [
    'id'=> 3,
    'name' => 'Done',
    'class' => 'success',
    'icon' => 'check'
  ];




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


  public function getUser($id)
  {
    $res = $this->dbcon->query("select * from registrations where id='$id'");
    $row = $res->fetch_array();
    return $row;
  }



  public function getProjectName($id)
  {
    if($id>0){
      $res = $this->dbcon->query("select * from projects where id='$id'");
      $row = $res->fetch_array();
      return $row["name"];
    }else{
return "Select Project";
    }
    
  }


  public function taskStatusUpdate($id, $status){
    $res = $this->dbcon->query("update task set `status`='$status' where id='$id'");
  }


public function taskCard($type, $data){

?>

<div class="info-box shadow">
              <span class="info-box-icon bg-<?php echo $type["class"] ?>"><i class="fas fa-<?php echo $type["icon"] ?>"></i></span>

              <div class="info-box-content">
                <span class="info-box-text"><b><?php echo ucwords($data["title"]); ?></b><br/>
                <?php echo ucwords($this->getUser($data["asg"])['name']); ?> 
              </span>
                <span class="info-box-number">
               
  <button class="btn btn-<?php echo $type["class"] ?> btn-xs dropdown-toggle" type="button" data-toggle="dropdown" aria-expanded="false">
  <?php echo $type["name"] ?>
  </button>
  <div class="dropdown-menu" style="">
  <a class="dropdown-item" href="?id=<?php echo $data["id"] ?>&pid=<?php echo $data["pid"] ?>&status=1">ToDo</a>
    <a class="dropdown-item" href="?id=<?php echo $data["id"] ?>&pid=<?php echo $data["pid"] ?>&status=2">Doing</a>
    <a class="dropdown-item" href="?id=<?php echo $data["id"] ?>&pid=<?php echo $data["pid"] ?>&status=3">Done</a>
  <div class="dropdown-divider"></div>
  <a class="dropdown-item" href="task.php?pid=<?php echo $data["pid"] ?>">Add New</a>
  <a class="dropdown-item" href="task.php?id=<?php echo $data["id"] ?>&act=edit">Edit</a>

  
</div>

             
                </span>
                
              </div>

              
            </div>

<?php


}




}
