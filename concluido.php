<?php 
    include 'check_login.php';
    include 'bd_connect.php';
    $id = $_GET['id'];
    $query = "UPDATE pedidos SET status = 'concluído' WHERE id_pedido = $id";
    mysqli_query($con, $query);
    header("location:admin.php");
?>