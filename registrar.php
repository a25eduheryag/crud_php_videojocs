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
$id = $mysqli->query("SELECT LAST_INSERT_ID()")->fetch_row()[0];

header("Location: noti_creat.php" . $id);
?>