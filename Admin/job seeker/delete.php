<?php
    require_once('../../db/dbh.php');
    $id = $_GET['id'];
    $query_approve = "DELETE FROM job_seeker WHERE job_seeker_id = $id;";
    $getData = mysqli_query($conn,$query_approve);
    header("Location: index.php");
?>