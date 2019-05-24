<?php
$conexion = mysqli_connect("localhost", "root", "", "bdtecnoserv");
if (!$conexion) {
    echo 'Error al conectar a la base de datos';
}

mysqli_set_charset($conexion,"utf8");
