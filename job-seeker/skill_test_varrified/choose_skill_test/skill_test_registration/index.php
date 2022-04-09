<?php
    require_once('../../../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../../../job_seeker_login/index.html');
    }
    $job_seeker_id = $_SESSION['job_seeker_id'];
    $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
    $execute = mysqli_query($conn, $query);
    $jobSeekerResult = mysqli_fetch_array($execute);

    $testid = $_GET['test'];
    $testname = array('Administration', 'Development', 'Design', 'Programmer', 'Security', 'Engineering', 'System Analysts', 'Data Science');

    $query1 = "INSERT INTO skill_test_registration (seeker_id, test_name, test_date) VALUES($job_seeker_id, '$testname[$testid]', 'Jan 30, 2022 10:01:00');";
    $create_query = mysqli_query($conn,$query1);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill test</title>
    <!-- link css -->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header class="header">
        <div class="section">
            <div class="header_container">
                <nav class="navbar">
                    <h2 class="logo">
                        <a href="#">
                            <img src="../../../../images/logo.png" alt="">
                        </a>
                    </h2>
                    <ul>
                        <li><a href="../../index.php">Home</a></li>
                        <li><a href="./status/index.php">Status</a></li>
                        <li><a href="../../../job_seeker_logout/logoutprocess.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <img class="wave" src="../img/wave.png">
	<div class="container">
		<div class="img">
			<img src="../img/bg.svg">
		</div>
		<div class="login-content">
            <p>Give Exam Schedule and time</p><br>
            <p>Your skill test registration is confirmed at Jan 30, 2022 10:01:00 am. <?php echo $testname[$testid];?></p>

		</div>
    </div>
</body>
</html>