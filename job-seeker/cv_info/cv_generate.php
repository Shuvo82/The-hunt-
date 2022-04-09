<?php
    require_once('../../db/dbh.php');
    session_start();
    $job_seeker_id = $_SESSION['job_seeker_id'];

    /*$query1 = "SELECT * FROM test_result  WHERE seeker_id = $job_seeker_id;";
    $execute1 = mysqli_query($conn, $query1);
    $test_names = Array();
    $i = 0;
    while($rd = mysqli_fetch_assoc($execute1);/*){
        $test_names[$i] = $rd['test_name'];
        $i = $i + 1;
    }*/

    $bio = htmlentities($_POST['bio']);

    $education1 = $_POST['education1'];
    $university1 = $_POST['university1'];
    $department1 = $_POST['department1'];

    $education2 = $_POST['education2'];
    $university2 = $_POST['university2'];
    $department2 = $_POST['department2'];

    $job_position = $_POST['job_position'];
    $company = $_POST['company'];
    $duration = $_POST['duration'];

    $skill = htmlentities($_POST['skill']);

    $query = "INSERT INTO seeker_cv (seeker_id, bio, skill, education1, university1, department1, education2, university2, department2, ex_job_position, ex_company, ex_duration) VALUES('$job_seeker_id', '$bio', '$skill', '$education1', '$university1', '$department1', '$education2', '$university2', '$department2', '$job_position', '$company', '$duration');";
    $execute = mysqli_query($conn,$query);

    header("Location: ../job_seeker_Home/seeker_profile/index.php");
?>