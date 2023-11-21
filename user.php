<?php 
    include "check_login.php";
    if($_SESSION['nivel'] != "U"){
        if($_SESSION['nivel'] = "A"){
            header('location:admin.php');
        }else{
            session_destroy();
        header('location:login.php?login-error=true');
        exit;
        }
    }  
    include 'bd_connect.php'; 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        
        $item = $_POST['item'];
        $preco = $_POST['price'];
    
        $queryadd = "INSERT INTO pedidos (username, item, preco, status) VALUES ('$usuario', '$item', '$preco', 'pendente')";
    
        if (mysqli_query($con, $queryadd)) {
            header('location:user.php?add_item=true');
        } else {
            header('location:user.php?error_add_item=true');
        }
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
    <link rel="stylesheet" href="css/user-css/user.css">
    <link rel="stylesheet" href="css/user-css/responsividade.css">
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
    <div class="pedidos_container">
       <?php
        echo "<div class='pedidos_container'> <h1>Olá $usuario!!</h1>";
        include 'show_items.php'; 
        echo "</div>";
        ?> 
    </div>
    <a href="logout.php">SAIR</a>
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
                <h2>
                    <a href="#">Termos de uso</a>
                </h2>
            </div>
        </div>
    </footer>
</body>

</html>