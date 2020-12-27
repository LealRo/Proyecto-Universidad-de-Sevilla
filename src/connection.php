<?php 

    /* database credentials */
    define('DB_HOST', 'localhost:3307');
    define('DB_USER', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'is_prueba');

    /* create connection */
    $conn = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

    /* check connection */
    if (!$conn) {
        echo '<script>console.log("Connection failed")</script';
        die("Connection failed" . mysqli_connect_error());
    }
    else {
        echo '<script>console.log("Connection success")</script';
    }
    
?>