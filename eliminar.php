<?php
// conecta a la base de datos 
include("con_db.php");
// inicializamos la variable mensaje error
$errormessage = "";


if (isset($_POST["eliminar"])) {

    $nick = htmlspecialchars(trim($_POST["nick"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pass = htmlspecialchars(trim($_POST["pass"]));

    if (!empty($_POST["nick"]) && !empty($_POST["email"]) && strlen($_POST["pass"]) === 8) {

        $consulta = "SELECT Apodo, passw FROM usuarios where Apodo='$nick' and email='$email'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {

            $rowcount = mysqli_num_rows($resultado);

            if ($rowcount > 0) {

                $consulta = "DELETE FROM `usuarios` WHERE `Apodo` = '$nick' AND `email` = '$email'";
                $resultado = mysqli_query($conex, $consulta);

                if ($resultado) {

                    header('Location: index.php');
                }
            } else {

                $errormessage = "El usuario no existe";
            }
        }
    } else {

        $errormessage = "Debes rellenar todos los campos!";
    }
    mysqli_close($conex);
}
