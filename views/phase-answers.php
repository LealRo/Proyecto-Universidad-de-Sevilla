<?php 
    /* protect direct url access */
    require_once '../src/authenticate-phase.php';

    /* load in the questions */
    require_once '../src/phase-answers.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/phase-answers.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Comprueba</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid">
            <h1 class="display-4 text-center">Comprueba</h1>
            <hr>
            <br>
            <div class="row justify-content-md-center">
                <div class="col col-8">
                    <h1 class="display-4 text-center" style="font-size: 30px">Ahora es el momento de contestar las preguntas formuladas</h1>
                </div>
            </div>
            <br>
            <div class="row justify-content-md-center">
                <div class="col col-8">
                    <form action="../src/answers-strategies.php" method="post" id="answers-form" class="needs-validation" novalidate>
                        <?php while ( $row = mysqli_fetch_array($result) ) { ?>
                            <div class="form-group">
                                <h1 class="display-4 text-success" style="font-size: 22px"><?php echo $row[0] ?></h1>
                                <input type="text" class="form-control" id="<?php echo $index; ?>" name="r<?php echo $index; ?>" placeholder="Escribe aqui tu respuesta o indica por qué no puedes responder" required>
                                <div class="valid-feedback">Correcto</div>
                                <div class="invalid-feedback">Falta este campo</div>
                            </div>
                            <?php $index++; ?>
                        <?php } ?>
                        <br>
                        <div class="text-center">
                            <button type="submit" id="enviar" class="btn btn-success">Siguiente <i class="fas fa-arrow-right"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            
        </div>

        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Form Validation JS -->
        <script src="../public/js/needsValidation.js"></script>
    </body>
</html>