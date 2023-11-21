<?php

    include 'bd_connect.php';
    $nova_senha = password_hash($_POST['nova_senha'],PASSWORD_DEFAULT);
    session_start();
    $username = $_SESSION['username'];
    
    $query = "update credent set password='$nova_senha' where username='$username'";

    if(mysqli_query($con,$query)){
        header('location:admin.php?novasenha=true');
    }else{
        header('location:admin.php?novasenha_erro=true');
    }


?>