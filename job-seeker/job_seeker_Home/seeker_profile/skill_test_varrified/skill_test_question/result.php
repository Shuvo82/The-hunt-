<?php
            require_once('../../../../../db/dbh.php');
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
            $q3 = $_POST['q3'];
            $q4 = $_POST['q4'];
            $q5 = $_POST['q5'];
            $q6 = $_POST['q6'];
            $q7 = $_POST['q7'];
            $q8 = htmlentities($_POST['q8']);
            //$Q8_Answer = array("string", "number", "integer");

            $q9 = htmlentities($_POST['q9']);
            //$Q9_Answer = array("Uniform Resource Locator");

            $q10 = htmlentities($_POST['q10']);
            //$Q10_Answer = array("Scripting");
            
            //echo $all_answer; 

            /*foreach($Q8_Answer as $needle) { // create a loop, foreach string
                if(strpos($q8, $needle) !== false) { // use stripos and compare it in the parent string
                    $count++; // if it matches then increment.
                }
            }

            foreach($Q9_Answer as $needle) { // create a loop, foreach string
                if(strpos($q9, $needle) !== false) { // use stripos and compare it in the parent string
                    $count++; // if it matches then increment.
                }
            }

            foreach($Q10_Answer as $needle) { // create a loop, foreach string
                if(strpos($q10, $needle) !== false) { // use stripos and compare it in the parent string
                    $count++; // if it matches then increment.
                }
            }*/

            //echo "<p>Your Result:</p>";
            if($q1 == 'Hyper Text Markup Language'){
                $count = $count + 1;
                $ans1 = "Correct";
            }else{
                //echo '<p>1.' . $q1 . '    <span style="color:red;">Wrong Answer</span></p>';
                $ans1 = "Wrong";
            }
            if($q2 == 'Angle brackets e.g.'){
                $count = $count + 1;
                $ans2 = "Correct";
                //echo '<p>2.' . $q2 . '    <span style="color:green;">Correct Answer</span></p>';
            }else{
                $ans2 = "Wrong";
                //echo '<p>2.' . $q2 . '    <span style="color:red;">Wrong Answer</span></p>';
            }
            if($q3 == 'Body'){
                $count = $count + 1;
                $ans3 = "Correct";
                //echo '<p>3.' . $q3 . '    <span style="color:green;">Correct Answer</span></p>';
            }else{
                $ans3 = "Wrong";
                //echo '<p>3.' . $q3 . '    <span style="color:red;">Wrong Answer</span></p>';
            }
            if($q4 == 'False'){
                $count = $count + 1;
                $ans4 = "Correct";
                //echo '<p>4.' . $q4 . '    <span style="color:green;">Correct Answer</span></p>';
            }else{
                $ans4 = "Wrong";
                //echo '<p>4.' . $q4 . '    <span style="color:red;">Wrong Answer</span></p>';
            }
            if($q5 == 'Cascading Style Sheet'){
                $count = $count + 1;
                $ans5 = "Correct";
            }else{
                $ans5 = "Wrong";
            }
            if($q6 == 'Body'){
                $count = $count + 1;
                $ans6 = "Correct";
            }else{
                $ans6 = "Wrong";
            }
            if($q7 == 'Inside the head section'){
                $count = $count + 1;
                $ans7 = "Correct";
            }else{
                $ans7 = "Wrong";
            }

            $all_answer = $ans1 . '011191206' . $ans2 . '011191206' . $ans3 . '011191206' . $ans4 . '011191206' . $ans5 . '011191206' . $ans6 . '011191206' . $ans7 . '011191206' . $q8 . '011191206' . $q9 . '011191206' . $q10;

            $result = "Pending";
            
            $query2 = "INSERT INTO test_result (seeker_id, test_name, result, marks, seeker_answer) 
                VALUES($job_seeker_id, 'Administration', '$result', $count, '$all_answer');";
            $execute2 = mysqli_query($conn, $query2);

            header("Location: ../index.php");
?>