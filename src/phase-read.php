<?php 
    /* start db connection */
    require_once 'connection.php';

    $idSala = $_SESSION['room'];

    /* select query */
    $sql = "SELECT idCuento FROM sala WHERE idSala = $idSala";
    
    /* execute query */
    $result = mysqli_query($conn, $sql);

    /* get row */
    $row = mysqli_fetch_assoc($result);
    
    /* save result */
    $idCuento = $row['idCuento'];

    /* select query */
    $sql = "SELECT ruta FROM cuento WHERE idCuento = $idCuento";
    
    /* execute query */
    $result = mysqli_query($conn, $sql);

    /* get row */
    $row = mysqli_fetch_assoc($result);

    /* save result */
    $_SESSION['cuento'] = $row['ruta'];

    mysqli_close($conn);
?>