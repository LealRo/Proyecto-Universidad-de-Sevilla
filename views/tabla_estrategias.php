
<?php

/* protect route */
require_once '../src/authenticate.php';
/* start database connection */
require_once '../src/connection.php';
require_once '../src/querySala.php';
?>


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<!-- DATATABLES -->
<!--  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"> -->

 <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<!-- BOOTSTRAP -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/dataTables.bootstrap4.min.css">

<!-- Font awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />

<!-- Template's CSS -->
<link rel="stylesheet" href="../public/css/tabla_sala.css">
<title>Historial de salas</title>
</head>
<body>
<div class="container-fluid" id="tablaSalas">
    <div class="row">
        <div class="col-sm-8">
            <h1 class="display-4" style="font-size: 30px">Estrategias sugeridas durante la sala #<?php echo $_GET['idSala']; ?></h1>
        </div>
    </div>
    <hr>
    <br>
    <!-- Table -->
    <div class="table-responsive">
        <table class="table table-hover" id="myTable">
            <thead class="thead-dark">                                               
                <?php 
                $resultado = getEstrategia($conn);

                if(empty($resultado)){
                    echo "No se encontraron estrategias";
                }else{
                    while ($atributo= mysqli_fetch_field($resultado)) { ?>
                        <th> <?php echo $atributo->name; ?> </th>
                    <?php } ?>                                   
                    <th> Acciones</th>        
            </thead>
            <?php mysqli_data_seek($resultado, 0); ?>
            <tbody>
                <?php while ($renglon= mysqli_fetch_array($resultado)) { 
                        mysqli_field_seek($resultado, 0); ?>
                        <tr>
                            <?php 
                            while ($atributo= mysqli_fetch_field($resultado)) { ?>
                                    <td>
                                        <?php
                                        echo $renglon[$atributo->name]; ?>
                                    </td>
                            <?php } ?>
                            <td class="text-center">
                                <button onclick="callModalUpdate(<?= $renglon['ID']?>, <?= $_GET['idSala']?>)" type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalPuntaje"><i class="far fa-edit"></i></button>        
                            </td>                                                               
                        </tr>
                <?php } }?>
            </tbody>
        </table>
        <br>
    </div>  
    <a href="tabla_salas.php" class="btn btn-success"><i class="fa fa-arrow-left"></i> Regresar</a>

    <!-- Modal para ver respuesta-->
    <div class="modal fade" id="modalRespuesta" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">La respuesta fue:</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="modal-body">
                    <?php
                                 
                    ?>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>  

    <!-- Modal para editar puntaje-->
    <div class="modal fade" id="modalPuntaje" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Cambiar puntaje</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button> 
                </div>
                <div class="modal-body">
                    <form action="../src/updateScore.php" method="POST" class="was-validated">
                        <input type="hidden" id="idSala" name="idSala">
                        <input type="hidden" id="idRespuesta" name="idRespuesta">
                        <center><input type="number" id="puntaje" name="puntaje" placeholder="e.j: 85" min="1" max="100"></center>
                        <br>
                        
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <button type="submit" class="btn btn-success" name="update">Actualizar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>  
</div> 

    <script>
        function callModalUpdate(idRespuesta,idSala) {
            $('#idRespuesta').val(idRespuesta);
            $('#idSala').val(idSala);
        } 
    </script>

<!-- JQUERY -->
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
<!-- DATATABLES -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
<!-- BOOTSTRAP -->
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Para traducirlo al español -->                      
<script src="../public/js/dataTable.js"></script>    
</body>
</html>