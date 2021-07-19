<?php
// conecta a la base de datos 
include("con_db.php");
// inicializamos la variable mensaje error
$errormessage = "";
$message = "";

if (isset($_POST["cambiar"])) {
    // guardamos los valores en variables usando el htmlspecialchars para mayor seuridad en la basede datos

    $nick = htmlspecialchars(trim($_POST["nick"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pass = htmlspecialchars(trim($_POST["pass"]));

    if (!empty($_POST["nick"]) && !empty($_POST["email"]) && strlen($_POST["pass"]) === 8) { //comprobamos que no existan datos vacios y el largo de la contraseña que TIENE que ser 8

        // revisamos en la base de datos si concuerdan los datos proporcionados por el usuario

        $consulta = "SELECT Apodo, passw FROM usuarios where Apodo='$nick' and email='$email'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) { //si el resultado es verdadero

            $rowcount = mysqli_num_rows($resultado);

            if ($rowcount > 0) { //si el resultado de la consulta es mayor a 0 significará que si existe el usuario 

                // realizamos la consulta para el cambio de contraseña

                $consulta = "UPDATE `usuarios` SET `passw`='$pass' WHERE `Apodo` = '$nick' AND `email` = '$email'";
                $resultado = mysqli_query($conex, $consulta);

                if ($resultado) {

                    // si el resultado de la consulta es true redireccionamos al login
                    header('Location: SignIn.php');
                }
            } else { //Si el resultado es falso significará que no existe ese usuario

                // enviamos un mensaje avisando que el usuario ya existe
                $errormessage = "El usuario no existe";
                echo "<script> alert('" . $errormessage . "'); </script>";
            }
        }
    } else {

        // si se ha dejado algun campo vacio lo comunicamos
        $errormessage = "Debes rellenar todos los campos!";
        echo "<script> alert('" . $errormessage . "'); </script>";
    }
    //cerramos la conexion
    mysqli_close($conex);
}
