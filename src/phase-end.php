<?php 
    /* start db connection */
    require_once 'connection.php';

    $idSala = $_SESSION['room'];

    $sql = "SELECT SUM(puntaje) AS Total FROM respuesta WHERE idSala = $idSala;";
    $result = mysqli_query($conn, $sql);

    $row = mysqli_fetch_row($result);
    
    $finalScore = $row[0];

    $sql = "UPDATE sala SET puntaje = $finalScore WHERE idSala = $idSala";
    mysqli_query($conn, $sql);
    
    mysqli_close($conn);
?>