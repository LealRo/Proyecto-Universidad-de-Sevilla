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
        <link rel="stylesheet" href="../public/css/phase-questions.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Preguntas</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid text-center">
            <h1 class="display-4">A continuación escribe tus preguntas sobre el cuento</h1>
            <hr>
            <br>
            <button type="button" id="agregar" class="btn btn-success"><i class="fas fa-plus-circle"></i> Agregar otra pregunta</button>
            <button type="button" id="eliminar" class="btn btn-secondary"><i class="fas fa-minus-circle"></i> Eliminar ultima pregunta</button>
            <br>
            <br>
            <form action="phase-read.php" method="post" id="preguntasForm" class="needs-validation" novalidate>
                <div class="form-group">
                    <input type="text" class="form-control" id="1" name="p1" placeholder="Pregunta 1" autocomplete="off" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="2" name="p2" placeholder="Pregunta 2" autocomplete="off" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="3" name="p3" placeholder="Pregunta 3" autocomplete="off" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="4" name="p4" placeholder="Pregunta 4" autocomplete="off" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" id="5" name="p5" placeholder="Pregunta 5" autocomplete="off" required>
                    <div class="valid-feedback">Correcto</div>
                    <div class="invalid-feedback">Falta este campo</div>
                </div>
                <button type="submit" id="enviar" class="btn btn-success">Siguiente <i class="fas fa-arrow-right"></i></button>
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
        <script src="../public/js/phase-questions.js"></script>
    </body>
</html>