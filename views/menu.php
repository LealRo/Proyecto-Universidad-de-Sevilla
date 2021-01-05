<?php
    /* protect route */
    require_once '../src/authenticate.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
        <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.3.1.css">
    </head>
    <body>
        <div class="py-5 pb-5 mb-4">
            <div class="container"></div>
        </div>
        <div class="py-5" style="">
            <div class="container">
                <div class="row">
                <div class="col-md-1" style=""></div>
                <div class="col-md-3" style="">
                    <div class="col-md-9" style="	background-image: url(color.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;">
                        <ul class="list-group">
                            <li class="border-0 list-group-item d-flex justify-content-between align-items-center" style="	background-image: url(color.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;"><br><a class="btn btn-outline-success" href="rooms-table.php">Historial de salas</a><img class="img-fluid d-block mx-auto" src="../public/img/004-ordenador-portatil.png" height="25%" width="25"><i></i></li>
                            <li class=" border-0 list-group-item d-flex justify-content-between align-items-center" style="	background-image: url(color.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;"><br><a class="btn btn-lg w-100 btn-outline-success" href="rooms.php">Salas</a><img class="img-fluid d-block rounded-circle mx-auto" src="../public/img/003-configuraciones.png" height="25%" width="25"></li>
                            <li class=" border-0 list-group-item d-flex justify-content-between align-items-center" style="	background-image: url(color.jpg);	background-position: top left;	background-size: 100%;	background-repeat: repeat;"><br><a class="btn w-100 btn-outline-success" href="../src/logout.php">Cerrar&nbsp; sesión</a><img class="img-fluid d-block mx-auto" src="../public/img/001-cerrar-sesion.png" height="25%" width="25"></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 " style="">
                    <div class="row">
                    <div class="col-md-12 mr-5" style="">
                        <h1 class="mb-3">Bienvenido, Maestro&nbsp;&nbsp;</h1>
                        <p class="lead">Para visitar tus clases previas selecciona "Historial de salas".</p>
                        <p class="lead">Para crear una sala nueva para tus alumnos, o revisar tus salas activas actualmente selecciona "Salas".</p>
                        <p class="lead">Para cerrar tu sesion selecciona "Cerrar sesión".</p>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            <div class="py-5 text-center" style="">
            <div class="container">
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>