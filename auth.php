<?php 

    if(isset($_POST['usuario']) && isset($_POST['senha'])){
    $usuario = $_POST["usuario"];
	$senha = $_POST["senha"];
    


    include 'bd_connect.php';
    $query = "select name,username,password,level from credent where username ='".$usuario."'";
    $bd_data = mysqli_query($con, $query);
    $login = mysqli_fetch_assoc($bd_data);
    $nivel = $login['level'];    

    if($login['username'] == $usuario){
        if(password_verify($senha,$login['password'])){
            session_start();
           $_SESSION['usuario'] = $usuario;
           $_SESSION['nivel'] = $nivel;
           $_SESSION['nome'] = $login['name'];
       }

        if($nivel == "U"){
            header('location:user.php');
        }elseif($nivel == "A"){
            header('location:admin.php');
        }
    }else{
        header('location:login.php?pass-error=true');
        exit;
    }
    }
    mysqli_close($con);
?>