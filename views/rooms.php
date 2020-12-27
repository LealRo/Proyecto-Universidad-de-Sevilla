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
        <link rel="stylesheet" href="../public/css/rooms.css">

        <!-- Fontawesome -->
        <script src="https://kit.fontawesome.com/2c29f6056d.js" crossorigin="anonymous"></script>
        
        <title>Salas</title>
    </head>
    <body>
    <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <h3>Nueva sala</h3>
                    <br>
                    
                    <!-- New Room Form -->
                    <form action="../src/new-room.php" method="POST" id="newroom" class="needs-validation" novalidate>
                        <div class="form-row">
                            <div class="form-group col-auto">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-pen"></i></span>
                                    </div>
                                    <input type="text" class="form-control" id="titulo" placeholder="Título" name="titulo" autocomplete="off" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">Falta este campo.</div>
                                </div>
                            </div>
                            <div class="form-group col-auto">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-book"></i></span>
                                    </div>
                                        <select class="custom-select" id="cuento" name="cuentos" onchange="getValue();" required>
                                            <option value="" selected disabled hidden>Selecciona un cuento...</option>
                                            <option value="1">Los dinosaurios</option>
                                            <option value="2">Egipcios</option>
                                            <option value="3">Tema por determinar</option>
                                            <option value="4">Tema por determinar</option>
                                            <option value="5">Redes sociales</option>
                                        </select>
                                    
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">Falta este campo.</div>
                                </div>
                                <small id="cuentoHelpBlock" class="form-text text-muted"><a href="#" data-toggle="modal" data-target="#myModal">Visualizar cuento</a></small>
                            </div>
                            <div class="form-group col-auto">
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text"><i class="fas fa-stopwatch"></i></span>
                                    </div>
                                    <input type="number" class="form-control" name="duracion" id="duracion" min="0" placeholder="Duración (minutos)" required>
                                    <div class="valid-feedback">Valido.</div>
                                    <div class="invalid-feedback">Falta este campo.</div>
                                </div>
                            </div>
                            <div class="form-group col-auto">
                                <button type="submit" class="btn btn-success">Crear sala</button>
                            </div>
                        </div>
                    </form>
                    <hr>
                </div>
            </div>
            <!-- Active Rooms -->
            <div class="row">
                <div class="col">
                    <h3>Salas activas</h3>
                    <hr>
                </div>
            </div>
            <a href="menu.php" class="btn btn-success"><i class="fa fa-arrow-left"></i> Regresar</a>         
        </div>

        <!-- Modal para previsualizacion de PDF -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog modal-lg">
                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Vista previa de la lectura</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button> 
                    </div>
                    <div class="modal-body" id="muestraCuento">
                        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    </div>
                </div>
            </div>
        </div>  

        <script src="../public/js/innerCuento.js"></script>    
      
        
        <!-- JQuery, Popper and Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

        <!-- Template's JS -->
        <script src="../public/js/needsValidation.js"></script>
    </body>
</html>