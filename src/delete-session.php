<?php 
    session_start();

    /* unset all of the session variables */
    $_SESSION = array();

    /* destroy the session */
    session_destroy();

    header('location: ../public/index.php');
?>