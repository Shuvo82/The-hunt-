<?php 
    require_once('../../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../job_seeker_login/index.html');
    }
    $job_seeker_id = $_SESSION['job_seeker_id'];


    function updateUserQuery($first_name, $last_name, $user_name,$password, $user_email, $gender, $address, $contact, $postal_code, $id) {
        return "UPDATE job_seeker SET first_name = '$first_name',last_name='$last_name',
        user_name='$user_name',pass='$password', email = '$user_email', gender = '$gender', 
        address = '$address', contact = '$contact', postal_code='$postal_code' WHERE job_seeker_id = $id;";
      }


       $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
       $last_name = mysqli_real_escape_string($conn, $_POST['last_name']);
       $user_name = mysqli_real_escape_string($conn, $_POST['user_name']);
       $password = mysqli_real_escape_string($conn, $_POST['password']);

       $user_email = mysqli_real_escape_string($conn, $_POST['email']);
       $gender = mysqli_real_escape_string($conn, $_POST['gender']);
       $address = mysqli_real_escape_string($conn, $_POST['address']);
       $contact = mysqli_real_escape_string($conn, $_POST['contact']);
       $postal_code = mysqli_real_escape_string($conn, $_POST['postal_code']);
       
       
       //echo $job_seeker_id;

       $sqlQuery = updateUserQuery($first_name, $last_name, $user_name,$password, $user_email, $gender, $address, $contact, $postal_code ,$job_seeker_id);
       
         if (mysqli_query($conn, $sqlQuery)) {
           header("location: index.php");
         } else {
           echo "Error: " . $sqlQuery . "<br>" . mysqli_error($conn);
         }


?>