<?php

    require_once '../src/connection.php';

    if(isset($_POST['update'])){
        $puntaje = $_POST['puntaje'];
        $idRespuesta = $_POST['idRespuesta'];
        $idSala = $_POST['idSala'];

        $query = "UPDATE respuesta SET puntaje = '$puntaje' WHERE idSala = '$idSala' AND idRespuesta = '$idRespuesta'";

        // Ejecutar query
        if(mysqli_query($conn, $query)) {

            $sql = "SELECT SUM(puntaje) AS Total FROM respuesta WHERE idSala = $idSala;";
            if ($result = mysqli_query($conn, $sql)) {
                $row = mysqli_fetch_row($result);
    
                $finalScore = $row[0];

                $sql = "UPDATE sala SET puntaje = $finalScore WHERE idSala = $idSala";

                if (mysqli_query($conn, $sql)) {
                    header("Location: ../views/tabla_preguntas.php?idSala=" . $idSala);
                }
            }
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

        // Terminar conexion
        mysqli_close($conn);
    
    }
    