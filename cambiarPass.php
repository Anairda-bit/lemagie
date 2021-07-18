<?php
include('inc/functions.php');
// llamamos al metodo que comprueba la sesion 
checkSession();
include("actualizarPassw.php");
// incluimos el paquete funciones
?>

<!DOCTYPE html5>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Adriana Garavito">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/vnd.microsoft.icon" href="./img/Avocado.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/css.css" />
    <title>Cambiar Contraseña</title>
</head>

<body>
    <?php include "header.php"; ?>
    <main>
        <!-- creamos el formulario de login -->
        <div class="box">

            <!-- el action esta en el mismo php, pero de todos modos lo mencionamos, el metodo usado el metodo post -->
            <form class="formulario" name="login" action="" method="POST">
                <h1>Cambiar Contraseña</h1>
                <label>Nombre de Usuario</label>
                <input type="text" name="nick" placeholder="Nombre de usuario" value="<?php echo isset($_SESSION['nick']) ?  $_SESSION['nick'] : '' ?>"/>
                <label>Email</label>
                <input type="text" name="email" placeholder="Email">
                <label>Contraseña Nueva</label>
                <input type="password" name="pass" placeholder="Contraseña" />
                <input type="submit" name="cambiar" value="Cambiar" />
                <!-- tenemos un enlace que redirecciona al potencial usuario para que se registre en caso de carecer de cuenta -->

            </form>

        </div>
    </main>

</body>

</html>