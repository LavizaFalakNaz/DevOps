<?php
session_start();
include "../config/config.php";

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function get_goal_id($v)
{
    if ($v == 'SMTP Emails') {
        return 4;
    } else if ($v == 'Financials') {
        return 14;
    } else if ($v == 'CMS handling') {
        return 24;
    } else if ($v == 'AI algorithms') {
        return 34;
    } else if ($v == 'Hybrid Stack') {
        return 44;
    } else if ($v == 'Data Science') {
        return 54;
    } else if ($v == 'ERP Hosting') {
        return 64;
    } else if ($v == 'Heavy Traffic') {
        return 74;
    } else if ($v == 'Graphics') {
        return 84;
    } else if ($v == 'APIs') {
        return 94;
    } else {
        return 0;
    }
}

if (isset($_POST['submit-settings'])) {
    if (isset($_POST['stack']) && isset($_POST['version']) && isset($_POST['cloud']) && isset($_POST['ram']) && isset($_POST['storage']) && isset($_POST['cache']) && isset($_POST['goals'])) {
        $goals = $_POST['goals'];
        $version = $_POST['version'];
        $stack = $_POST['stack'];
        $ram = $_POST['ram'];
        $cache = $_POST['cache'];
        $storage = $_POST['storage'];
        $cloud = $_POST['cloud'];
        $pid = $_SESSION['ActiveFile']['pid'];

        //insert resources first
        $insert = "INSERT INTO project_resources (pid, stack, version, cloud, ram, cache, storage) VALUES ('$pid','$stack','$version', '$cloud', '$ram', '$cache', '$storage')";

        if (!mysqli_query($con, $insert)) {
            die('Error: ' . mysqli_error($con));
        } else {

            $query = "SELECT * FROM project_resources WHERE pid = '$pid'";
            $result = mysqli_query($con, $query);
            if (mysqli_num_rows($result) === 1) {
                $ans = mysqli_fetch_assoc($result);
                $res_id = $ans['resource_id'];

                foreach ($goals as $value) {
                    $goal_id = get_goal_id($value);
                    $insert1 = "INSERT INTO project_goals (pid, goal_id, resource_id) VALUES ('$pid','$goal_id','$res_id')";

                    if (!mysqli_query($con, $insert1)) {
                        die('Error: ' . mysqli_error($con));
                    } else {
                        continue;
                    }
                }
                header("Location: ../pages/scripter.php?success=Project Resources have been updated");
                exit();
            } else {
                header("Location: ../pages/scripter.php?error=Resources couldn't be added");
                exit();
            }
        }
    } else {
        header("Location: ../pages/scripter.php?error=Please set all field first!");
        exit();
    }
}
