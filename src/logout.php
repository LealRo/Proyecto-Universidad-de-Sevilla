<?php 
    require_once 'authenticate.php';
    
    /* unset all of the session variables */
    $_SESSION = array();

    /* destroy the session */
    session_destroy();

    /* redirect to index page */
    header('location: ../public/index.php');
    exit;
?>