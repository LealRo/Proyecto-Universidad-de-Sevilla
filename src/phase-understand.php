<?php 
    /* start session */
    session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        if (count($_POST) > 1) {
            /* get answers */
            $answer = $_POST['answerbody'];
            $relevance = $_POST['answer2'];
            $idSala = $_SESSION['room'];

            /* start db connection */
            require_once 'connection.php';
            
            $sql = "INSERT INTO respuesta (idSala, idTipoRespuesta, texto, puntaje) 
                    VALUES ('$idSala', '4', '$answer', '0'), ('$idSala', '4', '$relevance', '0');";

            if (mysqli_query($conn, $sql)) {
                echo "New records created successfully";
                
                /* redirect to next phase */
                header('location: ../views/phase-answers.php');

            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
            
            mysqli_close($conn);
        }

        /* redirect to next phase */
        header('location: ../views/phase-answers.php');

    }

?>