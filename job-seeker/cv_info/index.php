<?php
	require_once('../../db/dbh.php');
	session_start();
	if (!isset($_SESSION['job_seeker_id'])){
		header('location:../../job_seeker_login/index.html');
	}
    $job_seeker_id = $_SESSION['job_seeker_id'];
    /*$post_id = $_GET['post_id'];

    $query = "SELECT * FROM job_post  WHERE post_id = $post_id;";
    $execute = mysqli_query($conn, $query);
    $postrResult = mysqli_fetch_array($execute);*/

    $query1 = "SELECT * FROM job_seeker  WHERE job_seeker_id = $job_seeker_id;";
    $execute1 = mysqli_query($conn, $query1);
    $seekerResult = mysqli_fetch_array($execute1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- link css -->
    <link rel="stylesheet" href="style2.css">

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
                        <li><a href="../job_seeker_Home/index.php">Home</a></li>
                        <li><a href="../job_seeker_Home/seeker_profile/index.php">Profile</a></li>
                        <li><a href="../job_seeker_logout/logoutprocess.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div class="container info ">
        <h2 class="cv" >Your CV</h2>
        <form class="row g-3 full-form" action="cv_generate.php" method="POST">            
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="bio"></textarea>
                <label for="floatingTextarea2">About yourself</label>
            </div>
            <div class="col-md-12 masters">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="education1">
                    <option selected>Education</option>
                    <option value="Masters">Masters</option>
                    <option value="Bachelor">Bachelor</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Department</label>
                <input type="text" class="form-control" id="inputEmail4" name="department1">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">University</label>
                <input type="text" class="form-control" id="inputPassword4" name="university1">
            </div>

            <div class="col-md-12 bachelor">
                <select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="education2">
                    <option selected>Education</option>
                    <option value="Masters">Masters</option>
                    <option value="Bachelor">Bachelor</option>
                </select>
            </div>
            <div class="col-md-6">
                <label for="inputEmail4" class="form-label">Department</label>
                <input type="text" class="form-control" id="inputEmail4" name="department2">
            </div>
            <div class="col-md-6">
                <label for="inputPassword4" class="form-label">University</label>
                <input type="text" class="form-control" id="inputPassword4" name="university2">
            </div>
            <div class="col-md-12 exp">
                <div class="experience">
                    <h1>Work experience</h1>
                </div>
            </div>
            <div class="work-experience">
                <div class="col-md-4 ex">
                    <label for="inputPassword4" class="form-label">Job position</label>
                    <input type="text" class="form-control" id="inputPassword4" name="job_position">
                </div>
                <div class="col-md-4 ex">
                    <label for="inputPassword4" class="form-label">Company</label>
                    <input type="text" class="form-control" id="inputPassword4" name="company">
                </div>
                <div class="col-md-4 ex">
                    <label for="inputPassword4" class="form-label">Duration</label>
                    <input type="text" class="form-control duration" id="inputPassword4" name="duration">
                </div>
            </div>
            <div class="col-md-8 skills">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="skill"></textarea>
                    <label for="floatingTextarea2 tarea">Skills you have earned</label>
                </div>
            </div>
            
            <div class="row">
                <div class="col-4 btn">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- link bundle js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>