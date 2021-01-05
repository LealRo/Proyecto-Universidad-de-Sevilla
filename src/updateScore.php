<?php

    require_once '../src/connection.php';

    if(isset($_POST['update'])){
        $puntaje = $_POST['puntaje'];
        $idRespuesta = $_POST['idRespuesta'];
        $idSala = $_POST['idSala'];

        $query = "UPDATE respuesta SET puntaje = '$puntaje' WHERE idSala = '$idSala' AND idRespuesta = '$idRespuesta'";

        // Ejecutar query
        if(mysqli_query($conn, $query)) {
            header("Location: ../views/tabla_preguntas.php?idSala=" . $idSala);
        } else {
            echo "Error: " . $query . "<br>" . mysqli_error($conn);
        }

        // Terminar conexion
        mysqli_close($conn);
    
    }
    