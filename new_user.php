<?php
    
    include 'bd_connect.php';

    $usuario = $_POST['usuario'];
    $senha = password_hash($_POST['senha'],PASSWORD_DEFAULT); 
    $nome = $_POST['nome'];
    $nivel = $_POST['nivel'];
    
    $query = "insert into credent(username,password,name,level)
            values('$usuario','$senha','$nome','$nivel')";
    
    if(mysqli_query($con, $query)){
        header('location:admin.php?new_user=true');
    }else{
        header('location:admin.php?error_new_user=true');
    }
    ?>