<?php
function getSalas($con){
    
    $query = 'SELECT s.idSala as Sala, s.idMaestro as Matricula, m.nombre as Nombre, s.idCuento as "ID Cuento", 
    c.titulo as Titulo, s.clave as Clave, s.alumno1 as "Alumno 1", s.alumno2 as "Alumno 2", s.puntaje as Puntaje, 
    s.duracion as Duracion, s.estado as Estado FROM sala s 
    INNER JOIN maestro m ON s.idMaestro = m.idMaestro 
    INNER JOIN cuento c ON s.idCuento = c.idCuento ;';
   
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }   
}