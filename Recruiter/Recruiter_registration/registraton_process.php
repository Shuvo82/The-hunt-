<?php 
    require_once('../../db/dbh.php');

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $address = $_POST['address'];
    $gender = $_POST['gender'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $company_name = $_POST['company'];
    $password = $_POST['password'];

    $query = "INSERT INTO job_recruiter(first_name, last_name, user_name, gender, address, contact, email, company_name, pass, status) VALUES('$first_name', '$last_name', '$user_name', '$gender', '$address', '$contact', '$email', '$company_name', '$password', 'pending');";

    $create_query = mysqli_query($conn,$query);
    if($create_query){
        $recruiterDetails = "SELECT * FROM `job_recruiter` WHERE user_name = '$user_name';";
        $result2 = mysqli_query($conn, $recruiterDetails);
        
        $recruiterArray = mysqli_fetch_array($result2);

        $id = $recruiterArray['recruiter_id'];

        if($recruiterArray['status']=='pending'){
            //echo "admin not confirmed yet";
            header("Location: admin_message.php");
        }else{
            
            //echo "confirm";
            header("Location: ../Recruiter_login/index.html");
        }
    }else{
        echo "unsuccessfull";
    }


?>