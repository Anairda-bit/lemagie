<?php
// conecta a la base de datos 
include("con_db.php");
// inicializamos la variable mensaje error
$errormessage = "";


if (isset($_POST["eliminar"])) {

    // guardamos los valores en variables, con el htmlspecialchars para mas seguridad y el trim para eliminar espacios en blanco al inicio y final 
    $nick = htmlspecialchars(trim($_POST["nick"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pass = htmlspecialchars(trim($_POST["pass"]));

    if (!empty($_POST["nick"]) && !empty($_POST["email"]) && strlen($_POST["pass"]) === 8) { //comprobamos que no esten vacios los campos y el largo de la contraseña

        // consulltamos en la base de datos que el usuario exista y los datos proporcionados sean correctos

        $consulta = "SELECT Apodo, passw FROM usuarios where Apodo='$nick' and email='$email'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {

            $rowcount = mysqli_num_rows($resultado);

            if ($rowcount > 0) { //si el resultado es mayor a 0 significa que el usuario efectivamente existe y los datos son correctos

                // realizamos el delete buscando los dos campos unicos para mayor seguridad

                $consulta = "DELETE FROM `usuarios` WHERE `Apodo` = '$nick' AND `email` = '$email'";
                $resultado = mysqli_query($conex, $consulta);

                if ($resultado) { //si el resultado de la consulta es correcto, redireccionamos al index

                    header('Location: index.php');
                }
            } else {

                // avisamos al usuario que nos dio algun dato incorrecto
                $errormessage = "Los datos proporcionados no son correctos";
                echo "<script> alert('" . $errormessage . "'); </script>";
            }
        }
    } else {

        // avisamos que falta algun dato
        $errormessage = "Debes rellenar todos los campos!";
        echo "<script> alert('" . $errormessage . "'); </script>";
    }
    // cerramos la conexion
    mysqli_close($conex);
}
