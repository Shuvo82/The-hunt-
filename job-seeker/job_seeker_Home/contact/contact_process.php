<?php
    require_once('../../../db/dbh.php');
    session_start();
    $job_seeker_id = $_SESSION['job_seeker_id'];

    // $Get_name = $_POST['name'];
    // $Get_email = $_POST['email'];
    // $Get_contact = $_POST['contact'];
    $Get_message = $_POST['message'];

    $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
    $executeQuery = mysqli_query($conn, $query);

    $result = mysqli_fetch_array($executeQuery);

    $first_name = $result['first_name'];
    $last_name = $result['last_name'];
    $user_name = $result['user_name'];
    $email = $result['email'];
    $contact = $result['contact'];


    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);

    
    $queryJobPost = "INSERT INTO seeker_complain(seeker_id, user_name, email, contact, complain_details) VALUES($job_seeker_id, '$user_name', '$email', '$contact', '$Get_message')";

    $executeQuery2 = mysqli_query($conn, $queryJobPost);
    header("Location: index.php");
    
?>