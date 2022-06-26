<?php
$file = $_GET["file"];
$myfile = fopen($file, "r") or die("Unable to open file!");
$s= fread($myfile,filesize($file));
?>
<textarea style="width:100%; height:100%"><?php echo $s; ?></textarea>