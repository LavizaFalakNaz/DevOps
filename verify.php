<!DOCTYPE html>
<html>

<head>
    <title>Verification Page</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
</head>

<body>

    <?php
    if (isset($_GET['vkey'])) {
        //process verification 
        $vkey = $_GET['vkey'];

        $servername = "us-cdbr-east-05.cleardb.net";
        $username = "bcc77e1841a73a";
        $password = "dd32e024";
        $database = "heroku_7fce67cb249adf3";

        $mysqli = new MySQLi($servername, $username, $password, $database);

        $resultSet = $mysqli->query("SELECT status, token FROM registrations WHERE status = 0 AND token='$vkey' LIMIT 1");
        if ($resultSet->num_rows == 1) {
            //validate email
            $update = $mysqli->query("UPDATE registrations SET status = 1 WHERE token = '$vkey' LIMIT 1");
            if ($update) {
    ?>
                <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
                    <div class="card" style="width: 18rem;">
                        <div class="card-body text-center">
                            <p>Success</p>
                            <h5 class="card-title">Account verified!</h5>
                            <a href="pages/login.php" class="btn btn-dark">Login now!</a>
                        </div>
                    </div>
                </div>
            <?php
            } else {
                echo $mysqli->error;
            }
        } else {
            ?>
            <div class="container d-flex justify-content-center align-items-center" style="min-height:100vh">
                <div class="card" style="width: 18rem;">
                    <div class="card-body text-center">
                        <p>Caution!</p>
                        <h5 class="card-title">Account Active Already!</h5>
                        <a href="pages/login.php" class="btn btn-dark">Login now!</a>
                    </div>
                </div>
            </div>
    <?php
        }
    } else {
        echo "something went wong!";
    }
    ?>

</body>

</html>