<?php 
    if (isset($_GET['room'])) {
        $roomid = $_GET['room'];
    } else {
        /* block direct url access, room code needed */
        header('location: ../public/index.php');
        exit;
    } 
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/enter-room.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>

        <title>Entar a sesion</title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h1 class="display-4">Ingresa tus datos</h1>
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col-2 text-center">
                    <label>Avatar:</label>
                </div>
                <div class="col-4 text-left">
                    <img class="mb-4 selectable" src="../public/img/Hombre.png" alt="" width="110px" height="159px">
                    <img class="mb-4 selectable" src="../public/img/Mujer.png" alt="" width="110px" height="159px">
                
                </div>
                <div class="col-6">
                    <form action="../src/enter-room.php" method="post" class="needs-validation" novalidate>
                        <div class="form-group">
                            <label for="name">Nombre:</label>
                            <input type="text" class="form-control" id="name" name="name" autocomplete="off" required>
                            <div class="valid-feedback">Correcto</div>
                            <div class="invalid-feedback">Falta este campo</div>
                        </div>
                        <input type="hidden" id="roomid" name="roomid" value="<?php echo $roomid ?>">
                        <button type="submit" class="btn btn-success btn-block">Comenzar</button>
                    </form>
                </div>
            </div>
        </div>

        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Template's JS -->
        <script src="../public/js/needsValidation.js"></script>
    </body>
</html>