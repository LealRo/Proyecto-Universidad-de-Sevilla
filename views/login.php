<?php 
    require_once '../src/login.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/login.css">
            
        <title>Iniciar sesión</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid text-center">
            <h2 class="display-4 text-secondary">Maestro</h2>
            <br>
            <img class="mb-4" src="../public/img/user.png" alt="" width="150px" height="150px">
            <!-- Login Form -->
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="needs-validation" novalidate>
                <div class="form-group">
                    <i class="fa fa-user"></i>
                    <input type="text" class="form-control <?php echo $email_fb; ?>" name="email" placeholder="Correo electrónico" value="<?php echo $email; ?>" required>
                    <div class="invalid-feedback"><?php echo $email_err; ?></div>
                </div>
                <div class="form-group">
                    <i class="fa fa-lock"></i>
                    <input type="password" class="form-control <?php echo $password_fb; ?>" name="password" placeholder="Contraseña" required>
                    <div class="invalid-feedback"><?php echo $password_err; ?></div>				
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success btn-block btn-lg" value="Iniciar sesión">
                </div>
            </form>   
            <a href="#">¿Olvidaste Contraseña?</a>
        </div>
        <p class="mt-5 mb-3 text-muted text-center">&copy; 2020-2021</p>
        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Template's JS -->
        <script src="../public/js/needsValidation.js"></script>
    </body>
</html>