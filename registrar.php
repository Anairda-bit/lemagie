<?php
// Conexión con la base de datos
include("con_db.php");
// inicializamos las variables que envian los mensajes
$errorMesssage = "";
$message = "";

if (isset($_POST["registro"])) { //si se envia la orden de registro

    // utilizamos el htmlspecialchars + trim para eliminar caracteres especiales y los epacios en blanco adelante y al final
    // y guardamos en una variable
    $nick = htmlspecialchars(trim($_POST["nick"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $pass = htmlspecialchars(trim($_POST["pass"]));
    $name = htmlspecialchars(trim($_POST["name"]));
    $surname = htmlspecialchars(trim($_POST["surname"]));
    $nacimiento = htmlspecialchars($_POST["naci"]);

    if ( //comprobamos que los valores no esten vacios y que el largo de la contraseña sea de 8, además que el valor de pais no sea 0 (osea sea válido)
        !empty($_POST["nick"])
        && !empty($_POST["email"])
        && strlen($_POST["pass"]) === 8
        && !empty($_POST["naci"])
        && !empty($_POST["name"])
        && !empty($_POST["surname"])
    ) {
        //revisamos en la base de datos si el usuario existe
        $consulta = "SELECT Apodo FROM usuarios where Apodo='$nick'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado) {

            $rowcount = mysqli_num_rows($resultado);

            if ($rowcount > 0) {
                //avisamos que el usuario ya existe
                $errormessage = "El usuario ya existe";
                echo "<script> alert('" . $errormessage . "'); </script>";
            } else {

                // realizamos la consulta agregaando los datos a la tabla usuarios, excepto el ID ya que es un dato autoincrementable
                $consulta = "INSERT INTO usuarios(Apodo, Nombre, Apellidos, FechaNacimiento, email, passw) 
                           VALUES ('$nick',
                                   '$name',
                                   '$surname',
                                   '$nacimiento',
                                   '$email',
                                   '$pass')";
                $respuesta = mysqli_query($conex, $consulta);
                if ($respuesta == true) { //si el resultado es correcto redirigimos a la pagina de login para obligar al usuario da loggearse

?>
                    <?php
                    header('Location: SignIn.php');
                } else {
                    ?>
                    <?php
                    // si hay un error de conexión lo comunicamos en la variable error mensaje
                    $errormessage = "Ups ha ocurrido un error  " . mysqli_error($conex);
                    echo "<script> alert('" . $errormessage . "'); </script>";
                }

                // cerramos la conexion
                mysqli_close($conex);
            }
        }
    } else {
                    ?>
        <?php
        // en caso de que no este lleno alguno de los campos o 
        //no se cumplan las condiciones lo comunicamos 
        $errormessage = "Debe rellenar todos los campos";
        echo "<script> alert('" . $errormessage . "'); </script>";
    }
}



        ?>