<!DOCTYPE html>

<?php
    require("../config/conexion.php");
    pg_query($db, "DELETE FROM users;");
    # Cargar usuarios en la tabla users desde el archivo usuarios.csv
    $file = fopen("usuarios.csv", "r");
    pg_query($db, "COPY users(id, nombre, password, tipo) FROM $file WITH CSV HEADER;");
?>

<?php
$result = $db -> prepare("SELECT * FROM users;");
$result -> execute();
$dataCollected = $result -> fetchAll();
?>

<table>
    <tr>
        <th>id</th>
        <th>nombre</th>
        <th>password</th>
        <th>tipo</th>
    </tr>
    <?php
    foreach ($dataCollected as $d) {
        echo "<tr><td>$d[0]</td><td>$d[1]</td><td>$d[2]</td><td>$d[3]</td></tr>";
    }
    ?>
</table>


<a href="../index.php" class="btn btn-primary">Volver</a>

</html>