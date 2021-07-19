<?php

// con esta serie de funciones vamos a controlar el funcionamiento de la session
function checkSession()
{ //Revisamos el estado de la sesion

    $status = session_status(); //declaramos una variable donde guardamos el estado de la sesion
    if ($status == PHP_SESSION_NONE) { //si el resultado de la comprobacion de php con la variable nos indica que la sesion no esta iniciada
        session_start(); //iniciamos la sesion

    }
}

function checkAuth()
{ //funcion para controlar el acceso a paginas de acceso solo con sesion iniciada
    
    if (!isset($_SESSION['nick'])) {

        echo "<script>window.location.href='index.php'</script>";

    }
}

function destroySession()
{ //funcion para destruir la sesion

    
    $_SESSION = array(); // destroy all $_SESSION data
    setcookie("PHPSESSID", "", time() - 3600, "/");
    session_destroy();
    echo "<script>window.location.href='index.php'</script>";


}


?>