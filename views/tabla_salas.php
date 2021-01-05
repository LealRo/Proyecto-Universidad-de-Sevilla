
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
                <h1 class="display-4" style="font-size: 30px">Historial de salas</h1>
            </div>
        </div>
        <hr>
        <br>
        <!-- Table -->
        <div class="table-responsive">
            <table class="table table-hover" id="myTable">
                <thead class="thead-dark">                                               
                    <?php 
                    $resultado = getSalas($conn);

                    if(empty($resultado)){
                        echo "Aun no has generado ninguna sala";
                    }else{
                        while ($atributo= mysqli_fetch_field($resultado)) { ?>
                            <th> <?php echo $atributo->name; ?> </th>
                        <?php } ?>
                        <th> Ver respuestas </th>
                                                                            
                </thead>
                <?php mysqli_data_seek($resultado, 0); ?>
                <tbody>
                    <?php while ($renglon= mysqli_fetch_array($resultado)) { 
                            mysqli_field_seek($resultado, 0); ?>
                            <tr>
                                <?php while ($atributo= mysqli_fetch_field($resultado)) { ?>
                                        <td>
                                            <?php echo $renglon[$atributo->name]; ?>
                                        </td>
                                <?php } ?> 
                                <td class="text-center">
                                    <a role="button" class="btn btn-success" href="tabla_preguntas.php?idSala=<?= $renglon['Sala'] ?>">
                                        <i class="far fa-comment-alt"></i>
                                    </a>
                                </td>                                                              
                            </tr>
                    <?php } }?>
                </tbody>
            </table>
            <br>
        </div>  
        <a href="menu.php" class="btn btn-success"><i class="fa fa-arrow-left"></i> Regresar</a>       

    </div> 

    <script>
        function calis(x) {
            alert("Entre"+x);
            var myTab = document.getElementById('myTable');
            var tableData = []; 
        }
    </script>
    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <!-- DATATABLES -->
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <!-- BOOTSTRAP -->
    <script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js"></script>
    <!-- Para traducirlo al español -->                      
    <script src="../public/js/dataTable.js"></script>    
</body>
</html>