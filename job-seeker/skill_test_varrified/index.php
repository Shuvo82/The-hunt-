<?php
    require_once('../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../job_seeker_login/index.html');
    }
    $job_seeker_id = $_SESSION['job_seeker_id'];
    $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
    $execute = mysqli_query($conn, $query);
    $jobSeekerResult = mysqli_fetch_array($execute);

    $query1 = "SELECT * FROM skill_test_registration WHERE seeker_id = $job_seeker_id;";
    $execute1 = mysqli_query($conn, $query1);
    $jobSeekerResult1 = mysqli_fetch_array($execute1);
    if($execute1->num_rows>0){
        $confirm_registration = "yes";
    }else{
        $confirm_registration = "no";
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skill test</title>
    <!-- link css -->
    <link rel="stylesheet" href="./status1.css">
</head>
<body>
    <header class="header">
        <div class="section">
            <div class="header_container">
                <nav class="navbar">
                    <h2 class="logo">
                        <a href="#">
                            <img src="./images/logo.png" alt="">
                        </a>
                    </h2>
                    <ul>
                        <li><a href="">Home</a></li>
                        <li><a href="./status/index.php">Status</a></li>
                        <li><a href="../job_seeker_logout/logoutprocess.php">Log Out</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div class="header_container_skill">
        <div class="header_section">
            <div class="section-1">
                <p>Skills > Completion Test</p>
                <h1>Knowledge justifying (Basic) Skills Certification Test</h1>
            </div>
            <?php if($confirm_registration == "yes"){?>
            <div class="timer-section">
                <div class="countdown">
                    <a id="count_time" href="./skill_test_question/index.php"></a>
                </div>
                <!-- <div class="attempt">
                    <a id="demo" href="./skill_test_question/index.php"></a>
                </div> -->
                <script>
                // Set the date we're counting down to
                //var countDownDate = new Date("<?php echo $jobSeekerResult1['test_date'];?>").getTime();
                var countDownDate = new Date("Jan 25, 2022 1:25:00").getTime();

                // Update the count down every 1 second
                var x = setInterval(function() {

                // Get today's date and time
                var now = new Date().getTime();
                    
                // Find the distance between now and the count down date
                var distance = countDownDate - now;
                    
                // Time calculations for days, hours, minutes and seconds
                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                    
                // Output the result in an element with id="demo"
                document.getElementById("count_time").innerHTML = days + "d " + hours + "h "
                + minutes + "m " + seconds + "s ";
                    
                // If the count down is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.querySelector(".attempt").style.display="block";
                    document.getElementById("demo").innerHTML = "Attempt Now";
                    document.querySelector(".countdown").style.display="none";
                }else{
                    document.querySelector(".countdown").style.display="block";
                    document.getElementById(".attempt").style.display="none";
                    
                }
                }, 1000);
                </script>
            </div>
            <?php }?>
        </div>
    </div>
    <div class="section_one">
        <div class="sec_one_container">
            <div class="half_width">
                <div class="secOne_heading">
                    <h1>Verify your Problem Solving</h1>
                    <h1>Skills. Accelerate your Job</h1>
                    <h1>Search.</h1>
                </div>
                <p style="padding-bottom:20px;">Take the Job Skills Certification Test and showcase your knowledge as a highly verified developer.</p>
                <div class="take_test">
                    
                </div>
                <!-- attempt quiz -->
                <div class="attempt" style="margin-top:20px;">
                <a style="margin-left:-200px;margin-top: 20px;" href="./choose_skill_test/choose_skill.php">Take The Job Skills Test</a>
                    <!-- <h3>You Exam has been started</h3> -->
                    <a id="demo" href="./skill_test_question/index.php"></a>
                </div>
            </div>
            <div class="half_width">
                <img src="./images/img-1.png" alt="">
            </div>
        </div>
    </div>

    <div class="section_two">
        <div class="sec_two_container">
            <div class="second_half_width">
                <h1 class="skill">Skill over pedigree</h1>
            </div>
            <div class="second_half_width">
                <div class="Prove_your_Skills skill_company">
                    <div class="logo">
                        <img src="./images/man.png" alt="">
                    </div>
                    <div class="prove_text">
                        <h1>Prove your Skills</h1>
                        <p>The Skills Certification Test is a standardized assessment to help developers prove their coding skills.</p>
                    </div>
                </div>

                <div class="companies skill_company">
                    <div class="logo">
                        <img src="./images/bag.png" alt="">
                    </div>
                    <div class="companies_txt">
                        <h1>Get noticed by companies</h1>
                        <p>Candidates who successfully clear the test will be specially highlighted to companies when they apply to relevant roles.</p>
                    </div>
                </div>
            </div>
        </div>   
    </div>

    <div class="section_three">
        <img src="./images/Screenshot_121.png" alt="">
    </div>

    <div class="section_four">
        <img src="./images/Screenshot_120.png" alt="">
    </div>

</body>
</html>