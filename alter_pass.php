<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        $username = $_GET['user'];
        session_start();
        $_SESSION['username'] = $username;
    ?>
    <h3>Digite a nova senha para o usuário <?php echo $username ?></h3>
    <form action="change.php" method="post">
        <label for="nova_senha">Nova Senha:</label>
        <input type="text" name="nova_senha">
        <input type="submit" value="Alterar">
    </form>
</body>

</html>