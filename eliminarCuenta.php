<?php
include('inc/functions.php');
// llamamos al metodo que comprueba la sesion 
checkSession();
// llamamos al metodo que comprueba la privacidad de la pagina
checkAuth();
include("eliminar.php");
// incluimos el archivo que nos permitira eliminar la cuenta

?>

<!DOCTYPE html5>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Adriana Garavito">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fuentes de texto -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">
    <!-- icono del titulo -->
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <!-- css especifico de esta pagina -->
    <link rel="stylesheet" href="./assets/css/css.css" />
    <title>La Magie - Eliminar Cuenta</title>
</head>

<body>
    <!-- incluimos el header -->
    <?php include "header.php"; ?>
    <main>
        <div class="container">
            <div class="box">

                <!-- el action esta en el mismo php, pero de todos modos lo mencionamos, el metodo usado el metodo post -->
                <form class="formulario" name="eliminar" action="" method="POST" id="formm">
                    <h1>Eliminar Cuenta</h1>
                    <label>Nombre de Usuario</label>
                    <!-- este campo lo rellenamos con contenido de la variable SESSION, en caso de tener contenido -->
                    <input type="text" name="nick" placeholder="Nombre de usuario" value="<?php echo isset($_SESSION['nick']) ?  $_SESSION['nick'] : '' ?>" />
                    <label>Email</label>
                    <input type="text" name="email" placeholder="Email" id="emailto" onkeydown="validation()">
                    <!-- script de validacion del email -->
                    <script type="text/javascript" src="./assets/Js/email.js"></script>
                    <span id="text"></span>
                    <label>Contraseña</label>
                    <input type="password" name="pass" placeholder="Contraseña" />
                    <input type="submit" name="eliminar" value="Eliminar" />
                </form>

            </div>
        </div>
    </main>


</body>

</html>