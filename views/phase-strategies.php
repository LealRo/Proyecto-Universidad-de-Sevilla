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
        <link rel="stylesheet" href="../public/css/phase-strategies.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Pregunta</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid text-center">
            <div class="row justify-content-center">
                <div class="col offset-10">
                    <div id="myProgress">
                        <div id="myBar">98%</div>
                    </div> 
                </div>
            </div>
            <h1 class="display-4">¿Qué puedes hacer cuando no puedes responder a las preguntas o no entiendes algo del texto?</h1>
            <hr>
            <br>
            <button type="button" id="agregar" class="btn btn-success"><i class="fas fa-plus-circle"></i> Agregar otra estrategia</button>
            <button type="button" id="eliminar" class="btn btn-danger"><i class="fas fa-minus-circle"></i> Eliminar ultima estrategia</button>
            <br>
            <br>
            <form action="../src/phase-strategies.php" method="post" id="strategies-form" class="needs-validation" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control" id="1" name="e1" placeholder="Estrategia 1" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="2" name="e2" placeholder="Estrategia 2" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="3" name="e3" placeholder="Estrategia 3" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <button type="submit" id="enviar" class="btn btn-success">Terminar <i class="fas fa-arrow-right"></i></button>
            </form>
        </div>

        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Form Validation JS -->
        <script src="../public/js/needsValidation.js"></script>

        <!-- Template's JS -->
        <script src="../public/js/phase-strategies.js"></script>
    </body>
</html>