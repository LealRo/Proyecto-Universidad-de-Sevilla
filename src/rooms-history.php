<?php
    function getSalas($con){ /*Busca todas */
        $idMaestro = $_SESSION['id'];

        $query = "SELECT sala.idSala AS '# Sala', cuento.titulo AS Cuento, sala.titulo AS Titulo, sala.alumno1 AS 'Integrante 1', sala.alumno2 AS 'Integrante 2', sala.puntaje AS Puntaje FROM sala INNER JOIN cuento ON sala.idCuento = cuento.idCuento WHERE sala.idMaestro = $idMaestro;";
    
        $result = mysqli_query($con,$query);
        return $result;   
    }

    function getSala($con){  /*Busca una en especifico*/
        $idSala = $_GET['idSala'];

        $query = "SELECT r.idRespuesta as 'ID respuesta', r.idSala as Sala, tr.idTipoRespuesta as 'ID tipo respuesta', r.texto as Respuesta, r.puntaje as Puntaje, tr.textoTipo as 'Tipo de respuesta' FROM respuesta r INNER JOIN tipoRespuesta tr ON r.idTipoRespuesta = tr.idTipoRespuesta WHERE idSala = '$idSala';";

        $result = mysqli_query($con,$query);
        return $result;
    }
?>