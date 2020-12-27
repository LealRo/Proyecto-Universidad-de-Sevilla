<?php 
    require_once '../src/validate-room-code.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="./css/index.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>

        <title>Bienvenido</title>
    </head>
    <body> 
        <!-- Main Content -->
        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <!-- <h1 class="display-3 text-primary">Bienvenido</h1> -->
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title display-4">Alumno</h2>
                            <p class="lead">
                            Ingresa la clave de la sesión brindada por tu maestro.
                            </p>
                            <!-- Room Code Form -->
                            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" class="needs-validation" novalidate>
                                <div class="form-group">
                                    <input type="text" class="form-control <?php echo $codeInvalid; ?>" id="roomid" name="roomid" placeholder="Clave" autocomplete="off" required>
                                    <div class="invalid-feedback">Lo sentimos, el codigo es invalido</div>
                                </div>
                                <button type="submit" class="btn btn-success btn-block"><i class="fas fa-sign-in-alt"></i> Entrar</button>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <br>
            <div class="row justify-content-center">
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <a class="btn btn-secondary btn-block" href="../views/login.php" role="button"><i class="fas fa-chalkboard-teacher"></i> Maestro</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Template's JS -->
        <script src="js/needsValidation.js"></script>
    </body>
</html>