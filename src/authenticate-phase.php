<?php 
    /* init session */
    session_start();

    /* check if there is an ongoing session */
    if (!isset($_SESSION['room'])) {
        /* if not, block direct url access to whichever activity phase */
        header('location: ../public/index.php');
        exit;
    }
?>