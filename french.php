<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!--Normalize CSS-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="css/index-css/global.css">
    <link rel="stylesheet" href="css/index-css/responsividade.css">
    <link rel="stylesheet" href="css/food-css/food.css">
    <link rel="stylesheet" href="css/food-css/responsividade.css">

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
        <div class="container_foods">
        <form action="user.php" method="post">
                <span>
                    <img src="assets/croissants-em-uma-tabua-de-madeira.jpg" alt="">
                    <h3>Croissant</h3>
                    <input type="hidden" name="item" value="Croissant">
                    <input type="hidden" name="price" value="17">
                    <input type="submit" value="Comprar">
                </span>
            </form>
            <form action="user.php" method="post">
                <span>
                    <img src="assets/ratatouile.jpg" alt="">
                    <h3>Ratatouille</h3>
                    <input type="hidden" name="item" value="Ratatouille">
                    <input type="hidden" name="price" value="40">
                    <input type="submit" value="Comprar">
                </span>
            </form>
            <form action="user.php" method="post">
                <span>
                    <img src="assets/coq-au-vin_l_thumb.jpg" alt="">
                    <h3>Coq au Vin</h3>
                    <input type="hidden" name="item" value="Coq au Vin">
                    <input type="hidden" name="price" value="50">
                    <input type="submit" value="Comprar">
                </span>
            </form>
            <form action="user.php" method="post">
                <span>
                    <img src="assets/macacarons.jpg">
                    <h3>Macacarons</h3>
                    <input type="hidden" name="item" value="Macacarons">
                    <input type="hidden" name="price" value="25">
                    <input type="submit" value="Comprar">
                </span>
            </form>
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
    <script src="js/app.js"></script>
</body>
</html>