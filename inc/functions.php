<?php
// con esta serie de funciones vamos a controlar el funcionamiento de la session
function checkSession()
{ //Revisamos el estado de la sesion

    $status = session_status(); //declaramos una variable donde guardamos el estado de la sesion
    if ($status == PHP_SESSION_NONE) { //si el resultado de la comprobacion de php con la variable nos indica que la sesion no esta iniciada
        session_start(); //iniciamos la sesion

    }
}

function checkVisits()
{ //funcion para revisar la cantidad de visitas del usuario

    if (isset($_SESSION['visits'])) { //comprobamos con el isset la variable visist

        $_SESSION['visits']++; //si existe la aumentamos

    } else {

        $_SESSION['visits'] = 1; //en caso contrario el valor de la variable es igual a 1

    }
}

function checkAuth()
{ //funcion para cerrar sesion

    if (!isset($_SESSION['auth'])) {

        header("Location: pagLogin.php");
    }
}

function destroySession()
{ //funcion para destruir la sesion
    session_destroy(); //metodo para destruir la sesion
    header("Location: pagLogin.php");
}
