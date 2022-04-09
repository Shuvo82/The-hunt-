<?php
	require_once('../../db/dbh.php');
	session_start();
	if (!isset($_SESSION['recruiter_id'])){
		header('location:index.html');
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">

	<script src="https://kit.fontawesome.com/a81368914c.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- link css -->
    <link rel="stylesheet" href="./css/successfull_login.css">
</head>
<body>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js">
        
		</script>
		<script>
			swal({
				title: "Well Done",
				text: "Successfully Logged In",
				icon: "success",
				button: "Okay",
			});
		</script>
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
						<li><a href="../profile/index.php">Profile</a></li>
						<li><a href="../Recruiter_logout/logoutprocess.php">logout</a></li>
						<li><a href="../../Home/contact/contact.php">Contact</a></li>
					</ul>
					<a href="../../Recruiter/job-post/index.php" class="post_job">POST A JOB</a>
				</nav>
			</div>
		</div>
	</header>
	<!-- End Header -->

	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/undraw_business_deal_cpi9.svg">
		</div>
		<div class="login-content">
			
        </div>
    </div>

    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
