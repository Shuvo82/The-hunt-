<?php

    require_once('../../db/dbh.php');
    session_start();

    if (!isset($_SESSION['recruiter_id'])){
        header('location: ../Recruiter/Recruiter_login/index.html');
    }

    $recruiter_id = $_SESSION['recruiter_id'];
    $post_id = $_GET['post_id'];
    $query = "SELECT * FROM job_recruiter WHERE recruiter_id = $recruiter_id;";
    $execute = mysqli_query($conn, $query);
    $recruiterResult = mysqli_fetch_array($execute);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <header class="header">
		<div class="section">
			<div class="header_container">
				<nav class="navbar">
					<h2 class="logo">
						<a href="#">
							<img src="../../images/logo.png" alt="">
						</a>
					</h2>
					<ul>
						<li><a href="../../index.html">Home</a></li>
						<li><a href="../../Recruiter/profile/index.php?recruiter_id=<?php echo $recruiter_id; ?>">Profile</a></li>
						<li><a href="../../index.html">logout</a></li>
						<li><a href="#">Applicants</a></li>
						<li><a href="../../Home/contact/contact.php?recruiter_id=<?php echo $recruiter_id; ?>">Contact</a></li>
					</ul>
					<a href="../../Recruiter/job-post/index.php?recruiter_id=<?php echo $recruiter_id; ?>" class="post_job">POST A JOB</a>
				</nav>
			</div>
		</div>
	</header>
    <!-- Header End -->
    <div class="wrapper">
        <div class="container">
            <div class="right_side-bar">
                <div class="applied_job">
                    <div class="heading">
                        <h1>Applicants</h1>
                    </div>
                    <table id="customers">
                        <tr>
                            <th>Name</th>
                            <th>Job Position</th>
                            <th>Apply Date Time</th>
                            <th>Email</th>
                            <th>Resume</th>
                        </tr>
                        <?php
                            $query = "SELECT * FROM `applied_job` WHERE post_id=$post_id;";
                            $execute = mysqli_query($conn, $query);
                            #$Pending = mysqli_fetch_array($result);
                            if($execute->num_rows>0){
                                while($row = mysqli_fetch_assoc($execute)){
                                    $job_post_id = $row['post_id'];
                                    $seeker_apply = "SELECT * FROM job_post WHERE post_id = $job_post_id;";
                                    $seeker_apply_execute = mysqli_query($conn, $seeker_apply);
                                    $rd = mysqli_fetch_assoc($seeker_apply_execute);

                                    $job_seeker_id = $row['job_seeker_id'];
                                    $seeker_info = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
                                    $seeker_info_execute = mysqli_query($conn, $seeker_info);
                                    $rd2 = mysqli_fetch_assoc($seeker_info_execute);

                                    $position = $rd2['user_name'];
                                    $job_location = $rd['job_position'];
                                    $Date = $row['apply_date_time'];
                                    $email = $rd2['email'];
                                    //$resume = $rd['resume'];

                                    // $recruiter_id = $rd['recruiter_id'];
                                    // $post_id = $rd['post_id'];
                        ?>
                        <tr>
                            <td><?php echo $position; ?></td>
                            <td><?php echo $job_location; ?></td>
                            <td><?php echo $Date; ?></td>
                            <td><?php echo $email; ?></td>
                            <td><a href="../Resume/index.php?apply_id=<?php echo $row['apply_id'];?>"class="btn btn-info" name="approve">view</a></td>
                        </tr>
                        <?php
                            }
                        }else{
                            //echo "No Data to Show";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>