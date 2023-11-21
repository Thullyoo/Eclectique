<?php

    $host = 'localhost';
    $user = 'root';
    $password = '1234';
    $database = 'auth';

    $con = mysqli_connect($host,$user,$password,$database);

    if(mysqli_connect_error()){
        echo 'Erro ao conectar!';
    }
?>