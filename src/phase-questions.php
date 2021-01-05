<?php 
    /* start session */
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* start db connection */
        require_once 'connection.php';

        $idSala = $_SESSION['room'];
        $respuestas = array();

        /* base query format */
        $sql = "INSERT INTO respuesta (idSala, idTipoRespuesta, texto, puntaje) VALUES";

        /* get each post value and store it inside array */
        foreach ($_POST as $key => $value) {
            array_push($respuestas, $value);
        }
        
        /* composing the insert query dynamically */
        for ($i = 0; $i < count($_POST); $i++) {
            if ($i == (count($_POST) - 1)) {
                $sql .= " ('$idSala', '1', '$respuestas[$i]', '10');";
                break;
            }
            $sql .= " ('$idSala', '1', '$respuestas[$i]', '10'),";
        }
        
        /* attempt to execute query */
        if (mysqli_query($conn, $sql)) {
            echo '<script>console.log("New records created successfully");</script>';
            
            /* Update game state */
            $sql = "UPDATE sala SET estado = '3' WHERE idSala = '$idSala'";

            if (mysqli_query($conn, $sql)) {
                echo 'Game state updated successfully';
                header('location: ../views/phase-read.php');
            } else {
                echo 'Error updating game state';
            }
        } else {
            echo '<script>console.log("Failed to create new records");</script>';
        }

        mysqli_close($conn);
    }
?>