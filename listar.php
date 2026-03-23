<?php
$mysqli = include_once "conexion.php";
$resultado = $mysqli->query("SELECT id, nombre, descripcion, tipo FROM videojuegos");
$videojuegos = $resultado->fetch_all(MYSQLI_ASSOC);
?>

<?php include_once "header.php"?>
<h1>Lista de videojuegos</h1>
<table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($videojuegos as $videojuego) {
                    if($videojuego["tipo"] == "Esport"){
                        $color = "table-success";
                    }else if($videojuego["tipo"] == "Rol"){
                         $color = "table-primary";
                    }else if($videojuego["tipo"] == "Lluita"){
                         $color = "table-danger";
                    } ?>
                    <tr class="<?php echo $color ?>">
                        <td><?php echo $videojuego["id"] ?></td>
                        <td><?php echo $videojuego["nombre"] ?></td>
                        <td><?php echo $videojuego["descripcion"] ?></td>
                        <td><?php echo $videojuego["tipo"] ?></td>
                        <td>
                            <a class="btn btn-warning" href="editar.php?id=<?php echo $videojuego["id"] ?>">Editar</a>
                        </td>
                        <td>
                            <a class="btn btn-danger" href="eliminar.php?id=<?php echo $videojuego["id"] ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
<?php include_once "footer.php"; ?>

