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
            <h1 class="display-4 text-center">Ingresa vuestros datos</h1>
            <hr>
            <form action="../src/enter-room.php" method="post" class="needs-validation" novalidate>
                <div class="form-row justify-content-center">
                    <label>Jugador 1</label>
                </div>
                <br>
                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="player1avatar" id="avatarMasc1" value="masculino" required>    
                        <label class="form-check-label" for="avatarMasc1">&nbsp;&nbsp;<img class="mb-4 selectable" id="avatarp1m" src="../public/img/avatar/chico1.png" alt="" width="200px" height="200px"></label>
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="player1avatar" id="avatarFem1" value="femenino">
                        <label class="form-check-label" for="avatarFem1">&nbsp;&nbsp;<img class="mb-4 selectable" id="avatarp1w" src="../public/img/avatar/chica1.png" alt="" width="200px" height="200px"></label>
                    </div>
                    <div class="form-group col-5">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="player1name" name="player1name" autocomplete="off" required>
                        <div class="valid-feedback">Correcto</div>
                        <div class="invalid-feedback">Falta este campo</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-2 offset-2"><input type="image" id="left-p1m" src="../public/img/left-arrow.png" width="32px" height="32px" /><input type="image" id="right-p1m" src="../public/img/right-arrow.png" width="32px" height="32px" /></div>
                    <div class="col-2 offset-1"><input type="image" id="left-p1w" src="../public/img/left-arrow.png" width="32px" height="32px" /><input type="image" id="right-p1w" src="../public/img/right-arrow.png" width="32px" height="32px" /></div>
                </div>
                <hr>
                <br>
                <div class="form-row justify-content-center">
                    <label>Jugador 2</label>
                </div>
                <div class="form-row">
                    <div class="col-1"></div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="player2avatar" id="avatarMasc2" value="masculino" required>    
                        <label class="form-check-label" for="avatarMasc2">&nbsp;&nbsp;<img class="mb-4 selectable" id="avatarp2m" src="../public/img/avatar/chico1.png" alt="" width="200px" height="200px"></label>
                    </div>
                    <div class="form-check col-3">
                        <input class="form-check-input" type="radio" name="player2avatar" id="avatarFem2" value="femenino">
                        <label class="form-check-label" for="avatarFem2">&nbsp;&nbsp;<img class="mb-4 selectable" id="avatarp2w" src="../public/img/avatar/chica1.png" alt="" width="200px" height="200px"></label>
                    </div>
                    <div class="form-group col-5">
                        <label for="name">Nombre:</label>
                        <input type="text" class="form-control" id="player2name" name="player2name" autocomplete="off" required>
                        <div class="valid-feedback">Correcto</div>
                        <div class="invalid-feedback">Falta este campo</div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-2 offset-2"><input type="image" id="left-p2m" src="../public/img/left-arrow.png" width="32px" height="32px" /><input type="image" id="right-p2m" src="../public/img/right-arrow.png" width="32px" height="32px" /></div>
                    <div class="col-2 offset-1"><input type="image" id="left-p2w" src="../public/img/left-arrow.png" width="32px" height="32px" /><input type="image" id="right-p2w" src="../public/img/right-arrow.png" width="32px" height="32px" /></div>
                </div>
                <br>
                <input type="hidden" id="roomid" name="roomid" value="<?php echo $roomid ?>">
                <br>
                <div class="text-center"><button type="submit" class="btn btn-success btn-block">Comenzar <i class="fas fa-arrow-right"></i></button></div>
                
            </form>
        </div>

        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Template's JS -->
        <script src="../public/js/avatar-selector.js"></script>

    </body>
</html>