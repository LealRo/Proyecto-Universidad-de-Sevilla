<?php 
    /* start session */
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* get post values */
        $key = $_POST['answer'];

        if ($key) {
            $_SESSION['cananswer'] = 1;
        } else {
            $_SESSION['cananswer'] = 0;
        }

        header('location: ../views/phase-understand.php');
    }


?>