<?php
    require_once('../db/dbh.php');
    /*$query_rectuiter_complain = "SELECT * FROM recruiter_complain;";
    $execute_recruiter_complain = mysqli_query($conn,$query_rectuiter_complain);
    $recruiter_complain_row = mysqli_num_rows($execute_recruiter_complain);*/

    $query_seeker_complain = "SELECT * FROM seeker_complain;";
    $execute_seeker_complain = mysqli_query($conn,$query_seeker_complain);
    $seeker_complain_row = mysqli_num_rows($execute_seeker_complain);

    $query_rectuiter_status = "SELECT * FROM job_recruiter WHERE status = 'pending';";
    $execute_recruiter_status = mysqli_query($conn,$query_rectuiter_status);
    $recruiter_status_row = mysqli_num_rows($execute_recruiter_status);

    $query_seeker_status = "SELECT * FROM job_seeker WHERE status = 'pending';";
    $execute_seeker_status = mysqli_query($conn,$query_seeker_status);
    $seeker_status_row = mysqli_num_rows($execute_seeker_status);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <!-- font awesome cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./admin.css">
</head>
<body>
<header class="header">
		<div class="section">
			<div class="header_container">
				<nav class="navbar">
					<h2 class="logo">
						<a href="#">
							<img src="./images/ASSET-USER-ADMIN.png" alt="">
						</a>
					</h2>
					<ul>
						<li><a href="#" style="color: white;">Home</a></li>
						<li><a href="../Admin/index.php">Profile</a></li>
						<li><a href="../Admin/index.php">Job seeker</a></li>
						<li><a href="../Admin/index.php">Recruiter</a></li>
						<li><a href="../Admin/skill_test/index.php">Skill Test</a></li>
					</ul>
				</nav>
			</div>
		</div>
	</header>
    <!-- Header End -->
    <div class="wrapper">
        <div class="container">
            <div class="profile_sec">
                <div class="heading">
                    <h2>Admin</h2>
                </div>
                <div class="profile">
                    <img src="./images/undraw_male_avatar_323b.svg" alt="">
                    <h2>MD.Hasan Rifat</h2>
                    <h3>Software Engineer</h3>
                </div>
                <div class="bio">
                    <div class="location">
                        <i class="fa fa-globe"></i>
                        <p>Bangladesh</p>
                    </div>
                    <div class="city">
                        <i class="fa fa-street-view"></i>
                        <p>Dhaka,Bangladesh</p>
                    </div>
                    <div class="git">
                        <i class="fa fa-github"></i>
                        <p>HasanRifat</p>
                    </div>
                    <div class="linkedin">
                        <i class="fa fa-linkedin"></i>
                        <p>Hasan-Rifat</p>
                    </div>
                    <div class="twitter">
                        <i class="fa fa-twitter"></i>
                        <p>Hasan_Rifat</p>
                    </div>
                    <div class="github">
                        <i class="fa fa-github-alt"></i>
                        <a href="#">https://hasanRifat.github.io</a>
                    </div>
                    <div class="contact">
                        <i class="fa fa-envelope"></i>
                        <p>contact@hasan.com</p>
                    </div>
                </div>
            </div>
            
            <div class="dashboard">
                <!-- <h2>Home</h2> -->
                <div class="control_panel">
                    <div class="heading">
                        <h2>You logged as Administration</h2>
                    </div>
                    <div class="heading-2">
                        <h2>Dashboard</h2>
                        <h4>Control panel</h4>
                    </div>
                    <div class="panel_box">
                        <div class="job_seeker">
                            <h3>pending request</h3>
                            <h4>(<?php echo $seeker_status_row; ?>)</h4>
                            <h2>Job seeker</h2>
                            <form action="#" method="POST">
                                <a href="./job seeker/index.php"><i class="fa fa-arrow-right"></i></a>
                            </form>
                        </div>
                        <div class="recruiter">
                            <h3>pending request</h3>
                            <h4>(<?php echo $recruiter_status_row; ?>)</h4>
                            <h2>Job Recruiter</h2>
                            <form action="#" method="POST">
                                <a href="./recruiter/index.php"><i class="fa fa-arrow-right"></i></a>
                            </form>
                        </div>
                        <div class="seeker_complain">
                            <h3>job seeker Complain</h3>
                            <h4>(<?php echo $seeker_complain_row; ?>)</h4>
                            <h2>Job seeker</h2>
                            <form action="#" method="POST">
                                <a href="./seeker_complain/index.php"><i class="fa fa-arrow-right"></i></a>
                            </form>
                        </div>
                        <div class="recruiter_complain">
                            <h3>Recruiter Complain</h3>
                            <h4>(<?php //echo $recruiter_complain_row; ?>)</h4>
                            <h2>Job Recruiter</h2>
                            <form action="#" method="POST">
                                <a href="./recruiter_complain/index.php"><i class="fa fa-arrow-right"></i></a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>