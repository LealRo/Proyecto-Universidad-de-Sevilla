<?php 
    /* start db connection */
    require_once 'connection.php';

    /* init variables */
    $codeInvalid = '';

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* get POST data */
        $roomCode = $_POST['roomid'];

        /* sql statement */
        $sql = "SELECT * FROM sala WHERE clave = '$roomCode' AND estado != 7";

        /* attempt to execute query */
        $result = mysqli_query($conn, $sql);

        /* check to see if there is an active room with that code */
        if (mysqli_num_rows($result) > 0) { 
            header("location: ../views/enter-room.php?room=$roomCode");
         }
        else {
            $codeInvalid = 'is-invalid';
        }
    }

    mysqli_close($conn);
?>

