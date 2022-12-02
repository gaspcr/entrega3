<!DOCTYPE html>

<?php
    require("../config/conexion.php");
    $result = $db -> prepare("TRUNCATE TABLE usuarios;");
    $result -> execute();
?>

<?php
    if ($result) {
        echo "Se han borrado los usuarios exitosamente.";
    } else {
        echo "Ha ocurrido un error al borrar los usuarios.";
    }
?>
