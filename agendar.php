<?php

include("con_db.php");
@$errorMesssage = "";
@$message = "";

if (isset($_POST["reservar"])) {

    $nick = trim($_POST["nick"]);
    $fechaCita = $_POST["fechaCita"];
    $servicio = $_POST["lectura"];

    if (empty($nick) || empty($fechaCita) || empty($servicio)) {

        $errormessage = "Ups olvidaste llenar algún campo ";
    } else {

        // echo "<script>alert('" . $nick . "');</script>";
        // echo "<script>alert('" . $fechaCita . "');</script>";
        // echo "<script>alert('" . $servicio . "');</script>";

        $consulta = "INSERT INTO `citas` (Dia_Cita, Usuario, Servicio) VALUES ('$fechaCita', '$nick','$servicio')";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {

            $message = "Tu reserva se ha realizado correctamente";
            echo "<script>alert('Tu reserva se ha realizado correctamente');</script>";
        } else {

            $errormessage = "Ups ha ocurrido un error  " . mysqli_error($conex);
        }
    }
}
mysqli_close($conex);
