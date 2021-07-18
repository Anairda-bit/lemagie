<?php
// llamamos al metodo que comprueba la sesion 
include('inc/functions.php');
checkSession();

include("agendar.php");
?>


<!Doctype html5>
<html lang="es">

<head>
    <title>Registro</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Adriana Garavito">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <script type="text/javascript" src=".assets/Js/datepicker.js"></script>
    <link rel="stylesheet" href="./assets/css/css.css" type="text/css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

</head>


<body>
    <?php include "header.php"; ?>
    <main>
        <div class="box">

            <form class="formulario" name="citas" action="" method="POST">
                <h1>Agende su cita</h1>
                <input type="text" name="nick" value="<?php echo isset($_SESSION['nick']) ?  $_SESSION['nick'] : '' ?>" placeholder="Nombre de usuario" />
                <label>Servicio</label><br>
                <select name="lectura">
                    <option selected value="0">--</option>
                    <option value="4">Lectura General</option>
                    <option value="3">Lectura Vincular</option>
                    <option value="2">Lectura Kármica</option>
                    <option value="1">Lectura de Lenormand</option>
                    <option value="5">Lectura Gitana</option>
                </select>
                <label>Fecha</label>
                <div class="datetimepicker">
                    <input type="date" id="date" value="fechaCita" name="fechaCita">
                </div>
                <input type="submit" name="reservar" />
                <p class="error-message"><?php echo $errorMesssage; ?> </p>
                <p class="message"><?php echo $message; ?></p>
            </form>
        </div>
    </main>

</body>

</html>