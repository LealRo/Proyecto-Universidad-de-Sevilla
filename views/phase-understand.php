<?php 
    /* protect direct url access */
    require_once '../src/authenticate-phase.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/phase-understand.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Comprende</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <div class="col offset-10">
                    <div id="myProgress">
                        <div id="myBar">75%</div>
                    </div> 
                </div>
            </div>
            <h1 class="display-4">Comprende</h1>
            <hr>
            <br>
            <form action="../src/phase-understand.php" method="post" id="form-understand">
                <div class="form-row justify-content-center">
                    <h1 class="display-4" style="font-size: 30px">¿Hay algo en el texto que no hayas comprendido?</h1>
                </div>
                <br>
                <div class="form-row justify-content-center" id="question">
                    <div class="form-check col col-lg-2">
                        <label>
                            <input class="form-check-input" type="radio" name="answer" id="yes" value="1" required>
                            <img class="mb-4 selectable" src="../public/img/check.png" alt="" width="128px" height="128px">
                            <br>
                            <h5 style="color: green;">Sí</h5>
                        </label>
                    </div>
                    <div class="form-check col col-lg-2">
                        <label>
                            <input class="form-check-input" type="radio" name="answer" id="no" value="0">
                            <img class="mb-4 selectable" src="../public/img/cross.png" alt="" width="128px" height="128px"><br>
                            <h5 style="color: red;">No</h5>
                        </label>
                    </div>
                </div>
                <br>
                <br>
                <button type="submit" id="enviar" class="btn btn-success">Siguiente <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>

        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Template's JS -->
        <script src="../public/js/phase-understand.js"></script>
  </body>
</html>