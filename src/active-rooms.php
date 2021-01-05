<?php 
    /* start db connection */
    require_once 'connection.php';

    /* user id */
    $idMaestro = $_SESSION['id'];

    /* search query */
    $sql = "SELECT idSala AS ID, titulo AS Titulo, clave AS Clave, alumno1 AS 'Integrante 1', alumno2 AS 'Integrante 2' FROM sala WHERE idMaestro = $idMaestro AND estado != 8";

    /* get result */
    $result = mysqli_query($conn, $sql);

    mysqli_close($conn);


?>