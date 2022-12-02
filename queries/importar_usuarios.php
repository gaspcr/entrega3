<!DOCTYPE html>

<?php
    require("../config/conexion.php");
    $result = $db -> prepare("TRUNCATE TABLE users;");
    $result -> execute();
    $dataCollected = $result -> fetchAll();
?>

<?php
    require("../config/conexion.php");
    $result = $db -> prepare("\copy users FROM 'datos/usuarios.csv' DELIMITER ',' CSV HEADER;");
    $result -> execute();
    $dataCollected = $result -> fetchAll();
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