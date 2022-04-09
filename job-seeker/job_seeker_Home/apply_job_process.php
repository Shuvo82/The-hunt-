<?php
	require_once('../../db/dbh.php');
	session_start();
	$seeker_id = $_SESSION['job_seeker_id'];
  $post_id = $_GET['post_id'];
  echo $seeker_id . $post_id;

  $query = "INSERT INTO applied_job(post_id, job_seeker_id) 
    VALUES($post_id, $seeker_id);";
    $create_query = mysqli_query($conn,$query);
    header("Location: ./seeker_profile/index.php");
//
?>