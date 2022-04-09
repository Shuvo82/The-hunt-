<?php
	require_once('../../../db/dbh.php');
	session_start();
	if (!isset($_SESSION['job_seeker_id'])){
		header('location:../../job_seeker_login/index.html');
	}
?>

<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Live Search</title>
		
		<!--leave these if you have already used jquery and bootstrap files in your website-->
		<script src="live_search_assets/js/jquery-2.1.3.min.js"></script>
		<script src="live_search_assets/js/bootstrap.min.js"></script>
		<link href="live_search_assets/css/bootstrap.css" rel="stylesheet" />
		
		<!--Include these lines for live search-->
		<script src="live_search_assets/js/ls.js"></script>
		<link href="live_search_assets/css/job1.css" rel="stylesheet" />
		<!--End-->
		
	</head>
	<body>
		<header class="header">
			<div class="section">
				<div class="header_container">
					<nav class="navbar">
						<h2 class="logo">
							<a href="#">
								<img src="../images/logo.png" alt="">
							</a>
						</h2>
						<ul>
							<li><a href="../index.php">Home</a></li>
							<li><a href="#">Blog</a></li>
							<li><a href="../seeker_profile/index.php">Profile</a></li>
							<li><a href="#">Contact</a></li>
							<li><a href="../../job_seeker_logout/logoutprocess.php">Log Out</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</header>
		<!-- End Header -->
				<div class="hero">
					<div class="input-group search">
						<span class="input-group-addon">Search</span>
						<input type="text" id="ls_search_text" placeholder="Type any keyword to search" class="form-control" />
					</div>
				</div>
			<br />
			<div id="ls_result"></div>
	</body>
</html>



