<?php
    /* process form data */
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* start session */
        session_start();

        /* start database connection */
        require_once 'connection.php';

       /*  echo '<script>alert("hey");</script>'; */
        /* get post values */
        $titulo = $_POST['titulo'];
        $idCuento = $_POST['cuento'];
        $duracion = $_POST['duracion'];
        $idMaestro = $_SESSION['id'];

        /* create unique rom key */
        $length = random_bytes("4");
        $clave = bin2hex($length);

        /* 
            FALTA AGREGAR UNA COLUMNA PARA EL "ESTADO" DE LA SALA, ES DECIR  
            EN QUE FASE DE LA ACTIVIDAD SE ESTA 
        */

        /* insert query */
        $sql = "INSERT INTO sala (idMaestro, idCuento, titulo, clave, alumno1, alumno2, puntaje, duracion, estado)
                VALUES ('$idMaestro', '$idCuento', '$titulo', '$clave', ' ', ' ', ' ', '$duracion', '0')";
        
        /* attempt to execute insert query */
        if (mysqli_query($conn, $sql)) {
            echo 'Room created succesfully!';
        }
        else {
            echo 'Room creation failed!' . mysqli_error($conn);
        }

        mysqli_close($conn);

        header('location: ../views/rooms.php');
    }
?>