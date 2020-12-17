<?php 
    /* init session */
    session_start();

    /* check if the user is already logged in, if yes then redirect him to home page */
    if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
        header('location: menu.php');
        exit;
    } 

    /* start database connection */
    require_once 'connection.php';

    /* def and init variables */
    $email = $password = '';
    $email_err = $password_err = 'Falta este campo!';
    $email_fb = $password_fb = '';

    /* process form data when submiting */
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        /* validate credentials */
        $email = trim($_POST['email']);
        $password = trim($_POST['password']);

        /* sql statement */
        $sql = "SELECT idMaestro, email, password FROM maestro WHERE email = '$email'";

        /* attempt to execute query */
        if ($result = mysqli_query($conn, $sql)) {
            /* check if email exists, if yes then verify password */
            if (mysqli_num_rows($result) == 1) {
                $row = mysqli_fetch_assoc($result);
                /* verify password */
                if ($password == $row['password']) {
                    /* password is correct */
                    session_start();
                    $_SESSION['loggedin'] = true;
                    $_SESSION['id'] = $row['idMaestro'];
                    
                    /* redirect to main menu */
                    header('location: ../views/menu.php');
                }
                else {
                    /* display msg if password is not valid */
                    $password_err = 'La contraseña es incorrecta!';
                    $password_fb = 'is-invalid';
                }
            }
            else {
                /* display msg if email does not exist */
                $email_err = 'El correo es incorrecto!';
                $email_fb = 'is-invalid';
            }
        }
        else {
            echo '<script>alert("Query execution failed!");</script>';
        }

        mysqli_close($conn);
    }
?>