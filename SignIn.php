<?php
include('inc/functions.php');
// llamamos al metodo que comprueba la sesion 
checkSession();
//incluimos el archivo que comprueba el login
include("login.php");
// incluimos el archivo que comprueba los registros
include("registrar.php");
?>

<!DOCTYPE html5>
<html lang="es">

<head>
    <meta charset="uft-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="Adriana Garavito">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="icon" type="image/vnd.microsoft.icon" href="./img/Avocado.ico">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="shortcut icon" href="./assets/img/tarot.ico">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="./assets/css/login.css" />
    <title>Login</title>
</head>

<body>

    <main>
        <!-- creamos el formulario de login -->
        <div class="container" id="container">
            <div class="violettBg">
                <div class="box SignIn">
                    <h2>¿Ya tienes una cuenta?</h2>
                    <button class="signInBtn" onclick="btnSliderOff();">Log in</button>
                </div>
                <div class="box SignUp">
                    <h2>¿No tienes una cuenta?</h2>
                    <button class="signUpBtn" onclick="btnSliderOn();">Sign Up</button>
                </div>
            </div>
            <div class="formBx">
                <div class="form SignInForm">
                    <!-- el action esta en el mismo php, pero de todos modos lo mencionamos, el metodo usado el metodo post -->
                    <!-- Aqui va el formulario de inicio de sesion!! -->
                    <form class="formulario" name="login" action="" method="POST">
                        <h3>Log In!</h3>
                        <input type="text" name="apodo" placeholder="Nombre de usuario" />

                        <input type="password" name="passw" placeholder="Contraseña" />
                        <input type="submit" name="entrar" value="Log In" />
                        <!-- tenemos un enlace que redirecciona al usuario para que cambie la contraseña en caso de olvido -->
                        <a href="cambiarPass.php" class="forgot">¿Olvidaste la Contraseña?</a>

                    </form>
                </div>
                <div class="form SignUpForm">
                    <!-- Aqui iria el formulario de registro -->
                    <form class="formulario" name="login" action="" method="POST">
                        <h3>Sign Up!</h3>
                        <label>Apodo</label>
                        <input type="text" name="nick">
                        <label>Nombre</label>
                        <input type="text" name="name">
                        <label>Apellidos</label>
                        <input type="text" name="surname">
                        <label>Fecha de nacimiento</label>
                        <input type="date" name="naci" class="datetimepicker">
                        <label>Email</label>
                        <input type="text" name="email">
                        <label>Contraseña</label>
                        <input type="password" name="pass" max=8>
                        <input type="submit" name="registro" value="Sign Up!">


                    </form>
                </div>
            </div>


        </div>
    </main>
    <script type="text/javascript" src="./assets/Js/login.js"></script>
</body>

</html>