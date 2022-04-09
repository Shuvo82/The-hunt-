<?php
            require_once('../../../../../db/dbh.php');
            session_start();
            if (!isset($_SESSION['job_seeker_id'])){
                header('location: ../job_seeker_login/index.html');
            }
            $job_seeker_id = $_SESSION['job_seeker_id'];
            $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
            $execute = mysqli_query($conn, $query);
            $jobSeekerResult = mysqli_fetch_array($execute);

            $queryTest = "SELECT * FROM test_result WHERE seeker_id = $job_seeker_id AND test_name = 'Administration';";
            $executeTest = mysqli_query($conn, $queryTest);
            $jobSeekerTestResult = mysqli_fetch_array($executeTest);
            
            $jobSeekerTestAnswer = explode("011191206",$jobSeekerTestResult['seeker_answer']);

            error_reporting(0);
            $count = 0;

            
        ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>status</title>
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
                            <img src="../../../../../images/logo.png" alt="">
                        </a>
                    </h2>
                    <ul>
                        <li><a href="../index.php">Home</a></li>
                        <li><a href="../../../seeker_profile/index.php">Profile</a></li>                       
                        <li><a href="#suggestion">Suggestion</a></li>
                        <li><a href="#suggestion">Feedback</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div class="main_section">
        <div class="main">
            <div class="left"></div>
            <div class="right">
                <div class="result">
                    <h1>Result Analysis</h1>
                </div>
                <div class="user_info">
                    <ul class="info">
                        <li class="name"><?php echo $jobSeekerResult['user_name'];?></li>
                        <li class="email"><?php echo $jobSeekerResult['email'];?></li>
                    </ul>
                    <div class="border"></div>
                </div>
            </div>
        </div>
        <div class="question_info_sec">
            <div class="feedback">
                <h1>Feedback</h1>
            </div>
            <div class="q_section">
                <div class="ques_area">
                    <div class="ques h_ques">
                        <ul>
                            <li class="h_serial">No.</li>
                            <li class="h_ques_serial">Questions</li>
                            <li class="h_ans">Answers</li>
                            <li class="h_c_ans">Results</li>
                            <li class="h_mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">01.</li>
                            <li class="ques_serial">Question1</li>
                            <li class="ans">Hyper Text Markup Language</li>
                            <?php 
                                
                            ?>
                            <li class="c_ans"><?php echo $jobSeekerTestAnswer[0];?></li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">02.</li>
                            <li class="ques_serial">Question2</li>
                            <li class="ans">Angle brackets e.g.</li>
                            <li class="c_ans"><?php echo $jobSeekerTestAnswer[1];?></li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">03.</li>
                            <li class="ques_serial">Question3</li>
                            <li class="ans">Body</li>
                            <li class="c_ans"><?php echo $jobSeekerTestAnswer[2];?></li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">04.</li>
                            <li class="ques_serial">Question4</li>
                            <li class="ans">False</li>
                            <li class="c_ans"><?php echo $jobSeekerTestAnswer[3];?></li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">05.</li>
                            <li class="ques_serial">Question5</li>
                            <li class="ans">Cascading Style Sheet</li>
                            <li class="c_ans"><?php echo $jobSeekerTestAnswer[4];?></li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">06.</li>
                            <li class="ques_serial">Question6</li>
                            <li class="ans">Body</li>
                            <li class="c_ans"><?php echo $jobSeekerTestAnswer[5];?></li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">07.</li>
                            <li class="ques_serial">Question7</li>
                            <li class="ans">Inside the head section</li>
                            <li class="c_ans"><?php echo $jobSeekerTestAnswer[6];?></li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">08.</li>
                            <li class="ques_serial">Question8</li>
                            <li class="ans">Answer</li>
                            <li class="c_ans">correct Answer</li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">09.</li>
                            <li class="ques_serial">Question9</li>
                            <li class="ans">Answer</li>
                            <li class="c_ans">correct Answer</li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul>
                            <li class="serial">10.</li>
                            <li class="ques_serial">Question10</li>
                            <li class="ans">Answer</li>
                            <li class="c_ans">correct Answer</li>
                            <li class="mark">Marks</li>
                        </ul>
                    </div>
                    <div class="ques">
                        <ul >
                            <li class="total_marks">Total Marks:</li>
                            <li class="space"><?php echo $jobSeekerTestResult['marks'];?> out of 10</li>
                            <li class="pass"><?php echo $jobSeekerTestResult['result'];?></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="suggetion-feedback">
                <div id="suggestion" class="suggestion">
                    <div class="s_heading">
                        <h1>For suggestion</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In vitae, eveniet necessitatibus provident, dolorem libero minima repellendus nam repellat sequi doloremque culpa. Dolorem eos cupiditate quisquam! Alias ad laudantium deleniti!</p>
                    </div>
                    <div class="happy_btn">
                        <a href="#">Happy Coding</a>
                    </div>
                </div>
                <div class="suggestion">
                    <div class="s_heading">
                        <h1>For feedback</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. In vitae, eveniet necessitatibus provident, dolorem libero minima repellendus nam repellat sequi doloremque culpa. Dolorem eos cupiditate quisquam! Alias ad laudantium deleniti!</p>
                    </div>
                    <div class="happy_btn">
                        <a href="#">Happy Coding</a>
                    </div>
                </div>
            </div>
            <p class="extra">d</p>
        </div>
    </div>
</body>
</html>