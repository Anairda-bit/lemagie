<?php
// conecta a la base de datos 
include("con_db.php");
// inicializamos la variable mensaje error
@$errormessage = "";

if (isset($_POST["entrar"])) {

    $nick = trim($_POST["apodo"]);
    $pass = trim($_POST["passw"]);

    if (!empty($_POST["apodo"]) && strlen($_POST["passw"]) === 8) {

        $consulta = "SELECT Apodo, passw FROM usuarios where Apodo='$nick' and passw='$pass'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {

            $rowcount = mysqli_num_rows($resultado);

            if ($rowcount > 0) {

                $_SESSION['nick'] = $nick;

                header('Location: servicios.php');
            } else {

                $errormessage = "El usuario no existe";
                session_destroy();
            }
        } else {

            $errormessage = "Ups, hubo un problema, vuelva a intentarlo";
            session_destroy();
        }
    } else {

        $errormessage = "Debes rellenar todos los campos!";
        session_destroy();
    }

    mysqli_close($conex);
}
