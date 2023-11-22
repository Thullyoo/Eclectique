<?php
include 'bd_connect.php';

$query = "SELECT name, username, level FROM credent";
$usuarios = mysqli_query($con, $query);

while ($row = mysqli_fetch_assoc($usuarios)) {
    $usuarionow = $row['username'];


    $querypedido = "SELECT id_pedido, item, preco, status
                    FROM pedidos
                    WHERE username = '$usuarionow'";

    $pedido = mysqli_query($con, $querypedido);
    echo "<hr> <br>";
    echo $row['name'] .
        " | " . $row['username'] .
        " | " . $row['level'] .
        " | <a class=removeruser href='confirm_remove.php?user=" . $row['username'] . "'>Remover Usuário</a>" .
        " | <a class=alterar href='alter_pass.php?user=" . $row['username'] . "'>Alterar Senha</a><br><br>Pedidos de " .$row['username'] .":<br>";

   
        if (mysqli_num_rows($pedido) > 0) {
            while ($pedidoRow = mysqli_fetch_assoc($pedido)) {
                echo "id: " . $pedidoRow['id_pedido'] . " | " . $pedidoRow['item'] . " | R$" . $pedidoRow['preco'] . " | " . $pedidoRow['status'];
        
                
                if ($pedidoRow['status'] != 'concluído') {
                    echo " | <a class=concluidos href='concluido.php?id=" . $pedidoRow['id_pedido'] . "'>Concluir Pedido</a>";
                }
                
                echo "<br><br>";
            }
        } else {
            echo "Nenhum pedido associado a este usuário.<br>";
        }
        echo "<br>";
}
mysqli_close($con);

?>