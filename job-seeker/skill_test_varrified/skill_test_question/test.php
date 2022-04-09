<?php
            require_once('../../../db/dbh.php');
            session_start();
            if (!isset($_SESSION['job_seeker_id'])){
                header('location: ../job_seeker_login/index.html');
            }
            $job_seeker_id = $_SESSION['job_seeker_id'];
            $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
            $execute = mysqli_query($conn, $query);
            $jobSeekerResult = mysqli_fetch_array($execute);

            error_reporting(0);
            $count = 0;

            $q1 = $_POST['q1'];
            $q2 = $_POST['q2'];
            /*$q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];
            $q7 = $_POST['q7'];
            $q8 = htmlentities($_POST['q8']);
            //$Q8_Answer = array("string", "number", "integer");

            $q9 = htmlentities($_POST['q9']);
            //$Q9_Answer = array("Uniform Resource Locator");

            $q10 = htmlentities($_POST['q10']);*/

            echo $q1;
            echo "mobin";
            




?>