<?php
  /*$host_name = 'db5003607678.hosting-data.io';
  $database = 'dbs2938653';
  $user_name = 'dbu233748';
  $password = '?A@g3Ha&L$P?r2a';

// $conex = new mysqli($host_name, $user_name, $password, $database);

  if ($conex->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $conex->connect_error .'</p>');
  }*/

  $host_name = 'localhost';
  $database = 'lamagie';
  $user_name = 'root';
  $password = '';

  $conex = new mysqli($host_name, $user_name, $password, $database);

  if ($conex->connect_error) {
    die('<p>Error al conectar con servidor MySQL: '. $conex->connect_error .'</p>');
  }
?>
