<?php

/*Funcion que retorna la consulta a la tabla sala*/
function getSalas($con){ 

    $idMaestro = $_SESSION['id'];
    
    $query = "SELECT sala.idSala AS Sala, cuento.titulo AS Cuento, sala.titulo AS Titulo, sala.alumno1 AS 'Integrante 1', 
    sala.alumno2 AS 'Integrante 2', sala.puntaje AS Puntaje FROM sala 
    INNER JOIN cuento ON sala.idCuento = cuento.idCuento WHERE sala.idMaestro = $idMaestro;";
   
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }   
}

/*Funcion que retorna la consulta con las respuestas de tipo pregunta de una determinada sala */
function getSala($con){  
    $idSala = $_GET['idSala'];

    $query = "SELECT r.idRespuesta as ID, r.texto as Pregunta, r.puntaje as Puntaje
    FROM respuesta r INNER JOIN tipoRespuesta tr ON r.idTipoRespuesta = tr.idTipoRespuesta WHERE idSala = '$idSala' AND tr.textoTipo = 'Pregunta'";

    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }  
} 

/*Funcion que retorna  la consulta con las respuesta de tipo respuesta de una terminada sala y una determinada pregunta*/
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

/*Funcion que retorna la consulta con las respuestas de tipo estrategia de una determinada sala */
function getEstrategia($con){

    $idSala = $_GET['idSala'];

    $query = "SELECT r.idRespuesta as ID, r.texto as Estrategia, r.puntaje as Puntaje
    FROM respuesta r INNER JOIN tipoRespuesta tr ON r.idTipoRespuesta = tr.idTipoRespuesta 
    WHERE idSala = '$idSala' AND tr.idTipoRespuesta = 3";

    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }  
}

/*Funcion que retorna el numero de preguntas ingresadas por el usuario a una sala*/
function getNumberOfQuestions($con){

    $idSala = $_GET['idSala']; 

    $query = "SELECT count(*) as total FROM respuesta WHERE idTipoRespuesta = 1 AND idSala = '$idSala'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);
    return $row['total']; 
}

/* Funcion que retorna 1 si encontro respuestas de compresion, 0 si no */
function existenDeComprension($con){    

    $idSala = $_GET['idSala']; 

    $query = "SELECT count(*) as total FROM respuesta WHERE idTipoRespuesta = 4 AND idSala = '$idSala'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_assoc($result);

    if($row['total'] == 0){
        return 0;
    }else{
        return 1;
    }
}


