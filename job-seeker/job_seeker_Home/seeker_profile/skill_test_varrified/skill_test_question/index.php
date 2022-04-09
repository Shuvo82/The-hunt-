<?php
    require_once('../../../../../db/dbh.php');
    session_start();
    if (!isset($_SESSION['job_seeker_id'])){
        header('location: ../../job_seeker_login/index.html');
    }
    $job_seeker_id = $_SESSION['job_seeker_id'];
    $query = "SELECT * FROM job_seeker WHERE job_seeker_id = $job_seeker_id;";
    $execute = mysqli_query($conn, $query);
    $jobSeekerResult = mysqli_fetch_array($execute);
    $confirm_submission = "yes";
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
    <link rel="stylesheet" href="style.css">
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
                        <li><a href="../../../seeker_profile/index.php">Profile</a></li>                       
                        <li><a href="#suggestion">Suggestion</a></li>
                        <li><a href="#suggestion">Feedback</a></li>
                        <li><a href="#" id="demo"></a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <div class="container text-center main">
        <form action="result.php" class="question_form" method="POST">
            <!-- Timer start -->
            <!-- Timer end -->
            <p style="font-weight:bold;font-size:50px;"> Quize Test Exam </p>
            <p>(feel free to google it)</p>
            <section class="que_ans">
                <div class="question_h">
                    <h2>1. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="first_half">
                        <div class="first">
                            <input type="radio" id="first" name="q1" value="Hyper Tag Markup Language">
                            <label for="first">Hyper Tag Markup Language</label>
                            <br>
                        </div>
                        <div class="second">
                            <input type="radio" id="second" name="q1" value="Hyper Text Markup Language">
                            <label for="second">Hyper Text Markup Language</label>
                            <br>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="second_half">
                        <div class="third">
                            <input type="radio" id="third" name="q1" value="Hyperlinks Text Mark Language">
                            <label for="third">Hyperlinks Text Mark Language</label>
                            <br>
                        </div>
                        <div class="fourth">
                            <input type="radio" id="fourth" name="q1" value="Hyperlinking Text Marking Language">
                            <label for="fourth">Hyperlinking Text Marking Language</label>
                            <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="que_ans">
                <div class="question_h">
                    <h2>2. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="first_half">
                        <div class="first">
                            <input type="radio" id="first2" name="q2" value="Angle brackets e.g.">
                            <label for="first2">Angle brackets e.g.</label>
                            <br>
                        </div>
                        <div class="second">
                            <input type="radio" id="second2" name="q2" value="Curved brackets e.g. {,}">
                            <label for="second2">Curved brackets e.g. {,} find bracket</label>
                            <br>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="second_half">
                        <div class="third">
                            <input type="radio" id="third2" name="q2" value="Commas e.g. ','">
                            <label for="third2">Commas e.g. ','</label>
                            <br>
                        </div>
                        <div class="fourth">
                            <input type="radio" id="fourth2" name="q2" value="Exclamation marks e.g. !">
                            <label for="fourth2">Exclamation marks e.g. ! bracket </label>
                            <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="que_ans">
                <div class="question_h">
                    <h2>3. Which of these is a genuine tag keyword?</h2>
                </div>
                <div class="ans">
                    <div class="first_half">
                        <div class="first">
                            <input type="radio" id="first3" name="q3" value="Header">
                            <label for="first3">Header in the upper in body or under body</label>
                            <br>
                        </div>
                        <div class="second">
                            <input type="radio" id="second3" name="q3" value="Bold">
                            <label for="second3">Bold</label>
                            <br>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="second_half">
                        <div class="third">
                            <input type="radio" id="third3" name="q3" value="Body">
                            <label for="third3">Body</label>
                            <br>
                        </div>
                        <div class="fourth">
                            <input type="radio" id="fourth3" name="q3" value="Image">
                            <label for="fourth3">Image for the html css</label>
                            <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="que_ans">
                <div class="question_h">
                    <h2>4. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="first_half">
                        <div class="first">
                            <input type="radio" id="first4" name="q1" value="Hyper Tag Markup Language">
                            <label for="first4">Hyper Tag Markup Language</label>
                            <br>
                        </div>
                        <div class="second">
                            <input type="radio" id="second4" name="q1" value="Hyper Text Markup Language">
                            <label for="second4">Hyper Text Markup Language</label>
                            <br>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="second_half">
                        <div class="third">
                            <input type="radio" id="third4" name="q1" value="Hyperlinks Text Mark Language">
                            <label for="third4">Hyperlinks Text Mark Language</label>
                            <br>
                        </div>
                        <div class="fourth">
                            <input type="radio" id="fourth4" name="q1" value="Hyperlinking Text Marking Language">
                            <label for="fourth4">Hyperlinking Text Marking Language</label>
                            <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="que_ans">
                <div class="question_h">
                    <h2>5. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="first_half">
                        <div class="first">
                            <input type="radio" id="first5" name="q1" value="Hyper Tag Markup Language">
                            <label for="first5">Hyper Tag Markup Language</label>
                            <br>
                        </div>
                        <div class="second">
                            <input type="radio" id="second5" name="q1" value="Hyper Text Markup Language">
                            <label for="second5">Hyper Text Markup Language</label>
                            <br>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="second_half">
                        <div class="third">
                            <input type="radio" id="third5" name="q1" value="Hyperlinks Text Mark Language">
                            <label for="third5">Hyperlinks Text Mark Language</label>
                            <br>
                        </div>
                        <div class="fourth">
                            <input type="radio" id="fourth5" name="q1" value="Hyperlinking Text Marking Language">
                            <label for="fourth5">Hyperlinking Text Marking Language</label>
                            <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="que_ans">
                <div class="question_h">
                    <h2>6. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="first_half">
                        <div class="first">
                            <input type="radio" id="first6" name="q1" value="Hyper Tag Markup Language">
                            <label for="first6">Hyper Tag Markup Language</label>
                            <br>
                        </div>
                        <div class="second">
                            <input type="radio" id="second6" name="q1" value="Hyper Text Markup Language">
                            <label for="second6">Hyper Text Markup Language</label>
                            <br>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="second_half">
                        <div class="third">
                            <input type="radio" id="third6" name="q1" value="Hyperlinks Text Mark Language">
                            <label for="third6">Hyperlinks Text Mark Language</label>
                            <br>
                        </div>
                        <div class="fourth">
                            <input type="radio" id="fourth6" name="q1" value="Hyperlinking Text Marking Language">
                            <label for="fourth6">Hyperlinking Text Marking Language</label>
                            <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="que_ans">
                <div class="question_h">
                    <h2>7. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="first_half">
                        <div class="first">
                            <input type="radio" id="first7" name="q1" value="Hyper Tag Markup Language">
                            <label for="first7">Hyper Tag Markup Language</label>
                            <br>
                        </div>
                        <div class="second">
                            <input type="radio" id="second7" name="q1" value="Hyper Text Markup Language">
                            <label for="second7">Hyper Text Markup Language</label>
                            <br>
                        </div>
                    </div>
                    <!-- second half -->
                    <div class="second_half">
                        <div class="third">
                            <input type="radio" id="third7" name="q1" value="Hyperlinks Text Mark Language">
                            <label for="third7">Hyperlinks Text Mark Language</label>
                            <br>
                        </div>
                        <div class="fourth">
                            <input type="radio" id="fourth7" name="q1" value="Hyperlinking Text Marking Language">
                            <label for="fourth7">Hyperlinking Text Marking Language</label>
                            <br>
                        </div>
                    </div>
                </div>
            </section>

            <section class="que_ans">
                <div class="question_h">
                    <h2>8. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="form-floating text_area">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">please write your answer</label>
                    </div>
                </div>
            </section>
            <section class="que_ans">
                <div class="question_h">
                    <h2>9. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="form-floating text_area">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">please write your answer</label>
                    </div>
                </div>
            </section>
            <section class="que_ans">
                <div class="question_h">
                    <h2>10. What symbol indicates a tag ?</h2>
                </div>
                <div class="ans">
                    <div class="form-floating text_area">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">please write your answer</label>
                    </div>
                </div>
            </section>
            <!-- start exam timer -->
            <?php if($confirm_submission == "yes"){?>
                <div class="timer-section">
                    <script>
                    // Set the date we're counting down to
                    var countDownDate = new Date("Jan 31, 2022 3:40:40").getTime();
    
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
                    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
                    + minutes + "m " + seconds + "s ";
                        
                    // If the count down is over, write some text 
                    if (distance < 0) {
                        clearInterval(x);
                        document.getElementById("linkid").click();
                    }
                    }, 1000);
                    </script>
                </div>
                <?php }?>
                <!-- end exam timer -->
            <section>
                <input id="linkid" type="submit"class="button" name="submit" value="Submit">
            </section>
        </form>
    </div>

    <!-- link bundle js -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
</body>
</html>