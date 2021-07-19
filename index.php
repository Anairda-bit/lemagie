<!DOCTYPE html5>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fuentes de texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- icono del titulo -->
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <!-- script js -->
    <script type="text/javascript" src="./assets/Js/landing.js"></script>
    <script type="text/javascript" src="./assets/Js/toggle.js"></script>
    <!-- css especifico para esta pagina -->
    <link rel="stylesheet" href="./assets/css/landing.css" />
    <!-- titulo de esta pagina -->
    <title>La Magie - Inicio</title>
</head>

<body>
    <section>
        <div class="circle"></div>
        <header>
            <a href="#"><img src="./assets/img/logo.ico" class="logo"></a>
            <div class="toggle" onclick="toggleMenu();"></div>
            <ul class="navigation">
                <li><a href="SignIn.php">Área Clientes</a></li>
                <li><a href="somos.php">¿Quienes Somos?</a></li>
            </ul>
        </header>
        <div class="content">
            <div class="textBox">
                <h2>No es por lo que eres, es por lo que transmites.<br>Ahi está tu
                    <span>Magia</span>
                </h2>
            </div>
            <div class="imgBox">
                <img src="./assets/img/cartas-mariposa-par.png" class="carta">
            </div>
        </div>
        <ul class="thumb">
            <li><img src="./assets/img/carta-mariposa-one.png" onclick="imgSlider('./assets/img/cartas-mariposa-par.png');changeCircleColor('#671a78ff')"></li>
            <li><img src="./assets/img/carta-luna-one.png" onclick="imgSlider('./assets/img/cartas-luna-par.png');changeCircleColor('#2d0936ff')"></li>
            <li><img src="./assets/img/carta-calavera-one.png" onclick="imgSlider('./assets/img/cartas-calavera-par.png');changeCircleColor('#55395cff')"></li>
        </ul>
        <ul class="sci">
            <li><a href="https://www.facebook.com/"><img src="./assets/img/facebook.ico"></a></li>
            <li><a href="https://www.pinterest.es/"><img src="./assets/img/pinterest.ico"></a></li>
            <li><a href="https://www.instagram.com/"><img src="./assets/img/instagram.ico"></a></li>
        </ul>
    </section>
</body>

</html>