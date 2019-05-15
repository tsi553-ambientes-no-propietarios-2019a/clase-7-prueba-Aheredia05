<?php

function conectar(){
    //servidor, usuario, clave, nombre_bd
    $conn = new mysqli('localhost', 'root', '', 'prueba1');

    if($conn->connect_error){
        echo 'Error de conexión' .$conn->connect_error; 
        exit;
    }else{
        echo 'Conexión exitosa'; 
    }
}


?>