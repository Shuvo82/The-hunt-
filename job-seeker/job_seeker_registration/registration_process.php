<?php 
    require_once('../../db/dbh.php');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $postal_code = $_POST['postal_code'];
    $password = $_POST['password'];

    $query = "INSERT INTO job_seeker (first_name, last_name, user_name, gender, address, contact, email, postal_code, pass, status) 
    VALUES('$first_name', '$last_name', '$user_name', '$gender', '$address', '$contact', '$email', '$postal_code', '$password', 'pending');";

    $create_query = mysqli_query($conn,$query);

    if($create_query){
        $job_seeker_Details = "SELECT * FROM `job_seeker` WHERE user_name = '$user_name';" ;
        $result2 = mysqli_query($conn, $job_seeker_Details);
        $job_seeker_data = mysqli_fetch_array($result2);
        session_start();
		$_SESSION['job_seeker_id'] = $job_seeker_data['job_seeker_id'];;

        if($job_seeker_data['status']=='pending'){
            //echo "admin not confirmed yet";
            header("Location: ../skill_test_varrified/index.php");
        }else{
            
            //echo "confirm";
            header("Location: ../job_seeker_login/skill_test_varrified/index.php");
        }
    }else{
        echo "unsuccessfull";
    }


?>