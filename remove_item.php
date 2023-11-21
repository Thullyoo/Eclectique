<?php 
    include 'check_login.php';
    include 'bd_connect.php';
    $idPedido = $_GET['id'];
    $query = "DELETE FROM pedidos WHERE id_pedido = $idPedido";
    mysqli_query($con, $query); 
    header('location:user.php');
?>