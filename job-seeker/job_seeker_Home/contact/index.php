<?php
    require_once('../../../db/dbh.php');
    session_start();
	if (!isset($_SESSION['job_seeker_id'])){
		header('location:../../job_seeker_login/index.html');
	}
    $job_seeker_id = $_SESSION['job_seeker_id'];

    $query1 = "SELECT * FROM `job_seeker` WHERE job_seeker_id = $job_seeker_id ;";
    $create_query1 = mysqli_query($conn,$query1);
    $result = mysqli_fetch_array($create_query1);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>Contact Form</title>
        <link rel="stylesheet" href="./style.css" />
        <script
        src="https://kit.fontawesome.com/64d58efce2.js"
        crossorigin="anonymous"
        ></script>
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
                        <li><a href="../seeker_profile/index.php">Profile</a></li>
                        <li><a href="../../job_seeker_logout/logoutprocess.php">logout</a></li>
                        <li><a href="#">Review</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header End -->
    <section>
        <div class="container">
        <span class="big-circle"></span>
        <img src="#" class="square" alt="" />
        <div class="form">
            <div class="contact-info">
            <h3 class="title">Let's get in touch</h3>
            <p class="text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe
                dolorum adipisci recusandae praesentium dicta!
            </p>

            <div class="info">
                <div class="information">
                <img src="img/location.png" class="icon" alt="" />
                <p>1212 Dhaka, Bangladesh</p>
                </div>
                <div class="information">
                <img src="img/email.png" class="icon" alt="" />
                <p>noob@admin.com</p>
                </div>
                <div class="information">
                <img src="img/phone.png" class="icon" alt="" />
                <p>123-456-789</p>
                </div>
            </div>

            <div class="social-media">
                <p>Connect with us :</p>
                <div class="social-icons">
                <a href="#">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                </div>
            </div>
            </div>

            <div class="contact-form">
            <span class="circle one"></span>
            <span class="circle two"></span>

            <form action="contact_process.php" method="POST">
                <h3 class="title">Drop Your Complain Here </h3>
                <div class="input-container">
                <input type="text" name="name" class="input" />
                <label for=""><?php echo $result['user_name'];?></label>
                <span>Username</span>
                </div>
                <div class="input-container">
                <input type="email" name="email" class="input" />
                <label for=""><?php echo $result['email'];?></label>
                <span>Email</span>
                </div>
                <div class="input-container">
                <input type="text" name="contact" class="input" />
                <label for=""><?php echo $result['contact'];?></label>
                <span>contact</span>
                </div>
                <div class="input-container textarea">
                <textarea name="message" class="input"></textarea>
                <label for="">Message</label>
                <span>Message</span>
                </div>
                <input type="submit" value="Send" name="send" class="btn" />
            </form>
            </div>
        </div>
    </div>
    </section>

    <script src="app.js"></script>
    </body>
</html>
