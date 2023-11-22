
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Normalize CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/login-css/login.css">

    <link rel="stylesheet" href="css/login-css/responsividade.css">

    <link rel="icon" href="assets/logofooter.png">

    <script src="https://kit.fontawesome.com/f75cbf1a6b.js" crossorigin="anonymous"></script>
    <link rel="icon" type="image/x-icon" href="">

    <title>Login</title>
</head>
<body>
    <header>
        <div class="header_container">
        <div class="social">
            <ul>
                <li><a href="https://github.com/Thullyoo" target="_blank"><i class="fa-brands fa-square-github fa-2xl"></i></a></li>
                <li><a href="https://www.linkedin.com/in/thúllyo-barcellos-953532269/" target="_blank"><i class="fa-brands fa-linkedin fa-2xl"></i></a></li>
            </ul>
                
        </div>
       <img onclick="location.href='index.php'" src="assets/logo.png" alt="Logo" width="250px" height="200px">
        <div class="user">
            <ul>
                <li><a href="user.php"><i class="fa-solid fa-user fa-2xl" ></i></a></li>
            </ul>    
        </div>
        </div>
    </header>
    <section>
    <div class="login_container">
        <div class="form_container">
        <h2>Login</h2>
        <form action="auth.php" method="post">

            <label for="usuario">Usuário:</label>
            <input type="text" id="user" name="usuario" placeholder="Digite seu Usuário" required>
            
            <label for="senha">Senha:</label>
            <input type="password" id="password" name="senha" placeholder="Digite sua senha" required>
            
            <input type="submit" value="Entrar">
        </form>
        <div>
            <?php 
                if(isset($_GET['pass-error'])){
                    echo "<p class=error_container>Usuário ou senha incorretos</p>";
                }
                if(isset($_GET['login-error'])){
                    echo "<p class=error_container>É necessário fazer o login</p>";
                }
            ?>
        </div>
    </div>
    </div>
    </section>
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