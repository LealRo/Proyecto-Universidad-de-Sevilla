<?php
    /* protect direct url access */
    require_once '../src/authenticate-phase.php';

    /* script for this phase */
    require_once '../src/phase-title.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/phase-title.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Formato</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid">
            <div class="row justify-content-center">
                <h1 class="display-3"><?php echo $title; ?></h1>
            </div>
            <hr>
            <br>
            <div class="row justify-content-center">
                <a class="btn btn-success" href="../src/title-questions.php" role="button">Siguiente <i class="fas fa-arrow-right"></i></a>
            </div>
            
        </div>

        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>