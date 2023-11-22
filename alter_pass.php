<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Normalize CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css"
        integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/index-css/global.css">
    <link rel="stylesheet" href="css/index-css/responsividade.css">
    <link rel="icon" href="assets/logofooter.png">

    <script src="https://kit.fontawesome.com/f75cbf1a6b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="">

    <title>Eclectique</title>
</head>

<body>
    <header>
        <div class="header_container">
            <div class="social">
                <ul>
                    <li><a href="https://github.com/Thullyoo" target="_blank"><i
                                class="fa-brands fa-square-github fa-2xl"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/thúllyo-barcellos-953532269/" target="_blank"><i
                                class="fa-brands fa-linkedin fa-2xl"></i></a></li>
                </ul>

            </div>
            <img onclick="location.href='index.php'" src="assets/logo.png" alt="Logo" width="250px" height="200px">
            <div class="user">
                <ul>
                    <li><a href="user.php"><i class="fa-solid fa-user fa-2xl"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <div class="alter_pass">
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
        </div>

    </section>
</body>

</html>