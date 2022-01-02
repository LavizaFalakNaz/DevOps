<?php
require "user-core.php";
echo $USR->verify($_GET["i"], $_GET["h"])
  ? "Thank you! Account has been activated."
  : $USR->error ;
?>