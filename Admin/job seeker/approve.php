<?php
    require_once('../../db/dbh.php');
    $id = $_GET['id'];
    $query_approve = "UPDATE job_seeker SET status = 'approved' WHERE job_seeker_id = $id;";
    $getData = mysqli_query($conn,$query_approve);
    header("Location: index.php");

?>