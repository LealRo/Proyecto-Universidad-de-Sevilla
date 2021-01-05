<?php
    /* init session */
    session_start(); 

    /* start db connection */
    require_once 'connection.php';

    $idSala = $_SESSION['room'];

    $sql = "UPDATE sala SET estado = '4' WHERE idSala = '$idSala'";

    if (mysqli_query($conn, $sql)) {
        echo 'Game state updated successfully';
        header('location: ../views/phase-yes-no.php');
    } else {
        echo 'Error updating game state';
    }

    mysqli_close($conn);
?>