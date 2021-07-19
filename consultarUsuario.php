<?php
//conecta a la base de datos
include("con_db.php");
$nick = $_SESSION['nick'];
// pedimos a la base de datos que nos mande todo del usuario donde el apodo sea igual al nick (ya que el nick es un dato unico)
$consulta = "SELECT * FROM `usuarios` WHERE `Apodo` = '$nick'";
$resultado = mysqli_query($conex, $consulta);

if ($resultado == true) {
    if (mysqli_num_rows($resultado) > 0) {
        // Salida de datos para cada fila
        while ($row = mysqli_fetch_assoc($resultado)) {
            $name = $row["Nombre"];
            $surname = $row["Apellidos"];
            $dateN = $row["FechaNacimiento"];
            $email = $row["email"];
            $passww = $row["passw"];
        }
    } else {

        echo "<script> alert('Sin Resultados'); </script>";
    }
} else {
    echo 'nada';
}
