<?php 
    require_once('../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['recruiter_id'])){
        header('location: ../recruiter_login/index.html');
    }
    $recruiter_id = $_SESSION['recruiter_id'];


    function updateUserQuery($first_name, $last_name, $user_name,$password, $user_email, $gender, $address, $contact, $company_name, $id) {
        return "UPDATE job_recruiter SET first_name = '$first_name',last_name='$last_name',
        user_name='$user_name',pass='$password', email = '$user_email', gender = '$gender', 
        address = '$address', contact = '$contact', company_name='$company_name' WHERE recruiter_id = $id;";
      }


       $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
       $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
       $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);

       $user_email = mysqli_real_escape_string($conn, $_POST['email']);
       $gender = mysqli_real_escape_string($conn, $_POST['gender']);
       $address = mysqli_real_escape_string($conn, $_POST['address']);
       $contact = mysqli_real_escape_string($conn, $_POST['contact']);
       $company_name = mysqli_real_escape_string($conn, $_POST['company_name']);
       
       
       

       $sqlQuery = updateUserQuery($first_name, $last_name, $user_name,$password, $user_email, $gender, $address, $contact, $company_name ,$recruiter_id);
       
         if (mysqli_query($conn, $sqlQuery)) {
           header("location: index.php");
         } else {
           echo "Error: " . $sqlQuery . "<br>" . mysqli_error($conn);
         }


?>