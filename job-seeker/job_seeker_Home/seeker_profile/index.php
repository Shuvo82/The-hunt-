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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Seeker</title>
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300&display=swap" rel="stylesheet">
    <!-- font awesome cdn-->
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" 
    integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="./profile.css">
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
                        <li><a href="../job_search/index.php">Jobs</a></li>
                        <li><a href="../../job_seeker_logout/logoutprocess.php">logout</a></li>
                        <li><a href="../contact/index.php">Contact</a></li>
                        <li><a href="../../job-seeker/Review/index.php">Review</a></li>
                        <li>
                            <a href="#" class="drop_down">Category
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="drop">
                                <li><a href="../seeker_job_category/Administrator/index.php">Administrator</a></li>

                                <li><a href="../seeker_job_category/Design/index.php">Design</a></li>

                                <li><a href="../seeker_job_category/Development/index.php">Development</a></li>

                                <li><a href="../seeker_job_category/Engineering/index.php">Engineering</a></li>

                                <li><a href="../seeker_job_category/Programmer/index.php">Programmer</a></li>

                                <li><a href="../seeker_job_category/Security/index.php">Security</a></li>

                                <li><a href="../seeker_job_category/System_Analyst/index.php">System Analyst</a></li>

                                <li><a href="../seeker_job_category/Data_Science/index.php">Data Science</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div class="wrapper">
        <div class="container">
            <div class="left_side-bar">
                <div class="info_icon">
                    <i class="fa fa-info"></i>
                </div>
                <div class="profile_img">
                    <img src="./images/undraw_male_avatar_323b.svg" alt="">
                </div>
                <div class="profile_info">
                    <i class="fa fa-user"></i>
                    <p><?php echo $jobSeekerResult['first_name'] . ' ' . $jobSeekerResult['last_name']; ?></p>
                </div>
                <div class="info_link">
                    <i class="fa fa-map-marker"></i>
                    <p>Address</p>
                </div>
                <div class="info_link">
                    <i class="fa fa-book"></i>
                    <p>Education</p>
                </div>
                <div class="info_link">
                    <i class="fa fa-user-md"></i>
                    <p>Job Profile</p>
                </div>
                <div class="info_link">
                    <i class="fa fa-file"></i>
                    <p>Job Experience</p>
                </div>
                <div class="info_link">
                    <i class="fa fa-thumbs-up"></i>
                    <p><a href="./skill_test_varrified/index.php">Skill Test</a></p>
                </div>
                <div class="info_link">
                    <i class="fa fa-external-link"></i>
                    <p>Job Application</p>
                </div>
                <div class="info_link">
                    <i class="fa fa-child"></i>
                    <p>Got Hired</p>
                </div>
                <div class="info_link">
                    <i class="fa fa-undo"></i>
                    <p>Job Request</p>
                </div>
                <div class="info_link">
                    <i class="fa fa-user"></i>
                    <p>Certification</p>
                </div>
            </div>
            <div class="right_side-bar">
                <div class="nab_var">
                    <div class="heading">
                        <h2>My Profile</h2>
                    </div>
                </div>
                <div class="profile_sec">
                    <div class="main_profile-img">
                        <img src="./images/undraw_male_avatar_323b.svg" alt="">
                        <form action="update_seeker_profile_emp.php" method="post">
                            <button class="edit_profile">Edit Profile</button>
                        </form>
                    </div>
                    <div class="main_profile-info">
                        <div class="name info">
                            <p>User name</p>
                            <h3><?php echo $jobSeekerResult['user_name'] ?></h3>
                        </div>
                        <div class="email info">
                            <p>Email Address</p>
                            <h3><?php echo $jobSeekerResult['email'] ?></h3>
                        </div>
                        <div class="contact info">
                            <p>contact</p>
                            <h3><?php echo $jobSeekerResult['contact'] ?></h3>
                        </div>
                    </div>
                </div>
                
                <div class="applied_job">
                    <div class="heading">
                        <h1>Applied Job</h1>
                    </div>
                    <table id="customers">
                        <tr>
                            <th>company name</th>
                            <th>job Position</th>
                            <th>Date Time</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $job_query = "SELECT * FROM applied_job WHERE job_seeker_id = $job_seeker_id;";
                            $job_execute = mysqli_query($conn, $job_query);
                     
                            if($job_execute->num_rows>0){
                                while($row = mysqli_fetch_assoc($job_execute)){
                                    $job_post_id = $row['post_id'];
                                    $seeker_apply = "SELECT * FROM job_post WHERE post_id = $job_post_id;";
                                    $seeker_apply_execute = mysqli_query($conn, $seeker_apply);
                                    $rd = mysqli_fetch_assoc($seeker_apply_execute);

                                    $serial = $rd['company_name'];
                                    $position = $rd['job_position'];
                                    $apply_date_time = $row['apply_date_time'];
                                    $post_id=$rd['post_id'];
                        ?>
                        <tr>
                            <td><?php echo $serial; ?></td>
                            <td><?php echo $position; ?></td>
                            <td><?php echo $apply_date_time; ?></td>
                            <td><a href="./view/index.php?post_id=<?php echo $post_id;?>">View</a></td>
                        </tr>
                        <?php
                            }
                        }else{
                            echo "No Data to Show";
                        }
                        ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</body>
</html>