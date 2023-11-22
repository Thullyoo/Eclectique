<?php 
    include "check_login.php";
    if($_SESSION['nivel'] != "A"){
        session_destroy();
        header('location:login.php?login-error=true');
        exit;
    }
?>
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
    <link rel="stylesheet" href="css/admin-css/admin.css">
    <link rel="stylesheet" href="css/admin-css/responsividade.css">

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
                    <li><a href="admin.php"><i class="fa-solid fa-user fa-2xl"></i></a></li>
                </ul>
            </div>
        </div>
    </header>
    <section>
        <div class="section_container">
            <?php 
        echo "<h1 style='color:white'>Bem vindo " . $usuario . " !! </h1>"
    ?>
            <div class="newuser_container">
                <h3>Criar novo usuário para o sistema</h3>
                <form action="new_user.php" method="post" class="form_container">
                    <label for="usuario">Usuário:</label>
                    <input type="text" name="usuario"><br>
                    <label for="senha">Senha</label>
                    <input type="text" name="senha"><br>
                    <label for="nome">Nome:</label>
                    <input type="text" name="nome"><br>
                    <label for="nivel" required>Nivel de acesso: </label><br>
                    <input type="radio" name="nivel" value="A">Administrador<br>
                    <input type="radio" name="nivel" value="U">Usuário<br>
                    <input type="submit" value="Cadastrar">
                </form>
            </div>
            <div class="users">
                <h3>Usuarios cadastrados:</h3>
                <h4 style="color: black;" >Nome | Usuário | Nível</h4>
                <br>
                <?php
        include 'show_users.php';
    ?>
            </div>
        </div>
    </section>
    <a href="logout.php" class="sair"><button>SAIR</button></a>
    <footer>
        <div class="footer_container">
            <div class="footer_logo">
                <img src="assets/logofooter.png" alt="" srcset="">
            </div>
            <div class="footer_text">
                <h2>
                    <a href="#"> Fale Conosco </a>
                </h2>
                <h2>
                    <a href="#">Sobre nós</a>
                </h2>
            </div>
        </div>
    </footer>
</body>

</html>