<?php
$host = "localhost";
$usuario = "a25eduheryag_videojuego";
$contrasenia = "Admin2006_";
$base_de_datos = "a25eduheryag_videojuego";
$mysqli = new mysqli($host, $usuario, $contrasenia, $base_de_datos);
if ($mysqli->connect_errno) {
    echo "Falló la conexión a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
return $mysqli;