<!DOCTYPE html>

<?php
require("conexion.php");
$result = $db -> prepare("\COPY users(id, nombre, password, tipo) from 'usuarios.csv' DELIMITER ',' CSV HEADER;");
$result -> execute();
$dataCollected = $result -> fetchAll();
?>

<?php
if ($result) {
    echo "Se importaron los usuarios correctamente";
} else {
    echo "Hubo un error al importar los usuarios, por favor intenta vaciar la tabla USERS";
}
?>

<a href="../index.php" class="btn btn-primary">Volver</a>

</html>