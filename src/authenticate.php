<?php 
    /* init session */
    session_start();

    /* check if user is logged in, if not then redirect to login page */
    if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
        header('location: login.php');
        exit;
    }
?>