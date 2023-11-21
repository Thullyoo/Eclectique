<?php 
    include 'bd_connect.php';
    $confirm = $_POST['confirm'];
    session_start();
    $username = $_SESSION['username'];
    if($confirm == 'S'){
        $query = "delete from credent where username ='$username'";
        if(mysqli_query($con, $query)){
            header('location:admin.php?user_remove=true');
        }
    }else{
            header('location:admin.php?error_user_remove=true');
    }
?>