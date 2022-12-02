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

<?php
$result = $db -> prepare("SELECT * FROM users;");
$result -> execute();
$dataCollected = $result -> fetchAll();
?>

<?php
foreach ($dataCollected as $d) {
    echo "<tr>";
    echo "<td>$d[0]</td>";
    echo "<td>$d[1]</td>";
    echo "<td>$d[2]</td>";
    echo "<td>$d[3]</td>";
    echo "</tr>";
}
?>

<a href="../index.php" class="btn btn-primary">Volver</a>

</html>