
<?php
    require_once('../../../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../job_seeker_login/index.html');
    }
    $job_seeker_id = $_SESSION['job_seeker_id'];
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
    <link rel="stylesheet" href="./food.css">
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
                        <li><a href="#">Blog</a></li>
                        <li><a href="../../seeker_profile/index.php">Profile</a></li>
                        <li><a href="../../contact/index.php">Contact</a></li>
                        <li><a href="../../../index.html">logout</a></li>
                        <li>
                            <a href="#" class="drop_down">Apply a Job
                                <i class="fa fa-angle-down"></i>
                            </a>
                            <ul class="drop">
                                <li><a href="../../seeker_job_category/Design/index.php">Design</a></li>

                                <li><a href="../../seeker_job_category/Development/index.php">Development</a></li>

                                <li><a href="../../seeker_job_category/Administrator/index.php">Administrator</a></li>

                                <li><a href="../../seeker_job_category/Programmer/index.php">Programmer</a></li>

                                <li><a href="../../seeker_job_category/Engineering/index.php">Engineering</a></li>

                                <li><a href="../../seeker_job_category/System_Analyst/index.php">System Analyst</a></li>

                                <li><a href="../../seeker_job_category/Data_Science/index.php">Data Science</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- End Header section -->
    <div class="wrapper">
        <div class="container">
            <div class="right_side-bar">
                <div class="applied_job">
                    <div class="heading">
                        <h1>Security Posted Job</h1>
                    </div>
                    <table id="customers">
                        <tr>
                            <th>position</th>
                            <th>location</th>
                            <th>Date Time</th>
                            <th>Action</th>
                        </tr>
                        <?php
                            $query = "SELECT * FROM `job_post` WHERE category='Security';";
                            $execute = mysqli_query($conn, $query);
                            #$Pending = mysqli_fetch_array($result);
                            if($execute->num_rows>0){
                                while($rd = mysqli_fetch_assoc($execute)){
                                    $position = $rd['job_position'];
                                    $job_location = $rd['state_region'];
                                    $Date = $rd['post_date_time'];

                                    $recruiter_id = $rd['recruiter_id'];
                                    $post_id = $rd['post_id'];
                        ?>
                        <tr>
                            <td><?php echo $position; ?></td>
                            <td><?php echo $job_location; ?></td>
                            <td><?php echo $Date; ?></td>
                            <td><a href="../../jobs/index.php?recruiter_id=<?php echo $recruiter_id . '&post_id=' . $post_id . '&job_seeker_id=' . $job_seeker_id?>">View</a></td>
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