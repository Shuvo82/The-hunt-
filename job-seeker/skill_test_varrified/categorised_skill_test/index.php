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
    <link rel="stylesheet" href="style1.css">
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
                        <li><a href="../../job/index.php">Jobs</a></li>
                        <li><a href="../job_seeker_logout/logoutprocess.php">logout</a></li>
                        <li><a href="../../job-seeker/contact/index.php">Contact</a></li>
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
<div class="mcq">
    <h1>MCQ Application</h1>
    <div class="mcq-question">
        <form action="../status/index.php" method="post">
            <p>1. What does HTML stand for?</p>
            A. <input type="radio" name="q1" value="Hyper Tag Markup Language">Hyper Tag Markup Language <br><br>
            B. <input type="radio" name="q1" value="Hyper Text Markup Language">Hyper Text Markup Language<br><br>
            C. <input type="radio" name="q1" value="Hyperlinks Text Mark Language">Hyperlinks Text Mark Language <br><br>
            D. <input type="radio" name="q1" value="Hyperlinking Text Marking Language">Hyperlinking Text Marking Language <br><br>

            <p>2. What symbol indicates a tag?</p>
            A. <input type="radio" name="q2" value="Angle brackets e.g.">Angle brackets e.g. <br><br>
            B. <input type="radio" name="q2" value="Curved brackets e.g. {,}">Curved brackets e.g. {,} <br><br>
            C. <input type="radio" name="q2" value="Commas e.g. ','">Commas e.g. ','<br><br>
            D. <input type="radio" name="q2" value="Exclamation marks e.g. !">Exclamation marks e.g. !<br><br>

            <p>3. Which of these is a genuine tag keyword?</p>
            A. <input type="radio" name="q3" value="Header">Header<br><br>
            B. <input type="radio" name="q3" value="Bold">Bold<br><br>
            C. <input type="radio" name="q3" value="Body">Body <br><br>
            D. <input type="radio" name="q3" value="Image">Image <br><br>


            <p>4. A CSS file can be applied to only one HTML file.</p>
            A. <input type="radio" name="q4" value="True">True<br><br>
            B. <input type="radio" name="q4" value="False">False <br><br>

            <p>5. What does CSS stand for?</p>
            A. <input type="radio" name="q5" value="Computing Style Sheet">"Computing Style Sheet"<br><br>
            B. <input type="radio" name="q5" value="Creative Style System">Creative Style System<br><br>
            C. <input type="radio" name="q5" value="Cascading Style Sheet">Cascading Style Sheet<br><br>
            D. <input type="radio" name="q5" value="Creative Styling Sheet">Creative Styling Sheet<br><br>

            <p>6. Which of these is a genuine tag keyword?</p>
            A. <input type="radio" name="q6" value="Header">Header<br><br>
            B. <input type="radio" name="q6" value="Bold">Bold<br><br>
            C. <input type="radio" name="q6" value="Body">Body <br><br>
            D. <input type="radio" name="q6" value="Image">Image <br><br>

            <p>7. Where should a CSS file be referenced in a HTML file?</p>
            A. <input type="radio" name="q7" value="Before any HTML code">Before any HTML code<br><br>
            B. <input type="radio" name="q7" value="After all HTML code">After all HTML code<br><br>
            C. <input type="radio" name="q7" value="Inside the head section">Inside the head section<br><br>
            D. <input type="radio" name="q7" value="Inside the body section">Inside the body section <br><br>

            <p>8. What happens if a string is added to an integer using the + operator, in PHP?</p>
            <textarea rows = "5" cols = "60" name = "q8"></textarea><br><br>

            <p>9. What does URL mean?</p>
            <textarea rows = "5" cols = "60" name = "q9"></textarea><br><br>

            <p>10. Javascript is _________ language.</p>
            <textarea rows = "5" cols = "60" name = "q10"></textarea><br><br>

            <input type="submit"class="button" name="submit" value="Submit">
        </form>
    </div>

    </div>


</body>
</html>