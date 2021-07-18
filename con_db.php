<?php
$conex = new mysqli("127.0.0.1", "root", "", "proyecto");
if ($conex->connect_error) {
    die('no se puede conectar con la bd');
}
?>