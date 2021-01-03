<?php
function getSalas($con){ /*Busca todas */
    
    $query = 'SELECT s.idSala as Sala, s.idMaestro as Matricula, m.nombre as Maestro, s.idCuento as "ID Cuento", 
    c.titulo as Titulo, s.clave as Clave, s.alumno1 as "Alumno 1", s.alumno2 as "Alumno 2", s.puntaje as Puntaje, 
    s.duracion as Duracion, s.estado as Estado FROM sala s 
    INNER JOIN maestro m ON s.idMaestro = m.idMaestro 
    INNER JOIN cuento c ON s.idCuento = c.idCuento ;';
   
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }   
}

function getSala($con){  /*Busca una en especifico*/
    $idSala = $_GET['idSala'];

    $query = "SELECT r.idRespuesta as 'ID respuesta', r.idSala as Sala, 
    tr.idTipoRespuesta as 'ID tipo respuesta', r.texto as Respuesta, r.puntaje as Puntaje, tr.textoTipo as 'Tipo de respuesta'
    FROM respuesta r INNER JOIN tipoRespuesta tr ON r.idTipoRespuesta = tr.idTipoRespuesta WHERE idSala = '$idSala'";

    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }  
}