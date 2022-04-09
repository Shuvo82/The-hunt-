<?php
    session_start();
    session_destroy();
    header('location: ../job_seeker_login/index.html');
?>