<?php
    require_once('../../db/dbh.php');
    session_start();
    $recruiter_id = $_SESSION['recruiter_id'];
    
    $title=$_POST['title'];
    $Tag=$_POST['Tag'];
    $State_Region=$_POST['State_Region'];
    $Job_position=$_POST['Job_position'];
    $Job_type=$_POST['Job_type'];
    $category=$_POST['category'];
    $content=$_POST['content'];

    $query = "SELECT * FROM job_recruiter WHERE recruiter_id = $recruiter_id;";
    $executeQuery = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($executeQuery);
    $company_name = $result['company_name'];

    $queryJobPost = "INSERT INTO job_post(recruiter_id, company_name, title, tag, state_region, job_position, job_type, category, content) 
                    VALUES($recruiter_id, '$company_name', '$title', '$Tag', '$State_Region', '$Job_position', '$Job_type', '$category','$content');";
    $executeQuery2 = mysqli_query($conn, $queryJobPost);
    header("Location: index.php");


?>