<?php

function conectar(){
    $server="localhost";
    $user="id21907038_mel";
    $pass="mel0226#M";
   
    $bd="id21907038_productos";
        
    $con=mysqli_connect($server, $user, $pass, $bd) or die ("error de conexion".mysqli_error());

    return $con;
}
?>