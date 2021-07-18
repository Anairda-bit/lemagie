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
    <link rel="stylesheet" href="./assets/css/style.css" />

    <title>Lecturas </title>
</head>

<body>
    <?php include "header.php"; ?>
    <article>
        <section class="cards">
            <div class="card">
                <div class="cardImage">
                    <div class="cardWrapper">
                        <img src="./assets/img/cartas-mariposa-par.png" alt="Par de Cartas" />
                    </div>
                </div>
                <div class="cardTitle">
                    <a href="#">Lectura General</a>
                </div>
            </div>
            <div class="card">
                <div class="cardImage">
                    <div class="cardWrapper">
                        <img src="./assets/img/cartas-sol-par.png" alt="Par de Cartas" />
                    </div>
                </div>
                <div class="cardTitle">
                    <a href="#">Lectura Vincular</a>
                </div>
            </div>
            <div class="card">
                <div class="cardImage">
                    <div class="cardWrapper">
                        <img src="./assets/img/cartas-calavera-par.png" alt="Par de Cartas" />
                    </div>
                </div>
                <div class="cardTitle">
                    <a href="#">Lectura Kármica</a>
                </div>
            </div>
            <div class="card">
                <div class="cardImage">
                    <div class="cardWrapper">
                        <img src="./assets/img/cartas-luna-par.png" alt="Par de Cartas" />
                    </div>
                </div>
                <div class="cardTitle">
                    <a href="#">Lectura de Lenormand</a>
                </div>
            </div>
            <div class="card">
                <div class="cardImage">
                    <div class="cardWrapper">
                        <img src="./assets/img/cartas-rama-par.png" alt="Par de Cartas" />
                    </div>
                </div>
                <div class="cardTitle">
                    <a href="#">Lectura Gitana</a>
                </div>
            </div>

        </section>
        <button type="button">Reserva tu cita!</button>


    </article>

    <!-- incluimos el footer -->
    <?php include "inc/footer.php"; ?>
</body>

</html>