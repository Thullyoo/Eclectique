<?php
include 'bd_connect.php';

$query ="SELECT pedidos.id_pedido, pedidos.item, pedidos.preco, pedidos.status
         FROM pedidos
         INNER JOIN credent ON pedidos.username = credent.username
         WHERE credent.username = '$usuario';";

$pedidos = mysqli_query($con, $query);
echo "<br><h2>Seus Pedidos:</h2><br>";

while ($row = mysqli_fetch_assoc($pedidos)) {
    echo "<li>" . $row['item'] .
        " | Preço: R$" . $row['preco'] .
        " | Status: " . $row['status'];

    
    if ($row['status'] != 'concluído') {
        echo " | <a href='remove_item.php?id=" . $row['id_pedido'] . "'>Cancelar Pedido</a>";
    }

    echo "</li><br>";
}

mysqli_close($con);
?>