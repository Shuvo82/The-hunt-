<?php
	require_once('../../../db/dbh.php');
	session_start();
	if (!isset($_SESSION['job_seeker_id'])){
		header('location:../../job_seeker_login/index.html');
	}
    $job_seeker_id = $_SESSION['job_seeker_id'];
    $post_id = $_GET['post_id'];
    $query = "SELECT * FROM job_post  WHERE post_id = $post_id and post_id = $post_id;";
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
    <!-- link google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@400;500&display=swap" rel="stylesheet">
    <!-- link css -->
    <link rel="stylesheet" href="./job.css">
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
                        <li><a href="../../../index.php">Home</a></li>
                        <li><a href="../seeker_profile/index.php">Profile</a></li>
                        <li><a href="../../job_seeker_logout/logoutprocess.php">logout</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Review</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header section -->
    <div class="wrapper">
        <div class="container">
            <div class="header">
                <h2>Job post from Recruiter</h2>
            </div>
            <div class="tagline">
                <p class="company">Company Name:-<?php echo $recruiterResult['company_name']; ?></p>
                <p>Location:- <?php echo $recruiterResult['state_region'];?></p>
                <p>deadline:- 2021-06-23</p>
                <p>Tag:- <?php echo $recruiterResult['job_position'];?></p>
                <p>We're looking for hire one graphic designer for our agency work. You must be comfortable working as part of a team while taking the initiative to take lead on new innovations and projects. YOU MUST NEED TO BE CREATIVE.</p>
            </div>
            
                <?php echo $recruiterResult['content'];?>
            
            
                <div class="apply">
                    <p>Now you can Apply</p>
                    <!-- <a href="../apply_job/apply_process.php">Apply</a> -->
                    <a href="../apply_job_process.php?post_id=<?php echo $post_id;?>">Apply</a>
                </div>
        </div>
    </div>
</body>
</html>
