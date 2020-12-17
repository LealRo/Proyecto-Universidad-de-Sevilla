<?php 

    /* database credentials */
    define('DB_HOST', 'localhost');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'sevilla');

    /* create connection */
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    /* check connection */
    if (!$conn) {
        die("Connection failed" . mysqli_connect_error());
    }
    else {
        echo '<script>console.log("Connection success")</script';
    }
    
?>