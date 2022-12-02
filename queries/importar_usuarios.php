<!DOCTYPE html>

<?php
    require("../config/conexion.php");
    $query = "SELECT id_artista, nombre FROM artistas;";
    $result = $db2 -> prepare($query);
    $result -> execute();
    $artistas = $result -> fetchAll();
?>

<?php
    foreach ($artistas as $artista) {
        $id_artista = $artista[0];
        $nombre = $artista[1];
        $nombre = str_replace(" ", "_", $nombre);
        $password = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, rand(8,10));
        $query = "INSERT INTO users VALUES ('$id_artista', '$nombre', '$password', '0');";
        $result = $db -> prepare($query);
        $result -> execute();
    }
?>

<?php
    require("../config/conexion.php");
    $query1 = "SELECT nombre, pais FROM productora;";
    $result1 = $db -> prepare($query1);
    $result1 -> execute();
    $productoras = $result1 -> fetchAll();
?>

<?php
$n=0;
    foreach ($productoras as $productora) {
        $nombre = $productora[0];
        $nombre = str_replace(" ", "_", $nombre);
        $id_productora = 'P'.$n;
        $password = substr(str_shuffle("abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"), 0, rand(8,10));
        $query = "INSERT INTO users VALUES ('$id_productora', '$nombre', '$password', '1');";
        $result = $db -> prepare($query);
        $result -> execute();
        $n=$n+1;
    }
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