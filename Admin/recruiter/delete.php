<?php
    require_once('../../db/dbh.php');
    $id = $_GET['id'];
    $queryapprove = "DELETE FROM job_recruiter WHERE recruiter_id = $id;";
    $getData = mysqli_query($conn,$queryapprove);
    header("Location: index.php");
?>