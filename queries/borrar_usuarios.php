<!DOCTYPE html>

<?php
    require("../config/conexion.php");
    $result = $db -> prepare("TRUNCATE TABLE usuarios;");
    $result -> execute();
?>

# Si la consulta se ejecuta correctamente, mostrar un mensaje de éxito. Si no, mostrar un mensaje de error.
<?php
    if ($result) {
        echo "Se han borrado los usuarios exitosamente.";
    } else {
        echo "Ha ocurrido un error al borrar los usuarios.";
    }
?>
