<?php
// conecta a la base de datos 
include("con_db.php");
// inicializamos la variable mensaje error
@$errormessage = "";

if (isset($_POST["entrar"])) {

    // guardamos los valores 
    $nick = htmlspecialchars(trim($_POST["apodo"]));
    $pass = htmlspecialchars(trim($_POST["passw"]));

    if (!empty($_POST["apodo"]) && strlen($_POST["passw"]) === 8) { //comprobamos que el campo no este vacio y que el largo de la contraseña sea igual a 8


        // consultamos en la base de datos que los datos correspondan a los valores introducidos
        $consulta = "SELECT Apodo, passw FROM usuarios where Apodo='$nick' and passw='$pass'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {

            $rowcount = mysqli_num_rows($resultado);

            if ($rowcount > 0) { //si el valor es mayor a 0 significa que si existe el usuario

                // guardamos el valor del apodo en la variable session

                $_SESSION['nick'] = $nick;

                // redirigimos a la pagina servicios

                header('Location: servicios.php');
            } else { //en caso contrario significara que el usuario no existe

                // enviamos un mensaje avisando que el usuario no existe
                $errormessage = "El usuario no existe";
                echo "<script> alert('" . $errormessage . "'); </script>";
                // destruimos la sesion
                session_destroy();
            }
        } else {

            // si hay algun tipo de problema avisamos
            $errormessage = "Ups, hubo un problema, vuelva a intentarlo";
            echo "<script> alert('" . $errormessage . "'); </script>";
            // destruimos la sesion
            session_destroy();
        }
    } else {

        // si hay algun campo vacio avisamos de que debe rellenar todos los campos
        $errormessage = "Debes rellenar todos los campos!";
        echo "<script> alert('" . $errormessage . "'); </script>";
        // destruimos la sesion
        session_destroy();
    }

    // cerramos la conexion
    mysqli_close($conex);
}
