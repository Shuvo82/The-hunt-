<?php
    session_start();
    session_destroy();
    header('location: ../Recruiter_login/index.html');
?>