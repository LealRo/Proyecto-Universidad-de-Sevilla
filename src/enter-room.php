<?php
    // session_start();

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* start database connection */
        require_once 'connection.php';
        echo '<script>console.log("si hay results");</script>';
        /* get post data */
        $nombres = $_POST['name'];
        $clave = $_POST['roomid'];

        /* sql statement */
        $sql = "SELECT idSala FROM sala WHERE clave = '$clave'";

        /* execute query */
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            /* store room data inside session variables */
            // $_SESSION['room'] = $row['idSala'];
            // $_SESSION['student'] = $nombres;
        } else {
            echo '<script>console.log("0 results");</script>';
        }

        /* free result set */
        mysqli_free_result($result);

        mysqli_close($conn);
    }
?>