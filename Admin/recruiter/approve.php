<?php
    require_once('../../db/dbh.php');
    $id = $_GET['id'];
    $queryapprove = "UPDATE job_recruiter SET status = 'approved' WHERE recruiter_id = $id;";
    $getData = mysqli_query($conn,$queryapprove);
    header("Location: index.php");

?>