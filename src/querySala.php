<?php
function getSalas($con){ /*Busca todas */

    $idMaestro = $_SESSION['id'];
    
    $query = "SELECT sala.idSala AS Sala, cuento.titulo AS Cuento, sala.titulo AS Titulo, sala.alumno1 AS 'Integrante 1', sala.alumno2 AS 'Integrante 2', sala.puntaje AS Puntaje FROM sala INNER JOIN cuento ON sala.idCuento = cuento.idCuento WHERE sala.idMaestro = $idMaestro;";
   
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }   
}



function getSala($con){  
    $idSala = $_GET['idSala'];

    $query = "SELECT r.idRespuesta as ID, r.texto as Pregunta, r.puntaje as Puntaje
    FROM respuesta r INNER JOIN tipoRespuesta tr ON r.idTipoRespuesta = tr.idTipoRespuesta WHERE idSala = '$idSala' AND tr.textoTipo = 'Pregunta'";

    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }  
} 

function getRespuesta($con,$offset){
    $idSala = $_GET['idSala'];
    
    if(isset($_GET['idRespuesta'])){
        $idRespuesta = $_GET['idRespuesta'];
    }else{
        $idRespuesta = 0;
    }

    $query = "SELECT r.texto as Respuesta, r.puntaje as Puntaje
    FROM respuesta r INNER JOIN tipoRespuesta tr ON r.idTipoRespuesta = tr.idTipoRespuesta 
    WHERE idSala = '$idSala' AND tr.textoTipo = 'Respuesta' AND r.idRespuesta = ('$idRespuesta'+'$offset')";

    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }  
}

function getNumberOfQuestions($con){

    $idSala = $_GET['idSala']; 

    $query = "SELECT count(*) as total FROM respuesta WHERE idTipoRespuesta = 1 AND idSala = '$idSala'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    return $row['total']; 
}

function getLastQuestion($con){
    $query = "SELECT max(idRespuesta) as maxi FROM respuesta WHERE idTipoRespuesta = 1;";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    return $row['maxi']; 
}
