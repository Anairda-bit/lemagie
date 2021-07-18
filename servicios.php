<?php
// llamamos al metodo que comprueba la sesion 
include('inc/functions.php');
checkSession();
?>
<!DOCTYPE html5>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/servicios.css" />

    <title>Lecturas </title>
</head>

<body>
    <?php include "header.php"; ?>
    <!-- <div class="circle"></div>
    <div class="circle2"></div> -->
    <div class="container">

        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-mariposa-par.png" alt="Par de Cartas">
                <h2>Lectura General</h2>
            </div>
            <div class="content">

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et adipisci aspernatur hic asperiores deserunt mollitia quibusdam
                    illo magni laborum? Repellendus quo suscipit qui ipsum laboriosam tempore, natus nam enim ullam.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-sol-par.png" alt="Par de Cartas">
                <h2>Lectura Vincular</h2>
            </div>
            <div class="content">

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et adipisci aspernatur hic asperiores deserunt mollitia quibusdam
                    illo magni laborum? Repellendus quo suscipit qui ipsum laboriosam tempore, natus nam enim ullam.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-calavera-par.png" alt="Par de Cartas">
                <h2>Lectura Kármica</h2>
            </div>
            <div class="content">

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et adipisci aspernatur hic asperiores deserunt mollitia quibusdam
                    illo magni laborum? Repellendus quo suscipit qui ipsum laboriosam tempore, natus nam enim ullam.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-luna-par.png" alt="Par de Cartas">
                <h2>Lectura de Lenormand</h2>
            </div>
            <div class="content">

                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et adipisci aspernatur hic asperiores deserunt mollitia quibusdam
                    illo magni laborum? Repellendus quo suscipit qui ipsum laboriosam tempore, natus nam enim ullam.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-rama-par.png" alt="Par de Cartas">
                <h2>Lectura Gitana</h2>

            </div>
            <div class="content">
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et adipisci aspernatur hic asperiores deserunt mollitia quibusdam
                    illo magni laborum? Repellendus quo suscipit qui ipsum laboriosam tempore, natus nam enim ullam.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
    </div>
</body>

</html>