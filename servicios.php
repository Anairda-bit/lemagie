<?php
// incluimos el paquete de funciones
include('inc/functions.php');
// llamamos al metodo que comprueba la sesion 
checkSession();
// llamamos al metodo que permite la privacidad de paginas
checkAuth();
?>
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
    <!-- icono de titulo -->
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <!-- css especifico de esta pagina -->
    <link rel="stylesheet" href="./assets/css/servicios.css" />
    <!-- titulo de la pagina -->
    <title>La Magie - Lecturas </title>
</head>

<body>
    <!-- incluimos el header -->
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

                <p>Una mirada a los aspectos del amor, la economia, amistades, trabajo y salud de forma general.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-sol-par.png" alt="Par de Cartas">
                <h2>Lectura Vincular</h2>
            </div>
            <div class="content">

                <p>Esta Tirada tiene la capacidad de distinguir entre el pasado, el presente y futuro de todo lo que respecta al campo del amor.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-calavera-par.png" alt="Par de Cartas">
                <h2>Lectura Kármica</h2>
            </div>
            <div class="content">

                <p>Descubrirás cual es tu misión en esta reencarnación, qué debes trabajar, en qué debes trascender
                    para tu correcta evolución. Saber cual es el objetivo que tienes en esta vida ayudará a superar
                    las pruebas para lograrlo. Con esta tirada obtendrás una valiosa información que te servirá en tu avance personal y espiritual</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-luna-par.png" alt="Par de Cartas">
                <h2>Lectura de Lenormand</h2>
            </div>
            <div class="content">

                <p>Descubrirás los mensajes más sorprendentes y lo acertado de sus predicciones,
                    descubre lo que traes del pasado, como está tu presente y que debes de resolver y mira hacia tu futuro.</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
        <div class="card">
            <div class="imgBox">
                <img src="./assets/img/cartas-rama-par.png" alt="Par de Cartas">
                <h2>Lectura Gitana</h2>

            </div>
            <div class="content">
                <p>Te permitirá reflexionar sobre la situacion actual para que puedas comprender tu camino de vida
                    y darte las respuestas que requieres para seguir adelante en tu camino</p>
                <a href="agendarLectura.php">Reservar</a>
            </div>
        </div>
    </div>
</body>

</html>