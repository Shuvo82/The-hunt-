<?php
    require_once('../../db/dbh.php');

    session_start();
    /*if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../job_seeker_login/index.html');
    }*/
    $recruiter_id = $_SESSION['recruiter_id'];
    
    $Get_name = $_POST['name'];
    $Get_email = $_POST['email'];
    $Get_contact = $_POST['contact'];
    $Get_message = $_POST['message'];

    $query = "SELECT * FROM job_recruiter WHERE recruiter_id = $recruiter_id;";
    $executeQuery = mysqli_query($conn, $query);
    $result = mysqli_fetch_array($executeQuery);

    $user_name = $result['user_name'];
    $email = $result['email'];
    $contact = $result['contact'];


    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);

    
        $queryJobPost = "INSERT INTO recruiter_complain(recruiter_id,user_name,email,contact,complain_details) VALUES($recruiter_id, '$user_name', '$email','$contact','$Get_message')";
        $executeQuery2 = mysqli_query($conn, $queryJobPost);
        header("Location: contact.php");
    
?>