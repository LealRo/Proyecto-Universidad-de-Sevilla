<?php 
    /* protect direct url access */
    require_once '../src/authenticate-phase.php';

    /* load in dynamic content for this view */
    require_once '../src/phase-read.php';
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <!-- Template's CSS -->
        <link rel="stylesheet" href="../public/css/phase-read.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
            
        <title>Lee</title>
    </head>
    <body>
        <!-- Main Content -->
        <div class="container-fluid text-center">
            <h1 class="display-4">Es hora de leer el texto</h1>
            <hr>
            <br>
            <?php
                /* if file path not empty */
                if(!empty($_SESSION["cuento"])){  
                    /* get file path from session variable */
                    $file = $_SESSION["cuento"];    

                    /* create iframe element with dynamic file path */
                    $element = "<div id=\"showPDF\"><center><iframe src=\"$file#toolbar=0&navpanes=0&scrollbar=0\" frameborder=\"0\"></iframe></center></div>";
                    
                    /* Show file */
                    echo $element;  
                }
            ?>
            <!-- Modal -->
            <div class="modal fade" id="myModal" role="dialog">
                <div class="modal-dialog modal-dialog-centered">
                    <!-- Modal content-->
                    <div class="modal-content">
                        <div class="modal-body">
                        <br>
                            <h4 class="text-danger">¡Precaución!</h4><br>
                            <h4>¿Seguro que quieres avanzar?</h4>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Cancelar</button>
                            <a href="phase-yes-no.php" role="button" class="btn btn-success btn-block">Si, quiero avanzar</a>
                        </div>
                    </div>
                </div>
            </div>  
            <br>
            <br>
            <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Siguiente <i class="fas fa-arrow-right"></i></button>
        </div>

        <!-- End of Main Content -->
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
</html>