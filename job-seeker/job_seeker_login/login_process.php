<?php 
    require_once('../../db/dbh.php');
    $username = $_POST['Username'];
    $password = $_POST['password'];

    ini_set('display_errors', 0);
    ini_set('display_startup_errors', 0);
    error_reporting(0);

    $query = "SELECT * FROM `job_seeker` WHERE user_name = '$username' AND pass  = '$password';";
    $create_query = mysqli_query($conn,$query);
    $result2 = mysqli_fetch_array($create_query);
    $count=mysqli_num_rows($create_query);

  if ($count > 0 && $result2['status']=='pending'){
		session_start();
		$_SESSION['job_seeker_id']=$result2['job_seeker_id'];
		header('location: ../skill_test_varrified/index.php');
	}else if ($count > 0 && $result2['status']=='approved'){
		session_start();
		$_SESSION['job_seeker_id']=$result2['job_seeker_id'];
		header('location: ../job_seeker_Home/index.php');
	 }
  //else if($username != $result2['username'] && $password != $result2['pass']){
	// 	header('location:login_error.php?username=error&pass=error');
	// }else if($username != $result2['username']){
	// 	header('location:login_error.php?username=error');
	// }else if($password != $result2['pass']){
	// 	header('location:login_error.php?pass=error');
  // }else{
	// 	header('location:login_error.php?username=error&pass=error');
  // }

?>