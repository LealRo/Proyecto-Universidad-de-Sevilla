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

        /* start db connection */
        require_once 'connection.php';

        $idSala = $_SESSION['room'];

        $sql = "UPDATE sala SET estado = '5' WHERE idSala = '$idSala'";

        if (mysqli_query($conn, $sql)) {
            echo 'Game state updated successfully';
            header('location: ../views/phase-understand.php');
        } else {
            echo 'Error updating game state';
        }

        mysqli_close($conn); 
    }
?>