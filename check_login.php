<?php 
    session_start();
    if(!isset($_SESSION['usuario'])){
        
        header('location:login.php?login-error=true');
        exit;
        
    }
    $usuario = $_SESSION['usuario'];
?>