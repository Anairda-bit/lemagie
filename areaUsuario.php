<?php
include('inc/functions.php');
// llamamos al metodo que comprueba la sesion 
checkSession();
include("consultarUsuario.php");
// incluimos el paquete funciones
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
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <link rel="stylesheet" href="./assets/css/usuario.css" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <title>Área Clientes </title>
</head>

<body>
    <?php include "header.php"; ?>


    <div class="card">
        <div class="card-content">
            <h2 class="cardTitle"><?php echo @$nick; ?></h2>
            <p class="card-body">Nombre: <?php echo @$name; ?> <br>
                Apellidos: <?php echo @$surname; ?><br>
                Fecha nacimiento: <?php echo @$dateN; ?><br>
                Email : <?php echo @$email; ?><br>
                Contraseña: <?php echo @$passww; ?></p>
            <a href="cambiarPass.php" class="button">Cambiar Contraseña</a>
            <a href="eliminarCuenta.php" class="button">Eliminar cuenta</a>
        </div>
    </div>



</body>

</html>