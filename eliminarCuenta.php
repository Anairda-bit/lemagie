<?php
include('inc/functions.php');
// llamamos al metodo que comprueba la sesion 
checkSession();
include("eliminar.php");
// incluimos el paquete funciones
?>

<!DOCTYPE html5>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Adriana Garavito">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/vnd.microsoft.icon" href="./img/Avocado.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <link rel="stylesheet" href="./assets/css/css.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Cambiar Contraseña</title>
</head>

<body>
    <?php include "header.php"; ?>
    <main>
        <!-- creamos el formulario de login -->
        <div class="box">

            <!-- el action esta en el mismo php, pero de todos modos lo mencionamos, el metodo usado el metodo post -->
            <form class="formulario" name="eliminar" action="" method="POST" id="formm">
                <h1>Eliminar Cuenta</h1>
                <label>Nombre de Usuario</label>
                <input type="text" name="nick" placeholder="Nombre de usuario" />
                <label>Email</label>
                <input type="text" name="email" placeholder="Email" id="emailto" onkeydown="validation()">
                <script type="text/javascript" src="./assets/Js/email.js"></script>
                <span id="text"></span>
                <label>Contraseña</label>
                <input type="password" name="pass" placeholder="Contraseña" />
                <input type="submit" name="eliminar" value="Eliminar" />
                <!-- tenemos un enlace que redirecciona al potencial usuario para que se registre en caso de carecer de cuenta -->


            </form>

        </div>
    </main>
    <!-- incluimos el footer -->

</body>

</html>