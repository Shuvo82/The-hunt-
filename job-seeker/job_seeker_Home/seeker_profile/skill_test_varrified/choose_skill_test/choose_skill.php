<?php
	require_once('../../../../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../../../../job_seeker_login/index.html');
    }
    $job_seeker_id = $_SESSION['job_seeker_id'];
    $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
    $execute = mysqli_query($conn, $query);
    $jobSeekerResult = mysqli_fetch_array($execute);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill test</title>
    <!-- link css -->
    <link rel="stylesheet" href="successfull_login1.css">
</head>
<body>
    <header class="header">
        <div class="section">
            <div class="header_container">
                <nav class="navbar">
                    <h2 class="logo">
                        <a href="#">
                            <img src="../../../images/logo.png" alt="">
                        </a>
                    </h2>
                    <ul>
						<li><a href="../index.php">Home</a></li>
						<li><a href="../../index.php">Profile</a></li>
                        <li><a href="../status/index.php">Status</a></li>
						<li><a href="../../../../job_seeker_logout/logoutprocess.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="./img/bg.svg">
		</div>
		<div class="login-content">
			<table class="styled-table">
				<thead>
					<tr>
						<th>No.</th>
						<th>Name OF Test</th>
						<th>Passing Score</th>
						<th>Total Question</th>
						<th>Time Limit</th>
						<th>Choose</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<th>1.</th>
						<td>Administrator</td>
						<td>6000</td>
						<td>20</td>
						<td>30 min.</td>
						<td><a href="./skill_test_registration/index.php?test=0">click me!</a></td>
					</tr>
					<tr>
						<th>2.</th>
						<td>Development</td>
						<td>5150</td>
						<td>20</td>
						<td>10 min.</td>
						<td><a href="./skill_test_registration/index.php?test=1">click me!</a></td>
					</tr>
					<tr>
						<th>3.</th>
						<td>Design</td>
						<td>6000</td>
						<td>20</td>
						<td>25 min.</td>
						<td><a href="./skill_test_registration/index.php?test=2">click me!</a></td>
					</tr>
					<tr>
						<th>4.</th>
						<td>Programmer</td>
						<td>5150</td>
						<td>20</td>
						<td>15 min.</td>
						<td><a href="./skill_test_registration/index.php?test=3">click me!</a></td>
					</tr>
					<tr>
						<th>5.</th>
						<td>Security</td>
						<td>6000</td>
						<td>20</td>
						<td>30 min.</td>
						<td><a href="./skill_test_registration/index.php?test=4">click me!</a></td>
					</tr>
					<tr>
						<th>6.</th>
						<td>Engineering</td>
						<td>5150</td>
						<td>20</td>
						<td>35 min.</td>
						<td><a href="./skill_test_registration/index.php?test=5">click me!</a></td>
					</tr>
					<tr>
						<th>7.</th>
						<td>System Analysts</td>
						<td>6000</td>
						<td>20</td>
						<td>30 min.</td>
						<td><a href="./skill_test_registration/index.php?test=6">click me!</a></td>
					</tr>
					<tr>
						<th>8.</th>
						<td>Data Science</td>
						<td>5150</td>
						<td>20</td>
						<td>30 min.</td>
						<td><a href="./skill_test_registration/index.php?test=7">click me!</a></td>
					</tr>
					<!-- and so on... -->
				</tbody>
			</table>
			<p style="color:red;">Notice: You need to set your skill first. Before choosing skill test you need to<br>fill the information form</p>
        </div>
    </div>
</body>
</html>