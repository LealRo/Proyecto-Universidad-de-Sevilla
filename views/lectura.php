
<?php
    /* protect route */
    require_once '../src/authenticate.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <!-- Template's CSS -->
    <link rel="stylesheet" href="../public/css/lectura.css">
            
    <title>Lectura</title>
</head>
<body>
    <div class="container-fluid">
    
        <h1>Modulo: Lectura</h1>
        <?php
            if(!empty($_SESSION["cuento"])){    /*Si el archivo no esta vacio: */
                $file = $_SESSION["cuento"];    /*La ruta esta guardada en una var de sesion */
                $element = 
                "
                    <div id=\"showPDF\">
                    <center>
                            <iframe src=\"$file#toolbar=0&navpanes=0&scrollbar=0\" frameborder=\"0\"></iframe>
                        </center>
                    </div>
                ";
                echo $element;  /*Muestra archivo */
            }
        ?>

    <!-- Trigger the modal with a button -->
     <button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal">Pasar a las preguntas</button>

    <!-- Modal -->
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">¡Precaución!</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="modal-body">
                    <p>¿Seguro que quieres pasar a las preguntas?</p>
                </div>
                <div class="modal-footer">
                    <a href="tugfa.php" class="btn btn-success btn-block btn-lg">Si, pasar a las preguntas</a>
                </div>
            </div>
        </div>
    </div>  
    </div>

     
    
    <!-- JQuery, Popper and Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>