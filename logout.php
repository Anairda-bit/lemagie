<!-- codigo para dado en caso que se cierre la sesion -->
<?php
// incluimos el paquete funciones 
include('inc/functions.php');
// con el metodo checkSession revisamos el estado de la sesion
checkSession();
// destruimos la sesion actual
destroySession();
?>