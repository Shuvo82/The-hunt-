<?php
    require_once('../../db/dbh.php');
    session_start();

    if (!isset($_SESSION['recruiter_id'])){
        header('location: ../Recruiter/Recruiter_login/index.html');
    }
    $recruiter_id = $_SESSION['recruiter_id'];
    $apply_id = $_GET['apply_id'];

    $applyquery = "SELECT * FROM `applied_job` WHERE apply_id=$apply_id;";
    $applyexecute = mysqli_query($conn, $applyquery);
    $applyResult = mysqli_fetch_array($applyexecute);
    
    /* job seeker table */
    $seeker_id = $applyResult['job_seeker_id'];
    $JobSeekerquery = "SELECT * FROM `job_seeker` WHERE job_seeker_id=$seeker_id;";
    $JobSeekerexecute = mysqli_query($conn, $JobSeekerquery);
    $JobSeekerResult = mysqli_fetch_array($JobSeekerexecute);

    $seeker_name = $JobSeekerResult['first_name'] . ' ' . $JobSeekerResult['last_name'];
    $seeker_address = $JobSeekerResult['address'];
    $seeker_contact = $JobSeekerResult['contact'];
    $seeker_email = $JobSeekerResult['email'];

    /* seeker cv */
    $CVerquery = "SELECT * FROM `seeker_cv` WHERE seeker_id=$seeker_id;";
    $CVexecute = mysqli_query($conn, $CVerquery);
    $CVResult = mysqli_fetch_array($CVexecute);

    $seeker_bio = $CVResult['bio'];
    $seeker_edu1 = $CVResult['education1'];
    $seeker_uni1 = $CVResult['university1'];
    $seeker_dept1 = $CVResult['department1'];
    $seeker_edu2 = $CVResult['education2'];
    $seeker_uni2 = $CVResult['university2'];
    $seeker_dept2 = $CVResult['department2'];

    $seeker_ex_job_position = $CVResult['ex_job_position'];
    $seeker_ex_company = $CVResult['ex_company'];
    $seeker_ex_duration = $CVResult['ex_duration'];

    /* job post table */
    $post_id = $applyResult['post_id'];
    $Postquery = "SELECT * FROM `job_post` WHERE post_id=$post_id;";
    $Postexecute = mysqli_query($conn, $Postquery);
    $PostResult = mysqli_fetch_array($Postexecute);

    $post_position = $PostResult['job_position'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- link font awesome -->
    <script src="https://kit.fontawesome.com/4cbe1769e6.js" crossorigin="anonymous"></script>
    <!-- link bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- link css -->
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <div class="back" style="margin-left: 30px; padding-top: 30px; font-size: 20px; font-weight: 500;">
        <a href="../applicants/index.php?post_id=<?php echo $post_id;?>">Back</a>
    </div>
    <div class="container my-5">
        <div class="row g-0">
            <div class="col-lg-3 left ">
                <div class="img my-5 d-flex justify-content-center ">
                    <img width="200" height="200" class=" border border-3 rounded-circle " src="./images/undraw_male_avatar_323b.svg" alt="">
                </div>
                <div class="contact">
                    <h4 class="cnt text-white">CONTACT</h4>
                    <hr class="text-white line">
                    <div class="all_info">
                        <div class="social_info">
                            <div class="location d-flex align-items-center">
                                <div class=""><i class="fas fa-map-marker-alt text-white "></i></div>
                                <div class="text-white">&nbsp;<?php echo $seeker_address;?></div>
                            </div>
                            <div class="telephone d-flex align-items-center">
                                <div class=""><i class="fas fa-phone-alt text-white"></i></div>
                                <div class="text-white">&nbsp;+88 <?php echo $seeker_contact;?></div>
                            </div>
                            <div class="email d-flex align-items-center">
                                <div class=""><i class="fas fa-envelope-open-text text-white"></i></div>
                                <div class="text-white"> &nbsp;<?php echo $seeker_email;?></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- info end -->
                <div class="education">
                    <h4 class="edu text-white">Education</h4>
                    <hr class="text-white line">
                    <div class="alignment">
                        <div class="master">
                            <div class="edu_info_first">
                                <p><?php echo $seeker_edu1;?>'s' in <?php echo $seeker_dept1;?></p>
                                <p>JAN 2015-DEC 2018</p>
                                <p><?php echo $seeker_uni1;?></p>
                            </div>
                        </div>
                        <div class="bachelor mt-4">
                            <div class="edu_info_second">
                                <p><?php echo $seeker_edu2;?>'s' in <?php echo $seeker_dept2;?></p>
                                <p>JAN 2015-DEC 2018</p>
                                <p><?php echo $seeker_uni2;?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end education -->
                <div class="references">
                    <h4 class="ref text-white">REFERENCE</h4>
                    <hr class="text-white line">
                    <div class="alignment">
                        <div class="">
                            <div class="references_first">
                                <p>MR.JAMES COLLENWIE</p>
                                <p>CHIEF Enginner, MIN Technologies</p>
                            </div>
                        </div>
                        <div class="">
                            <div class="references_second">
                                <p>Email: someone@mail.com</p>
                                <p>Mobile: +123 456 789</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 right bg-white shadow-lg">
                
                    <div class="heading p-5">
                        <h1 class="text-center"><?php echo $seeker_name;?></h1>
                        <hr class="text-center name_hr" style="margin-left: 297px;">
                        <h6 class="text-center"><?php echo $post_position;?></h6>
                    </div>
                <div class="profile_section">
                    <div class="profile">
                        <h2 class="mt-5">PROFILE</h2>
                        <hr class="profile_hr">
                        <p class="profile_txt mt-4 mb-5"><?php echo $seeker_bio;?></p>
                    </div>
                    <div class="experience">
                        <div class="exp_head">
                            <h2>WORK EXPERIENCE</h2>
                            <hr class="exp_hr">
                        </div>
                        <div class="ext_position">
                            <div class="pos_place">
                                <div class="">
                                    <p class="job_pos"><?php echo $seeker_ex_job_position;?></p>
                                    <i class="pos_place">LEO Company, Paris-France</i>
                                </div>
                                <div class="work_duration offset-6">
                                    <i><?php echo $seeker_ex_duration;?></i>
                                </div>
                            </div>
    
                            <p class="pos_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et similique dignissimos illo unde perferendis sint numquam pariatur necessitatibus nisi veniam explicabo, nobis corporis neque ducimus cumque. Nisi consequatur quis numquam!</p>
                        </div>
                        <div class="ext_position">
                            <div class="pos_place">
                                <div class="">
                                    <p class="job_pos">Senior Manager</p>
                                    <i class="pos_place">LEO Company, Paris-France</i>
                                </div>
                                <div class="work_duration offset-6">
                                    <i>JAN 2016-DEC 2019</i>
                                </div>
                            </div>
    
                            <p class="pos_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et similique dignissimos illo unde perferendis sint numquam pariatur necessitatibus nisi veniam explicabo, nobis corporis neque ducimus cumque. Nisi consequatur quis numquam!</p>
                        </div>
                        <div class="ext_position">
                            <div class="pos_place">
                                <div class="">
                                    <p class="job_pos">Senior Manager</p>
                                    <i class="pos_place">LEO Company, Paris-France</i>
                                </div>
                                <div class="work_duration offset-6">
                                    <i>JAN 2016-DEC 2019</i>
                                </div>
                            </div>
    
                            <p class="pos_txt">Lorem ipsum dolor sit amet consectetur adipisicing elit. Et similique dignissimos illo unde perferendis sint numquam pariatur necessitatibus nisi veniam explicabo, nobis corporis neque ducimus cumque. Nisi consequatur quis numquam!</p>
                        </div>
                    </div>
                    <!-- skills -->
                    <div class="skills">
                        <h2>SKILLS</h2>
                        <hr class="skills_hr">
                        <ul class="all_skills">
                            <div class="first_half">
                                <li>Strategic Fomentation</li>
                                <li>Attention to DEtail</li>
                                <li>Customer Focus</li>
                                <li>Verbal Communication</li>
                            </div>
                            <div class="second_half">
                                <li>Strategic Fomentation</li>
                                <li>Attention to DEtail</li>
                                <li>Customer Focus</li>
                                <li>Verbal Communication</li>
                            </div>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- bundle js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>