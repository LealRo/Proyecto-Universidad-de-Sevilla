<?php 
    
    if(isset($_GET['idSala'])) {

        require_once 'connection.php';

        $idSala = $_GET['idSala'];

        $questions = array();
        $answers = array();
        $strategies = array();
        $key = false;
        $understand = true;

        /* get answers type 1 */
        $sql = "SELECT texto FROM respuesta WHERE idSala = $idSala AND idTipoRespuesta = '1'";
        if ($result = mysqli_query($conn, $sql)) {
            $key = true;

            while ($row = mysqli_fetch_row($result)) {
                array_push($questions, $row[0]);
            }

            mysqli_free_result($result);

            /* get answers type 2 */
            $sql = "SELECT texto FROM respuesta WHERE idSala = $idSala AND idTipoRespuesta = '2'";
            if ($result = mysqli_query($conn, $sql)) {
                
                while ($row = mysqli_fetch_row($result)) {
                    array_push($answers, $row[0]);
                }

                mysqli_free_result($result);

                /* get answers type 3 */
                $sql = "SELECT texto FROM respuesta WHERE idSala = $idSala AND idTipoRespuesta = '3'";
                if ($result = mysqli_query($conn, $sql)) {
                    while ($row = mysqli_fetch_row($result)) {
                        array_push($strategies, $row[0]);
                    }

                    mysqli_free_result($result);

                    /* get answers type 4 */
                    $sql = "SELECT texto FROM respuesta WHERE idSala = $idSala AND idTipoRespuesta = '4'";
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result) > 0) {
                        $understand = false;
                        $row = mysqli_fetch_row($result);
                        $reason = $row[0];
                    } else {

                        $reason = "Los alumnos pudieron comprender en su totalidad el texto";
                    }
                }
            }
        }
        mysqli_close($conn);
    }
?>