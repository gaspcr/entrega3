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
$result1 = $db1 -> prepare("SELECT * FROM users;");
$result1 -> execute();
$dataCollected1 = $result1 -> fetchAll();
?>

<?php
foreach ($dataCollected1 as $d1) {
    echo "<tr>";
    echo "<td>$d1[0]</td>";
    echo "<td>$d1[1]</td>";
    echo "<td>$d1[2]</td>";
    echo "<td>$d1[3]</td>";
    echo "</tr>";
}
?>

<a href="../index.php" class="btn btn-primary">Volver</a>

</html>