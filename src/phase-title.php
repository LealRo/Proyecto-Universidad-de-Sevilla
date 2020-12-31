<?php 
    if (isset($_SESSION['room'])) {
        /* start db connection */
        require_once 'connection.php';
        $idSala = $_SESSION['room'];

        /* get title from room table inside the database */
        $sql = "SELECT cuento.titulo from cuento INNER JOIN sala ON cuento.idCuento = sala.idCuento WHERE sala.idSala = '$idSala'";

        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $title = $row['titulo'];
        } else {
            $title = 'not found';
        }

        mysqli_close($conn);
    }
?>