<?php
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* start database connection */
        require_once 'connection.php';

        /* get post data */
        $clave = $_POST['roomid'];
        $alumno1 = $_POST['player1name'];
        $alumno2 = $_POST['player2name'];
        $alumno1avatar = $_POST['player1avatar'];
        $alumno2avatar = $_POST['player2avatar'];
        

        /* sql statement */
        $sql = "SELECT idSala FROM sala WHERE clave = '$clave' AND estado != 8";

        /* execute query */
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $idSala = $row['idSala'];
            /* store room data inside session variables for future db access */
            $_SESSION['room'] = $idSala;
            
            /* insert players into room data */
            $sql = "UPDATE sala SET alumno1 = '$alumno1', alumno2 = '$alumno2' WHERE idSala = '$idSala'";
            if (mysqli_query($conn, $sql)) {
                /* update game state */
                $sql = "UPDATE sala SET estado = 1 WHERE idSala = '$idSala'";
                if (mysqli_query($conn, $sql)) {
                    echo '<script>console.log("Game state -> 1: Title screen");</script>';
                    header("location: ../views/phase-title.php?room=$clave");
                } else {
                    echo '<script>console.log("Error updating game state");</script>';
                }
            } else {
                echo '<script>console.log("Error updating players");</script>';
            }
        } else {
            echo '<script>console.log("0 results");</script>';
        }

        /* free result set */
        mysqli_free_result($result);

        mysqli_close($conn);
    }
?>