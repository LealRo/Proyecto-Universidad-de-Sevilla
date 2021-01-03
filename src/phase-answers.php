<?php
    /* start db connection */
    require_once 'connection.php';

    $idSala = $_SESSION['room'];
    $index = 1;

    $sql = "SELECT texto FROM respuesta WHERE idSala = '$idSala' AND idTipoRespuesta = '1'";

    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);
?>