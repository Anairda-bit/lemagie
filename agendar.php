<?php

include("con_db.php");
@$errorMesssage = "";
@$message = "";

if (isset($_POST["reservar"])) {
    // guardamos los valores en variables usando el htmlspecialchars para mayor seuridad en la basede datos

    $nick = htmlspecialchars(trim($_POST["nick"]));
    $fechaCita = htmlspecialchars($_POST["fechaCita"]);
    $servicio = htmlspecialchars($_POST["lectura"]);

    if (
        !empty($_POST["nick"]) ||
        !empty($_POST["fechaCita"]) ||
        !empty($_POST["lectura"])
    ) { //comprobamos que no hay campos vacios

        //revisamos en la base de datos si hay una cita en esa fecha
        $consulta = "SELECT Dia_Cita FROM citas where Dia_Cita='$fechaCita'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) { //si el resultado es verdadero

            $rowcount = mysqli_num_rows($resultado);

            if ($rowcount > 0) { //si el resultado es mayor a 0 significaria que si hay coincidencia

                //avisamos que el existe una reserva para ese dia
                $errormessage = "Ups! Ya existe una cita asignada para ese dia, intente en otra fecha";
                echo "<script> alert('" . $errormessage . "'); </script>";
            } else {
                // realizamos la reserva
                $consulta = "INSERT INTO `citas` (Dia_Cita, Usuario, Servicio) VALUES ('$fechaCita', '$nick','$servicio')";
                $respuesta = mysqli_query($conex, $consulta);

                if ($respuesta) { //si la respuesta es true significa que todo fue correctamente

                    // avisamos que se realizó la reserva 

                    $message = "Tu reserva se ha realizado correctamente";
                    echo "<script>alert('Tu reserva se ha realizado correctamente');</script>";
                } else {
                    // en caso de que ocurra un error lo comunicamos

                    $errormessage = "Ups ha ocurrido un error  " . mysqli_error($conex);
                    echo "<script> alert('" . $errormessage . "'); </script>";
                }
            }
        }
        // cerramos la conexion
        mysqli_close($conex);
    }
}
