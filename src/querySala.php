<?php
function getSalas($con){
    
    $query = "SELECT * FROM sala";
   
    $result = mysqli_query($con,$query);
    if(mysqli_num_rows($result)>0){
        return $result;
    }   
}