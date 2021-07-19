<?php
include('inc/functions.php');
// llamamos al metodo que comprueba la sesion 
checkSession();
// metodo que nos ayuda a proteger las paginas privadas
checkAuth();

?>

<!DOCTYPE html5>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fuentes de texto -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- icono para el titulo -->
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <!-- css especifico para esta pagina -->
    <link rel="stylesheet" href="./assets/css/usuario.css" />
    <!-- titulo de la pagina -->
    <title>La Magie - Área Clientes </title>
</head>

<body>
    <?php
    // incluimos el archivo que nos permite pintar los datos de usuario
    include("consultarUsuario.php");
    // incluimos el header
    include "header.php";
    ?>
    <div class="card">
        <div class="card-content">
            <!-- pintamos el nombre de usuario -->
            <h2 class="cardTitle"><?php echo @$nick; ?></h2>
            <!-- pintamos el nombre -->
            <p class="card-body">Nombre: <?php echo @$name; ?> <br>
                <!-- pintamos el apellido -->
                Apellidos: <?php echo @$surname; ?><br>
                <!-- pintamos la fecha de nacimiento -->
                Fecha nacimiento: <?php echo @$dateN; ?><br>
                <!-- pintamos el email -->
                Email : <?php echo @$email; ?><br>
                <!-- pintamos el email -->
                Contraseña: <?php echo @$passww; ?></p>
            <!-- link que redirecciona a cambiar la contraseña -->
            <a href="cambiarPass.php" class="button">Cambiar Contraseña</a>
            <!-- link que permite eliminar la cuenta -->
            <a href="eliminarCuenta.php" class="button">Eliminar cuenta</a>
        </div>
    </div>
</body>

</html>