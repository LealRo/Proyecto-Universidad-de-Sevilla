<?php 
    /* load content */
    require_once '../src/display-results.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/results.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Formato</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col">
                    <h1 class="display-4 text-center">Resultados de la sesión</h1>
                </div>    
            </div>
            <hr>
            <br>
            <div class="row">
                <div class="col">
                    <h1 class="display-4" style="font-size: 30px">Preguntas y respuestas</h1><hr>
                    <?php for($i = 0; $i < count($questions); $i++) { ?>
                    <h1 class="display-4 text-success" style="font-size: 25px"><?php echo $i + 1 . '. '; echo $questions[$i]; ?></h1>
                    <h1 class="display-4 text-secondary" style="font-size: 25px"><?php echo 'R= '; echo $answers[$i]; ?></h1>
                    <?php } ?> 
                </div>
                <div class="col">
                    <h1 class="display-4" style="font-size: 30px">Comprensión</h1><hr>
                    <?php if ($key and !$understand) { ?>
                    <h1 class="display-4" style="font-size: 25px">Hubo partes del texto que los alumnos no pudieron comprender por la siguiente razón:</h1>
                    <h1 class="display-4 text-success" style="font-size: 25px"><?php echo $reason; ?></h1>
                    <?php } elseif ($key and $understand) { ?>
                    <h1 class="display-4" style="font-size: 25px"><?php echo $reason; ?></h1>
                    <?php } elseif (!$key) { ?>
                    <h1 class="display-4" style="font-size: 25px">no results</h1>
                    <?php } ?>
                </div>
                <div class="col">
                    <h1 class="display-4" style="font-size: 30px">Estrategias de comprensión</h1><hr>
                    <?php for($i = 0; $i < count($strategies); $i++) { ?>
                    <h1 class="display-4 text-success" style="font-size: 25px"><?php echo $i + 1 . '. '; echo $strategies[$i]; ?></h1>
                    <?php } ?>
                </div>
            </div>
            <hr>
            <br>
            <a href="rooms-history.php" class="btn btn-success"><i class="fa fa-arrow-left"></i> Regresar</a> 

        </div>

        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>