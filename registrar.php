<?php
$mysqli = include_once "conexion.php";
$nombre = $_POST["nombre"];
$descripcion = $_POST["descripcion"];
$tipo = $_POST["tipo"];
$sentencia = $mysqli->prepare("INSERT INTO videojuegos
(nombre, descripcion, tipo)
VALUES
(?, ?, ?)");
$sentencia->bind_param("sss", $nombre, $descripcion, $tipo);
$sentencia->execute();
header("Location: noti_creat.php");
?>