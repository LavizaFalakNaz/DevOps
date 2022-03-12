<?php

include "../includes/main.class.php";
$asfun = new Main();

$tid = $_POST["tid"];
$pid = $_POST["pid"];





$target_dir = "../resources/files/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

/*
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}

*/
if (file_exists($target_file)) {
  $msg= "Sorry, file already exists.";
  $uploadOk = 0;
}


/*
// Check file size
if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

*/


// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  
  ?>
  <script>
      alert("<?php echo $msg; ?>");
  </script>
  <?php
    //echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {

    $asfun->dbcon->query("insert into attachment_files(`tid`, `pid`, `file_path_address`) 
values('$tid', '$pid', '$target_file')") or die("Error");

    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    ?>
    <script>
        alert("File has been uploaded!")
        window.open("taskdetail.php?tid=<?php echo $tid; ?>","_top")
    </script>
    <?php

  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>